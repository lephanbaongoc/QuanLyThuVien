<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$isbn = $_POST['isbn'];
		$title = $_POST['title'];
		$category = $_POST['category'];
		$author = $_POST['author'];
		$publisher = $_POST['publisher'];
		$filename = $_FILES['file_name']['name'];
		if(!empty($filename)){
			move_uploaded_file($_FILES['file_name']['tmp_name'], '../files/'.$filename);	
		}
		$pub_date = $_POST['pub_date'];

		$sql = "INSERT INTO books (isbn, category_id, title, author, publisher, file_name, publish_date) VALUES ('$isbn', '$category', '$title', '$author', '$publisher', '$filename', '$pub_date')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Book added successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}	
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: book.php');

?>