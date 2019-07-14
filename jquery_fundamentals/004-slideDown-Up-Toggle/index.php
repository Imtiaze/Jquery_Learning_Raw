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

<button id="slideUp">slideUp</button>
<button id="slideDown">slideDown</button>
<button id="slideToggle">slideToggle</button>

<div class="para">
	<h1>hide show toggole</h1>
	<p>There is nothing that come without industry.There is nothing that come without industry.There is nothing that come without industry.There is nothing that come without industry.There is nothing that come without industry.There is nothing that come without industry.There is nothing that come without industry.There is nothing that come without industry.There is nothing that come without industry.There is nothing that come without industry.There is nothing that come without industry.There is nothing that come without industry.There is nothing that come without industry.There is nothing that come without industry.</p>
</div>


<?php include 'inc/footer.php'; ?>

<script type="text/javascript">
	
	$(document).ready(function() {
		$("#slideUp").click(function() {
			$(".para").slideUp('slow');
		});
	});

	$(document).ready(function() {
		$("#slideDown").click(function() {
			$(".para").slideDown('slow');
		});
	});

	$(document).ready(function() {
		$("#slideToggle").click(function() {
			$(".para").slideToggle('slow');
		});
	});


//hide('slow') - hide('fast')
</script>
