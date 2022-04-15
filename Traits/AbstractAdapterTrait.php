<?php

if (\PHP_VERSION_ID >= 80000) {
    require_once("AbstractAdapterTraitPhp8.php");
}
else{
    require_once("AbstractAdapterTraitPhp7.php");
}
