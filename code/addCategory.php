<?php
   header('Access-Control-Allow-Origin: *');
   require_once 'code/config.php';
      $category=$_POST['Category'];
      $query="INSERT INTO category (CAT_NAME) VALUES(?)";
      $result=executeUpdate($db,$query,array('s',$category));
      $lid=$db->insert_id;
      if($result >= 0) {
         mysqli_commit($db);
         echo $lid;
      }else {
         echo "error";
      }
?>