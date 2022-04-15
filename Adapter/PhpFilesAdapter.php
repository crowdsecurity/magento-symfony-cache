<?php

if (\PHP_VERSION_ID >= 80000) {
    require_once("PhpFilesAdapterPhp8.php");
}
else {
    require_once("PhpFilesAdapterPhp7.php");
}
