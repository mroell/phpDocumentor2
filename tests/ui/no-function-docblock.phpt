--TEST--
phpdoc project:run -f tests/data/NoFunctionDocBlock.php -t build
--FILE--
<?php
require_once 'tests/common/ui-include.php';
?>
--ARGS--
project:run -f tests/data/NoFunctionDocBlock.php -t build --config=none
--EXPECTF--
phpDocumentor version %s

%s ERR (3): No DocBlock was found for function %s
%s ERR (3): No page-level DocBlock was found in file %s
Starting transformation of files (this could take a while depending upon the size of your project)
Finished transformation in %s seconds
