<?php 

	require_once("../init.php"); 
	

	if($_SERVER["REQUEST_METHOD"] == "POST") { 

		$upload = upload::arquivo($_FILES["arquivo"], upload::getRandomName(), "./uploads/teste-1/", array("jpg", "png", "jpeg", "gif"), 10000000); /* 10mb */
		if(!$upload) { 
			echo upload::getErrorMsg();
		} else { 
			echo $upload;
		}
		echo "<br />";
	}

?>

<form action="?" method="post" enctype="multipart/form-data">
	<b>Escolha uma imagem para fazer upload:</b>
	<br />
    <input type="file" name="arquivo" accept="image/*" />
    <br />
    <br />
    <input type="submit" value="Upload Imagem!" />
</form>