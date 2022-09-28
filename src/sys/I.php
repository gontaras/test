<?php
class I {
	public static $x = 'x'; // prefix for translate table 
	public static $langs = ['ru', 'uk', 'en'];
	public static $lang = 'ru';
	public static $cats = [];
	
	public static function translit($str) {
		$converter = [
			'а' => 'a',    'б' => 'b',    'в' => 'v',    'г' => 'g',    'д' => 'd',
			'е' => 'e',    'ё' => 'e',    'ж' => 'zh',   'з' => 'z',    'и' => 'i',
			'й' => 'y',    'к' => 'k',    'л' => 'l',    'м' => 'm',    'н' => 'n',
			'о' => 'o',    'п' => 'p',    'р' => 'r',    'с' => 's',    'т' => 't',
			'у' => 'u',    'ф' => 'f',    'х' => 'h',    'ц' => 'c',    'ч' => 'ch',
			'ш' => 'sh',   'щ' => 'sch',  'ь' => '',     'ы' => 'y',    'ъ' => '',
			'э' => 'e',    'ю' => 'yu',   'я' => 'ya',
		];
		
		$str = mb_strtolower($str);
		$str = strtr($str, $converter);
		$str = mb_ereg_replace('[^-0-9a-z]', '-', $str);
		$str = mb_ereg_replace('[-]+', '-', $str);
		$str = trim($str, '-');
		
		return $str;
	}
	public static function init() {
		self::initCats();
	}
	
}

