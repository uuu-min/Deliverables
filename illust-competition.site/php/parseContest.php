<?php
require_once 'phpQuery-onefile.php';

$url = "https://www.palmie.jp/contest_organizers/3";

$doc = phpQuery::newDocumentFile($url);

$text = pq($doc[".contest-organizer-show-box__top-theme-string"])->find("p")->eq(1);

$reg = preg_match('/締切：(.*)/', $text, $deadline);
$reg = preg_match('/お題：(.*)/', $text, $theme);

echo $deadline[1].'<br>';
echo $theme[1];
