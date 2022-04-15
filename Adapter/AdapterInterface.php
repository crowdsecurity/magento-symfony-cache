<?php
if (\PHP_VERSION_ID >= 80000) {
    require_once("AdapterInterfacePhp8.php");
}
else{
    require_once("AdapterInterfacePhp7.php");
}
