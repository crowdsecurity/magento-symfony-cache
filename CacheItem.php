<?php

if (\PHP_VERSION_ID >= 80000) {
    require_once("CacheItemPhp8.php");
}
else {
    require_once("CacheItemPhp7.php");
}
