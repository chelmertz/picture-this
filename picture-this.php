<?php

class PictureThis {

	const DEFAULT_BG = '#000';
	const DEFAULT_FG = '#FFF';
	const DEFAULT_H = 100;
	const DEFAULT_W = 200;

	private static function _getRgb($color) {
		$color = str_replace('#', null, $color);
		if(strlen($color) == 3) {
			$r = substr($color, 0, 1);
			$g = substr($color, 1, 1);
			$b = substr($color, 2, 1);
			$color = $r.$r.$g.$g.$b.$b;
		}
		$rgb = array(
			'r' => hexdec(substr($color, 0, 2)),
			'g' => hexdec(substr($color, 2, 2)),
			'b' => hexdec(substr($color, 4, 2))
		);
		return $rgb;
	}

	public static function display(array $options = array()) {
		$width = self::DEFAULT_W;
		if(isset($options['w']) && is_numeric($options['w']) && $options['w'] > 0) {
			$width = $options['w'];
		}

		$height = self::DEFAULT_H;
		if(isset($options['h']) && is_numeric($options['h']) && $options['h'] > 0) {
			$height = $options['h'];
		}

		$image = imagecreate($width, $height);

		$text = "$width x $height";
		if(isset($options['t']) && $options['t']) {
			$text = $options['t'];
		}

		$bg = self::DEFAULT_BG;
		if(isset($options['bg'])) {
			$bg = $options['bg'];
		}
		$bg = self::_getRgb($bg);
		$bg_color = imagecolorallocate($image, $bg['r'], $bg['g'], $bg['b']);

		$fg = self::DEFAULT_FG;
		if(isset($options['fg'])) {
			$fg = $options['fg'];
		}
		$fg = self::_getRgb($fg);
		$fg_color = imagecolorallocate($image, $fg['r'], $fg['g'], $fg['b']);


		imagestring($image, 9, 10, 5, $text, $fg_color);
		header("Content-Type: image/png");
		imagepng($image);
		imagedestroy($image);
	}

}

PictureThis::display(!empty($_GET) ? $_GET : array());
