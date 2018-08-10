<?php

$xmlDoc=new DOMDocument();
$xmlDoc->load(".\input\XMLCUST.xml");

$x=$xmlDoc->getElementsByTagName('Account');

//get the q parameter from URL
$q=$_GET["q"];

//lookup all links from the xml file if length of q>0
if (strlen($q)>0) {
  $hint="";
  for($i=0; $i<($x->length); $i++) {
    $y=$x->item($i)->getElementsByTagName('Name');
    $z=$x->item($i)->getElementsByTagName('Number');
    if ($y->item(0)->nodeType==1) {
      //find a link matching the search text
      if (stristr($y->item(0)->childNodes->item(0)->nodeValue,$q)) {
        if ($hint=="") {
          //create the drop down dynamically based on the suggestions
          $hint = '<select class="form-control" name="account" value="<?php echo $account; ?>" onchange="if (this.selectedIndex) selectAccount();" id="selectedaccount">';
          $hint=$hint . '<option selected disabled>Please select</option>';
          $hint=$hint .'<option value='. $z->item(0)->childNodes->item(0)->nodeValue.">". $y->item(0)->childNodes->item(0)->nodeValue."</option>";
        } else {
          $hint=$hint .'<option value='. $z->item(0)->childNodes->item(0)->nodeValue.">". $y->item(0)->childNodes->item(0)->nodeValue."</option>";
        }
      }
    }
  }
}

// Set output to "no suggestion" if no hint was found
// or to the correct values
if ($hint=="") {
  $response="no suggestion";
} else {
  $response=$hint."</select>";
}

//output the response
echo $response;
