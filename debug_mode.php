<?php


$debug= isset($_GET['debug']) ? TRUE : FALSE;
$myOutput='Very Nice';
$myArrayOutput=['Very','Nice'];

//example 1.
if ($debug){
exit('<pre>'.myOutput.'</pre>');
}

//example 2.
if ($debug){
exit('<pre>'.print_r($myArrayOutput,TRUE).'</pre>');
}
