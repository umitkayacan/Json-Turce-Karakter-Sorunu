<?php 

function json_Duzelt($str)
{
	$json_karakterler = array("u00fc","u011f","u0131","u015f","u00e7","u00f6","u00dc","u011e","u0130","u015e","u00c7","u00d6");
	$tr_karakterler = array("ü","ğ","ı","ş","ç","ö","Ü","Ğ","İ","Ş","Ç","Ö");
	$turkce = str_replace($json_karakterler, $tr_karakterler, $str);
	return $turkce;
}

$array = array(
    "baslik" => "Deneme öçşiğü",
    "icerik" => "ğüşiöç ÖÇŞİĞÜ"
);

/*
ÇIKTISI 
{"baslik":"Deneme \u00f6\u00e7\u015fi\u011f\u00fc","icerik":"\u011f\u00fc\u015fi\u00f6\u00e7 \u00d6\u00c7\u015e\u0130\u011e\u00dc"}
*/

$json_verisi='{"baslik":"Deneme \u00f6\u00e7\u015fi\u011f\u00fc","icerik":"\u011f\u00fc\u015fi\u00f6\u00e7 \u00d6\u00c7\u015e\u0130\u011e\u00dc"}';
$tumveriler=json_decode($json_verisi);
echo json_Duzelt ($tumveriler->baslik);











?>