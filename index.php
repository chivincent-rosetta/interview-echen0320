
<?php
require_once realpath("vendor/autoload.php");
?>

<?php
//TO DO Read file from source and convert to string. (Make loop in the future?)
//$source = 'test.xml';

//$xml = file_get_contents($source);

//**Is the root node for the sample xml rss or channel?

class xmlString {

//Create $xml first, then use fromXML to load the string.
public static $xml;
public static $xmldoc;
public $xmlobject;
public static $strxml;
public static $xmldata;

  public static function fromXMLFile($source){
    self::$xmldoc = new DomDocument();
    self::$xmldoc->load($source);
    //$xmlobject = simplexml_load_file($source);
    //self::$xml = $xmlobject->asXML();
    //print_r($xml) previously
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

  }
  //This can probably also be done with xpath
  //public function gettitle(){
  //  $this->;
  //}
  public function settitle($title,$newtitle){
    //Find out how escape characters work
    $xpath = new DOMXpath(self::$xmldoc);
    $changes = $xpath->query("channel/item[g:title = '$title' ]/g:title");
    $this->title = $newtitle;
    // echo $changes->count();
    $DOMnode = $changes->item(0);
    // echo $DOMnode->getNodePath();
    echo 'DOMnode<br>' . $DOMnode->nodeValue;
    echo 'DOMnode<br>' . $DOMnode->nodeName;

    $DOMnode->nodeValue = $newtitle;
    echo '<br>Xmldoc<br>' . self::$xmldoc->saveXML();
  }
}

xmlString::fromXMLFile('test2.xml');
xmlString::fromXML(xmlString::$xml);
$xmlString = new xmlString();
$xmlString->settitle('《有品味的營養口糧》','有品味');
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



?>
