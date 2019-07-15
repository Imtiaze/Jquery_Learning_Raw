<?php include 'inc/header.php'; ?>

<?php 
	function test() {
		echo "callback functioN";
	}
 ?>

<style type="text/css">
	.para{
		width: 825px;
		height: 425px;
		padding: 15px;

		border: 1px solid #000;
		background: #fff;
		position: relative;
		
	}
	.inside{
		margin-top: 150px;
		height: 100px;
		width: 100px;
		border: 5px solid #1111ff;
		border-radius: 50%;
		background-color: green;
		position: absolute;
	}
</style>
	

<!-- $(selector).hide(speed, callback);
$(selector).action({****}, speed, callback); -->


		
<button class="startAnimate">Start Animation</button>
<button class="stopAnimate">Stop Animation</button>

<div class="para">

	<div class="inside">
		
	</div>
	
</div>


<?php include 'inc/footer.php'; ?>

<script type="text/javascript">
	
	$(document).ready(function() {

		$(".startAnimate").click(function() {

			$(".inside").animate({
				left:'600px',	
				opacity: '0.5',
				height: '200px',
				width: '200px'
			}, 3000, function(){

				alert("<?php echo test(); ?>");
			});

		});

		$(".stopAnimate").click(function(){
			$(".inside").stop();
		});

	});

</script>



<?php include 'inc/footer.php'; ?>
