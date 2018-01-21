function ingresar()
	{

		var user = document.getElementById('username').val();
		var pass = document.getElementById('password').val();
			if ((user == "") || (pass == ""))
			{
			swal("Good job!", "You clicked the button!", "error");
			}
	}

