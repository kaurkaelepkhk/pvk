<?php


require_once 'conf.php';

$mainTmpl = new Template('main');

$mainTmpl->set('title', 'Menu Application');
$mainTmpl->set('content', 'Menu App Content');

echo $mainTmpl->parse();

