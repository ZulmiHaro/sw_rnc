/*$(document).ready(function(){
			//$('#formLogin').submit(function(e){
			//	e.preventDefault();
			//	var frm = $(this).serialize();				
			//});
			$('#btnIngresar').click(function(){
				window.alert("hola");
});			
});
$(document).ready(function(){
	$(document).on('submit','#formLogin',function(ev){
		ev.preventDefault();
		var frm = $(this).serialize();
		//var usuasio = $('#username').val();
		//var pass = $('#password').val();

		//if($.trim(username).length > 0 && $.trim(password).length > 0){
			$.ajax({			
				
				type:'POST',
				url:"php/ingresar.php",
				async: false,
				//dataType:'json',
				data: frm
				//beforeSend: function(){
				//	$('#btnIngresar').val('Validando....');
				//}
			})
			.done(function(info){
					$(location).attr('hef','../main.php');
					//header("Location: ../main.php");
					//console.log('info');
			})
			.fail(function(){
				swal("Error!","Datos Incorrectos","error"); 	
				//$('#username').focus();
			});				
	});	
}); */
/*function validar_usuario(){
	$(document).on('#formLogin',function(e){
		e.preventDefault();

		var usuasio = $('#username').val();
		var pass = $('#password').val();

		$.ajax({
			type: 'POST',
			url:"php/ingresar.php",
			data: {usuasio: usuasio, pass: pass}
		})
		.done(function(data){
			if(!data){
				swal("Error!","Datos Incorrectos","error");
			}else{
				$(location).attr('href','../main.php');
			}
		});
	});
}*/
function validar(){
	$(document).on("ready", function () {
		$("#formLogin").on("submit", function (e) {
				e.preventDefault();
				//$usuario = $('#username').val();
				//$pass = $('#password').val();
				var frm = $(this).serialize();
				$.ajax({
					url: 'php/ingresar.php',
					type: 'POST',
					dataType: 'json',
					data: frm
				})
				.done(function(data){
						console.log(data);
						//$(location).attr('hef','../main.php');
						//header("Location: ../main.php");				
				})
				.fail(function(data){
					if(!data){
						swal("Error!","Datos Incorrectos","error");	
					}					
				});
	    });
	});
}