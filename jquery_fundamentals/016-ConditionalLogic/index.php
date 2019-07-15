<?php include 'inc/header.php'; ?>

<style type="text/css">
	.para{width: 825px; height: 500px; border: 1px solid #000;background: #fff; margin-top: 10px; }
	/*.inside{margin-top: 150px;height: 100px;width: 100px;border: 5px solid #1111ff;border-radius: 50%;background-color: green;position: absolute;}*/
	/*.bg{background-color: black;}*/
	/*.text{padding: 5px 9px; border: 2px solid red; border-radius: 5px; display: inline; color: white;}*/

	#dimen{background: #ddd none repeat scroll 0 0;border: 20px solid #999;margin: 40px;padding: 50px;text-align: center;}

</style>
	

<div class="para">
	<h1> Submit Form </h1>
	<form id="my-form" action="" method="post">
		<table>
			<tr>
				<td>First Name</td>
				<td><input type="text" id="required" name=""></td>
			</tr>
			<tr>
				<td>Last Name</td>
				<td><input type="text" id="required" name=""></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" id="required" name=""></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="text" id="required" name=""></td>
			</tr>
			<tr>
				<td></td>
				<td><button id="submit-button" name="">Submit</button></td>
			</tr>
		</table>
	</form>

<span id="status"></span>

</div>

<script src="js/jquery.min.js"></script>

<script type="text/javascript">

	//validate form
	$(document).ready(function() {

		$("#submit-button").click(function(e) {
			var isValid = true;
			
			$("input[type='text']#required").each(function() {
				
				if($(this).val() == ''){
					isValid = false;
					$(this).css({
						'border':'1px solid red',
						'background': '#ffcece'
					});
				}
				else{
					$(this).css({
						'border':'',
						'background': ''
					});
				}
			});

			if(isValid == false){
				e.preventDefault();
			}
			else{
				clear();
				document.getElementById("status").innerHTML = "Thanks for submitting...";
				return false;
			}

		});

		function clear(){
			$("#my-form :input").each(function() {
				$(this).val("");
			});
		}

		
	});
	
</script>

<?php include 'inc/footer.php'; ?>




