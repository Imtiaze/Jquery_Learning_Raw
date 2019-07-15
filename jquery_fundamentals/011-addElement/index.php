<?php include 'inc/header.php'; ?>

<?php 
	function getLastName(){
		echo " Imtiaze";
	}
	function getFirstName(){
		echo "Ahammed ";
	}
	function before(){
		echo "Ahammed";
	}
	function after(){
		echo "Khorrom";
	}
 ?>

<style type="text/css">
	.para{width: 825px;height: 425px;padding: 15px;border: 1px solid #000;background: #fff; margin-top: 10px; }
	/*.inside{margin-top: 150px;height: 100px;width: 100px;border: 5px solid #1111ff;border-radius: 50%;background-color: green;position: absolute;}*/
</style>
	

		
<button class="append">Append</button>
<button class="prepend">Prepend</button>
<button class="before">Before</button>
<button class="after">After</button>

<div class="para">
	<div class="inside">
		
		<p id="line1" style="color: red">Ahammed</p><br>
		<p id="line2" style="color: red">Imtiaze</p><br>
		<p id="line3" style="color: red">Imtiaze</p><br>
		
	</div>
</div>




<?php include 'inc/footer.php'; ?>

<script type="text/javascript">
	
	$(document).ready(function() {

		$(".append").click(function(){
			$("#line1").append("<?php getLastName(); ?>");
		});

		$(".prepend").click(function(){
			$("#line2").prepend("<?php getFirstName(); ?>");
		});

		$(".before").click(function() {
			$("#line3").before("<?php before(); ?>");
		});

		$(".after").click(function() {
			$("#line3").after("<?php after(); ?>");
		});
		
	});

</script>


