
<select class="selectcar" id="car" style="width : 20%">
	<option value="">Select Car</option>
	<?php
		include("db.php");
		$rs=mysqli_query($con,"select * from cars");
		while($r=mysqli_fetch_array($rs)){
			echo "<option value='$r[0]'>$r[0]</option>";
		}
	?>
</select>