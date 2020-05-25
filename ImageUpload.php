<?php 
/*GitHub Clone*/
/**/
if(isset($_POST['submit'])){
	
	$file=$_FILES['fileName'];
	
	$fileName = $_FILES['fileName']['name'];
	$fileTmpName =$_FILES['fileName']['tmp_name'];
	$fileSize = $_FILES['fileName']['size'];
	$fileError = $_FILES['fileName']['error'];
	$fileType = $_FILES['fileName']['type'];
	
	$fileExt = explode('.',$fileName);
	
	$fileActualExt = strtolower(end($fileExt));
	
	$allowed = array('jpg','jpeg','png','pdf','JPG','JPEG','PNG','PDF');
	
	if(in_array($fileActualExt,$allowed)){
		
		if($fileError === 0){
		
		   if($fileSize < 50000 ){
			  $fileNameNew = uniqid('',true).".".$fileActualExt;
			  $fileDestination= 'uploads/'.$fileNameNew;
			   move_uploaded_file($fileTmpName,$fileDestination);
			   header("Location:index.php?uploadsucess");
		   }else{
			   
			   echo"your file ist too big!"; 
		   }
		
	    }else{
		   
		   echo"error uploading your file!";
	    }
		
	}else{
		
		echo"can not upload";
		
	}
	
	
}




?>
