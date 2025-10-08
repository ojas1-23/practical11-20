<?php if(isset($_COOKIE['username'])){
    echo"Welcome back".$_COOKIE['username'];
}else{
     if(isset($_POST['name'])){
        $name=$_POST['name'];
        setcookie('username',$name,time()+3600*24);
        echo"hello $name! please refresh the page.";
     }else{
        echo'<form method="post">
        Enter your name:<input type="text" name="name">
        <input type="submit" value="Submit">
        </form>';
     }
     
}
?>