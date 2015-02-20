<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
if (!function_exists('debug')) {

    function debug($data) {
//            echo 'On line number'. __FILE__;
        $dub = debug_backtrace();
echo '<style>code, pre {
font: normal 13px/18px Consolas, "Courier New", Courier, monospace;
background: #E8EBEC url("../images/pre-bg.gif") repeat 0 0;
padding: 18px 5px;
border: 1px dotted #BBB;
color: #333;
border-image: initial;
}</style>';
               
        echo '<pre><span  style="color:blue">';
        echo $dub[0]['file'] . "<br/>On Line Number ";
        echo $dub[0]['line'] . "<br/></span>";
        print_r($data);

        echo '</pre>';
    }

}
?>