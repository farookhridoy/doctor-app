<!DOCTYPE html>
<html>
<head>
	<title>Dengue Patient Tracker</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<link rel="shortcut icon" type="image/x-icon" href="public/images/favicon.png">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
	integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	
	<link rel="stylesheet" href="public/css/patient.css" type="text/css">
	<link rel="stylesheet" href="public/wnoty/wnoty.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
	

</head>
<body>
	<?php include('layouts/header.php') ?>

	<?php 

	if(isset($_GET['pages']))
	{
		switch($_GET['pages'])
		{
			case "about-us":
			{
				include('pages/about.php');
			}
			break;

			case "find-doctors":
			{
				include('pages/find_doctor.php');
			}
			break;

			case "patient-tracking":
			{	
				error_reporting(0); 
				session_start();
					if($_SESSION["loginstatus"]=='yes') {
						include('pages/patient_tracking.php');
					} else {
						print"<script>location='index.php?pages=login'</script>";
				}
			}
			break;


			case "contact-us":
			{
				include('pages/contact.php');
			}
			break;

			case "home":
			{
				include('pages/home.php');
			}
			break;

			case "login":
			{
				include('auth/login.php');
			}
			break;

			case "aedes-mosquito":
			{
				include('pages/aedes_mosquito.php');
			}
			break;
		}
	}
	else
	{
       include('pages/home.php');
	}
	?>

<?php include('layouts/footer.php') ?>
<script src="public/wnoty/wnoty.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
<script type="text/javascript">
	function notify(message,type) {
		$.wnoty({
			message: '<strong class="text-'+(type)+'">'+(message)+'</strong>',
			type: type,
			autohideDelay: 3000
		});
	}

	function playTone(which) {
		var sound = 1;
		if(sound == 1){
			var obj = document.createElement("audio");
			obj.src = "public/tones/"+(which)+".mp3"; 
			obj.play(); 
		}
	}

	function alertMe(message, type){
		$.alert({
			title: (type == "success" ? "Success" : "Suggestion"),
			icon: 'fa fa-'+(type == "success" ? "check" : "ban"),
			type: (type == "success" ? 'green' : 'red'),
			columnClass: 'medium',
			backgroundDismiss: true, 
			content: '<hr><h3 class="text-center text-'+(type)+'"><strong style="font-size:24px !important">'+(message)+'</strong></h3><hr>'
		});
	}
</script>
</body>
</html>