<?php
// script PHP équivalent

require_once 'lib1_time.php';
require_once 'lib1_hello.php';

print( 'nous sommes le '.getTheDate()."<br>" ) ;
print( 'nous sommes le '.getTheNow()."<br>" ) ;
print( sayHello('Pierre').'<br>');
?>