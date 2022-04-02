<?php
include_once '../database.php';
include '../functions.php';
$id = $_GET['id'];

$sqlget = "SELECT * FROM `sliders` WHERE `id`='" . $id . "'";
$alldata = mysqli_fetch_assoc(mysqli_query($conn, $sqlget));
@unlink(gethost().$alldata['img']);
// print_r( gethost().$alldata['img']);
// exit;
$sqlget = "DELETE FROM sliders WHERE id='" . $id . "'";
if (mysqli_query($conn, $sqlget)) {
    header('Location: slider_list.php?code=200&message=Record deleted successfully.');
  } else {
    $error= "Error deleting record: " . mysqli_error($conn);
    header('Location: slider_list.php?code=400&message='.$error);
  }
?>