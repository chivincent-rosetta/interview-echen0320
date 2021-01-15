
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
public $xmlobject;
public static $strxml;
public static $xmldata;

  public static function fromXMLFile($source){
    $xml = new DomDocument();
    $xml->load($source);
    //$xmlobject = simplexml_load_file($source);
    //self::$xml = $xmlobject->asXML();
    //print_r($xml) previously
    print_r($xml->savexml());
  }
//Create the domxml object for future use
  public static function fromXML($xml){
    //self::$strxml = file_get_contents($xml);
    self::$xmldata = simplexml_load_string($xml);
    echo self::$xmldata::_toString();
  }

  public function toXML(){

  }

  public function gettitle(){
    $this->
  }
  public function settitle($title){
    //This code attempts to look for all titles, change it to look for the specific title the function points to?
    $changes = self::$xmldata->xpath("//*[g:title ==]");
    $this->title = $title;
  }
}
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
