<?php
	define('DB_SERVER', 'localhost');
    define('DB_PORT', '3306');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_DATABASE', 'textboon');
    $domain = "http://192.168.0.110/ntext/";
    /*define('DB_SERVER', 'localhost');
    define('DB_PORT', '3306');
    define('DB_USERNAME', 'bboqejmy_blablau');
    define('DB_PASSWORD', 'Rohit2910@.');
    define('DB_DATABASE', 'bboqejmy_textboon');*/
    $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE,DB_PORT); 
	function get_result( $Statement ) {
	    $RESULT = array();
	    $Statement->store_result();
	    for ( $i = 0; $i < $Statement->num_rows; $i++ ) {
	        $Metadata = $Statement->result_metadata();
	        $PARAMS = array();
	        while ( $Field = $Metadata->fetch_field() ) {
	            $PARAMS[] = &$RESULT[ $i ][ $Field->name ];
	        }
	        call_user_func_array( array( $Statement, 'bind_result' ), $PARAMS );
	        $Statement->fetch();
	    }
	    return $RESULT;
	}  
	
	function executeQuery($db,$query,$param) {
		$stmt = $db->prepare($query);
		if($param != null){
			
			$tmp = array();
			foreach($param as $key => $value){
				$tmp[$key] = &$param[$key];
			}
			call_user_func_array(array($stmt, 'bind_param'), $tmp);
		}
         
		mysqli_stmt_execute($stmt);
		$result = get_result($stmt);
		$stmt->close();
		return $result;
	}

	function executeUpdate($db,$query,$param) {
		$stmt = $db->prepare($query);
		$tmp = array();
		foreach($param as $key => $value){
			$tmp[$key] = &$param[$key];
		}
		call_user_func_array(array($stmt, 'bind_param'), $tmp);
		mysqli_stmt_execute($stmt);
		mysqli_stmt_store_result($stmt);
		$result = mysqli_affected_rows($db);
		$stmt->close();
		return $result;
	}
  function encrypt_string($encrypt){
    $key="84FA921EF8590556DFADD674EABEE508AF39D5DB07F95372E92356093E76827E";
    $encrypt = serialize($encrypt);
    $iv = mcrypt_create_iv(mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_CBC), MCRYPT_DEV_URANDOM);
    $key = pack('H*', $key);
    $mac = hash_hmac('sha256', $encrypt, substr(bin2hex($key), -32));
    $passcrypt = mcrypt_encrypt(MCRYPT_RIJNDAEL_256, $key, $encrypt.$mac, MCRYPT_MODE_CBC, $iv);
    $encoded = base64_encode($passcrypt).'|'.base64_encode($iv);
    return $encoded;
  }
  function decrypt_string($decrypt){
    $key="84FA921EF8590556DFADD674EABEE508AF39D5DB07F95372E92356093E76827E";
    $decrypt = explode('|', $decrypt.'|');
    $decoded = base64_decode($decrypt[0]);
    $iv = base64_decode($decrypt[1]);
    if(strlen($iv)!==mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_CBC)){ return false; }
    $key = pack('H*', $key);
    $decrypted = trim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, $key, $decoded, MCRYPT_MODE_CBC, $iv));
    $mac = substr($decrypted, -64);
    $decrypted = substr($decrypted, 0, -64);
    $calcmac = hash_hmac('sha256', $decrypted, substr(bin2hex($key), -32));
    if($calcmac!==$mac){ return false; }
    $decrypted = unserialize($decrypted);
    return $decrypted;
  }
  	function getQueryData($query, $columns, $searchIndexes, $searchStrings, $sortIndex, $sortOrders) {
    $query = " select * from ( " . $query . "  ) WRAPPED";
    if (sizeof($searchIndexes) > 0) {
       $query." WHERE ";
    }
    $i = 0;
    $tmpsize = strlen($searchIndexes) ? count(explode(',', $searchIndexes)) : 0;
    while ($i < $tmpsize) {
      $query.$columns[$searchIndexes[$i]]." LIKE '%".$searchStrings[$i]."%' ";
      if ($i < $tmpsize - 1) {
        $query." AND ";
      }
      ++$i;
    }
    $query." ORDER BY ".$columns[$sortIndex];
      if ($sortOrders == 1) {
        $query." DESC ";
      }
    return $query;
  }
  function getQueryCount($query, $columns, $searchIndexes, $searchStrings) {
    $query = " select * from ( " . $query . "  ) WRAPPED";
    if (sizeof($searchIndexes) > 0) {
        $query." WHERE ";
    }
    $i = 0;
    $tmpsize = strlen($searchIndexes) ? count(explode(',', $searchIndexes)) : 0;
    while ($i < $tmpsize) {
        $query.$columns[$searchIndexes[$i]]." LIKE '%".$searchStrings[$i]."%' ";
        if ($i < $tmpsize - 1) {
            $query." AND ";
        }
        ++$i;
    }
    return $query;
  }
    
  
?>