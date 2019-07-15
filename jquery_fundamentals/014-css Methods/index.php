<?php include 'inc/header.php'; ?>

<?php 
	$pad = "padding";
	$padValue = "5px 10px";
	$col = "color";
	$colValue = "red";
	$bod = "border";
	$bodValue = "2px solid green";
	$bodR = "border-radius";
	$bodRadius = "5px";
?>

<style type="text/css">
	.para{width: 825px;height: 425px;padding: 15px;border: 1px solid #000;background: #fff; margin-top: 10px; }
	/*.inside{margin-top: 150px;height: 100px;width: 100px;border: 5px solid #1111ff;border-radius: 50%;background-color: green;position: absolute;}*/
	/*.text{padding: 5px 9px; border: 2px solid red; border-radius: 5px; display: inline; color: white;}*/
	/*.bg{background-color: black;}*/
</style>
	

		
<button class="addCss">addCss</button>
<div class="para">
	<!-- <div class="inside"></div -->
	<p id="text">We are Learning jQuery</p>
</div>


<script src="js/jquery.min.js"></script>

<script type="text/javascript">
	$(document).ready(function() {

		$(".addCss").click(function() {
			$("#text").css({
				"<?php echo $col; ?>" : "<?php echo $colValue; ?>",
				"<?php echo $bod; ?>" : "<?php echo $bodValue; ?>",
				"<?php echo $bodR; ?>" : "<?php echo $bodRadius; ?>",
				"<?php echo $pad; ?>" : "<?php echo $padValue; ?>"
			});
		});
	});
	
</script>

<?php include 'inc/footer.php'; ?>




