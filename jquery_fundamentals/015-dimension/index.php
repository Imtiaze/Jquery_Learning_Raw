<?php include 'inc/header.php'; ?>

<style type="text/css">
	.para{width: 825px;border: 1px solid #000;background: #fff; margin-top: 10px; }
	/*.inside{margin-top: 150px;height: 100px;width: 100px;border: 5px solid #1111ff;border-radius: 50%;background-color: green;position: absolute;}*/
	/*.bg{background-color: black;}*/
	/*.text{padding: 5px 9px; border: 2px solid red; border-radius: 5px; display: inline; color: white;}*/

	#dimen{background: #ddd none repeat scroll 0 0;border: 20px solid #999;margin: 40px;padding: 50px;text-align: center;}

</style>
	

		
<button class="display">Display</button>
<span id="status"></span>
<div class="para">
	<!-- <div class="inside"></div -->
	<p id="dimen">We are Learning jQuery</p>

</div>


<script src="js/jquery.min.js"></script>

<script type="text/javascript">
	$(document).ready(function() {

		$(".display").click(function(){
			var val = '';
			val += "</br>Width is: " + $('#dimen').width(); 
			val += "</br>Height is: " + $('#dimen').height();
			val += "</br>Inner Width is: " + $('#dimen').innerWidth(); 
			val += "</br>Inner Height is: " + $('#dimen').innerHeight();
			val += "</br>Outer Width is: " + $('#dimen').outerWidth(); 
			val += "</br>Outer Height is: " + $('#dimen').outerHeight();
			// with margin
			val += "</br>Outer Width with Margin is: " + $('#dimen').outerWidth(true); 
			val += "</br>Outer Height with Margin is: " + $('#dimen').outerHeight(true);

			$('#status').html(val);
		});
	});
	
</script>

<?php include 'inc/footer.php'; ?>




