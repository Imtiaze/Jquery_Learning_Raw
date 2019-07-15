<?php include 'inc/header.php'; ?>


<style type="text/css">
	.para{width: 825px;height: 425px;padding: 15px;border: 1px solid #000;background: #fff; margin-top: 10px; }
	.inside{margin-top: 150px;height: 100px;width: 100px;border: 5px solid #1111ff;border-radius: 50%;background-color: green;position: absolute;}
</style>
	

		
<button class="remove">Remove</button>
<button class="empty">Empty</button>

<div class="para">
	<div class="inside"></div>
	<p>Empty elements</p>
</div>




<?php include 'inc/footer.php'; ?>

<script type="text/javascript">
	
	$(document).ready(function() {

		
		$(".remove").click(function() {
			$(".inside").remove();
		});

		$(".empty").click(function() {
			$(".para").empty();
		});


		
	});

</script>


