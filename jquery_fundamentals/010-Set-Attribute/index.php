<?php include 'inc/header.php'; ?>

<?php 
	function getName(){
		echo "Ahammed Imtiaze";
	}
	function getDepartment(){
		echo "CSE";
	}
	function getSkill(){
		echo "PHP, Laravel, jQuery";
	}
 ?>

<style type="text/css">
	.para{width: 825px;height: 425px;padding: 15px;border: 1px solid #000;background: #fff; margin-top: 10px; }
	/*.inside{margin-top: 150px;height: 100px;width: 100px;border: 5px solid #1111ff;border-radius: 50%;background-color: green;position: absolute;}*/
</style>
	

		
<button class="setAttribute">Set Link to Goggle</button>

<div class="para">
	<div class="inside">
		<a id="set-att" href="http://facebook.com" title="facebook">facebook.com</a>
		
	</div>
	<br>
	<br><br>
	<p> fist hover the facebook.com and see the title and after click on button again hover and see the title</p>
</div>




<?php include 'inc/footer.php'; ?>

<script type="text/javascript">
	
	$(document).ready(function() {

		$(".setAttribute").click(function() {

			$("#set-att").attr({
				'href' : 'http://google.com',
				'title': 'Goggle'

			});		
		});
		
	});

</script>


