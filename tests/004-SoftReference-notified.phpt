--TEST--
Ref\SoftReference - soft reference notified when object destroyed
--SKIPIF--
<?php if (!extension_loaded("ref")) print "skip"; ?>
--FILE--
<?php

/** @var \Testsuite $helper */
$helper = require '.testsuite.php';

$obj = new stdClass();

$sr = new Ref\SoftReference($obj, function ($reference = null) use ($helper, &$obj) {
    $helper->assert('Notifier called', true);
    $helper->assert('Notifier get 1 argument', sizeof(func_get_args()) === 1);
    $helper->assert('Notifier get soft reference as it argument', $reference instanceof Ref\SoftReference);
    $helper->assert('Original object is null', null === $obj);
    $helper->assert('Soft reference in notifier is not null', null !== $reference->get());
    $helper->assert('Soft reference in notifier points to original object', $reference->get() instanceof stdClass);
});

$obj = null;

?>
EOF
--EXPECT--
Notifier called: ok
Notifier get 1 argument: ok
Notifier get soft reference as it argument: ok
Original object is null: ok
Soft reference in notifier is not null: ok
Soft reference in notifier points to original object: ok
EOF
