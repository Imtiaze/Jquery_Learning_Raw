<?php include 'inc/header.php'; ?>


<style type="text/css">
	.para{width: 825px;height: 425px;padding: 15px;border: 1px solid #000;background: #fff; margin-top: 10px; }
	.inside{margin-top: 150px;height: 100px;width: 100px;border: 5px solid #1111ff;border-radius: 50%;background-color: green;position: absolute;}
	.text{padding: 5px 9px; border: 2px solid red; border-radius: 5px; display: inline; color: white;}
	.bg{background-color: black;}
</style>
	

		
<button class="addClass">addClass(add style)</button>
<button class="removeBackground">RemoveBackground</button>
<button class="removeBorder">RemoveBorder</button>
<button class="removeStyle">RemoveStyle</button>
<button class="toggleClass">ToggleClass(Style)</button>

<div class="para">
	<!-- <div class="inside"></div -->
	<p>Empty elements</p>
</div>


<script src="js/jquery.min.js"></script>

<script type="text/javascript">
	$(document).ready(function() {

		$('.addClass').click(function() {
			$('p').addClass('text bg').css('color','white');
		});

		$('.removeBackground').click(function() {
			$('p').removeClass('bg').css("color","blue");
		});
		$('.removeBorder').click(function() {
			$('p').removeClass('text').css({
				"display":"inline-block",
				"color":"red",
			});
		});

		$('.removeStyle').click(function() {
			$('p').removeClass('text bg').css('color', 'black');
		});

		$('.toggleClass').click(function() {
			$('p').toggleClass('text bg');
		});
	});
	
</script>

<?php include 'inc/footer.php'; ?>




