<?
	$thb = "_thb_";
	$image = $name.$_FILES["filUpload"]["name"][$i];
	$images = $image;
	$new_images = $path.$thb.$images;
	$width = 100; //*** Fix Width & Heigh (Autu caculate) ***//
	$size = GetimageSize($images);
	$height = round($width*$size[1]/$size[0]);
	$images_orig = ImageCreateFromJPEG($images);
	$photoX = ImagesX($images_orig);
	$photoY = ImagesY($images_orig);
	$images_fin = ImageCreateTrueColor($width, $height);
	ImageCopyResampled($images_fin, $images_orig, 0, 0, 0, 0, $width+1, $height+1, $photoX, $photoY);
	ImageJPEG($images_fin,$new_images);
	ImageDestroy($images_orig);
	ImageDestroy($images_fin);
?>