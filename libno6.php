<?php
//koneksi database
$conn = mysqli_connect("localhost","root","","db_quickcount");
function query($query){
		global $conn;
		$res = mysqli_query($conn, $query);
		$row = [];
		while($row = mysqli_fetch_array($res)){
			$rows[] = $row;
		}
		return $rows;
}
?>