<?php

########################################################################
# Extension Manager/Repository config file for ext "simply_facebooklike".
#
# Auto generated 29-05-2012 16:37
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Facebook Like',
	'description' => 'Add a facebook like button to your site',
	'category' => 'plugin',
	'author' => 'Henjo Hoeksma',
	'author_email' => 'hphoeksma@stylence.nl',
	'author_company' => 'Stylence',
	'shy' => '',
	'priority' => '',
	'module' => '',
	'state' => 'stable',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'version' => '1.0.0',
	'constraints' => array(
		'depends' => array(
			'typo3' => '4.5-0.0.0',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:74:{s:12:"ext_icon.gif";s:4:"faed";s:17:"ext_localconf.php";s:4:"0643";s:14:"ext_tables.php";s:4:"d6a9";s:38:"Configuration/TypoScript/constants.txt";s:4:"32a3";s:34:"Configuration/TypoScript/setup.txt";s:4:"c035";s:12:"doc/Makefile";s:4:"dde0";s:11:"doc/conf.py";s:4:"8f0d";s:13:"doc/index.rst";s:4:"2a6d";s:20:"doc/installation.rst";s:4:"e1c0";s:14:"doc/manual.sxw";s:4:"8d2d";s:38:"doc/_build/doctrees/environment.pickle";s:4:"1083";s:33:"doc/_build/doctrees/index.doctree";s:4:"c4d8";s:40:"doc/_build/doctrees/installation.doctree";s:4:"214e";s:29:"doc/_build/html/genindex.html";s:4:"4841";s:26:"doc/_build/html/index.html";s:4:"178c";s:33:"doc/_build/html/installation.html";s:4:"c8de";s:27:"doc/_build/html/objects.inv";s:4:"0c59";s:27:"doc/_build/html/search.html";s:4:"8397";s:30:"doc/_build/html/searchindex.js";s:4:"bf33";s:34:"doc/_build/html/_sources/index.txt";s:4:"2a6d";s:41:"doc/_build/html/_sources/installation.txt";s:4:"e1c0";s:34:"doc/_build/html/_static/README.txt";s:4:"f3be";s:39:"doc/_build/html/_static/ajax-loader.gif";s:4:"ae66";s:33:"doc/_build/html/_static/basic.css";s:4:"e750";s:42:"doc/_build/html/_static/comment-bright.png";s:4:"0c85";s:41:"doc/_build/html/_static/comment-close.png";s:4:"2635";s:35:"doc/_build/html/_static/comment.png";s:4:"882e";s:36:"doc/_build/html/_static/contents.png";s:4:"a547";s:35:"doc/_build/html/_static/default.css";s:4:"9085";s:35:"doc/_build/html/_static/doctools.js";s:4:"5ff5";s:40:"doc/_build/html/_static/down-pressed.png";s:4:"ebe8";s:32:"doc/_build/html/_static/down.png";s:4:"f6f3";s:32:"doc/_build/html/_static/file.png";s:4:"6587";s:33:"doc/_build/html/_static/jquery.js";s:4:"ddb8";s:33:"doc/_build/html/_static/minus.png";s:4:"8d57";s:32:"doc/_build/html/_static/plus.png";s:4:"0125";s:36:"doc/_build/html/_static/pygments.css";s:4:"4276";s:37:"doc/_build/html/_static/s-buttons.png";s:4:"e2ee";s:38:"doc/_build/html/_static/searchtools.js";s:4:"d550";s:41:"doc/_build/html/_static/shadow-footer.jpg";s:4:"1fa6";s:47:"doc/_build/html/_static/shadow-page-505x505.png";s:4:"c7bd";s:34:"doc/_build/html/_static/sidebar.js";s:4:"521d";s:38:"doc/_build/html/_static/typo3-logo.png";s:4:"718a";s:38:"doc/_build/html/_static/typo3basic.css";s:4:"cb1a";s:39:"doc/_build/html/_static/typo3sphinx.css";s:4:"a0d1";s:37:"doc/_build/html/_static/underscore.js";s:4:"b538";s:38:"doc/_build/html/_static/up-pressed.png";s:4:"8ea9";s:30:"doc/_build/html/_static/up.png";s:4:"ecc3";s:37:"doc/_build/html/_static/websupport.js";s:4:"9e61";s:52:"doc/_build/html/_static/fonts/share-bold-webfont.eot";s:4:"8c37";s:52:"doc/_build/html/_static/fonts/share-bold-webfont.svg";s:4:"d80b";s:52:"doc/_build/html/_static/fonts/share-bold-webfont.ttf";s:4:"2199";s:53:"doc/_build/html/_static/fonts/share-bold-webfont.woff";s:4:"ab6f";s:54:"doc/_build/html/_static/fonts/share-italic-webfont.eot";s:4:"d209";s:54:"doc/_build/html/_static/fonts/share-italic-webfont.svg";s:4:"b6a5";s:54:"doc/_build/html/_static/fonts/share-italic-webfont.ttf";s:4:"298c";s:55:"doc/_build/html/_static/fonts/share-italic-webfont.woff";s:4:"3f06";s:55:"doc/_build/html/_static/fonts/share-regular-webfont.eot";s:4:"a366";s:55:"doc/_build/html/_static/fonts/share-regular-webfont.svg";s:4:"4e5d";s:55:"doc/_build/html/_static/fonts/share-regular-webfont.ttf";s:4:"3a9a";s:56:"doc/_build/html/_static/fonts/share-regular-webfont.woff";s:4:"b60d";s:39:"doc/_build/html/_static/icons/howto.png";s:4:"efbe";s:42:"doc/_build/html/_static/icons/question.png";s:4:"b0c5";s:37:"doc/_build/html/_static/icons/tip.png";s:4:"1534";s:41:"doc/_build/html/_static/icons/warning.png";s:4:"4f88";s:39:"doc/_build/html/_static/icons/world.png";s:4:"009f";s:25:"doc/_build/latex/Makefile";s:4:"682f";s:39:"doc/_build/latex/SimplyFacebookLike.tex";s:4:"114c";s:29:"doc/_build/latex/fncychap.sty";s:4:"568e";s:27:"doc/_build/latex/python.ist";s:4:"c88d";s:27:"doc/_build/latex/sphinx.sty";s:4:"a2cb";s:32:"doc/_build/latex/sphinxhowto.cls";s:4:"98b9";s:33:"doc/_build/latex/sphinxmanual.cls";s:4:"a217";s:29:"doc/_build/latex/tabulary.sty";s:4:"e4c4";}',
);

?>