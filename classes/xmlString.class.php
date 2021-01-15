<?php
namespace MyApp\XML;

class xmlString {
  private $parser;



  public function fromXML($xml){
    $xmldata = simplexml_load_string($xml);
  }
}

 ?>
