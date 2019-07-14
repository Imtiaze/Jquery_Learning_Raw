<?php include 'inc/header.php'; ?>

<button id="hide">Hide</button>
<button id="show">Show</button>
<button id="toggle">Toggle</button>

<div class="para">
	<h1>hide show toggole</h1>
	<p>There is nothing that come without industry.There is nothing that come without industry.There is nothing that come without industry.There is nothing that come without industry.There is nothing that come without industry.There is nothing that come without industry.There is nothing that come without industry.There is nothing that come without industry.There is nothing that come without industry.There is nothing that come without industry.There is nothing that come without industry.There is nothing that come without industry.There is nothing that come without industry.There is nothing that come without industry.</p>
</div>


<?php include 'inc/footer.php'; ?>

<script type="text/javascript">
	
	$(document).ready(function() {
		$("#hide").click(function() {
			$(".para").hide('fast');
		});
	});

	$(document).ready(function() {
		$("#show").click(function() {
			$(".para").show('slow');
		});
	});

	$(document).ready(function() {
		$("#toggle").click(function() {
			$(".para").toggle('slow');
		});
	});


//hide('slow') - hide('fast')
</script>
