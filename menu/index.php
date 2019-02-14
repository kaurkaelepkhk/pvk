<?php
require_once 'conf.php';
//loome vajalikud vaate objektid
$mainTmpl = new Template('main');
$contentTmpl = new Template('content');

$mainTmpl->set('title', 'Menu Application');
$mainTmpl->set('content', $contentTmpl->parse());

echo $mainTmpl->parse();

