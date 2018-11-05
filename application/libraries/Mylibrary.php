<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//date format
date_default_timezone_set('Asia/Jakarta');

class Mylibrary{

	//Size
	function size($path) {
	    $bytes = sprintf('%u', filesize($path));
		    if ($bytes > 0){
		        $unit = intval(log($bytes, 1024));
		        $units = array('B', 'KB', 'MB', 'GB');

		        if (array_key_exists($unit, $units) === true) {
		            return sprintf('%d %s', $bytes / pow(1024, $unit), $units[$unit]);
		        }
		    }
	    return $bytes;
	}

	//seoTitle
	function seoTitle($s) {
	    $c = array (' ');
	    $d = array ('-','/','\\',',','.','#',':',';','\'','"','[',']','{','}',')','(','|','`','~','!','@','%','$','^','&','*','=','?','+','–');
	    $s = str_replace($d, '', $s); // Hilangkan karakter yang telah disebutkan di array $d
	    $s = strtolower(str_replace($c, '-', $s)); // Ganti spasi dengan tanda - dan ubah hurufnya menjadi kecil semua
	    return $s;
	}

	//kdauto
	function kdauto($tabel, $inisial) {
		$struktur = mysql_query("SELECT * FROM $tabel");
		$field = mysql_field_name($struktur,0);
		$panjang = mysql_field_len($struktur,0);
		
		$qry = mysql_query("SELECT max(".$field.") FROM ".$tabel);
		$row = mysql_fetch_array($qry);
		if ($row[0] == "") {
			$angka = 0;
		}
		else {
			$angka = substr($row[0], strlen($inisial));
		}
		
		$angka++;
		$angka = strval($angka);
		$tmp ="";
		for ($i = 1; $i <= ($panjang-strlen($inisial)-strlen($angka)); $i++) {
				$tmp = $tmp."0";
		}
		return $inisial.$tmp.$angka;
	}

	//autolink
	function autolink($str) {
	  $str = eregi_replace("([[:space:]])((f|ht)tps?:\/\/[a-z0-9~#%@\&:=?+\/\.,_-]+[a-z0-9~#%@\&=?+\/_.;-]+)", "\\1<a href=\"\\2\" target=\"_blank\">\\2</a>", $str); //http
	  $str = eregi_replace("([[:space:]])(www\.[a-z0-9~#%@\&:=?+\/\.,_-]+[a-z0-9~#%@\&=?+\/_.;-]+)", "\\1<a href=\"http://\\2\" target=\"_blank\">\\2</a>", $str); // www.
	  $str = eregi_replace("([[:space:]])([_\.0-9a-z-]+@([0-9a-z][0-9a-z-]+\.)+[a-z]{2,3})","\\1<a href=\"mailto:\\2\">\\2</a>", $str); // mail
	  $str = eregi_replace("^((f|ht)tp:\/\/[a-z0-9~#%@\&:=?+\/\.,_-]+[a-z0-9~#%@\&=?+\/_.;-]+)", "<a href=\"\\1\" target=\"_blank\">\\1</a>", $str); //http
	  $str = eregi_replace("^(www\.[a-z0-9~#%@\&:=?+\/\.,_-]+[a-z0-9~#%@\&=?+\/_.;-]+)", "<a href=\"http://\\1\" target=\"_blank\">\\1</a>", $str); // www.
	  $str = eregi_replace("^([_\.0-9a-z-]+@([0-9a-z][0-9a-z-]+\.)+[a-z]{2,3})","<a href=\"mailto:\\1\">\\1</a>", $str); // mail
	  return $str;
	}

	//anti_injection
	function anti_injection($data) {
	  $filter = stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES)));
	  return $filter;
	}
	
}
