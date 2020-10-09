<?php 



function upload_image($img)
{
	if(is_array($img)) {


		$file = $img['image']['tmp_name']; 
		$sourceProperties = getimagesize($file);
		$fileNewName = time();
		$folderPath = "upload/";
		$ext = pathinfo($img['image']['name'], PATHINFO_EXTENSION);
		$imageType = $sourceProperties[2];

		var_dump($file);
		die();

		switch ($imageType) {

			case IMAGETYPE_PNG:
			$imageResourceId = imagecreatefrompng($file); 
			$targetLayer = imageResize($imageResourceId,$sourceProperties[0],$sourceProperties[1]);
			imagepng($targetLayer,$folderPath. $fileNewName. ".". $ext);
			break;


			case IMAGETYPE_GIF:
			$imageResourceId = imagecreatefromgif($file); 
			$targetLayer = imageResize($imageResourceId,$sourceProperties[0],$sourceProperties[1]);
			imagegif($targetLayer,$folderPath. $fileNewName. ".". $ext);
			break;


			case IMAGETYPE_JPEG:
			$imageResourceId = imagecreatefromjpeg($file); 
			$targetLayer = imageResize($imageResourceId,$sourceProperties[0],$sourceProperties[1]);
			imagejpeg($targetLayer,$folderPath. $fileNewName. ".". $ext);
			break;


			default:
			echo "Invalid Image type.";
			exit;

			die();
			break;
		}


		return $folderPath. $fileNewName. ".". $ext;
	}


	die("error");

}



function imageResize($imageResourceId,$width,$height) {


    $targetWidth =400;
    $targetHeight =400;


    $targetLayer=imagecreatetruecolor($targetWidth,$targetHeight);
    imagecopyresampled($targetLayer,$imageResourceId,0,0,0,0,$targetWidth,$targetHeight, $width,$height);


    return $targetLayer;
}