<?php
include "koneksi.php";
require "FaceDetector.php";
use svay\FaceDetector;

$fileName=$_FILES['gambar']['name'];
$fileSize=$_FILES['gambar']['size'];
$fileError=$_FILES['gambar']['error'];
$fileImage=$_FILES['gambar']['tmp_name'];

$faceDetect=new FaceDetector();
$faceDetect->faceDetect($fileImage);
$faceDetect->toJpeg();
if($fileSize > 0 || $fileError == 0){
	$move=move_uploaded_file($fileImage,'image/'.$fileName);
	
	$isi=mysqli_query($con,"insert into face(idFace,gambar) values (null,'image/$fileName')");
}	
?>