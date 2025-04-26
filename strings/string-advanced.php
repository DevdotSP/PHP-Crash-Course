<?php

$mb_string = "我的氣墊船充滿了鱔魚";
var_dump(mb_strlen($mb_string));

$url = "https://example.com/path?key=value&special=#@!$";
var_dump(urlencode($url));
var_dump(urldecode($url));

$html = '<p>This is "quoted" text & a <a href="#">link</a>.</p>';
var_dump(htmlentities($html));

$encoded = base64_encode("Helllo World!");
var_dump($encoded);

var_dump(base64_decode($encoded));
