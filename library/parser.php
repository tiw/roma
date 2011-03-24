<?php

$file = file_get_contents('greatExpectation.txt');
//$file = file_get_contents('test.txt');

$sentences = preg_split("/\n\n/", $file);
$i = 0;
$chapter = 0;
$header = '
';

$body = "";
foreach ($sentences as $sentence) {
    $i ++;
    $s = htmlspecialchars($sentence);
    if (preg_match('/Chapter/', $s)) {
        $chapter ++;
        $s = trim($s);
        $body .= "<a name=\"chapter{$chapter}\"><span class=\"chapter_title\">{$s}</span></a>\n";
    } else {
        $body .= "<div class=\"sentence\"><div id=\"{$i}\">{$s}</div><span class=\"edit\" id=\"{$i}\">add notes</span></div>\n";
    }
}
$footer .= "";
$contentTable = "";
foreach (range(1, $chapter) as $c) {
    $contentTable .= "<a href=\"#chapter{$c}\">Chapter {$c}</a><br>";
}

$html = $header  . $footer;
echo $html;