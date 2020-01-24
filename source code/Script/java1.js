function checking(){
	if(document.forms['myform']['pWrd'].value !== document.forms['myform']['conPsw'].value)
	{
		document.getElementById('pw_check').style.display = 'block';
		//alert('sdsdgsdgdsg');
		event.preventDefault();
	} else {
	}
}
