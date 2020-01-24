
function validation(){
var a = document.card.username.value;
if(a=="")
{
	alert("Please Enter Your Name!");
	document.card.username.focus();
	return false;
}
if(!isNaN(a))
{
	alert("Please Enter Only Characters for Name");
	document.cardk.username.select();
	return false;
}
if ((a.length < 5) || (a.length > 10))
{
	alert("Your Character must be 5 to 15 Character");
	document.card.username.select();
	return false;
}	

if( document.card.number.value == "" ) {
	alert( "Please provide your Card number!" );
	document.card.number.focus() ; 
	return false; }
	
if( document.card.date.value == "" ) {
	alert( "Please provide your Expiration Date!" );
	document.card.date.focus() ; 
	return false; 
	}

if( document.card.CCV.value == "" ) {
	alert( "Please provide your CCV!" );
	document.card.CCV.focus() ; 
	return false; 
	}
    
    


}