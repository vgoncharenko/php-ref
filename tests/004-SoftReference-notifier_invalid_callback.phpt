--TEST--
Ref\SoftReference - invalid notifier callback passed
--SKIPIF--
<?php if (!extension_loaded("ref")) print "skip"; ?>
--FILE--
<?php

/** @var \Testsuite $helper */
$helper = require '.testsuite.php';

$obj = new stdClass();

try {
  $sr = new Ref\SoftReference($obj, 'nonexistent');
} catch (TypeError $e) {
  $helper->exception_export($e);
}

$helper->line();
?>
EOF
--EXPECT--
TypeError: Argument 2 passed to Ref\AbstractReference::__construct() must be callable or null, string given

EOF
