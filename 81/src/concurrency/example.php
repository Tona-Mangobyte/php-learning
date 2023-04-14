<?php
$fiber = new Fiber(fn(string $message) => print $message);
$fiber->start('Hi');