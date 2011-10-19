<?php
require('phpQuery/phpQuery.php');

$doc = phpQuery::newDocumentFileHTML('test.html');
$doc['.main'] = 'some content will come here';
print $doc->htmlOuter();
