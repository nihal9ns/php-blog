var email = document.getElementById('email');
email.onkeyup = function(){
	var email_value = email.value;
	// console.log(email_value);
	var request = new XMLHttpRequest();
	request.onreadystatechange = function(){
		if(request.readyState == XMLHttpRequest.DONE){
			if(request.status == 200){
				console.log(request.responseText);
			}
		}
	}

	request.open('GET','http://localhost/Blog/test.php',true);
	request.send();
	
}