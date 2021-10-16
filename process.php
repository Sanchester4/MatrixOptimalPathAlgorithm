<?php
error_reporting (E_ALL ^ E_NOTICE); 

include 'config.php';

$title = $_POST['title'];
$text = $_POST['text'];
$category = $_POST['category'];
$image	= $_POST['image'];


if (isset($_POST['submit'])){
$sql = ("INSERT INTO `info`(`title`, `text`, `category`, `image`) VALUES(?,?,?,?)");

    $query = $pdo->prepare($sql);
	$query->execute([$title, $text, $category, $image]);
	$success = '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>The data has been submitted!</strong> Close
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
}

// Read

$sql = $pdo->prepare("SELECT * FROM `info`");
$sql->execute();
$result = $sql->fetchAll();

// Update

$edit_title = $_POST['edit_title'];
$edit_text = $_POST['edit_text'];
$edit_category = $_POST['edit_category'];
$change_image = $_POST['change_image'];
$get_id = $_GET['id']; 

if (isset($_POST['edit-submit'])) {
	$sqll = "UPDATE info SET title=?, text=?, category=?, image=? WHERE id=?";
	$querys = $pdo->prepare($sqll);
	$querys->execute([$edit_title, $edit_text, $edit_category, $change_image, $get_id]);
	header('Location: '. $_SERVER['HTTP_REFERER']);
}

// DELETE

if (isset($_POST['delete_submit'])) {
	$sql = "DELETE FROM info WHERE id=?";
	$query = $pdo->prepare($sql);
	$query->execute([$get_id]);
	header('Location: '. $_SERVER['HTTP_REFERER']);
}

