
<?php
require_once realpath("vendor/autoload.php");

//TO DO Read file from source and convert to string. (Make loop in the future?)
//$source = 'test.xml';

//$xml = file_get_contents($source);



// class xmlString {
//
// //Create $xml first, then use fromXML to load the string.
// public static $xml;
// public static $xmldoc;
// public $xmlobject;
// public static $strxml;
// public static $xmldata;
//
//   public static function fromXMLFile($source){
//     self::$xmldoc = new DomDocument();
//     self::$xmldoc->load($source);
//     //$xmlobject = simplexml_load_file($source);
//     //self::$xml = $xmlobject->asXML();
//     //print_r($xml) previously
//     self::$xml = self::$xmldoc->savexml();
//     //echo $xml;
//   }
// //Create the domxml object for future use
//   public static function fromXML($xml){
//     //self::$strxml = file_get_contents($xml);
//     // echo self::$xmldoc != null;
//
//     $bool = self::$xmldata = self::$xmldoc->loadXML($xml);
//     $newXML = self::$xmldoc->saveXML();
//     // echo $newXML;
//   }
//   //Save to file
//   public function toXML(){
//     self::$xmldoc->save("newxml.xml");
//   }
//   //This can probably also be done with xpath
//   public function gettitle($title){
//     $xpath = new DOMXpath(self::$xmldoc);
//     $search = $xpath->query("channel/item[text()[contains('$title', g:title)] ]/g:title");
//     $DOMsearchnode = $search->item(0);
//     echo $DOMsearchnode->nodeValue;
//   }
//   public function settitle($title,$newtitle){
//     //Find out how escape characters work
//     $xpath = new DOMXpath(self::$xmldoc);
//     $changes = $xpath->query("channel/item[g:title = '$title' ]/g:title");
//     // $this->title = $newtitle;
//     // echo $changes->count();
//     $DOMnode = $changes->item(0);
//     // echo $DOMnode->getNodePath();
//     // echo 'DOMnode<br>' . $DOMnode->nodeValue;
//     // echo 'DOMnode<br>' . $DOMnode->nodeName;
//
//      $DOMnode->nodeValue = $newtitle;
//     echo '<br><br>' . self::$xmldoc->saveXML();
//   }
// }

XmlString::fromXMLFile('test2.xml');
XmlString::fromXML(XmlString::$xml);
$xmlString = new XmlString();
$xmlString->gettitle('有品味的');
$xmlString->settitle('《有品味的營養口糧》','有品味');
$xmlString->toXML();
//xmlString::fromXMLFile('test.xml');
//$xml = simplexml_load_file('test.xml');

//print_r($xml);
//xmlString::fromXML($note);
//echo xmlString::fromXML('test.xml');
//TO DO Call fromXML and save XML data

//TO DO Call function and change current data stored


//TO DO Call toXML and save current data to XML, print to prove the data has changed

//$xmldata = simplexml_load_string($xmlstr) or die("Error");

//print_r($xmldata);
