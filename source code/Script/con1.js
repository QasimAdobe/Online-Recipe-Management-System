
function validation(){
var a = document.feedback.username.value;
if(a=="")
{
	alert("Please Enter Your Name!");
	document.feedback.username.focus();
	return false;
}
if(!isNaN(a))
{
	alert("Please Enter Only Characters for Name");
	document.feedback.username.select();
	return false;
}
if ((a.length < 5) || (a.length > 15))
{
	alert("Your Character must be 5 to 15 Character");
	document.feedback.username.select();
	return false;
}	

if( document.feedback.mail.value == "" ) {
	alert( "Please provide your Email!" );
	document.feedback.mail.focus() ; 
	return false; }
	
if( document.feedback.phoneno.value == "" ) {
	alert( "Please provide your Phone Number!" );
	document.feedback.phoneno.focus() ; 
	return false; 
	}
 var telno= document.feedback.phoneno.value;
    if (telno.length < 10) {
        alert("invalid");
        return false;
        
    }
if(isNaN(telno)){
	alert("Please Enter Only Numbers for Phone No");
	document.feedback.phoneno.select();
	return false;
}

if( document.feedback.message.value == "" ) {
	alert( "Please provide your Feedback!" );
	document.feedback.message.focus() ; 
	return false; 
	}	
}