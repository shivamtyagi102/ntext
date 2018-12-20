<?php
   
   header('Access-Control-Allow-Origin: *');
   require_once 'code/config.php';
    { 
      $email = $_POST["Email"] ;
      $password = $_POST["Password"] ;
      $query2="SELECT STATUS FROM userdetail WHERE EMAIL=?";
      $result2=executeQuery($db,$query2,array('s',$email));
      $count2=count($result2);
      if($count2 >0) {
        if($result2[0]['STATUS']==0){
          echo "deactivated";
           return;
        }
      }else {
        
      }

      $query="SELECT USER_ID,EMAIL,NAME FROM userdetail WHERE EMAIL = ? AND PASSWORD = ?";
      $result=executeQuery($db,$query,array('is',$email,$password));
      $count = count($result);
      if($count >0) {
        while ($row = array_shift($result)) {
           $id=$row['USER_ID'];
           $name=$row['NAME'];
        }
        $cookievariable = 'textboon'.'@#'.$id.'@#'.$name;
        $maincookie = encrypt_string($cookievariable);
        setcookie('main', $maincookie, time() + (86400 * 30), "/"); 
        echo $id;
      }else {
         echo "false";
      }
    }
?>