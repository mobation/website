<!DOCTYPE html>

<?php

require_once("/home/mobatxik/public_html/dms/global/api/API.class.php");
	
	$api = new FormTools\API();
$fields = $api->initFormPage(6);
$params = array(
    "submit_button" => "media",
    "next_page" => "services.php",
    "form_data" => $_POST,
    "finalize" => true
);
$api->processFormSubmission($params);


?>



<?php
require_once("/home/mobatxik/public_html/dms/global/api/API.class.php");$api = new FormTools\API();
$fields = $api->initFormPage();
$api->clearFormSessions();

?>

<?php

require_once("/home/mobatxik/public_html/dms/global/api/API.class.php");	
	$api = new FormTools\API();
$fields = $api->initFormPage(7 );
$params2 = array(
    "submit_button" => "printing",
    "next_page" => "services.php",
    "form_data" => $_POST,
    "finalize" => true
);
$api->processFormSubmission($params2);


?>

<?php
require_once("/home/mobatxik/public_html/dms/global/api/API.class.php");$api = new FormTools\API();
$fields = $api->initFormPage();
$api->clearFormSessions();

?>

<?php

require_once("/home/mobatxik/public_html/dms/global/api/API.class.php");	
	$api = new FormTools\API();
$fields = $api->initFormPage(8  );
$params3 = array(
    "submit_button" => "marketing",
    "next_page" => "services.php",
    "form_data" => $_POST,
    "finalize" => true
);
$api->processFormSubmission($params3);


?>

<?php
require_once("/home/mobatxik/public_html/dms/global/api/API.class.php");$api = new FormTools\API();
$fields = $api->initFormPage();
$api->clearFormSessions();

?>

<?php

require_once("/home/mobatxik/public_html/dms/global/api/API.class.php");	
	$api = new FormTools\API();
$fields = $api->initFormPage(9);
$params4 = array(
    "submit_button" => "web",
    "next_page" => "services.php",
    "form_data" => $_POST,
    "finalize" => true
);
$api->processFormSubmission($params4);


?>

<?php
require_once("/home/mobatxik/public_html/dms/global/api/API.class.php");
$api = new FormTools\API();
$fields = $api->initFormPage();
$api->clearFormSessions();

?>
<html lang="en-US">
<head>
<meta property="og:url" content="index.php" />
<meta property="og:type" content="article" />
<meta property="og:title" content="Contact Us" />
<meta property="og:description" content="Get In Touch! Gavida nibh vel velit auctor alinean sollicitudin Submit Contact Info New York Office 1-677-124-44227; info@mikado-themes.com 184 Main Street West victoria 8007 Hamburg Office 1-677-124-44227; info@mikado-themes.com 184 Main Street West victoria 8007" />
<meta property="og:image" content="includes/uploads/2019/03/open_graph.jpg" />
<meta charset="UTF-8" />
<link rel="profile" href="https://gmpg.org/xfn/11" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=yes">
<title>Our Services &#8211; Mobation</title>

<script data-cfasync="false" type="text/javascript">//<![CDATA[
	var gtm4wp_datalayer_name = "dataLayer";
	var dataLayer = dataLayer || [];
//]]>
</script>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WHSXKSZ');</script>
<!-- End Google Tag Manager -->

