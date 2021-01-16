<?php
namespace myapp\XmlString;
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
//Create the domxml object for future use
  public static function fromXML($xml){
    //self::$strxml = file_get_contents($xml);
    // echo self::$xmldoc != null;

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
    // $this->title = $newtitle;
    // echo $changes->count();
    $DOMnode = $changes->item(0);
    // echo $DOMnode->getNodePath();
    // echo 'DOMnode<br>' . $DOMnode->nodeValue;
    // echo 'DOMnode<br>' . $DOMnode->nodeName;

     $DOMnode->nodeValue = $newtitle;
    echo '<br><br>' . self::$xmldoc->saveXML();
  }
}
