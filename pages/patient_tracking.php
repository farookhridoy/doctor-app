<?php 
error_reporting(0); 
@session_start();
if($_SESSION["loginststus"]=='yes')
{

	?>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-1.12.4.min.js"
	integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
	crossorigin="anonymous">
</script> 

<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<link rel="stylesheet" href="public/css/test.css" type="text/css">

<div class="test_start">

	<section>
		<div>
			<p>Name</p>
			<input type="text" id="name" class="form-control">
		</div>
		<div>
			<p>Mobile No</p>
			<input type="numeric" id="mobile" class="form-control">
		</div>
		<div>
			<p>Geo Location</p>
			<input type="text" id="location" class="form-control" class="form-control">
		</div>
	</section>
	<p class="confution">Have you ever had dengue before?</p>
	<div class="confution_test">
		<input type="radio" id="Yes" name="dengue_before" class="dengue_before" value="1">
		<label for="Yes">Yes</label>
		<input type="radio" checked id="No" name="dengue_before" class="dengue_before" value="0">
		<label for="No">No</label><br>
	</div>
	<p class="symtoms">Which of the following symptoms are being observed in you?</p>
	<div class="sym_all">
		<p> <label for="fever"><input type="checkbox" id="fever" name="question" value="fever"> la Is your body temperature 103° -105° or higher?</label></p>

		<p><label for="runny_nose"><input type="checkbox" id="runny_nose" name= "question" value="runny_nose" > Is your body temperature is lower than normal?</label></p>

		<p><label for="caugh"><input type="checkbox" id="caugh" name= "question" value="caugh" > Do you have runny nose or cough?</label></p>

		<p><label for="vomiting"><input type="checkbox" id="vomiting" name= "question" value="vomiting"> Do you feel nauseous or vomiting?</label></p>

		<p><label for="rash"><input type="checkbox" id="rash" name = "question" value="rash"> Is there a red rash anywhere on your body?</label></p>

		<p><label for="bleeding"><input type="checkbox" id="bleeding" name="question" value="bleeding" > Has there been bleeding from any part of your body (nose, eyes, mouth, rectum)?</label></p>

		<p><label for="pressure"><input type="checkbox" id="pressure" name ="question" value="pressure" > Can't find your pulse or your blood pressure is too low?</label></p>

	</div>
	<input class="btn btn-success" type="submit" id="submit" name="submitation" value="Submit">

</div>

<script>
	$('#submit').click(function() {

		var name=$('#name').val();
		var mobile=$('#mobile').val();
		var location=$('#location').val();

		var dengue_before=$(".dengue_before:checked").val();

		var fever=$("#fever").is(':checked');
		var runny_nose=$("#runny_nose").is(':checked');
		var caugh=$("#caugh").is(':checked');
		var vomiting=$("#vomiting").is(':checked');
		var rash=$("#rash").is(':checked');
		var bleeding=$("#bleeding").is(':checked');
		var pressure=$("#pressure").is(':checked');

		var message='';
		if (name!='' && mobile !='' && dengue_before != ''){

			if(dengue_before == 0){
				if(caugh){
					alertMe('It can be viral disease(flu). Consult a doctor','danger');
				}
			}else if(dengue_before == 1){
				if(fever && vomiting){
					alertMe('<h1>Classic Fever</h1><hr><h6>Message: You should consult a doctor. Drink a lot of liquied juice and pure water. Don,t eat any pain killer or antibiotic medicine or several types of medicine without consulting doctor.</h6>');
				}else if(bleeding){
					alertMe('<h1>Hemoregic</h1>');
				}else if(pressure){
					alertMe('<h1>Shock Syndrom </h1>');
				}else if(runny_nose){
					alertMe('<h1>Risk </h1><hr><h6>Message : You should go to doctor as early as possible</h6>');
				}
			}

		}else{
			alertMe('Please Enter your Name,Mobile & Atleast One Option','danger');
			playTone('danger');
		}
	});

</script>

<?php 
}
else
{
	print "<h1>You Can Not Authorized to See This Page <br><a href='index.php?pages=login'>Please Login</a></h1>";
}
?>