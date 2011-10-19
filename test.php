<?php
require('phpQuery/phpQuery.php');

$doc = phpQuery::newDocumentFileHTML('test.html');
$doc['.main'] = 'ghanta';
print $doc->htmlOuter();
