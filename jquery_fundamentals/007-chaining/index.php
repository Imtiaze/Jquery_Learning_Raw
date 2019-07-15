<?php include 'inc/header.php'; ?>


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
	

		
<button class="startAnimate">Start Animation</button>
<button class="stopAnimate">Stop Animation</button>

<div class="para">
	<h1>Chaining - Css color change in jquery</h1>
	<div class="inside">
		
	</div>
	
</div>


<?php include 'inc/footer.php'; ?>

<script type="text/javascript">
	
	$(document).ready(function() {

		$(".startAnimate").click(function() {

			$(".inside").css("background","yellow").animate({
				left:'600px',	
				opacity: '0.5',
				height: '200px',
				width: '200px'
			}, 3000).css("background","green").animate({
				left: '0px',
				right:'600px',	
				height: '100px',
				width: '100px'
			}, 3000);

			$(".para").css("color","yellow");

		});

		

		$(".stopAnimate").click(function(){
			$(".inside").stop();
		});

	});

</script>



<?php include 'inc/footer.php'; ?>
