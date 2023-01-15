function getParameter(paramName) {
	var searchString = window.location.search.substring(1),
		i,
		val,
		params = searchString.split("&");

	for (i = 0; i < params.length; i++) {
		val = params[i].split("=");
		if (val[0] == paramName) {
			return val[1];
		}
	}
	return null;
}
var baseUrl = null;
var id = null;
function downloadPDF() {
	if (baseUrl == null || id == null) return;
	let pdfUrl = baseUrl + "/pdf/" + id + ".pdf";
	// alert(pdfUrl);
	var filename = id;
	var xhr = new XMLHttpRequest();
	xhr.responseType = "blob";
	xhr.onload = function () {
		var a = document.createElement("a");
		a.href = window.URL.createObjectURL(xhr.response); // xhr.response is a blob
		a.download = filename; // Set the file name.
		a.style.display = "none";
		document.body.appendChild(a);
		a.click();
		delete a;
	};
	xhr.open("GET", pdfUrl);
	xhr.send();
}
$(document).ready(function () {
	// get url info
	var url = getParameter("url");
	console.log(url);
	baseUrl = window.location.origin;
	if (!baseUrl.includes("gutenbergcerts.com")) baseUrl = "https://qa.gutenbergcerts.com";
	console.log(baseUrl);
	var hostname = window.location.hostname;
	console.log(hostname);
	var jsonUrl = baseUrl + "/api/v1.2/verify";
	console.log(jsonUrl);

	// prepare display images
	$("#modalLogo").attr("src", baseUrl + "/images/yellowLogo.png");
	$("#linkedin").attr("src", baseUrl + "/images/linkedin.png");
	$("#facebook").attr("src", baseUrl + "/images/facebook.png");
	$("#twitter").attr("src", baseUrl + "/images/twitter.png");
	$("#email").attr("src", baseUrl + "/images/email.jpg");
	// $("#android").attr("src", baseUrl + "/images/android.png");
	// $("#apple").attr("src", baseUrl + "/images/apple.png");
	$("#verifiedIssuer").attr("src", baseUrl + "/images/greenLogo.png");

	// call api
	$.getJSON(
		jsonUrl,
		{
			url: url,
			ver: "1.2",
		},
		function (data) {
			console.log(data);
			if (data.error == false) {
				// add certificate info to display
				$(".subtitleTitle").each(function () {
					$(this).html(data.subtitle + " - " + data.title);
				});
				$(".nameTitle").each(function () {
					$(this).html(data.name);
				});
				$("#issuedOn").html(data.issuedOn);
				$("#issuedBy").html(data.issuedBy);
				$("#publicKey").html(data.publicKey);
				$("#tx").html(data.tx);

				// get wallet url
				id = data.url.replace(baseUrl + "/cert_issuer/api/v1.0/certificate/", "");
				id = id.replace(".pdf", "");
				pkpass = id + ".pkpass";
				$("#wallet_android").attr("href", baseUrl + "/cert_issuer/api/v1.0/pkpass/" + pkpass);
				$("#wallet_apple").attr("href", baseUrl + "/cert_issuer/api/v1.0/pkpass/" + pkpass);

				// get share urls
				var linkedin = "https://www.linkedin.com/shareArticle?url=https%3A%2F%2F" + hostname + "%2Fpdf%2F" + id + ".jpeg";
				var facebook = "https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2F" + hostname + "%2Fpdf%2F" + id + ".jpeg";
				var twitter = "https://twitter.com/intent/tweet?url=" + "https%3A%2F%2F" + hostname + "%2Fpdf%2FshareTwitter.html?cert_url=" + id + ".jpeg";
				var email = "mailto:?subject=Check%20out%20my%20new%20achievement&body=https://" + hostname + "/pdf/" + id + ".pdf";

				var twitter = "https://twitter.com/intent/tweet?url=" + "https%3A%2F%2F" + hostname + "%2Fpdf%2FshareTwitter.html?cert_url=" + id + ".jpeg";

				$("#linkedinhref").attr("href", linkedin);
				$("#facebookhref").attr("href", facebook);
				$("#twitterhref").attr("href", twitter);
				$("#emailhref").attr("href", email);

				// hide parts of display if not gutenberg
				if (!data.url.includes("gutenbergcerts.com")) {
					$("#shareLinks").css("display", "none");
					$("#verifiedIssuer").css("display", "none");
					$("#issuerSpecific").css("display", "none");
					$("#strongIssuer").html("ISSUER");
				}

				// no wallet for pdf certificates
				if (data.url.includes(".pdf")) {
					$("#hideWallet").css("display", "none");
					$("#transactionId").html("Transaction Id:");
				}

				// get certificate pdf
				var displayPdf = "http://docs.google.com/gview?url=" + baseUrl + "/pdf/" + id + ".pdf&embedded=true#view=Fit";
				console.log(displayPdf);
				$("#displayPdf").attr("src", displayPdf);
				var displayImage = baseUrl + "/pdf/" + id + ".jpeg";
				$("#displayCertificateImage").attr("src", displayImage);

				//pdf size
				var ratio = $(window).width() / 750;
				if (ratio > 1) {
					ratio = 1;
				}

				// $("#displayPdf").css("height", 600 * ratio);
				// $("#displayPdf").css("height", "100%");

				// $("#displayPdf").css("width", 750 * ratio);
				// $("#displayPdf").css("width", "100%");

				if (data.valid == "passed") {
					$("#isVerified").html("Verified");
					$("#isVerifiedDesc").html(data.message);
					$("#isVerifiedBg").attr("style", "background-color: rgba(42,178,123,0.1); border-left: 3px solid #2ab27b;");
					$("#isVerifiedLogo").attr("src", baseUrl + "/images/greenLogo.png");
				} else if (data.valid == "warning") {
					$("#isVerified").html("Warning");
					$("#isVerifiedDesc").html(data.message);
					$("#isVerifiedBg").attr("style", "background-color: rgba(245,166,35,0.1); border-left: 3px solid #f5a623;");
					$("#isVerifiedLogo").attr("src", baseUrl + "/images/yellowLogo.png");
				} else {
					$("#isVerified").html("Not Verified");
					$("#isVerifiedDesc").html(data.message);
					$("#isVerifiedBg").attr("style", "background-color: rgba(199, 40, 22,0.1); border-left: 3px solid #c72816;");
					$("#isVerifiedLogo").attr("src", baseUrl + "/images/redLogo.png");
				}
				$("#verifyForm").css("display", "none");
				$("#certificate").css("display", "block");
			} else {
				if (data.message == "Invalid url") {
					$("#isVerified").html("Not Verified");
					$("#isVerifiedDesc").html(data.message);
					$("#isVerifiedBg").attr("style", "background-color: rgba(199, 40, 22,0.1); border-left: 3px solid #c72816;");
					$("#isVerifiedLogo").attr("src", baseUrl + "/images/redLogo.png");
				} else {
					$("#isVerified").html("Warning");
					$("#isVerifiedDesc").html(data.message);
					$("#isVerifiedBg").attr("style", "background-color: rgba(245,166,35,0.1); border-left: 3px solid #f5a623;");
					$("#isVerifiedLogo").attr("src", baseUrl + "/images/yellowLogo.png");
				}
				$("#certificate").css("display", "block");
			}
		}
	);
	$("#myAccordion").on("hidden.bs.collapse", function () {
		$("#error").html("");
		$("#tampered").html("");
		$("#tampered").addClass("loader");
		$("#expired").html("");
		$("#expired").addClass("loader");
		$("#revoked").html("");
		$("#revoked").addClass("loader");
		$("#authenticity").html("");
		$("#authenticity").addClass("loader");
		$("#title").html("");
		$("#name").html("");
		$("#issued").html("");
		$("#verifyResultImage").html("");
		$("#verifyResultDescription").html("");

		// $("#verifyResultImage").addClass("loader");
	});

	$("#myAccordion").on("shown.bs.collapse", function (event) {
		$("#error").html("");
		// $("#tampered").html("");
		// $("#tampered").addClass("loader");
		// $("#expired").html("");
		// $("#expired").addClass("loader");
		// $("#revoked").html("");
		// $("#revoked").addClass("loader");
		// $("#authenticity").html("");
		// $("#authenticity").addClass("loader");
		// $("#verifyResult").html("");
		// $("#verifyResult").addClass("loader");
		$("#title").html("");
		$("#name").html("");
		$("#issued").html("");
		$("#verifyResultDescription").html("");

		// Place the returned HTML into the selected element
		$.getJSON(
			jsonUrl,
			{
				url: url,
				ver: "1.2",
			},
			function (data) {
				if (data.error == false) {
					$("#title").append(data.title);
					$("#name").append(data.name);
					$("#issued").append("Issued on " + data.issuedOn + " by " + data.issuedBy);

					let count = 1;
					setInterval((ret) => {
						if (count == 1) {
							if (data.tampered == "passed") {
								$("#tampered").removeClass("loader");
								$("#tampered").append('<img src="' + baseUrl + '/images/greenLogo.png" class="modalLogo"/>');
							} else if (data.tampered == "failed") {
								$("#tampered").removeClass("loader");
								$("#tampered").append('<img src="' + baseUrl + '/images/redLogo.png" class="modalLogo"/>');
							}
						} else if (count == 2) {
							if (data.expired == "passed") {
								$("#expired").removeClass("loader");
								$("#expired").append('<img src="' + baseUrl + '/images/greenLogo.png" class="modalLogo"/>');
							} else if (data.expired == "failed") {
								$("#expired").removeClass("loader");
								$("#expired").append('<img src="' + baseUrl + '/images/redLogo.png" class="modalLogo"/>');
							}
						} else if (count == 3) {
							if (data.revoked == "passed") {
								$("#revoked").removeClass("loader");
								$("#revoked").append('<img src="' + baseUrl + '/images/greenLogo.png" class="modalLogo"/>');
							} else if (data.revoked == "failed") {
								$("#revoked").removeClass("loader");
								$("#revoked").append('<img src="' + baseUrl + '/images/redLogo.png" class="modalLogo"/>');
							}
						} else if (count == 4) {
							if (data.authenticity == "passed") {
								$("#authenticity").removeClass("loader");
								$("#authenticity").append('<img src="' + baseUrl + '/images/greenLogo.png" class="modalLogo"/>');
							} else if (data.authenticity == "failed") {
								$("#authenticity").removeClass("loader");
								$("#authenticity").append('<img src="' + baseUrl + '/images/redLogo.png" class="modalLogo"/>');
							}
						} else if (count == 5) {
							$("#verifyResult").show();
							$("#verifyResultImage").removeClass("loader");
							if (data.valid == "passed") $("#verifyResultImage").append('<img src="' + baseUrl + '/images/greenLogo.png" class="modalLogo"/>');
							else $("#verifyResultImage").append('<img src="' + baseUrl + '/images/redLogo.png" class="modalLogo"/>');
							$("#verifyResultDescription").html(data.message);
						} else if (count == 6) {
							clearInterval(ret);
						}

						count++;
					}, 300);
				} else {
				}
			}
		);
	});
});
function showMore() {
	var btnText = $("#showMore").text();

	if (btnText == "More Info") {
		$("#showMore").html("Less Info");
		$("#moreInfo").css("display", "inline");
	} else {
		$("#showMore").html("More Info");
		$("#moreInfo").css("display", "none");
	}
}