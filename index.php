<?php  
$user = $_GET["user"];  
$file = $_GET["file"];  
$pass = $_GET["pass"];  
//亲。这是一道原题,
if(isset($user)&&(file_get_contents($user,'r')==="administrator")){  
    echo "hello Administrator!<br>";  
    if(preg_match("/flag/",$file)){  
        exit();  
    }else{  
        include($file); //class.php  
        $pass = unserialize($pass);  
        echo $pass;  
    }  
}else{  
    echo "not allowed!";  
}  
?>
