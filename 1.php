<?php
	function deskripsi(){
	$myjs = array (
	"name"    => "Hamdan Hamdani",
	"address" => "Kp Babakan Kab Bandung",
	"hobbies" => array ("Sepakbola","Bulutangkis"),
	"is_married"=>false,
	"school" => array ("highschool" => "SMK Teknologi Industri Pembangunan "),
    "skills" => array ("web programming" => array ("HTML","CSS","JAVASCRIPT","PHP"),
                        "framework" => array ("BOOTSTRAP")
                )
	);
	$json = json_encode($myjs);
	return $json;
	}
	echo deskripsi();
	
?>