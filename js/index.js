var error = "";

function validate()
{
	var userName = $("#userName").val();
	var reg = /^[A-Z]{1}[a-zA-Z]{2,8}$/; 
	if( reg.test(userName) == true)
		{
			return true;
		}
	else
		{
		error += "<p>userName not valid</p>";
	document.getElementById("my-error").innerHTML = error;		
			$("#error-container").fadeIn();
			return false;
		}
}
