<?php


$con = new mysqli('localhost','root','','icecream_db');

       if(!$con){

           die.(mysqli.error($con));
       }
      
       function unique_id(){

        $char ='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charLength = strlen($char);
        $randomString =' ';
          for($i=0;$i<20;$i++){
            $randomString.=$char[mt.rand(0,$charLength - 1)];
          }
          return $randomString;
       }

?>