<link rel='dns-prefetch' href='http://toolbar.qodeinteractive.com/' />
<link rel='dns-prefetch' href='http://maps.googleapis.com/' />
<link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
<link rel='dns-prefetch' href='http://s.w.org/' />
<link rel="alternate" type="application/rss+xml" title="BoostUp &raquo; Feed" href="../feed/index.php" />
<link rel="alternate" type="application/rss+xml" title="BoostUp &raquo; Comments Feed" href="../comments/feed/index.php" />
<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/12.0.0-1\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/12.0.0-1\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/boostup.mikado-themes.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.2.2"}};
			!function(a,b,c){function d(a,b){var c=String.fromCharCode;l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,a),0,0);var d=k.toDataURL();l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,b),0,0);var e=k.toDataURL();return d===e}function e(a){var b;if(!l||!l.fillText)return!1;switch(l.textBaseline="top",l.font="600 32px Arial",a){case"flag":return!(b=d([55356,56826,55356,56819],[55356,56826,8203,55356,56819]))&&(b=d([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]),!b);case"emoji":return b=d([55357,56424,55356,57342,8205,55358,56605,8205,55357,56424,55356,57340],[55357,56424,55356,57342,8203,55358,56605,8203,55357,56424,55356,57340]),!b}return!1}function f(a){var c=b.createElement("script");c.src=a,c.defer=c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var g,h,i,j,k=b.createElement("canvas"),l=k.getContext&&k.getContext("2d");for(j=Array("flag","emoji"),c.supports={everything:!0,everythingExceptFlag:!0},i=0;i<j.length;i++)c.supports[j[i]]=e(j[i]),c.supports.everything=c.supports.everything&&c.supports[j[i]],"flag"!==j[i]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[j[i]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(h=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",h,!1),a.addEventListener("load",h,!1)):(a.attachEvent("onload",h),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),g=c.source||{},g.concatemoji?f(g.concatemoji):g.wpemoji&&g.twemoji&&(f(g.twemoji),f(g.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>
<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
<link rel="stylesheet" href="includes/cache/minify/d6a97.css" media="all" />
<link rel='stylesheet' id='rabbit_css-css' href='../../toolbar.qodeinteractive.com/_toolbar/assets/css/rbt-modulesbb49.css?ver=5.2.2' type='text/css' media='all' />
<link rel="stylesheet" href="includes/cache/minify/c138f.css" media="all" />
<style id='rs-plugin-settings-inline-css' type='text/css'>
#rs-demo-id {}
</style>
<style id='woocommerce-inline-inline-css' type='text/css'>
.woocommerce form .form-row .required { visibility: visible; }
</style>
<link rel="stylesheet" href="includes/cache/minify/c4492.css" media="all" />
<link rel='stylesheet' id='boostup-mikado-google-fonts-css' href='https://fonts.googleapis.com/css?family=Josefin+Sans%3A300%2C400%2C500%2C600%2C700%7CMontserrat%3A300%2C400%2C500%2C600%2C700&amp;subset=latin-ext&amp;ver=1.0.0' type='text/css' media='all' />
<link rel="stylesheet" href="includes/cache/minify/18f6e.css" media="all" />
<style id='boostup-mikado-page-inline-css' type='text/css'>
.page-id-1905 .mkdf-top-bar { background-color: #583e97;}.page-id-1905 .mkdf-content .mkdf-content-inner > .mkdf-container > .mkdf-container-inner, .page-id-1905 .mkdf-content .mkdf-content-inner > .mkdf-full-width > .mkdf-full-width-inner { padding: 0 0 0 0 ;}.page-id-1905 .mkdf-content .mkdf-content-inner > .mkdf-container > .mkdf-container-inner, .page-id-1905 .mkdf-content .mkdf-content-inner > .mkdf-full-width > .mkdf-full-width-inner { padding: 0 0 0 0 ;}.page-id-1905 .mkdf-page-footer .mkdf-footer-top-holder { background-color: #583e97;}.page-id-1905 .mkdf-page-footer .mkdf-footer-bottom-holder  { background-color: #583e97;}.page-id-1905 .mkdf-content .mkdf-content-inner > .mkdf-container > .mkdf-container-inner, .page-id-1905 .mkdf-content .mkdf-content-inner > .mkdf-full-width > .mkdf-full-width-inner { padding: 0 0 0 0 ;}.page-id-1905 .mkdf-content .mkdf-content-inner > .mkdf-container > .mkdf-container-inner, .page-id-1905 .mkdf-content .mkdf-content-inner > .mkdf-full-width > .mkdf-full-width-inner { padding: 0 0 0 0 ;}.page-id-1905 .mkdf-page-footer .mkdf-footer-top-holder { background-color: #583e97;}.page-id-1905 .mkdf-page-footer .mkdf-footer-bottom-holder  { background-color: #583e97;}.page-id-1905 .mkdf-content .mkdf-content-inner > .mkdf-container > .mkdf-container-inner, .page-id-1905 .mkdf-content .mkdf-content-inner > .mkdf-full-width > .mkdf-full-width-inner { padding: 0 0 0 0 ;}.page-id-1905 .mkdf-content .mkdf-content-inner > .mkdf-container > .mkdf-container-inner, .page-id-1905 .mkdf-content .mkdf-content-inner > .mkdf-full-width > .mkdf-full-width-inner { padding: 0 0 0 0 ;}.page-id-1905 .mkdf-page-footer .mkdf-footer-top-holder { background-color: #583e97;}.page-id-1905 .mkdf-page-footer .mkdf-footer-bottom-holder  { background-color: #583e97;}
</style>
<script src="includes/cache/minify/e58d4.js"></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wc_add_to_cart_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","i18n_view_cart":"View cart","cart_url":"https:\/\/boostup.mikado-themes.com\/cart\/","is_cart":"","cart_redirect_after_add":"no"};
/* ]]> */
</script>
<script src="includes/cache/minify/f1253.js"></script>
<script type='text/javascript'>
var mejsL10n = {"language":"en","strings":{"mejs.install-flash":"You are using a browser that does not have Flash player enabled or installed. Please turn on your Flash player plugin or download the latest version from https:\/\/get.adobe.com\/flashplayer\/","mejs.fullscreen-off":"Turn off Fullscreen","mejs.fullscreen-on":"Go Fullscreen","mejs.download-video":"Download Video","mejs.fullscreen":"Fullscreen","mejs.time-jump-forward":["Jump forward 1 second","Jump forward %1 seconds"],"mejs.loop":"Toggle Loop","mejs.play":"Play","mejs.pause":"Pause","mejs.close":"Close","mejs.time-slider":"Time Slider","mejs.time-help-text":"Use Left\/Right Arrow keys to advance one second, Up\/Down arrows to advance ten seconds.","mejs.time-skip-back":["Skip back 1 second","Skip back %1 seconds"],"mejs.captions-subtitles":"Captions\/Subtitles","mejs.captions-chapters":"Chapters","mejs.none":"None","mejs.mute-toggle":"Mute Toggle","mejs.volume-help-text":"Use Up\/Down Arrow keys to increase or decrease volume.","mejs.unmute":"Unmute","mejs.mute":"Mute","mejs.volume-slider":"Volume Slider","mejs.video-player":"Video Player","mejs.audio-player":"Audio Player","mejs.ad-skip":"Skip ad","mejs.ad-skip-info":["Skip in 1 second","Skip in %1 seconds"],"mejs.source-chooser":"Source Chooser","mejs.stop":"Stop","mejs.speed-rate":"Speed Rate","mejs.live-broadcast":"Live Broadcast","mejs.afrikaans":"Afrikaans","mejs.albanian":"Albanian","mejs.arabic":"Arabic","mejs.belarusian":"Belarusian","mejs.bulgarian":"Bulgarian","mejs.catalan":"Catalan","mejs.chinese":"Chinese","mejs.chinese-simplified":"Chinese (Simplified)","mejs.chinese-traditional":"Chinese (Traditional)","mejs.croatian":"Croatian","mejs.czech":"Czech","mejs.danish":"Danish","mejs.dutch":"Dutch","mejs.english":"English","mejs.estonian":"Estonian","mejs.filipino":"Filipino","mejs.finnish":"Finnish","mejs.french":"French","mejs.galician":"Galician","mejs.german":"German","mejs.greek":"Greek","mejs.haitian-creole":"Haitian Creole","mejs.hebrew":"Hebrew","mejs.hindi":"Hindi","mejs.hungarian":"Hungarian","mejs.icelandic":"Icelandic","mejs.indonesian":"Indonesian","mejs.irish":"Irish","mejs.italian":"Italian","mejs.japanese":"Japanese","mejs.korean":"Korean","mejs.latvian":"Latvian","mejs.lithuanian":"Lithuanian","mejs.macedonian":"Macedonian","mejs.malay":"Malay","mejs.maltese":"Maltese","mejs.norwegian":"Norwegian","mejs.persian":"Persian","mejs.polish":"Polish","mejs.portuguese":"Portuguese","mejs.romanian":"Romanian","mejs.russian":"Russian","mejs.serbian":"Serbian","mejs.slovak":"Slovak","mejs.slovenian":"Slovenian","mejs.spanish":"Spanish","mejs.swahili":"Swahili","mejs.swedish":"Swedish","mejs.tagalog":"Tagalog","mejs.thai":"Thai","mejs.turkish":"Turkish","mejs.ukrainian":"Ukrainian","mejs.vietnamese":"Vietnamese","mejs.welsh":"Welsh","mejs.yiddish":"Yiddish"}};
</script>
<script src="includes/cache/minify/864c2.js"></script>
<script type='text/javascript'>
/* <![CDATA[ */
var _wpmejsSettings = {"pluginPath":"\/wp-includes\/js\/mediaelement\/","classPrefix":"mejs-","stretching":"responsive"};
/* ]]> */
</script>
<link rel='https://api.w.org/' href='../wp-json/index.php' />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="../xmlrpc0db0.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="../wp-includes/wlwmanifest.xml" />
<meta name="generator" content="WordPress 5.2.2" />
<meta name="generator" content="WooCommerce 3.5.2" />
<link rel="canonical" href="index.php" />
<link rel='shortlink' href='../indexa693.php?p=1905' />
<link rel="alternate" type="application/json+oembed" href="../wp-json/oembed/1.0/embed4390.json?url=https%3A%2F%2Fboostup.mikado-themes.com%2Fcontact-us%2F" />
<link rel="alternate" type="text/xml+oembed" href="../wp-json/oembed/1.0/embede066?url=https%3A%2F%2Fboostup.mikado-themes.com%2Fcontact-us%2F&amp;format=xml" />

<script data-cfasync="false" type="text/javascript">//<![CDATA[
	dataLayer.push({"pagePostType":"page","pagePostType2":"single-page","pagePostAuthor":"admin"});//]]>
</script>
<script data-cfasync="false">//<![CDATA[
(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.'+'js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KTQ2BTD');//]]>
</script>

 <noscript><style>.woocommerce-product-gallery{ opacity: 1 !important; }</style></noscript>
<meta name="generator" content="Powered by WPBakery Page Builder - drag and drop page builder for WordPress." />
<!--[if lte IE 9]><link rel="stylesheet" type="text/css" href="https://boostup.mikado-themes.com/wp-content/plugins/js_composer/assets/css/vc_lte_ie9.min.css" media="screen"><![endif]--><meta name="generator" content="Powered by Slider Revolution 5.4.8 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
<link rel="icon" href="includes/uploads/fav.png" sizes="32x32" />
<link rel="icon" href="includes/uploads/fav.png" sizes="192x192" />
<link rel="apple-touch-icon-precomposed" href="includes/uploads/fav.png" />

<script type="text/javascript">function setREVStartSize(e){									
						try{ e.c=jQuery(e.c);var i=jQuery(window).width(),t=9999,r=0,n=0,l=0,f=0,s=0,h=0;
							if(e.responsiveLevels&&(jQuery.each(e.responsiveLevels,function(e,f){f>i&&(t=r=f,l=e),i>f&&f>r&&(r=f,n=e)}),t>r&&(l=n)),f=e.gridheight[l]||e.gridheight[0]||e.gridheight,s=e.gridwidth[l]||e.gridwidth[0]||e.gridwidth,h=i/s,h=h>1?1:h,f=Math.round(h*f),"fullscreen"==e.sliderLayout){var u=(e.c.width(),jQuery(window).height());if(void 0!=e.fullScreenOffsetContainer){var c=e.fullScreenOffsetContainer.split(",");if (c) jQuery.each(c,function(e,i){u=jQuery(i).length>0?u-jQuery(i).outerHeight(!0):u}),e.fullScreenOffset.split("%").length>1&&void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0?u-=jQuery(window).height()*parseInt(e.fullScreenOffset,0)/100:void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0&&(u-=parseInt(e.fullScreenOffset,0))}f=u}else void 0!=e.minHeight&&f<e.minHeight&&(f=e.minHeight);e.c.closest(".rev_slider_wrapper").css({height:f})					
						}catch(d){console.log("Failure at Presize of Slider:"+d)}						
					};</script>
<style type="text/css" data-type="vc_custom-css">.mkdf-iwt.mkdf-iwt-icon-left .mkdf-iwt-content {
    padding: 0 0 0 22px;
}
.mkdf-custom-cf-padding {
 padding-right: 0px !important; 
}
@media (max-width: 1024px) {
 .mkdf-custom-cf-padding {
  padding-right: 15px !important; 
 }
}

.iwt-opacity .mkdf-iwt .mkdf-iwt-text a:hover {
    color: rgba(255, 255, 255, 0.8) !important;
}</style><style type="text/css" data-type="vc_shortcodes-custom-css">.vc_custom_1540905168458{padding-top: 111px !important;padding-bottom: 98px !important;}.vc_custom_1541688759942{padding-right: 0px !important;padding-left: 0px !important;}.vc_custom_1541688774433{padding-right: 0px !important;padding-left: 0px !important;background-color: #583e97 !important;}</style><noscript><style type="text/css"> .wpb_animate_when_almost_visible { opacity: 1; }</style></noscript></head>
<body class="page-template page-template-full-width page-template-full-width-php page page-id-1905 boostup-core-1.0 woocommerce-no-js boostup-ver-1.0 mkdf-grid-1300 mkdf-wide-dropdown-menu-in-grid mkdf-sticky-header-on-scroll-down-up mkdf-dropdown-animate-height mkdf-header-standard mkdf-menu-area-shadow-disable mkdf-menu-area-in-grid-shadow-disable mkdf-menu-area-border-disable mkdf-menu-area-in-grid-border-disable mkdf-logo-area-border-disable mkdf-logo-area-in-grid-border-disable mkdf-side-menu-slide-from-right mkdf-woocommerce-columns-3 mkdf-woo-normal-space mkdf-woo-pl-info-below-image mkdf-woo-single-thumb-on-left-side mkdf-woo-single-has-pretty-photo mkdf-default-mobile-header mkdf-sticky-up-mobile-header mkdf-header-top-enabled wpb-js-composer js-comp-ver-5.6 vc_responsive mkdf-slide-from-header-bottom" itemscope itemtype="http://schema.org/WebPage">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.php?id=GTM-WHSXKSZ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<section class="mkdf-side-menu">
<a class="mkdf-close-side-menu mkdf-close-side-menu-icon-pack" href="#">
<i class="mkdf-icon-dripicons dripicon dripicons-wrong "></i> </a>
<div id="media_image-4" class="widget mkdf-sidearea widget_media_image"><img width="137" height="44" src="includes/uploads/logo-colored.png" class="image wp-image-4220  attachment-full size-full" alt="m" style="max-width: 100%; height: auto;" /></div><div id="text-8" class="widget mkdf-sidearea widget_text"> <div class="textwidget"><p>Mobation, where the new generation begins, is founded in 2006 with the mission to provide creative Media, IT Services and Solutions, fulfilling the requirements of Small and Medium companies to big Enterprises.</p>
<p>&nbsp;</p>
<div class="mkdf-portfolio-list-holder mkdf-grid-list mkdf-disable-bottom-space mkdf-pl-gallery  mkdf-three-columns mkdf-tiny-space mkdf-pl-standard-shader   mkdf-pl-no-content mkdf-pl-pag-no-pagination      " data-type=gallery data-enable-light-skin=no data-image-hover-color=#74cccd data-number-of-columns=three data-diagonal-layout=no data-space-between-items=tiny data-number-of-items=6 data-image-proportions=square data-enable-fixed-proportions=no data-enable-image-shadow=no data-orderby=ID data-order=ASC data-item-style=standard-shader data-enable-title=no data-title-tag=h5 data-enable-category=no data-enable-count-images=no data-enable-excerpt=no data-excerpt-length=100 data-pagination-type=no-pagination data-filter=no data-filter-order-by=name data-enable-article-animation=no data-portfolio-slider-on=no data-enable-loop=yes data-enable-autoplay=yes data-slider-speed=5000 data-slider-speed-animation=600 data-enable-navigation=yes data-enable-pagination=yes data-max-num-pages=9 data-next-page=2>

</div>
</div>
</div><div class="widget mkdf-separator-widget"><div class="mkdf-separator-holder clearfix  mkdf-separator-center mkdf-separator-normal">
<div class="mkdf-separator" style="border-color: transparent;border-style: solid;margin-top: 25px;margin-bottom: 26px"></div>
</div>
</div></section>
<div class="mkdf-wrapper">
<div class="mkdf-wrapper-inner">
<div class="mkdf-top-bar">
<div class="mkdf-grid">
<div class="mkdf-vertical-align-containers">
<div class="mkdf-position-left"><div class="mkdf-position-left-inner">
<div id="text-4" class="widget widget_text mkdf-top-bar-widget"> <div class="textwidget"><p>follow us</p>
</div>
</div> <a class="mkdf-social-icon-widget-holder mkdf-icon-has-hover " data-hover-color="rgba(255,255,255,.6)" style="color: #ffffff;margin: 0 10px 0 7px;" href="https://www.facebook.com/mobation/" target="_blank">
<span class="mkdf-social-icon-widget  social_facebook      mkdf-social-icon-widget-initial"></span><span class="mkdf-social-icon-widget  social_facebook     mkdf-social-icon-widget-hover"></span> </a>
<a class="mkdf-social-icon-widget-holder mkdf-icon-has-hover " data-hover-color="rgba(255,255,255,.6)" style="color: #ffffff;margin: 0 0 0 0;" href="https://twitter.com/mobation" target="_blank">
<span class="mkdf-social-icon-widget  social_twitter      mkdf-social-icon-widget-initial"></span><span class="mkdf-social-icon-widget  social_twitter     mkdf-social-icon-widget-hover"></span> </a>
<a class="mkdf-social-icon-widget-holder mkdf-icon-has-hover " data-hover-color="rgba(255,255,255,.6)" style="color: #ffffff;margin: 0 0px 0 11px;" href="https://www.instagram.com/mobation/" target="_blank">
<span class="mkdf-social-icon-widget  social_instagram      mkdf-social-icon-widget-initial"></span><span class="mkdf-social-icon-widget  social_instagram     mkdf-social-icon-widget-hover"></span> </a>
</div>
</div>
<div class="mkdf-position-right"><div class="mkdf-position-right-inner">
<div id="text-5" class="widget widget_text mkdf-top-bar-widget"> <div class="textwidget"><p><a href="about.php" target="_self" rel="noopener noreferrer">ABout</a></p>
</div>
</div><div id="text-6" class="widget widget_text mkdf-top-bar-widget"> 
</div><div id="text-7" class="widget widget_text mkdf-top-bar-widget"> <div class="textwidget"><p>CALL US: <a href="tel:+1234567890" target="_self" rel="noopener noreferrer">961 81 978036 </a></p>
</div>
</div> </div>
</div>
</div>
</div>
<div class="mkdf-slide-from-header-bottom-holder">

</div> </div>
<header class="mkdf-page-header">
<div class="mkdf-menu-area mkdf-menu-center">
<div class="mkdf-grid">
<div class="mkdf-vertical-align-containers">
<div class="mkdf-position-left"><div class="mkdf-position-left-inner">
<div class="mkdf-logo-wrapper">
<a itemprop="url" href="../../index.php" style="height: 70px;">
<img itemprop="image" class="mkdf-normal-logo" src="includes/uploads/logo-colored.png" width="274" height="88" alt="logo" />
<img itemprop="image" class="mkdf-dark-logo" src="includes/uploads/logo-colored.png" width="274" height="88" alt="dark logo" /> <img itemprop="image" class="mkdf-light-logo" src="includes/uploads/logo-colored.png" width="274" height="88" alt="light logo" /> </a>
</div>
</div>
</div>
<div class="mkdf-position-center"><div class="mkdf-position-center-inner">
<nav class="mkdf-main-menu mkdf-drop-down mkdf-default-nav">
<ul id="menu-menu" class="clearfix"><li id="nav-menu-item-326" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub narrow"><a href="index.php" class=""><span class="item_outer"><span class="item_text">Home</span><i class="mkdf-menu-arrow fa fa-angle-down"></i></span></a>
<li id="nav-menu-item-326" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub narrow"><a href="about.php" class=""><span class="item_outer"><span class="item_text">About US</span><i class="mkdf-menu-arrow fa fa-angle-down"></i></span></a>

</li>
<li id="nav-menu-item-326" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub narrow"><a href="services.php" class=""><span class="item_outer"><span class="item_text">Our Services</span><i class="mkdf-menu-arrow fa fa-angle-down"></i></span></a>

</li>
<li id="nav-menu-item-326" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub narrow"><a href="portfolio.php" class=""><span class="item_outer"><span class="item_text">Our Portfolio</span><i class="mkdf-menu-arrow fa fa-angle-down"></i></span></a>

</li>
<li id="nav-menu-item-326" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub narrow"><a href="contact.php" class=""><span class="item_outer"><span class="item_text">Contact US</span><i class="mkdf-menu-arrow fa fa-angle-down"></i></span></a>

</li>
<li id="nav-menu-item-326" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children mkdf-active-item has_sub narrow"><a href="https://webservices.mobation.com/" class=" current "><span class="item_outer"><span class="item_text"> WEB SERVICES</span><i class="mkdf-menu-arrow fa fa-angle-down"></i></span></a>

</li>
</li></ul>
 </nav>
</div>
</div>
<div class="mkdf-position-right"><div class="mkdf-position-right-inner">
<a style="margin: 0px 10px 0 15px;" class="mkdf-search-opener mkdf-icon-has-hover mkdf-search-opener-icon-pack" href="javascript:void(0)">

</a>

<a class="mkdf-side-menu-button-opener mkdf-icon-has-hover mkdf-side-menu-button-opener-icon-pack" href="javascript:void(0)">
<span class="mkdf-side-menu-icon">
<i class="mkdf-icon-dripicons dripicon dripicons-vibrate "></i> </span>
<span class="mkdf-side-menu-icon-hover">
<i class="mkdf-icon-dripicons dripicon dripicons-vibrate "></i> </span>
</a>
</div>
</div>
</div>
</div>
</div>
<div class="mkdf-sticky-header">
<div class="mkdf-sticky-holder mkdf-menu-center">
<div class="mkdf-vertical-align-containers">
<div class="mkdf-position-left"><div class="mkdf-position-left-inner">
<div class="mkdf-logo-wrapper">
<a itemprop="url" href="../../index.php" style="height: 44px;">
<img itemprop="image" class="mkdf-normal-logo" src="includes/uploads/logo-colored.png" alt="logo" />
<img itemprop="image" class="mkdf-dark-logo" src="includes/uploads/2018/11/logo-colored.png" width="274" height="88" alt="dark logo" /> <img itemprop="image" class="mkdf-light-logo" src="includes/uploads/logo-colored.png" width="274" height="88" alt="light logo" /> </a>
</div>
</div>
</div>
<div class="mkdf-position-center"><div class="mkdf-position-center-inner">
<nav class="mkdf-main-menu mkdf-drop-down mkdf-sticky-nav">
<ul id="menu-menu-1" class="clearfix"><li id="nav-menu-item-326" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub narrow"><a href="index.php" class=""><span class="item_outer"><span class="item_text">Home</span><i class="mkdf-menu-arrow fa fa-angle-down"></i></span></a>
<li id="nav-menu-item-326" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub narrow"><a href="about.php" class=""><span class="item_outer"><span class="item_text">About US</span><i class="mkdf-menu-arrow fa fa-angle-down"></i></span></a>

</li>
<li id="nav-menu-item-326" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub narrow"><a href="services.php" class=""><span class="item_outer"><span class="item_text">Our Services</span><i class="mkdf-menu-arrow fa fa-angle-down"></i></span></a>

</li>
<li id="nav-menu-item-326" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub narrow"><a href="portfolio.php" class=""><span class="item_outer"><span class="item_text">Our Portfolio</span><i class="mkdf-menu-arrow fa fa-angle-down"></i></span></a>

</li>
<li id="nav-menu-item-326" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub narrow"><a href="contact.php" class=""><span class="item_outer"><span class="item_text">Contact US</span><i class="mkdf-menu-arrow fa fa-angle-down"></i></span></a>

</li>
<li id="nav-menu-item-326" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children mkdf-active-item has_sub"><a href="https://webservices.mobation.com/" class=" current  mkdf-mobile-no-link"><span>WEB SERVICES</span></a><span class="mobile_arrow"><i class="mkdf-sub-arrow ion-ios-arrow-right"></i><i class="ion-ios-arrow-down"></i></span>
</li>

</ul>

</nav>
</div>
</div>
<div class="mkdf-position-right"><div class="mkdf-position-right-inner">
<a class="mkdf-side-menu-button-opener mkdf-icon-has-hover mkdf-side-menu-button-opener-icon-pack" href="javascript:void(0)" style="color: #3745a5;">
<span class="mkdf-side-menu-icon">
<i class="mkdf-icon-dripicons dripicon dripicons-vibrate "></i> </span>
<span class="mkdf-side-menu-icon-hover">
<i class="mkdf-icon-dripicons dripicon dripicons-vibrate "></i> </span>
</a>
</div>
</div>
</div>
</div>
</div>
<div class="mkdf-slide-from-header-bottom-holder">
<form action="https://boostup.mikado-themes.com/" method="get">
<div class="mkdf-form-holder">
<input type="text" placeholder="Type..." name="s" class="mkdf-search-field" autocomplete="off" required />
<input value="Search" type="submit" class="mkdf-btn mkdf-btn-solid mkdf-btn-small">
</div>
</form>
</div></header>
<header class="mkdf-mobile-header">
<div class="mkdf-mobile-header-inner">
<div class="mkdf-mobile-header-holder">
<div class="mkdf-grid">
<div class="mkdf-vertical-align-containers">
<div class="mkdf-vertical-align-containers">
<div class="mkdf-position-left"><div class="mkdf-position-left-inner">
<div class="mkdf-mobile-logo-wrapper">
<a itemprop="url" href="../index.php" style="height: 44px">
<img itemprop="image" src="includes/uploads/logo-colored.png" alt="Mobile Logo" />
</a>
</div>
</div>
</div>
<div class="mkdf-position-right"><div class="mkdf-position-right-inner">
<div class="mkdf-mobile-menu-opener mkdf-mobile-menu-opener-predefined">
<a href="javascript:void(0)">
<span class="mkdf-mobile-menu-icon">
<span class="mkdf-hm-lines"><i class="mkdf-icon-dripicons dripicon dripicons-vibrate "></i> </span> </span>
</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<nav class="mkdf-mobile-nav">
<div class="mkdf-grid">
<ul id="menu-mobile-menu" class=""><li id="mobile-menu-item-3583" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub"><a href="index.php" class=" mkdf-mobile-no-link"><span>Home</span></a><span class="mobile_arrow"><i class="mkdf-sub-arrow ion-ios-arrow-right"></i><i class="ion-ios-arrow-down"></i></span>
</li>
<li id="mobile-menu-item-3583" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub"><a href="about.php" class=" mkdf-mobile-no-link"><span>About Us</span></a><span class="mobile_arrow"><i class="mkdf-sub-arrow ion-ios-arrow-right"></i><i class="ion-ios-arrow-down"></i></span>
</li>
<li id="mobile-menu-item-3583" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub"><a href="services.php" class=" mkdf-mobile-no-link"><span>Our Services</span></a><span class="mobile_arrow"><i class="mkdf-sub-arrow ion-ios-arrow-right"></i><i class="ion-ios-arrow-down"></i></span>
</li>
<li id="mobile-menu-item-3583" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub"><a href="portfolio.php" class=" mkdf-mobile-no-link"><span>Our Portfolio</span></a><span class="mobile_arrow"><i class="mkdf-sub-arrow ion-ios-arrow-right"></i><i class="ion-ios-arrow-down"></i></span>
</li>
<li id="mobile-menu-item-3583" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  has_sub"><a href="contact.php" class=" mkdf-mobile-no-link"><span>Contac Us</span></a><span class="mobile_arrow"><i class="mkdf-sub-arrow ion-ios-arrow-right"></i><i class="ion-ios-arrow-down"></i></span>
</li>
<li id="mobile-menu-item-3583" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children mkdf-active-item has_sub"><a href="https://webservices.mobation.com/" class=" current  mkdf-mobile-no-link"><span>WEB SERVICES</span></a><span class="mobile_arrow"><i class="mkdf-sub-arrow ion-ios-arrow-right"></i><i class="ion-ios-arrow-down"></i></span>
</li>
</ul> </div>
</nav>
</div>
<div class="mkdf-slide-from-header-bottom-holder">
<form action="https://boostup.mikado-themes.com/" method="get">
<div class="mkdf-form-holder">
<input type="text" placeholder="Type..." name="s" class="mkdf-search-field" autocomplete="off" required />
<input value="Search" type="submit" class="mkdf-btn mkdf-btn-solid mkdf-btn-small">
</div>
</form>
</div></header>
<a id='mkdf-back-to-top' href='#'>
<div class="mkdf-icon-stack-outer">
<div class="mkdf-icon-stack">
<span class="mkdf-icon-stack-inner">
<svg xmlns="http://www.w3.org/2000/svg" width="33.371px" height="55px" viewBox="0 0 33.371 48.833" enable-background="new 0 0 33.371 48.833">
<path fill="#583e97" d="M32.643,22.556c-0.417,0.543-3.237,1.685-3.237,1.685c-0.679,0.381-1.462,0.707-2.141,1.142
	c-0.157,0.108-0.209,0.272-0.314,0.435c-0.261,0.543-0.626,1.033-0.992,1.522c-0.679,0.869-1.514,1.086-2.507,0.924
	c-0.261,0-0.417-0.272-0.313-0.598c0.052-0.326,0.157-0.598,0.417-0.815c0.157-0.218,0.366-0.434,0.575-0.598
	c0.261-0.217,0.522-0.38,0.731-0.597c0.209-0.109,0.313-0.272,0.418-0.489c0.417-1.033,0.574-2.121,0.47-3.261
	c0-0.055-0.052-0.109-0.052-0.164c-0.104,0-0.209,0.055-0.261,0.109l-0.157,0.163c-0.992,1.304-1.984,2.61-2.872,3.968
	c-0.366,0.652-2.611,6.414-3.133,8.099c-0.626,2.012-1.41,4.022-2.246,5.979c-0.574,1.25-1.096,2.555-1.775,3.751l-0.575,0.978
	c-0.261,0.327-1.515,2.174-2.35,2.773c-1.306,0.924-1.724,0.163-1.828-0.652v-0.544V46.31c0-0.218,0-0.435,0.052-0.652
	c0.366-3.153,1.567-5.98,2.872-8.698c1.044-2.228,2.141-4.402,3.342-6.577c0.105-0.163,1.202-2.174,1.828-3.207l0.543-1.38
	l-0.019,0.022c-0.261,0.435-2.193,2.391-2.246,2.446l-0.888,0.924c-0.261,0.218-0.47,0.435-0.731,0.598
	c-0.627,0.489-1.41,0.706-2.193,0.652c-0.209,0-0.417,0.054-0.626,0c-0.261,0-0.47,0-0.731-0.109
	c-0.417-0.163-0.679-0.435-0.835-0.924c-0.104-0.489-0.157-0.924-0.104-1.468c0.104-1.848,0.522-3.696,1.148-5.436
	c0.052-0.271,0.209-0.543,0.157-0.815c-0.313,0.218-0.522,0.597-0.783,0.924c-0.888,1.25-1.775,2.5-2.768,3.642
	c-0.887,1.088-1.932,2.012-3.028,2.881c-0.992,0.761-2.088,0.978-3.237,0.815c-0.47-0.054-0.836-0.381-0.992-0.87
	C1.104,28.589,1,28.045,1,27.502c0-1.74,0.261-3.425,0.626-5.11c0.418-2.011,1.044-3.967,1.776-5.87
	c1.044-2.773,2.193-5.544,3.446-8.208c0.94-2.011,1.932-4.022,3.133-5.871l1.044-1.413c0.104-0.109,0.261-0.164,0.366-0.272
	l0.104,0.055c-0.052,0.435,0.157,0.163,0.313,0.163l0.783-0.163c0.522-0.109,0.888,0.163,1.253,0.49
	c0.209,0.217,0.366,0.434,0.574,0.706c0.053,0.055,0.104,0.218,0.104,0.327c-0.052,0.271-0.104,0.597-0.261,0.924
	c-0.366,0.87-0.835,1.685-1.253,2.555c-1.044,2.12-2.089,4.348-2.977,6.577c-0.835,1.957-1.619,3.967-2.402,5.979
	c-1.097,2.772-2.141,5.544-3.186,8.371c-0.156,0.381-0.261,0.761-0.365,1.142c-0.052,0.163-0.052,0.381-0.052,0.543
	c0.208,0.055,0.365-0.109,0.47-0.218c0.47-0.326,0.992-0.706,1.462-1.086c1.044-0.924,1.984-1.957,2.82-3.098
	c1.41-1.848,2.768-3.697,4.021-5.653c1.306-1.957,2.455-3.914,3.342-6.143c0.104-0.326,0.313-0.598,0.574-0.815
	c0.104-0.054,0.209-0.054,0.261,0.109c0.052,0.163,0.157,0.271,0.313,0.163c0.366-0.271,0.73-0.271,1.096-0.217
	c0.418,0,0.783,0.271,1.044,0.543l0.731,0.815c0.157,0.163,0.209,0.327,0.209,0.543c-0.105,0.38-0.157,0.761-0.261,1.142
	c-0.313,0.707-0.575,1.413-0.94,2.12c-1.253,2.609-2.297,5.327-3.185,8.153c-0.261,0.87-0.575,1.739-0.888,2.609
	c-0.052,0.163-0.157,0.327-0.157,0.489c-0.052,0.054,0,0.163,0,0.218h0.261c0.836-0.326,1.567-1.033,2.141-1.685
	c0.996-1.141,2.734-3.248,2.985-3.537c0.581-1.371,1.191-2.736,1.87-4.074l0.157-0.38c0.104-0.218,0.261-0.327,0.522-0.327
	c0.366,0,0.627,0.218,0.627,0.599c0.052,0.163,0,0.38,0,0.543c-0.157,0.599-0.261,1.142-0.366,1.739v0.109
	c0.052-0.054,0.104-0.054,0.104-0.054l0.47-0.489c0.261-0.163,0.47-0.38,0.731-0.543c0.313-0.218,0.626-0.327,0.992-0.271
	c0.208,0.054,0.47,0.054,0.679,0.054c0.156,0.055,0.366,0.109,0.522,0.218c0.575,0.38,0.94,0.924,1.097,1.63
	c0.104,0.544,0.104,1.142,0,1.685v0.381c0,0,0.052,0.055,0.104,0.055c0.157-0.055,0.261-0.163,0.418-0.218
	c0.73-0.38,2.715-1.304,3.603-1.413C32.121,22.121,32.8,22.338,32.643,22.556z" />
</svg>
</span>
</div>
</div>
<span class="mkdf-back-to-top-inner">
<span class="mkdf-back-to-top-icon-back">

<svg xmlns="http://www.w3.org/2000/svg" width="33.371px" height="55px" viewBox="0 0 33.371 48.833" enable-background="new 0 0 33.371 48.833">
<path fill="#583e97" d="M32.643,22.556c-0.417,0.543-3.237,1.685-3.237,1.685c-0.679,0.381-1.462,0.707-2.141,1.142
	c-0.157,0.108-0.209,0.272-0.314,0.435c-0.261,0.543-0.626,1.033-0.992,1.522c-0.679,0.869-1.514,1.086-2.507,0.924
	c-0.261,0-0.417-0.272-0.313-0.598c0.052-0.326,0.157-0.598,0.417-0.815c0.157-0.218,0.366-0.434,0.575-0.598
	c0.261-0.217,0.522-0.38,0.731-0.597c0.209-0.109,0.313-0.272,0.418-0.489c0.417-1.033,0.574-2.121,0.47-3.261
	c0-0.055-0.052-0.109-0.052-0.164c-0.104,0-0.209,0.055-0.261,0.109l-0.157,0.163c-0.992,1.304-1.984,2.61-2.872,3.968
	c-0.366,0.652-2.611,6.414-3.133,8.099c-0.626,2.012-1.41,4.022-2.246,5.979c-0.574,1.25-1.096,2.555-1.775,3.751l-0.575,0.978
	c-0.261,0.327-1.515,2.174-2.35,2.773c-1.306,0.924-1.724,0.163-1.828-0.652v-0.544V46.31c0-0.218,0-0.435,0.052-0.652
	c0.366-3.153,1.567-5.98,2.872-8.698c1.044-2.228,2.141-4.402,3.342-6.577c0.105-0.163,1.202-2.174,1.828-3.207l0.543-1.38
	l-0.019,0.022c-0.261,0.435-2.193,2.391-2.246,2.446l-0.888,0.924c-0.261,0.218-0.47,0.435-0.731,0.598
	c-0.627,0.489-1.41,0.706-2.193,0.652c-0.209,0-0.417,0.054-0.626,0c-0.261,0-0.47,0-0.731-0.109
	c-0.417-0.163-0.679-0.435-0.835-0.924c-0.104-0.489-0.157-0.924-0.104-1.468c0.104-1.848,0.522-3.696,1.148-5.436
	c0.052-0.271,0.209-0.543,0.157-0.815c-0.313,0.218-0.522,0.597-0.783,0.924c-0.888,1.25-1.775,2.5-2.768,3.642
	c-0.887,1.088-1.932,2.012-3.028,2.881c-0.992,0.761-2.088,0.978-3.237,0.815c-0.47-0.054-0.836-0.381-0.992-0.87
	C1.104,28.589,1,28.045,1,27.502c0-1.74,0.261-3.425,0.626-5.11c0.418-2.011,1.044-3.967,1.776-5.87
	c1.044-2.773,2.193-5.544,3.446-8.208c0.94-2.011,1.932-4.022,3.133-5.871l1.044-1.413c0.104-0.109,0.261-0.164,0.366-0.272
	l0.104,0.055c-0.052,0.435,0.157,0.163,0.313,0.163l0.783-0.163c0.522-0.109,0.888,0.163,1.253,0.49
	c0.209,0.217,0.366,0.434,0.574,0.706c0.053,0.055,0.104,0.218,0.104,0.327c-0.052,0.271-0.104,0.597-0.261,0.924
	c-0.366,0.87-0.835,1.685-1.253,2.555c-1.044,2.12-2.089,4.348-2.977,6.577c-0.835,1.957-1.619,3.967-2.402,5.979
	c-1.097,2.772-2.141,5.544-3.186,8.371c-0.156,0.381-0.261,0.761-0.365,1.142c-0.052,0.163-0.052,0.381-0.052,0.543
	c0.208,0.055,0.365-0.109,0.47-0.218c0.47-0.326,0.992-0.706,1.462-1.086c1.044-0.924,1.984-1.957,2.82-3.098
	c1.41-1.848,2.768-3.697,4.021-5.653c1.306-1.957,2.455-3.914,3.342-6.143c0.104-0.326,0.313-0.598,0.574-0.815
	c0.104-0.054,0.209-0.054,0.261,0.109c0.052,0.163,0.157,0.271,0.313,0.163c0.366-0.271,0.73-0.271,1.096-0.217
	c0.418,0,0.783,0.271,1.044,0.543l0.731,0.815c0.157,0.163,0.209,0.327,0.209,0.543c-0.105,0.38-0.157,0.761-0.261,1.142
	c-0.313,0.707-0.575,1.413-0.94,2.12c-1.253,2.609-2.297,5.327-3.185,8.153c-0.261,0.87-0.575,1.739-0.888,2.609
	c-0.052,0.163-0.157,0.327-0.157,0.489c-0.052,0.054,0,0.163,0,0.218h0.261c0.836-0.326,1.567-1.033,2.141-1.685
	c0.996-1.141,2.734-3.248,2.985-3.537c0.581-1.371,1.191-2.736,1.87-4.074l0.157-0.38c0.104-0.218,0.261-0.327,0.522-0.327
	c0.366,0,0.627,0.218,0.627,0.599c0.052,0.163,0,0.38,0,0.543c-0.157,0.599-0.261,1.142-0.366,1.739v0.109
	c0.052-0.054,0.104-0.054,0.104-0.054l0.47-0.489c0.261-0.163,0.47-0.38,0.731-0.543c0.313-0.218,0.626-0.327,0.992-0.271
	c0.208,0.054,0.47,0.054,0.679,0.054c0.156,0.055,0.366,0.109,0.522,0.218c0.575,0.38,0.94,0.924,1.097,1.63
	c0.104,0.544,0.104,1.142,0,1.685v0.381c0,0,0.052,0.055,0.104,0.055c0.157-0.055,0.261-0.163,0.418-0.218
	c0.73-0.38,2.715-1.304,3.603-1.413C32.121,22.121,32.8,22.338,32.643,22.556z" />
</svg>
</span>
</span>
</a>
<div class="mkdf-content">
<div class="mkdf-content-inner">
<div class="mkdf-full-width">
<div class="mkdf-full-width-inner">
<div class="mkdf-grid-row">
<div class="mkdf-page-content-holder mkdf-grid-col-12">
<div class="vc_row wpb_row vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper"><div class="mkdf-google-map-holder">

</div></div></div></div></div><div class="mkdf-row-grid-section-wrapper ">


	
<br>
<div class="mkdf-title-holder mkdf-centered-type mkdf-title-va-header-bottom mkdf-has-bg-image mkdf-bg-parallax" style="height: 307px; background-image: url(&quot;includes/uploads/services-1.png&quot;); background-position: center -5.1576px;position: inherit;" data-height="307">
			
				<style>
				@media screen and (max-width: 1400px) {
  .imgphone {
    visibility: hidden;
    display: none;
  }
}	
@media screen and (max-width: 1400px) {
  .imgphone2 {
    visibility: hidden;
    display: none;
  }
}	
.imgphone {
	visibility: visible; 
  animation: myfirst 3s;
  animation-direction: right;
}
.imgphone2 {
	visibility: visible; 
  animation: myfirst 5s;
  animation-direction: right;
}
@keyframes myfirst {
  0%   { left: -2222px}
  50% {left : 0px}
}
				</style>
			<img  class=""  style="   visibility: hidden; width: 230px;
    height: 378px;
    position: absolute;
	top: 278%;z-index: 1" align="left" id="test" name="test" src="includes/uploads/vector1.png">
		<img  class=""  style=" visibility:hidden; width: 230px;
		height: 378px;
		position: absolute;
		top: 278%;z-index: 2" align="left"  id="test2" name="test2"  src="includes/uploads/vector2.png">
	<script>
	setInterval(function() {
		Check();
}, 300);
		function Check() {
		
			if(document.getElementById("test").offsetTop/50 < window.pageYOffset){
				document.getElementById("test").style.visibility = "visible";
		
				document.getElementById("test").className = "imgphone";
				document.getElementById("test2").style.visibility = "visible";
		
				document.getElementById("test2").className = "imgphone2";

			}
		}

	
	</script>
	<div class="mkdf-title-image">
	<img itemprop="image" src="includes/uploads/services-1.png" alt="o">
	</div>
	<div class="mkdf-title-wrapper" style="height: 307px">
	<div class="mkdf-title-inner">
	<div class="mkdf-grid">
	<h1 class="mkdf-page-title entry-title" style="color: #ffffff ;	font-family: Franklin Gothic Medium,Franklin Gothic,ITC Franklin Gothic,Arial,sans-serif; 
">Our Services</h1>
	</div>
	</div>
	</div>
	</div>
	<br><br><br>

	<div class="mkdf-row-grid-section-wrapper "><div class="mkdf-row-grid-section"><div class="vc_row wpb_row vc_row-fluid vc_custom_1539179007752"><div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-offset-0 vc_col-lg-4 vc_col-md-offset-0 vc_col-md-12 vc_col-sm-offset-0"><div class="vc_column-inner"><div class="wpb_wrapper"><div class="mkdf-elements-holder   mkdf-one-column  mkdf-responsive-mode-768 "><div class="mkdf-eh-item    " data-item-class="mkdf-eh-custom-5701" data-769-1024="5px 17px 50px 0" data-681-768="5px 17px 50px 0" data-680="5px 17px 40px 0">
			
		<div class="mkdf-eh-item-inner">
		<div class="mkdf-eh-item-content mkdf-eh-custom-5701" style="padding: 5px 17px 0 0">
		<div class="wpb_text_column wpb_content_element ">
		<div class="wpb_wrapper">

		</div>
		</div>
		<div class="vc_empty_space" style="height: 55px"><span class="vc_empty_space_inner"></span></div>
		<div class="mkdf-single-image-holder    ">
		<div class="mkdf-si-inner">
			<h3 align="center" style="margin-right: 14%;">Media Services.</h3>
		<img width="329" height="356" src="includes/uploads/mobation-services-icon.png" class="attachment-full size-full" alt="o" sizes="(max-width: 329px) 100vw, 329px"> </div>
		</div> </div>
			
			
			
			
	
  

		
		
		
		
		</div>
		</div></div></div></div></div><div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-offset-0 vc_col-lg-8 vc_col-md-offset-0 vc_col-md-12 vc_col-sm-offset-0"><div class="vc_column-inner"><div class="wpb_wrapper"><div class="mkdf-section-title-holder  mkdf-st-standard mkdf-st-title-left mkdf-st-normal-space ">
		<div class="mkdf-st-inner">
		<p class="mkdf-st-text" style="color: #868890;font-size: 18px;line-height: 34px;font-weight: 500">
			we pay great attention to the design process and strive to deliver unique products that meet your business needs and achieve your ambitions. We have specialized professionals crafting various kinds of Media Services (such as Design of trademarks, packaging, promotional materials, and magazines...)	</p>
		</div>
		</div><div class="vc_empty_space" style="height: 55px"><span class="vc_empty_space_inner"></span></div>
		<div class="mkdf-accordion-holder mkdf-ac-default  mkdf-accordion mkdf-ac-boxed  clearfix ui-accordion ui-widget ui-helper-reset" role="tablist">
		<h5 class="mkdf-accordion-title ui-accordion-header ui-state-default ui-corner-all" role="tab" id="ui-id-1" aria-controls="ui-id-2" aria-selected="false" aria-expanded="false" tabindex="0">
		<span class="mkdf-accordion-mark">
		<span class="mkdf_icon_minus icon-basic-eye"></span>
		<span class="mkdf-eye-line"></span>
		</span>
		<span class="mkdf-tab-title">Corporate Design</span>
		</h5>
		<div class="mkdf-accordion-content ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom" id="ui-id-2" aria-labelledby="ui-id-1" role="tabpanel" aria-hidden="true" style="display: none;">
		<div class="mkdf-accordion-content-inner">
		<div class="wpb_text_column wpb_content_element ">
		<div class="wpb_wrapper">
		<p>A strong brand is what stands behind every successful product, from designing the logo that fits the customer’s vision to the design of personal cards, internal official papers..</p>
		</div>
		</div>
		</div>
		</div><h5 class="mkdf-accordion-title ui-accordion-header ui-state-default ui-corner-all" role="tab" id="ui-id-3" aria-controls="ui-id-4" aria-selected="false" aria-expanded="false" tabindex="-1">
		<span class="mkdf-accordion-mark">
		<span class="mkdf_icon_minus icon-basic-eye"></span>
		<span class="mkdf-eye-line"></span>
		</span>
		<span class="mkdf-tab-title">Graphic Design.</span>
		</h5>
		<div class="mkdf-accordion-content ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom" id="ui-id-4" aria-labelledby="ui-id-3" role="tabpanel" aria-hidden="true" style="display: none;">
		<div class="mkdf-accordion-content-inner">
		<div class="wpb_text_column wpb_content_element ">
		<div class="wpb_wrapper">
		<p>After the completion of brand design, it is necessary to promote your business and services, increase the awareness about a specific product or topic, and generate new leads by allowing us to support you in designing materials such as brochures, fliers, books, magazines, reports, and bulletins....</p>
		</div>
		</div>
		</div>
		</div><h5 class="mkdf-accordion-title ui-accordion-header ui-state-default ui-corner-all" role="tab" id="ui-id-5" aria-controls="ui-id-6" aria-selected="false" aria-expanded="false" tabindex="-1">
		<span class="mkdf-accordion-mark">
		<span class="mkdf_icon_minus icon-basic-eye"></span>
		<span class="mkdf-eye-line"></span>
		</span>
		<span class="mkdf-tab-title">Visual Production.</span>
		</h5>
		<div class="mkdf-accordion-content ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom" id="ui-id-6" aria-labelledby="ui-id-5" role="tabpanel" aria-hidden="true" style="display: none;">
		<div class="mkdf-accordion-content-inner">
		<div class="wpb_text_column wpb_content_element ">
		<div class="wpb_wrapper">
		<p>Attractive shapes and visual effects that transform an idea or data into a comfortable and exciting visual material.</p>
		</div>
		</div>
		</div>

	</div><h5 class="mkdf-accordion-title ui-accordion-header ui-state-default ui-corner-all" role="tab" id="ui-id-5" aria-controls="ui-id-6" aria-selected="false" aria-expanded="false" tabindex="-1">
		<span class="mkdf-accordion-mark">
		<span class="mkdf_icon_minus icon-basic-eye"></span>
		<span class="mkdf-eye-line"></span>
		</span>
		<span class="mkdf-tab-title">Motion Graphics</span>
		</h5>
		<div class="mkdf-accordion-content ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom" id="ui-id-6" aria-labelledby="ui-id-5" role="tabpanel" aria-hidden="true" style="display: none;">
		<div class="mkdf-accordion-content-inner">
		<div class="wpb_text_column wpb_content_element ">
		<div class="wpb_wrapper">
		<p>Attractive shapes and visual effects that transform an idea or data into a comfortable and exciting visual material.</p>
		</div>
		</div>
		</div>
	</div><h5 class="mkdf-accordion-title ui-accordion-header ui-state-default ui-corner-all" role="tab" id="ui-id-5" aria-controls="ui-id-6" aria-selected="false" aria-expanded="false" tabindex="-1">
		<span class="mkdf-accordion-mark">
		<span class="mkdf_icon_minus icon-basic-eye"></span>
		<span class="mkdf-eye-line"></span>
		</span>
		<span class="mkdf-tab-title">Video Production</span>
		</h5>
		<div class="mkdf-accordion-content ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom" id="ui-id-6" aria-labelledby="ui-id-5" role="tabpanel" aria-hidden="true" style="display: none;">
		<div class="mkdf-accordion-content-inner">
		<div class="wpb_text_column wpb_content_element ">
		<div class="wpb_wrapper">
		<p>We make the necessary adjustments to the video with the addition of sound effects to suit your vision.</p>
		</div>
		</div>

		
		
		
		
		</div>
		
		
		</div></div></div><br><br>
		 <button onclick="document.getElementById('id01').style.display='block'" align="left" class="wpcf7-form-control wpcf7-submit mkdf-btn mkdf-btn-medium mkdf-btn-solid">Intersted ?? Click Me!</button>


  <div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

      <div class="w3-center"><br>
       <h2> Let's Us Know How We Can Help U ! </h2>
      </div>

      <form class="w3-container" method="POST">
        <div class="w3-section">
          <label><b>Full Name</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Username" name="usrname" id="username" required>
		      <label><b>Email Address</b></label>
          <input class="w3-input w3-border" type="text" placeholder="Enter Email Address" name="email" id="email" required>
          <label><b>Phone Number</b></label>
          <input class="w3-input w3-border" type="text" placeholder="Enter Phone Number" name="phone" id="phone" required>
		     <label><b>Company Name</b></label>
          <input class="w3-input w3-border" type="text" placeholder="Enter Company name" name="company" id="company" >
		    <label><b>Your Message</b></label>
          <textarea class="w3-input w3-border" type="text" placeholder="Enter Your Message" name="msg" id="msg" ></textarea>
          <input class="w3-button w3-block w3-green w3-section w3-padding" style="background-color: #583e97!important;" type="submit" id="media" name="media">
       
        </div>
      </form>

      <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
        <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-button w3-red">Cancel</button>
      
      </div>

    </div>
  </div>

		
		</div></div></div></div></div> <br> <br>

		<div class="mkdf-title-holder mkdf-centered-type mkdf-title-va-header-bottom mkdf-has-bg-image mkdf-bg-parallax" style="height: 307px; background-image: url(&quot;includes/uploads/services-2.png&quot;); background-position: center -5.1576px;" data-height="307">
			<style>
				@media screen and (max-width: 1400px) {
  .imgphone3 {
    visibility: hidden;
    display: none;
  }
}	
@media screen and (max-width: 1400px) {
  .imgphone4 {
    visibility: hidden;
    display: none;
  }
}	
.imgphone3 {
	visibility: hidden; 
  animation: myfirst 3s;
  animation-direction: right;
}
.imgphone4 {
	visibility: hidden; 
  animation: myfirst 5s;
  animation-direction: right;
}
@keyframes myfirst {
  0%   { left: -2222px}
  50% {left : 0px}
  100% {left : 0px}
}
				</style>
			<img  class=""  style="visibility: hidden;
			width: 197px;
			height: 291px;
			position: absolute;
			top: 254%;
			z-index: 1;" align="left" id="test3" name="test3" src="includes/uploads/vector3.png">
		<img  class=""  style="     visibility: hidden;
		width: 208px;
		height: 268px;
		position: absolute;
		top: 246%;
		z-index: 2;" align="left"  id="test4" name="test4"  src="includes/uploads/vector4.png">
	<script>
	setInterval(function() {
		Check2();
}, 300);
		function Check2() {
		
			if(document.getElementById("test3").offsetTop*2 < window.pageYOffset){
				document.getElementById("test3").style.visibility = "visible";
		
				document.getElementById("test3").className = "imgphone3";
				document.getElementById("test4").style.visibility = "visible";
		
				document.getElementById("test4").className = "imgphone4";

			}
		}

	
	</script>
			
			
			<div class="mkdf-title-image">
			<img itemprop="image" src="includes/uploads/services-2.png" alt="o">
			</div>
			<div class="mkdf-title-wrapper" style="height: 307px">
			<div class="mkdf-title-inner">
			<div class="mkdf-grid">
			<h1 class="mkdf-page-title entry-title" style="color: #ffffff"></h1>
			</div>
			</div>
			</div>
			</div>
			<br><br><br>
			
				<div class="mkdf-row-grid-section-wrapper "><div class="mkdf-row-grid-section"><div class="vc_row wpb_row vc_row-fluid vc_custom_1539179007752"><div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-offset-0 vc_col-lg-4 vc_col-md-offset-0 vc_col-md-12 vc_col-sm-offset-0"><div class="vc_column-inner"><div class="wpb_wrapper"><div class="mkdf-elements-holder   mkdf-one-column  mkdf-responsive-mode-768 "><div class="mkdf-eh-item    " data-item-class="mkdf-eh-custom-5701" data-769-1024="5px 17px 50px 0" data-681-768="5px 17px 50px 0" data-680="5px 17px 40px 0">
		<div class="mkdf-eh-item-inner">
		<div class="mkdf-eh-item-content mkdf-eh-custom-5701" style="padding: 5px 17px 0 0">
		<div class="wpb_text_column wpb_content_element ">
		<div class="wpb_wrapper">

		</div>
		</div>
		<div class="vc_empty_space" style="height: 55px"><span class="vc_empty_space_inner"></span></div>
		<div class="mkdf-single-image-holder    ">
		<div class="mkdf-si-inner">
			<h3 align="center" style="margin-right: 14%;">Printings.</h3>
		<img width="329" height="356" src="includes/uploads/printing-icon.png" class="attachment-full size-full" alt="o" sizes="(max-width: 329px) 100vw, 329px"> </div>
		</div> </div>
		</div>
		</div></div></div></div></div><div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-offset-0 vc_col-lg-8 vc_col-md-offset-0 vc_col-md-12 vc_col-sm-offset-0"><div class="vc_column-inner"><div class="wpb_wrapper"><div class="mkdf-section-title-holder  mkdf-st-standard mkdf-st-title-left mkdf-st-normal-space ">
		<div class="mkdf-st-inner">
		<p class="mkdf-st-text" style="color: #868890;font-size: 18px;line-height: 34px;font-weight: 500">
	we provide many printing services, and we can help you choose the type of printing that suits your needs in terms of price and quality. Some of our services here	</p>
		</div>
		</div><div class="vc_empty_space" style="height: 55px"><span class="vc_empty_space_inner"></span></div>
		<div class="mkdf-accordion-holder mkdf-ac-default  mkdf-accordion mkdf-ac-boxed  clearfix ui-accordion ui-widget ui-helper-reset" role="tablist">
		<h5 class="mkdf-accordion-title ui-accordion-header ui-state-default ui-corner-all" role="tab" id="ui-id-1" aria-controls="ui-id-2" aria-selected="false" aria-expanded="false" tabindex="0">
		<span class="mkdf-accordion-mark">
		<span class="mkdf_icon_minus icon-basic-eye"></span>
		<span class="mkdf-eye-line"></span>
		</span>
		<span class="mkdf-tab-title">Offset Printing</span>
		</h5>
		<div class="mkdf-accordion-content ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom" id="ui-id-2" aria-labelledby="ui-id-1" role="tabpanel" aria-hidden="true" style="display: none;">
		<div class="mkdf-accordion-content-inner">
		<div class="wpb_text_column wpb_content_element ">
		<div class="wpb_wrapper">
		<p>Known for its high accuracy and is used to print large quantities and sizes of paper prints.</p>
		</div>
		</div>
		</div>
		</div><h5 class="mkdf-accordion-title ui-accordion-header ui-state-default ui-corner-all" role="tab" id="ui-id-3" aria-controls="ui-id-4" aria-selected="false" aria-expanded="false" tabindex="-1">
		<span class="mkdf-accordion-mark">
		<span class="mkdf_icon_minus icon-basic-eye"></span>
		<span class="mkdf-eye-line"></span>
		</span>
		<span class="mkdf-tab-title">Digital Printing</span>
		</h5>
		<div class="mkdf-accordion-content ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom" id="ui-id-4" aria-labelledby="ui-id-3" role="tabpanel" aria-hidden="true" style="display: none;">
		<div class="mkdf-accordion-content-inner">
		<div class="wpb_text_column wpb_content_element ">
		<div class="wpb_wrapper">
		<p>Fast enough to be printed directly on paper by the printer. There is no need for the film or rubber blanket, while it results to lower the cost of printing small quantities..</p>
		</div>
		</div>
		</div>
		</div><h5 class="mkdf-accordion-title ui-accordion-header ui-state-default ui-corner-all" role="tab" id="ui-id-5" aria-controls="ui-id-6" aria-selected="false" aria-expanded="false" tabindex="-1">
		<span class="mkdf-accordion-mark">
		<span class="mkdf_icon_minus icon-basic-eye"></span>
		<span class="mkdf-eye-line"></span>
		</span>
		<span class="mkdf-tab-title">Silk-screen Printing.</span>
		</h5>
		<div class="mkdf-accordion-content ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom" id="ui-id-6" aria-labelledby="ui-id-5" role="tabpanel" aria-hidden="true" style="display: none;">
		<div class="mkdf-accordion-content-inner">
		<div class="wpb_text_column wpb_content_element ">
		<div class="wpb_wrapper">
		<p>The printing process is carried out by the so-called heat press, with the ability to print on various materials and surfaces as cups, pens, fabrics, medals, shields, and watches.</p>
		</div>
		</div>
		</div>

	</div><h5 class="mkdf-accordion-title ui-accordion-header ui-state-default ui-corner-all" role="tab" id="ui-id-5" aria-controls="ui-id-6" aria-selected="false" aria-expanded="false" tabindex="-1">
		<span class="mkdf-accordion-mark">
		<span class="mkdf_icon_minus icon-basic-eye"></span>
		<span class="mkdf-eye-line"></span>
		</span>
		<span class="mkdf-tab-title">Engraving & Embossing</span>
		</h5>
		<div class="mkdf-accordion-content ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom" id="ui-id-6" aria-labelledby="ui-id-5" role="tabpanel" aria-hidden="true" style="display: none;">
		<div class="mkdf-accordion-content-inner">
		<div class="wpb_text_column wpb_content_element ">
		<div class="wpb_wrapper">
		<p>Engraving or Imbossing area is a way to create high or low areas on paper before printing which makes more aesthetically when printed on offset or digital printingl.</p>
		</div>
		</div>
		</div>
		
		
		</div></div></div>
		
		<br><br>
		 <button onclick="document.getElementById('id02').style.display='block'" align="left" class="wpcf7-form-control wpcf7-submit mkdf-btn mkdf-btn-medium mkdf-btn-solid">Intersted ?? Click Me!</button>


  <div id="id02" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

      <div class="w3-center"><br>
       <h2> Let's Us Know How We Can Help U ! </h2>
      </div>

      <form class="w3-container" method="POST">
        <div class="w3-section">
          <label><b>Full Name</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Username" name="usrname" id="username" required>
		      <label><b>Email Address</b></label>
          <input class="w3-input w3-border" type="text" placeholder="Enter Email Address" name="email" id="email" required>
          <label><b>Phone Number</b></label>
          <input class="w3-input w3-border" type="text" placeholder="Enter Phone Number" name="phone" id="phone" required>
		     <label><b>Company Name</b></label>
          <input class="w3-input w3-border" type="text" placeholder="Enter Company name" name="company" id="company" >
		    <label><b>Your Message</b></label>
          <textarea class="w3-input w3-border" type="text" placeholder="Enter Your Message" name="msg" id="msg" ></textarea>
          <input class="w3-button w3-block w3-green w3-section w3-padding" style="background-color: #583e97!important;" type="submit" id="printing" name="printing">
       
        </div>
      </form>

      <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
        <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-button w3-red">Cancel</button>
      
      </div>

    </div>
  </div>
		
		
		
		
		</div></div></div></div></div> <br> <br>
			
		
		<div class="mkdf-title-holder mkdf-centered-type mkdf-title-va-header-bottom mkdf-has-bg-image mkdf-bg-parallax" style="height: 307px; background-image: url(&quot;includes/uploads/services-3.png&quot;); background-position: center -5.1576px; position: inherit;" data-height="307">
			<style>
	
@media screen and (max-width: 1400px) {
  .imgphone5 {
    visibility: hidden;
    display: none;
  }
}	

.imgphone5 {
	visibility: hidden; 
  animation: myfirst2 5s;
  animation-direction: left;
}
@keyframes myfirst2 {
  0%   { right: -2222px}
  50% {right : 0px}
  100% {right : 0px}
}
				</style>
			<img  class=""  style="visibility: hidden;
			width: 197px;
			height: 291px;
			position: absolute;
			top: 5%;
			z-index: 1;right:0px" align="right" id="test5" name="test5" src="includes/uploads/vector5.png">

	<script>
	setInterval(function() {
		Check3();
}, 300);
		function Check3() {
		
			if(document.getElementById("test5").offsetTop*120 < window.pageYOffset){
				document.getElementById("test5").style.visibility = "visible";
				document.getElementById("test5").className = "imgphone5";
			

			}
		}

	
	</script>
			
			
			<div class="mkdf-title-image">
			<img itemprop="image" src="includes/uploads/services-3.png" alt="o">
			</div>
			<div class="mkdf-title-wrapper" style="height: 307px">
			<div class="mkdf-title-inner">
			<div class="mkdf-grid">
			<h1 class="mkdf-page-title entry-title" style="color: #ffffff"></h1>
			</div>
			</div>
			</div>
			</div>
			<br><br><br>
			
					<div class="mkdf-row-grid-section-wrapper "><div class="mkdf-row-grid-section"><div class="vc_row wpb_row vc_row-fluid vc_custom_1539179007752"><div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-offset-0 vc_col-lg-4 vc_col-md-offset-0 vc_col-md-12 vc_col-sm-offset-0"><div class="vc_column-inner"><div class="wpb_wrapper"><div class="mkdf-elements-holder   mkdf-one-column  mkdf-responsive-mode-768 "><div class="mkdf-eh-item    " data-item-class="mkdf-eh-custom-5701" data-769-1024="5px 17px 50px 0" data-681-768="5px 17px 50px 0" data-680="5px 17px 40px 0">
		<div class="mkdf-eh-item-inner">
		<div class="mkdf-eh-item-content mkdf-eh-custom-5701" style="padding: 5px 17px 0 0">
		<div class="wpb_text_column wpb_content_element ">
		<div class="wpb_wrapper">

		</div>
		</div>
		<div class="vc_empty_space" style="height: 55px"><span class="vc_empty_space_inner"></span></div>
		<div class="mkdf-single-image-holder    ">
		<div class="mkdf-si-inner">
			<h3 align="center" style="margin-right: 14%;">Marketing.</h3>
		<img width="329" height="356" src="includes/uploads/marketing.png" class="attachment-full size-full" alt="o" sizes="(max-width: 329px) 100vw, 329px"> </div>
		</div> </div>
		</div>
		</div></div></div></div></div><div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-offset-0 vc_col-lg-8 vc_col-md-offset-0 vc_col-md-12 vc_col-sm-offset-0"><div class="vc_column-inner"><div class="wpb_wrapper"><div class="mkdf-section-title-holder  mkdf-st-standard mkdf-st-title-left mkdf-st-normal-space ">
	
		</div><div class="vc_empty_space" style="height: 55px"><span class="vc_empty_space_inner"></span></div>
		<div class="mkdf-accordion-holder mkdf-ac-default  mkdf-accordion mkdf-ac-boxed  clearfix ui-accordion ui-widget ui-helper-reset" role="tablist">
		<h5 class="mkdf-accordion-title ui-accordion-header ui-state-default ui-corner-all" role="tab" id="ui-id-1" aria-controls="ui-id-2" aria-selected="false" aria-expanded="false" tabindex="0">
		<span class="mkdf-accordion-mark">
		<span class="mkdf_icon_minus icon-basic-eye"></span>
		<span class="mkdf-eye-line"></span>
		</span>
		<span class="mkdf-tab-title">Marketing campaigns</span>
		</h5>
		<div class="mkdf-accordion-content ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom" id="ui-id-2" aria-labelledby="ui-id-1" role="tabpanel" aria-hidden="true" style="display: none;">
		<div class="mkdf-accordion-content-inner">
		<div class="wpb_text_column wpb_content_element ">
		<div class="wpb_wrapper">
		<p>The communication between companies and consumer markets is essential to enhance your business status and gain new customers. It is the core of our work to develop and expand our business so that you can benefit from it to the fullest.</p>
		</div>
		</div>
		</div>
		</div><h5 class="mkdf-accordion-title ui-accordion-header ui-state-default ui-corner-all" role="tab" id="ui-id-3" aria-controls="ui-id-4" aria-selected="false" aria-expanded="false" tabindex="-1">
		<span class="mkdf-accordion-mark">
		<span class="mkdf_icon_minus icon-basic-eye"></span>
		<span class="mkdf-eye-line"></span>
		</span>
		<span class="mkdf-tab-title">Social Media and
 Website Management</span>
		</h5>
		<div class="mkdf-accordion-content ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom" id="ui-id-4" aria-labelledby="ui-id-3" role="tabpanel" aria-hidden="true" style="display: none;">
		<div class="mkdf-accordion-content-inner">
		<div class="wpb_text_column wpb_content_element ">
		<div class="wpb_wrapper">
		<p>We create and manage pages, provide content, design, and flyers, as well as promote content, to increase customers and fans, and to monitor comments and posts in line with the activity of private or commercial pages..</p>
		</div>
		</div>
		</div>
		</div><h5 class="mkdf-accordion-title ui-accordion-header ui-state-default ui-corner-all" role="tab" id="ui-id-5" aria-controls="ui-id-6" aria-selected="false" aria-expanded="false" tabindex="-1">
		<span class="mkdf-accordion-mark">
		<span class="mkdf_icon_minus icon-basic-eye"></span>
		<span class="mkdf-eye-line"></span>
		</span>
		<span class="mkdf-tab-title">Organize Conferences.</span>
		</h5>
		<div class="mkdf-accordion-content ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom" id="ui-id-6" aria-labelledby="ui-id-5" role="tabpanel" aria-hidden="true" style="display: none;">
		<div class="mkdf-accordion-content-inner">
		<div class="wpb_text_column wpb_content_element ">
		<div class="wpb_wrapper">
		<p>.</p>
		</div>
		</div>
		</div>


		
		
		</div></div></div>
			<br><br>
		 <button onclick="document.getElementById('id03').style.display='block'" align="left" class="wpcf7-form-control wpcf7-submit mkdf-btn mkdf-btn-medium mkdf-btn-solid">Intersted ?? Click Me!</button>


  <div id="id03" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

      <div class="w3-center"><br>
       <h2> Let's Us Know How We Can Help U ! </h2>
      </div>

      <form class="w3-container" method="POST">
        <div class="w3-section">
          <label><b>Full Name</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Username" name="usrname" id="username" required>
		      <label><b>Email Address</b></label>
          <input class="w3-input w3-border" type="text" placeholder="Enter Email Address" name="email" id="email" required>
          <label><b>Phone Number</b></label>
          <input class="w3-input w3-border" type="text" placeholder="Enter Phone Number" name="phone" id="phone" required>
		     <label><b>Company Name</b></label>
          <input class="w3-input w3-border" type="text" placeholder="Enter Company name" name="company" id="company" >
		    <label><b>Your Message</b></label>
          <textarea class="w3-input w3-border" type="text" placeholder="Enter Your Message" name="msg" id="msg" ></textarea>
          <input class="w3-button w3-block w3-green w3-section w3-padding" style="background-color: #583e97!important;" type="submit" id="marketing" name="marketing">
       
        </div>
      </form>

      <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
        <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-button w3-red">Cancel</button>
      
      </div>

    </div>
  </div>
		
		
		</div></div></div></div></div> <br> <br>
		
			<div class="mkdf-title-holder mkdf-centered-type mkdf-title-va-header-bottom mkdf-has-bg-image mkdf-bg-parallax" style="height: 307px; background-image: url(&quot;includes/uploads/services-4.png&quot;); background-position: center -470.258px; position: inherit;" data-height="307">
				<style>
				@media screen and (max-width: 1400px) {
					.imgphone6 {
					  visibility: hidden;
					  display: none;
					}
				  }	
				  @media screen and (max-width: 1400px) {
					.imgphone7 {
					  visibility: hidden;
					  display: none;
					}
				  }	
				  .imgphone6 {
					  visibility: hidden; 
					animation: myfirst3 3s;
					animation-direction: right;
				  }
				  .imgphone7 {
					  visibility: hidden; 
					animation: myfirst3 5s;
					animation-direction: right;
				  }
				  @keyframes myfirst3 {
					0%   { right: -2222px}
					50% {right : 0px}
					100% {right : 0px}
				  }
								  </style>
							  <img  class=""  style="visibility: hidden;
							  width: 197px;
							  height: 291px;
							  position: absolute;
							  top: 102%;
							  z-index: 1;right:0px" align="right" id="test6" name="test6" src="includes/uploads/vector 6.png">
						  <img  class=""  style="     visibility: hidden;
						  width: 208px;
						  height: 268px;
						  position: absolute;
						  top: 102%;
						  z-index: 2; right:0px" align="right"  id="test7" name="test7"  src="includes/uploads/vector7.png">
					  <script>
					  setInterval(function() {
						  Check4();
				  }, 300);
						  function Check4() {
							console.log("ELement" + document.getElementById("test6").offsetTop );
						console.log("Page" + window.pageYOffset)
							  if(document.getElementById("test6").offsetTop*10 < window.pageYOffset){
								  document.getElementById("test6").style.visibility = "visible";
						  
								  document.getElementById("test6").className = "imgphone6";
								  document.getElementById("test7").style.visibility = "visible";
						  
								  document.getElementById("test7").className = "imgphone7";
				  
							  }
						  }
				  
					  
					  </script>
			
				<div class="mkdf-title-image">
			<img itemprop="image" src="includes/uploads/services-4.png" alt="o">
			</div>
			<div class="mkdf-title-wrapper" style="height: 307px">
			<div class="mkdf-title-inner">
			<div class="mkdf-grid">
			<h1 class="mkdf-page-title entry-title" style="color: black"></h1>
			</div>
			</div>
			</div>
			</div>
			<br><br><br>
						<div class="mkdf-row-grid-section-wrapper "><div class="mkdf-row-grid-section"><div class="vc_row wpb_row vc_row-fluid vc_custom_1539179007752"><div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-offset-0 vc_col-lg-4 vc_col-md-offset-0 vc_col-md-12 vc_col-sm-offset-0"><div class="vc_column-inner"><div class="wpb_wrapper"><div class="mkdf-elements-holder   mkdf-one-column  mkdf-responsive-mode-768 "><div class="mkdf-eh-item    " data-item-class="mkdf-eh-custom-5701" data-769-1024="5px 17px 50px 0" data-681-768="5px 17px 50px 0" data-680="5px 17px 40px 0">
		<div class="mkdf-eh-item-inner">
		<div class="mkdf-eh-item-content mkdf-eh-custom-5701" style="padding: 5px 17px 0 0">
		<div class="wpb_text_column wpb_content_element ">
		<div class="wpb_wrapper">

		</div>
		</div>
		<div class="vc_empty_space" style="height: 55px"><span class="vc_empty_space_inner"></span></div>
		<div class="mkdf-single-image-holder    ">
		<div class="mkdf-si-inner">
			<h3 align="center" style="margin-right: 14%;">WEB SERVICES.</h3>
		<img width="329" height="356" src="includes/uploads/web.png" class="attachment-full size-full" alt="o" sizes="(max-width: 329px) 100vw, 329px"> </div>
		</div> </div>
		</div>
		</div></div></div></div></div><div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-offset-0 vc_col-lg-8 vc_col-md-offset-0 vc_col-md-12 vc_col-sm-offset-0"><div class="vc_column-inner"><div class="wpb_wrapper"><div class="mkdf-section-title-holder  mkdf-st-standard mkdf-st-title-left mkdf-st-normal-space ">
		<div class="mkdf-st-inner">
		<p class="mkdf-st-text" style="color: #868890;font-size: 18px;line-height: 34px;font-weight: 500">
		Domain Name Registration<br>
Web Hosting & cloud services<br>
Web Security<br>
SSL Certifcates<br>
Website and Database Backup<br>
Email Services<br>
		</div>
		</div><div class="vc_empty_space" style="height: 55px"><span class="vc_empty_space_inner"></span></div>
		<div class="mkdf-accordion-holder mkdf-ac-default  mkdf-accordion mkdf-ac-boxed  clearfix ui-accordion ui-widget ui-helper-reset" role="tablist">
		<h5 class="mkdf-accordion-title ui-accordion-header ui-state-default ui-corner-all" role="tab" id="ui-id-1" aria-controls="ui-id-2" aria-selected="false" aria-expanded="false" tabindex="0">
		<span class="mkdf-accordion-mark">
		<span class="mkdf_icon_minus icon-basic-eye"></span>
		<span class="mkdf-eye-line"></span>
		</span>
		<span class="mkdf-tab-title">Website Builder</span>
		</h5>
		<div class="mkdf-accordion-content ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom" id="ui-id-2" aria-labelledby="ui-id-1" role="tabpanel" aria-hidden="true" style="display: none;">
		<div class="mkdf-accordion-content-inner">
		<div class="wpb_text_column wpb_content_element ">
		<div class="wpb_wrapper">
		<p>A simple, easy-to-use online tool that helps you build full-edged websites within minutes.</p>
		</div>
		</div>
		</div>
		</div><h5 class="mkdf-accordion-title ui-accordion-header ui-state-default ui-corner-all" role="tab" id="ui-id-3" aria-controls="ui-id-4" aria-selected="false" aria-expanded="false" tabindex="-1">
		<span class="mkdf-accordion-mark">
		<span class="mkdf_icon_minus icon-basic-eye"></span>
		<span class="mkdf-eye-line"></span>
		</span>
		<span class="mkdf-tab-title">Reseller Program</span>
		</h5>
		<div class="mkdf-accordion-content ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom" id="ui-id-4" aria-labelledby="ui-id-3" role="tabpanel" aria-hidden="true" style="display: none;">
		<div class="mkdf-accordion-content-inner">
		<div class="wpb_text_column wpb_content_element ">
		<div class="wpb_wrapper">
		<p>End-to-end marketplace
Specialized Local Programs
$100 Worth of Freebies
White Labeled Domain Registration
Fully Integrated into Your Control Panel
Slab Based Pricing to Boost Your Profits..</p>
		</div>
		</div>
		</div>
	


		
		
		</div></div></div>
			<br><br>
			 <button onclick="document.getElementById('id04').style.display='block'" align="left" class="wpcf7-form-control wpcf7-submit mkdf-btn mkdf-btn-medium mkdf-btn-solid">Intersted ?? Click Me!</button>


  <div id="id04" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

      <div class="w3-center"><br>
       <h2> Let's Us Know How We Can Help U ! </h2>
      </div>

      <form class="w3-container" method="POST">
        <div class="w3-section">
          <label><b>Full Name</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Username" name="usrname" id="username" required>
		      <label><b>Email Address</b></label>
          <input class="w3-input w3-border" type="text" placeholder="Enter Email Address" name="email" id="email" required>
          <label><b>Phone Number</b></label>
          <input class="w3-input w3-border" type="text" placeholder="Enter Phone Number" name="phone" id="phone" required>
		     <label><b>Company Name</b></label>
          <input class="w3-input w3-border" type="text" placeholder="Enter Company name" name="company" id="company" >
		    <label><b>Your Message</b></label>
          <textarea class="w3-input w3-border" type="text" placeholder="Enter Your Message" name="msg" id="msg" ></textarea>
          <input class="w3-button w3-block w3-green w3-section w3-padding" style="background-color: #583e97!important;" type="submit" id="web" name="web">
       
        </div>
      </form>

      <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
        <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-button w3-red">Cancel</button>
      
      </div>

    </div>
  </div>
		
		
		</div></div></div></div></div> <br> <br>
			<div class="mkdf-title-holder mkdf-centered-type mkdf-title-va-header-bottom mkdf-has-bg-image mkdf-bg-parallax" style="height: 307px; background-image: url(&quot;includes/uploads/services-5.png&quot;); background-position: center 0px ; position: inherit;" data-height="307">
			<div class="mkdf-title-image">
			<img itemprop="image" src="includes/uploads/services-5.png" alt="o">
			</div>
			<div class="mkdf-title-wrapper" style="height: 307px">
			<div class="mkdf-title-inner">
			<div class="mkdf-grid">
			<h1 class="mkdf-page-title entry-title" style="color: #ffffff"></h1>
			</div>
			</div>
			</div>
			</div>
			<br><br><br>
			
		

</div>
</div>
</div>
</div>
</div>
</div> 
</div> 
<footer class="mkdf-page-footer ">
<div class="mkdf-footer-top-holder">
<div class="mkdf-footer-top-inner mkdf-grid">
<div class="mkdf-grid-row mkdf-footer-top-alignment-left ">
<div class="mkdf-column-content mkdf-grid-col-3">
<div id="media_image-14" class="widget mkdf-footer-column-1 widget_media_image"><a href="../../index.php"><img width="207" height="43" src="includes/uploads/logo.png" class="image wp-image-4342  attachment-full size-full" alt="o" style="max-width: 100%; height: auto;" /></a></div><div id="text-2" class="widget mkdf-footer-column-1 widget_text"> <div class="textwidget"><p>Get your business to the<br />
Mobation, where the new generation begins, is founded in 2006 with the mission to provide creative Media, IT Services and Solutions, fulfilling the requirements of Small and Medium companies to big Enterprises
</div>
</div> </div>

<br><br><br>
<div class="mkdf-column-content mkdf-grid-col-3">
<div id="nav_menu-4" class="widget mkdf-footer-column-4 widget_nav_menu"><div class="mkdf-widget-title-holder"><h5 class="mkdf-widget-title">Contact Us</h5></div><div class="menu-footer-menu-3-container"> 
Email address : info@mobation.com <br>
Phone Number : +961 81 978036 <br>
Location :
Jnah, Beirut, Lebanon
</div></div> </div>
<section id="lab_social_icon_footer">
<!-- Include Font Awesome Stylesheet in Header -->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<h5 class="mkdf-widget-title" style="color:white">Social Links</h5>
<div class="container">
        <div class="text-center center-block">
                <a href="https://www.facebook.com/mobation/?_ga=2.153364411.262719949.1579375902-933601353.1576259619"><i id="social-fb" class="fa fa-facebook-square fa-3x social"></i></a>
	            <a href="https://twitter.com/mobation?_ga=2.153364411.262719949.1579375902-933601353.1576259619"><i id="social-tw" class="fa fa-twitter-square fa-3x social"></i></a>
	            <a href="https://www.instagram.com/mobation/?_ga=2.22724664.262719949.1579375902-933601353.1576259619"><i id="social-gp" class="fa fa-instagram fa-3x social"></i></a>
	            <a href="mailto:info@mobation.com"><i id="social-em" class="fa fa-envelope-square fa-3x social"></i></a>
    </div>
</div>
</section>
<style>
#lab_social_icon_footer {
  padding: 40px 0;
  background-color: #583e97;
}

#lab_social_icon_footer a {
  color: #ffffff;
}

#lab_social_icon_footer .social:hover {
  -webkit-transform: scale(1.1);
  -moz-transform: scale(1.1);
  -o-transform: scale(1.1);
}

#lab_social_icon_footer .social {
  -webkit-transform: scale(0.8);
  /* Browser Variations: */
  
  -moz-transform: scale(0.8);
  -o-transform: scale(0.8);
  -webkit-transition-duration: 0.5s;
  -moz-transition-duration: 0.5s;
  -o-transition-duration: 0.5s;
}
/*
    Multicoloured Hover Variations
*/

#lab_social_icon_footer #social-fb:hover {
  color: #3B5998;
}

#lab_social_icon_footer #social-tw:hover {
  color: #4099FF;
}

