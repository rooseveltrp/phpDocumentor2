--TEST--
phpdoc project:parse -f tests/data/file-level/NoPackagePrecedesClass.php -t build
--FILE--
<?php
require_once 'tests/common/ui-include.php';
?>
--ARGS--
project:parse -f tests/data/file-level/NoPackagePrecedesClass.php -t build --config=none
--EXPECTF--
Initializing parser and collecting files .. OK
Parsing files
  No page-level DocBlock was found in file NoPackagePrecedesClass.php
Storing structure.xml in "%sbuild/structure.xml" .. OK
