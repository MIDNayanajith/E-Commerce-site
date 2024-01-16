<?php
        
        if(isset($success_msg)){

            foreach($success_msg as $success_msg){

                echo '<script>swal(" '.$success_msg.'" ,"","success");</script>>'
            }
        }

        if(isset($warning_msg)){

            foreach($warning_msg as $warning_msg){

                echo '<script>swal(" '.$warning_msg.'" ,"","warning");</script>>'
            }
        }

        if(isset($info__msg)){

            foreach($info__msg as $info__msg){

                echo '<script>swal(" '.$info__msg.'" ,"","info");</script>>'
            }
        }

        if(isset($error__msg)){

            foreach($error__msg as $error__msg){

                echo '<script>swal(" '.$error__msg.'" ,"","error");</script>>'
            }
        }






?>