#lab_social_icon_footer #social-gp:hover {
  color: #d34836;
}

#lab_social_icon_footer #social-em:hover {
  color: #f39c12;
}
</style>
</div>
</div>
</div><div class="mkdf-footer-bottom-holder ">
<div class="mkdf-footer-bottom-inner mkdf-grid">
<div class="mkdf-grid-row ">
<div class="mkdf-grid-col-12">
<div id="text-3" class="widget mkdf-footer-bottom-column-1 widget_text"> <div class="textwidget"><p>© Copyright <a  target="_blank" rel="nofollow noopener noreferrer">@2019 Mobation</a></p>
</div>
</div> </div>
</div>
</div>
</div> </footer>
</div> 
</div> 
<script src="includes/cache/minify/4b6b3.js"></script>
<script src="includes/cache/minify/0fef6.js"></script>
<script type='text/javascript' src='../../toolbar.qodeinteractive.com/_toolbar/assets/js/jquery.lazy.minbb49.js?ver=5.2.2'></script>
<script type='text/javascript' src='../../toolbar.qodeinteractive.com/_toolbar/assets/js/rbt-modulesbb49.js?ver=5.2.2'></script>
<script src="includes/cache/minify/63c68.js"></script>
<script src="includes/cache/minify/63a69.js"></script>
<script src="includes/cache/minify/76e91.js"></script>
<script type='text/javascript' src='http://maps.googleapis.com/maps/api/js?key=AIzaSyAGCqMCkrDzDRCmS17aj8wPF_HUQDiXrZs&amp;ver=5.2.2'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var mkdfGlobalVars = {"vars":{"mkdfAddForAdminBar":0,"mkdfElementAppearAmount":-100,"mkdfAjaxUrl":"https:\/\/boostup.mikado-themes.com\/wp-admin\/admin-ajax.php","sliderNavPrevArrow":"arrow_carrot-left","sliderNavNextArrow":"arrow_carrot-right","mkdfStickyHeaderHeight":70,"mkdfStickyHeaderTransparencyHeight":70,"mkdfTopBarHeight":46,"mkdfLogoAreaHeight":0,"mkdfMenuAreaHeight":152,"mkdfMobileHeaderHeight":70}};
var mkdfPerPageVars = {"vars":{"mkdfMobileHeaderHeight":70,"mkdfStickyScrollAmount":0,"mkdfHeaderTransparencyHeight":0,"mkdfHeaderVerticalWidth":0}};
/* ]]> */
</script>
<script src="includes/cache/minify/e1c2a.js"></script>
</body>
</html>
