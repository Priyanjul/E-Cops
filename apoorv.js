    <script>

function email_this(){
		
		document.getElementById("name_msg").innerHTML = "";
		if(1)

		{
			var name=document.getElementById("name").value;
			if (name == ""){
				document.getElementById("name_msg").innerHTML = "Please enter your name";
				return false;
			}	
			
			var email=document.getElementById("email").value;
			
			if (email == ""){
				document.getElementById("email_msg").innerHTML = "Please enter your email";
				return false;
			}	
			
			
			
			var phone=document.getElementById("phone").value;
			var isnum = /^\d+$/.test(phone);
			
			if (phone == ""){
				
				document.getElementById("phone_msg").innerHTML = "Please enter your 10 digit mobile number";
				return false;
			}	
			else if(phone.length<10)
			{
			document.getElementById("phone_msg").innerHTML = "Please enter your 10 digit mobile number";
				return false;
			}
			if(isnum!=true)
			{
				document.getElementById("phone_msg").innerHTML = "Please enter your 10 digit mobile number";
				return false;

			}
			
			var message=document.getElementById("message").value;
			if (message == ""){
				document.getElementById("message_msg").innerHTML = "Please enter your details";
				return false;
			}	
			
			var xhttp = new XMLHttpRequest();
			
			xhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
				 document.getElementById("demo").innerHTML = xhttp.responseText;
				 console.log(xhttp.responseText);
				}
			  };
			  xhttp.open("GET", "mail/contact_me.php?name="+name + "&email=" + email + "&phone=" + phone + "&message=" + message, true);
			  xhttp.send();
			
	
	}
}
</script>    <!-- Form -->