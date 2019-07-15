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
	.para{width: 825px;height: 425px;padding: 15px;border: 1px solid #000;background: #fff;}
	/*.inside{margin-top: 150px;height: 100px;width: 100px;border: 5px solid #1111ff;border-radius: 50%;background-color: green;position: absolute;}*/
</style>
	

		
<button class="showName">ShowName</button>
<button class="showDepartment">ShowDepartment</button>
<button class="showKill">ShowSkill</button>

<div class="para">
	<div>
		<input type="text" value="Your name will be here..." name="" id="field-name">
	</div>
	<div class="inside">
		<p id="line1"><strong>Department</strong></p>
		<p id="line2">Skill</p>
	</div>
	
</div>


<?php include 'inc/footer.php'; ?>

<script type="text/javascript">
	
	$(document).ready(function() {

		$(".showName").click(function(){
			$("#field-name").val("<?php getName(); ?>");
		});
		$(".showDepartment").click(function() {
			$("#line1").html("<?php getDepartment(); ?>");
		});

		$(".showKill").click(function() {
			$("#line2").text("<?php getSkill(); ?>");
		});
	});

</script>


