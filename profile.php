<?php
session_start();
   
include '../include/configdb.php';
$id = $_SESSION['id'];

if (isset($_POST['submit'])) {
	$file = $_FILES['file'];

	$fileName = $file['name'];
	$fileTmpName = $file['tmp_name'];
	$fileSize = $file['size'];
	$fileError = $file['error'];
	$fileType = $file['type'];

	$fileExt = explode('.', $fileName);
	$fileActualExt = strtolower(end($fileExt));
	$allowed = array('jpg', 'jpeg', 'png', 'pdf');

	if (in_array($fileActualExt, $allowed)) {
		if ($fileError === 0) {
			if ($fileSize < 1000000) {
				$fileNameNew = "profile".$id.".".$fileActualExt;
				$fileDestination = 'uploads/'.$fileNameNew;
				move_uploaded_file($fileTmpName, $fileDestination);
				header("Location: index.php?uploadsuccess");
			} else {
				echo "Your file is too big!";
			}
		} else {
			echo "There was an error uploading your file!";
		}
	} else {
		echo "You cannot upload files of this type!";
	}
}

$first = $_POST['first'];
$last = $_POST['last'];
$position = $_POST['pos'];

$sql = "INSERT INTO prcard (id, first, last, pos) 
VALUES ('$id', '$first', '$last', '$position') ON DUPLICATE KEY UPDATE id = '$id', first='$first', last='$last', pos='$position'";
$result = mysqli_query($conn, $sql);

$sql = "SELECT * FROM user WHERE id='$id'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
	while ($row = mysqli_fetch_assoc($result)) {
		$userid = $row['id'];
		$sql = "INSERT INTO profileimg (userid, status)
		VALUES ('$userid', 1)";
		mysqli_query($conn, $sql);
		header("Location: index.php");
	}
} else {
	echo "You have an error!";
}
//echo "<script type='text/javascript'> document.location = 'index.php'; </script>";
?>