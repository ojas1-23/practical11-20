<?php 
if(isset($_COOKIE['discount'])){
    echo"your 10-minute offer has expired.";
}else{$count=1;
   setcookie("discount","active",time()+ 600);
    echo"welcome!You get a special discount valid for 10-minutes only.";
     
}
?>