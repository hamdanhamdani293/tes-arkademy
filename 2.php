<?php	
// blok fungsi
        function is_username_valid($username){
            return preg_match('/^[a-z]{8,8}$/i',$username);
        }
		function is_password_valid($pass) {
			return preg_match('/^[a-zA-Z0-9\S]{8,8}$/i',$pass) ;
		}
   
// Cara menggunakan fungsi di atas
//  menggunakan fungsi untuk cek username
     if (is_username_valid('userokeu')){
         echo 'Username is valid';
     }else{
         echo 'Username is invalid';
     }
     echo '<br>';
//  menggunakan fungsi untuk cek password
	 if (is_password_valid("qazW_123")) {
         echo "Password Is Valid " ;
     } else {
         echo "Password Is Invalid" ;
     }
?>