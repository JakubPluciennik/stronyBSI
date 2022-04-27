<?php
session_start();

if(!isset($_SESSION["zalogowany"]) || $_SESSION["zalogowany"] != true)
{
  header("location: ../../login.php");
}
require "../../wyloguj.php";

$xml = new DOMDocument;
$xml -> load('zalogowanie/index.xml');

$xslt = new DOMDocument;
$xslt->load('zalogowanie/style.xslt');

$proc = new XSLTProcessor();

$proc->importStyleSheet($xslt);

echo $proc->transformToXML($xml);
?>
