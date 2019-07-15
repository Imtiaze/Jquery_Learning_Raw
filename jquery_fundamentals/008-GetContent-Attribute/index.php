<?php include 'inc/header.php'; ?>


<style type="text/css">
	.para{width: 825px;height: 425px;padding: 15px;border: 1px solid #000;background: #fff;}
	/*.inside{margin-top: 150px;height: 100px;width: 100px;border: 5px solid #1111ff;border-radius: 50%;background-color: green;position: absolute;}*/
</style>
	

		
<button class="showText">ShowText</button>
<button class="showHtml">ShowHtml</button>
<button class="showVal">ShowValue</button>

<div class="para">
	<div>
		<input type="text" value="Ahammed Imtiaze" name="" id="text-val">
	</div>
	<div class="inside">
		<p id="line1">My Name is Ahammed Imtiaze</p>
		<p id="line2">Your are <strong>Computer Science </strong>student</p>
	</div>
	
</div>


<?php include 'inc/footer.php'; ?>

<script type="text/javascript">
	
	$(document).ready(function() {

		$(".showText").click(function(){
			alert('The text is: '+ $("#line1").text());
		});

		$(".showHtml").click(function(){
			alert('The text is: '+ $("#line2").html());
		});

		$(".showVal").click(function() {
			alert("This value is: "+ $("#text-val").val());
		});
	});

</script>



<?php include 'inc/footer.php'; ?>
