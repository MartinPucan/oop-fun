<?php

class Circle
{
	private string $image;

	public function generateImage()
	{
		$image = imagecreatetruecolor(255, 255);
	}

	public function createColor()
	{
		$white = imagecolorallocate($image, 255, 255, 255);
	}
	public function fillCircle()
	{
		imageellipse($image, 128, 128, 200, 200, $white);
	}
	public function saveImage()
	{
		imagepng($image, 'circle.png');
	}
	public function destroyImageHandler()
	{
		imagedestroy($image);
	}
}

$circle = new Circle();
var_dump($circle);
