window.onload = initBannerLink;

var thisAd = 0;

function initBannerLink() {
	if (document.getElementById("slideShow").parentNode.tagName == "A") {
		document.getElementById("slideShow").parentNode.onclick = newLocation;
	}
	
	rotate();
}

function newLocation() {
	var adURL = new Array("completedentalhealth.net/about.php","completedentalhealth.net/products-and-services/cosmetic/invisalign/index.php","completedentalhealth.net/patient-resources/forms/feedback.php");
	document.location.href = "http://www." + adURL[thisAd];
	return false;
}

function rotate() {
	var adImages = new Array("images/slideshow/slide-1.jpg","images/slideshow/slide-2.jpg","images/slideshow/slide-3.jpg");

	thisAd++;
	if (thisAd == adImages.length) {
		thisAd = 0;
	}
	document.getElementById("slideShow").src = adImages[thisAd];

	setTimeout(rotate, 5 * 1000);
}