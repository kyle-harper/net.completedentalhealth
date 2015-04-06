/*
 *  Initialize header and slider
 */
(function () {
    // sidr menu
    $(document).ready(function() {
        $('#simple-menu').sidr();
	});
    document.getElementById('simple-menu').setAttribute('href', '#sidr');
    document.getElementById('sidr').setAttribute('style', '');
	
	//jssor slider
	//document.getElementById('slider1_dummy').setAttribute('style', 'display: none;');
	if (document.getElementById('slider1_container')) {
		document.getElementById('slider1_container').setAttribute('style', '');
	}
}());

/*
 *  Initialize social widgets embedded in page
 */

// google+ badge
(function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/platform.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
})();

// yelp
!function(doc, id){
    var js;
    var scriptElement = doc.getElementsByTagName("script")[0];
    if (!doc.getElementById(id)) {
        js = doc.createElement("script");
        js.id = id;
        js.src = "//dyn.yelpcdn.com/biz_badge_js/fsc/_9QQoUZLO_7lmkaniAn6KA.js";
                scriptElement.parentNode.insertBefore(js, scriptElement);
    }
} (document, "yelp-biz-badge-script-fsc-_9QQoUZLO_7lmkaniAn6KA");

// facebook like box
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

/*
 *  Initialize social share widgets and logo in footer
 */

// google +1 widget
/*
 (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/platform.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
})();
*/

// facebook widget

(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0], myUrl = window.location;
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
  document.getElementById('fb').setAttribute('href', myUrl);
}(document, 'script', 'facebook-jssdk'));


// twitter widget

!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');


// show CDH logo in corner if page is scrolled down
$(document).scroll(function() {
    if ($(this).scrollTop()>10) {
	document.getElementById('logo-icon').setAttribute('style', '');
	} else {
	document.getElementById('logo-icon').setAttribute('style', 'display:none;');
	}
});
