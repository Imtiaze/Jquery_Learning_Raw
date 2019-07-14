<?php include 'inc/header.php'; ?>

<style type="text/css">
	.para{
		background: #fff;
		padding: 10px 30px;
		border: 1px solid #000;
	}

	button{
		padding: 5px;
		margin: 15px;
	}
</style>

<button id="fadeOut">fadeOut</button>
<button id="fadeIn">fadeIn</button>
<button id="fadeTo">fadeTo</button>
<button id="fadeToggle">fadeToggle</button>

<div class="para">
	<h1>fadeIn fadeOut fadeTo fadeToggle</h1>
	<p>There is nothing that come without industry.There is nothing that come without industry.There is nothing that come without industry.There is nothing that come without industry.There is nothing that come without industry.There is nothing that come without industry.There is nothing that come without industry.There is nothing that come without industry.There is nothing that come without industry.There is nothing that come without industry.There is nothing that come without industry.There is nothing that come without industry.There is nothing that come without industry.There is nothing that come without industry.</p>
</div>


<?php include 'inc/footer.php'; ?>

<script type="text/javascript">
	$(document).ready(function() {
		$("#fadeOut").click(function(){
			$('.para').fadeOut();
		});
	});

	$(document).ready(function() {
		$("#fadeIn").click(function(){
			$('.para').fadeIn('slow');
		});
	});

	$(document).ready(function() {
		$("#fadeTo").click(function(){
			$('.para').fadeTo(1000,0.5);
		});
	});

	$(document).ready(function() {
		$("#fadeToggle").click(function(){
			$('.para').fadeToggle(1000);
		});
	});
	

</script>