<div id="fb-root"></div>
<div style="clear:both;">&nbsp;</div>
<div class="share-bar">
	<?php if ($page != 'home') { ?><a href="<?= $urlRoot; ?>"><?php } ?><div id="logo-icon" style="display:none;" class="float-left align-middle"><img src="<?= $urlRoot; ?>images/complete-dental-health-icon.png" alt="complete dental health home"/></div><?php if ($page != 'home') { ?></a><?php } ?>
	<div class="share-links">
		<div class="share-twitter"><a href="https://twitter.com/share" class="twitter-share-button" data-related="InvisalignSD" data-hashtags="CompleteDentalHealth"></a></div>
		<div class="share-facebook"><div class="fb-like" id="fb" data-href="http://www.completedentalhealth.net/" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div></div>
		<div class="share-google"><div class="g-plusone"></div></div>
	</div>
	<div style="padding-top:8px;" class="care-to-share float-right align-middle"><img src="<?= $urlRoot; ?>images/care-to-share.png" alt="care to share complete dental health"/></div>
</div>
<div id="footer" class="footer">
	<div class="links-bar">
		<div class="links">
			<ul>
				<li><a href="<?= $urlRoot; ?>feedback/" <?php if ($page == 'feedback' && $page != '0') { ?>class="active"<?php } ?>>Feedback</a>
				<li><a href="<?= $urlRoot; ?>privacy.php" <?php if ($page == 'privacy' && $page != '0') { ?>class="active"<?php } ?>>Privacy Policy</a>
				<li><a href="<?= $urlRoot; ?>sitemap.html" <?php if ($page == 'sitemap' && $page != '0') { ?>class="active"<?php } ?>>Sitemap</a>
			</ul>
		</div>
	</div>
	<div class="base">
		<br />
		<span class="text-white text-micro">&#169;2013-2014 Collins Dental Corporation<br />Site Design &#38; Content by Kyle Harper<br />WordPress theme based on &ldquo;White&rdquo; by <a href="http://inkhive.com" rel="designer">InkHive</a><br />Portrait Photography of Our Wonderful Patients by Hillary Craft (<a style="text-decoration:none;" target="_blank" href="http://www.arcimagery.com"><span class="text-white">www.arcimagery.com</span></a>)</span>
		<br /><br /><br /><br /><br /><br /><br /><br /><br />
	</div>
</div>

<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/platform.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<script type="text/javascript">
var sUrl = window.location;
document.getElementById('fb').setAttribute('href', sUrl);
</script>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
<script type="text/javascript">
$(document).scroll(function() {
    if ($(this).scrollTop()>10) {
	document.getElementById('logo-icon').setAttribute('style', '');
	} else {
	document.getElementById('logo-icon').setAttribute('style', 'display:none;');
	}
});
</script>