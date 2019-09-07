<?php
/*
WeakReference {
public __construct ( void )
public static create ( object $referent ) : WeakReference
public get ( void ) : ?object
}
*/

$obj = new stdClass;
$weakref = WeakReference::create($obj);
var_dump($weakref->get());
unset($obj);
var_dump($weakref->get());