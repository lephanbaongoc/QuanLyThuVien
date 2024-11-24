<?php
	include 'includes/session.php';

	if(isset($_POST['upload'])){
		$id = $_POST['id'];
		$filename = $_FILES['file_name']['name'];
		if(!empty($filename)){
			move_uploaded_file($_FILES['file_name']['tmp_name'], '../files/'.$filename);	
		}
		
		$sql = "UPDATE books SET file_name = '$filename' WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Book file updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Select book to update file first';
	}

	header('location: book.php');
?>