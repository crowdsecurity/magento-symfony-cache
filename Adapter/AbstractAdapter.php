<?php
if (\PHP_VERSION_ID >= 80000) {
    require_once("AbstractAdapterPhp8.php");
}
else{
    require_once("AbstractAdapterPhp7.php");
}
