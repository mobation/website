<?php
require_once("C:\\xampp\\htdocs\\formtools\\global\\api\\API.class.php");
$api = new FormTools\API();
$fields = $api->initFormPage();
$api->clearFormSessions();
?>