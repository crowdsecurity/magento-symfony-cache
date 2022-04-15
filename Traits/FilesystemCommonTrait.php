<?php
if (\PHP_VERSION_ID >= 80000) {
    require_once("FilesystemCommonTraitPhp8.php");
} else {
    require_once("FilesystemCommonTraitPhp7.php");
}
