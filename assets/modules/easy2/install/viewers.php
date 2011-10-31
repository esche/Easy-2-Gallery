<?php

/**
 * Distributed viewers for Easy 2 Gallery
 * @package Easy 2 Gallery
 * @subpackage install
 */
if (IN_MANAGER_MODE != "true")
    die("<b>INCLUDE_ORDERING_ERROR</b><br /><br />Please use the MODx Content Manager instead of accessing this file directly.");

$updateViewers = array(
	"highslide" => array(
		"alias" => "highslide 4.1.13",
		"description" => "&lt;a href=&quot;http://highslide.com/&quot; target=&quot;_blank&quot;&gt;http://highslide.com/&lt;/a&gt;. Please read its license for commercial projects.",
		"disabled" => "0",
		"headers_css" => "assets/libs/viewers/highslide/highslide.css",
		"autoload_css" => "1",
		"headers_js" => "assets/libs/viewers/highslide/highslide-full.js\r\n| assets/libs/viewers/highslide/e2g.highslide.js",
		"autoload_js" => "1",
		"headers_html" => "&lt;script type=&quot;text/javascript&quot;&gt;\r\n    hs.addSlideshow({\r\n        slideshowGroup: \"[+easy2:show_group+]\",\r\n        interval: 5000,\r\n        repeat: false,\r\n        useControls: true,\r\n        fixedControls: \"fit\",\r\n        overlayOptions: {\r\n            opacity: .6,\r\n            position: \"bottom center\"\r\n        }\r\n    });\r\n&lt;/script&gt;",
		"autoload_html" => "1",
		"glibact" => "class=&quot;highslide&quot; onclick=&quot;return hs.expand(this, {slideshowGroup: \"[+easy2:show_group+]\"})&quot;",
		"clibact" => "onclick=&quot;return hs.htmlExpand(this, { objectType: \"iframe\" } )&quot;",
	),
	"lightbox2" => array(
		"alias" => "lightbox2",
		"description" => "&lt;a href=&quot;http://www.huddletogether.com/projects/lightbox2/&quot; target=&quot;_blank&quot;&gt;http://www.huddletogether.com/projects/lightbox2/&lt;/a&gt;",
		"disabled" => "0",
		"headers_css" => "assets/libs/viewers/lightbox2.05/css/lightbox.css\r\n| assets/libs/viewers/highslide/highslide.css",
		"autoload_css" => "1",
		"headers_js" => "assets/libs/viewers/lightbox2.05/js/prototype.js\r\n| assets/libs/viewers/lightbox2.05/js/scriptaculous.js?load=effects,builder\r\n| assets/libs/viewers/lightbox2.05/js/lightbox.js\r\n| assets/libs/viewers/highslide/highslide-iframe.js",
		"autoload_js" => "1",
		"headers_html" => "",
		"autoload_html" => "0",
		"glibact" => "class=&quot;[+easy2:show_group+]&quot; rel=&quot;lightbox[[+easy2:show_group+]]&quot;",
		"clibact" => "onclick=&quot;return hs.htmlExpand(this, { objectType: \"iframe\"} )&quot;",
	),
	"colorbox" => array(
		"alias" => "colorbox 1.3.8 (jq)",
		"description" => "&lt;a href=&quot;http://colorpowered.com/colorbox/&quot; target=&quot;_blank&quot;&gt;http://colorpowered.com/colorbox/&lt;/a&gt;",
		"disabled" => "0",
		"headers_css" => "assets/libs/viewers/colorbox/colorbox.css",
		"autoload_css" => "1",
		"headers_js" => "assets/libs/jquery/jquery-1.4.2.min.js\r\n| assets/libs/viewers/colorbox/jquery.colorbox-min.js\r\n| assets/libs/viewers/colorbox/e2g.colorbox.js",
		"autoload_js" => "1",
		"headers_html" => "",
		"autoload_html" => "0",
		"glibact" => "class=&quot;cboxElement&quot; rel=&quot;group[[+easy2:show_group+]]&quot;",
		"clibact" => "class=&quot;iframe&quot;",
	),
	"fancybox" => array(
		"alias" => "fancybox 1.3.1 (jq)",
		"description" => "&lt;a href=&quot;http://fancybox.net/&quot; target=&quot;_blank&quot;&gt;http://fancybox.net/&lt;/a&gt;",
		"disabled" => "0",
		"headers_css" => "assets/libs/viewers/fancybox/jquery.fancybox-1.3.4.css",
		"autoload_css" => "1",
		"headers_js" => "http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js\r\n| assets/libs/viewers/fancybox/jquery.fancybox-1.3.4.pack.js\r\n| assets/libs/viewers/fancybox/jquery.easing-1.3.pack.js\r\n| assets/libs/viewers/fancybox/jquery.mousewheel-3.0.4.pack.js\r\n| assets/libs/viewers/fancybox/e2g.fancybox.js",
		"autoload_js" => "1",
		"headers_html" => "&lt;script type=&quot;text/javascript&quot;&gt;\r\n  $(document).ready(function() {\r\n    $(&quot;a.[+easy2:show_group+]&quot;).fancybox({\r\n        \"padding\"         : 10,\r\n        \"margin\"          : 0,\r\n        \"transitionIn\"    : \"elastic\",\r\n        \"transitionOut\"   : \"elastic\",\r\n        \"titlePosition\"   : \"over\",\r\n        \"type\"            : \"image\",\r\n        \"titleFormat\"     : function(title, currentArray, currentIndex, currentOpts) {\r\n            return \"&lt;span id=&quot;fancybox-title-over&quot;&gt;Image \" + (currentIndex + 1) + \" / \" + currentArray.length + (title.length ? \" &amp;nbsp; \" + title : \"\") + \"&lt;/span&gt;\";\r\n        }\r\n    });\r\n  });\r\n&lt;/script&gt;",
		"autoload_html" => "1",
		"glibact" => "class=&quot;[+easy2:show_group+]&quot; rel=&quot;[+easy2:show_group+]&quot;",
		"clibact" => "class=&quot;comment&quot;",
	),
	"lightwindow" => array(
		"alias" => "lightwindow 2.0 (pt)",
		"description" => "&lt;a href=&quot;http://www.p51labs.com/lightwindow/&quot; target=&quot;_blank&quot;&gt;http://www.p51labs.com/lightwindow/&lt;/a&gt;",
		"disabled" => "0",
		"headers_css" => "assets/libs/viewers/lightwindow/css/lightwindow.css",
		"autoload_css" => "1",
		"headers_js" => "assets/libs/viewers/lightwindow/javascript/prototype.js\r\n| assets/libs/viewers/lightwindow/javascript/scriptaculous.js?load=effects\r\n| assets/libs/viewers/lightwindow/javascript/lightwindow.js",
		"autoload_js" => "1",
		"headers_html" => "",
		"autoload_html" => "0",
		"glibact" => "class=&quot;lightwindow&quot; rel=&quot;[[+easy2:show_group+]]&quot; params=&quot;lightwindow_type=image&quot;",
		"clibact" => "class=&quot;lightwindow&quot; params=&quot;lightwindow_type=external,lightwindow_width=400,lightwindow_height=250&quot;",
	),
	"shadowbox" => array(
		"alias" => "shadowbox 3.0.3 (base)",
		"description" => "&lt;a href=&quot;http://www.shadowbox-js.com/&quot; target=&quot;_blank&quot;&gt;http://www.shadowbox-js.com/&lt;/a&gt;",
		"disabled" => "0",
		"headers_css" => "assets/libs/viewers/shadowbox/shadowbox.css",
		"autoload_css" => "1",
		"headers_js" => "assets/libs/viewers/shadowbox/shadowbox.js\r\n| assets/libs/viewers/shadowbox/e2g.shadowbox.js",
		"autoload_js" => "1",
		"headers_html" => "",
		"autoload_html" => "0",
		"glibact" => "rel=&quot;shadowbox[[+easy2:show_group+]];player=img&quot;",
		"clibact" => "rel=&quot;shadowbox;width=400;height=250;player=iframe&quot;",
	),
	"slimbox" => array(
		"alias" => "slimbox 1.8 (mt)",
		"description" => "&lt;a href=&quot;http://www.digitalia.be/software/slimbox&quot; target=&quot;_blank&quot;&gt;http://www.digitalia.be/software/slimbox&lt;/a&gt;",
		"disabled" => "0",
		"headers_css" => "assets/libs/viewers/slimbox-1.8/css/slimbox.css\r\n| assets/libs/viewers/highslide/highslide.css",
		"autoload_css" => "1",
		"headers_js" => "assets/libs/viewers/slimbox-1.8/js/mootools.js\r\n| assets/libs/viewers/slimbox-1.8/js/slimbox.js\r\n| assets/libs/viewers/highslide/highslide-iframe.js",
		"autoload_js" => "1",
		"headers_html" => "",
		"autoload_html" => "0",
		"glibact" => "rel=&quot;lightbox[[+easy2:show_group+]]&quot;",
		"clibact" => "onclick=&quot;return hs.htmlExpand(this, { objectType: \"iframe\"} )&quot;",
	),
	"slimbox2" => array(
		"alias" => "slimbox2 2.04 (jq)",
		"description" => "&lt;a href=&quot;http://www.digitalia.be/software/slimbox2&quot; target=&quot;_blank&quot;&gt;http://www.digitalia.be/software/slimbox2&lt;/a&gt;",
		"disabled" => "0",
		"headers_css" => "assets/libs/viewers/slimbox-2.04/css/slimbox2.css\r\n| assets/libs/viewers/highslide/highslide.css",
		"autoload_css" => "1",
		"headers_js" => "assets/libs/jquery/jquery-1.4.2.min.js\r\n| assets/libs/viewers/slimbox-2.04/js/slimbox2.js\r\n| assets/libs/viewers/highslide/highslide-iframe.js",
		"autoload_js" => "1",
		"headers_html" => "",
		"autoload_html" => "0",
		"glibact" => "rel=&quot;lightbox[[+easy2:show_group+]]&quot;",
		"clibact" => "onclick=&quot;return hs.htmlExpand(this, { objectType: \"iframe\"} )&quot;",
	),
);

return $updateViewers;