<?php
//namespace myapp;
//Unfortunately, as I only learned that phpunit is part of the environment after I finished my code,
//adding in a namespace here breaks everything I wrote previously, and I have run out of time

require_once('vendor/autoload.php');
//include_once('XmlString.php');

//require_once doesn't return a fatal error, but the XmlString class file still cannot be loaded
// even if don't use the autoloader,
//or if I put it in the root directory. Code works fine if
//I put the class code directly in index.php


//TO DO Read file from source and convert to string. (Make loop in the future?)
//$source = 'test.xml';

//$xml = file_get_contents($source);



class XmlString {

//Create $xml first, then use fromXML to load the string.
public static $xml;
public static $xmldoc;
public $xmlobject;
public static $strxml;
public static $xmldata;

  public static function fromXMLFile($source){
    self::$xmldoc = new DomDocument();
    self::$xmldoc->load($source);
    self::$xml = self::$xmldoc->savexml();
    //echo $xml;
  }

  public static function fromXML($xml){
    $bool = self::$xmldata = self::$xmldoc->loadXML($xml);
    $newXML = self::$xmldoc->saveXML();
    // echo $newXML;
  }
  //Save to file
  public function toXML(){
    self::$xmldoc->save("newxml.xml");
  }

  public function gettitle($title){
    $xpath = new DOMXpath(self::$xmldoc);
    $search = $xpath->query("channel/item[text()[contains('$title', g:title)] ]/g:title");
    $DOMsearchnode = $search->item(0);
    echo $DOMsearchnode->nodeValue;
  }

  public function settitle($title,$newtitle){
    //Find out how escape characters work
    $xpath = new DOMXpath(self::$xmldoc);
    $changes = $xpath->query("channel/item[g:title = '$title' ]/g:title");

    $DOMnode = $changes->item(0);

     $DOMnode->nodeValue = $newtitle;
    echo '<br><br>' . self::$xmldoc->saveXML();
  }
}


//TO DO Call fromXML and save XML data
//fromXMLFile must be run in this particular case, as I get the xml strings from
// xml files
XmlString::fromXMLFile('test2.xml');
XmlString::fromXML(XmlString::$xml);
$xmlString = new XmlString();
//TO DO test query  and change current data stored
$xmlString->gettitle('有品味的');
$xmlString->settitle('《有品味的營養口糧》','有品味');

//TO DO Call toXML and save current data to XML, print to prove the data has changed
$xmlString->toXML();
