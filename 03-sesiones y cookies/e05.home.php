<?php
require "e05.home.view.php";
if($_GET["action"]=="logout"){
    session_destroy();
    require "e05.view.php";
}