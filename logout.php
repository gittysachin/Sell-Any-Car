<?php 
	if(isset($_COOKIE["user"])){
		setcookie("user","",time()-1);
		header("location:sell.php?out=1");
	}
	else{
		header("location:sell.php?noout=1");
	}
 ?>