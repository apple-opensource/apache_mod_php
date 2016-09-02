--TEST--
#38943, properties in extended class cannot be set (< 5.3)
--SKIPIF--
<?php
/* $Id: bug38943.phpt,v 1.1.2.3 2008/11/12 11:59:26 pajoye Exp $ */
if(!extension_loaded('zip')) die('skip');
if (!defined('PHP_VERSION_MAJOR')) die('skip');
?>
--FILE--
<?php
include dirname(__FILE__) . '/bug38943.inc';
?>
--EXPECTF--
array(1) {
  [0]=>
  int(1)
}
object(myZip)#1 (%d) {
  ["test:private"]=>
  int(0)
  ["testp"]=>
  string(6) "foobar"
  ["testarray:private"]=>
  array(1) {
    [0]=>
    int(1)
  }
  ["status"]=>
  int(0)
  ["statusSys"]=>
  int(0)
  ["numFiles"]=>
  int(0)
  ["filename"]=>
  string(0) ""
  ["comment"]=>
  string(0) ""
}
