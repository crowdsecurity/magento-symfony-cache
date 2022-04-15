<?php

if (\PHP_VERSION_ID >= 80000) {
    require_once("RedisTraitPhp8.php");
}
else{
    require_once("RedisTraitPhp7.php");
}

