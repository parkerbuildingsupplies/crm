//Display the result of the live search
function showResult(str) {
  //If the string is empty then display nothing
  if (str.length==0) {
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="0px";
    return;
  }
  //Create a http request object to pass the search string to the php script
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }

  //insert the html into the livesearch element on the index page
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("livesearch").innerHTML=this.responseText;
    }
  }

  //pass the search string to the php script in a url
  xmlhttp.open("GET","livesearch.php?q="+str,true);
  xmlhttp.send();
  }

//once the user has selected an account from the list, set the text box to the account name, set the value to account number then disable the text box to prevent more typing
function selectAccount(){
  var selectedElement = document.getElementById("selectedaccount");
  var selectedElementString = selectedElement.options[selectedElement.selectedIndex].text;
  document.getElementById("accountTextBox").value = selectedElementString;
  document.getElementById("accountTextBox").disabled = "disabled";
  document.getElementById("selectedaccount").style.display = "none";
}