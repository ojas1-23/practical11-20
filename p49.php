<?php 
if(isset($_COOKIE['visits'])){
    $count=$_COOKIE['visits']+1;
    setcookie('visits',$count,time()+ 3600*24);
    echo"you have visited this page $count times.";
}else{$count=1;
   setcookie('visits',$count,time()+ 3600*24*30);
    echo"this is your first vist";

     
}
?>