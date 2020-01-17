<?php 
$conn=mysqli_connect('localhost','root','','foodcorner');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if(isset($_POST['username'])){
    
    $name=$_POST['username'];
    $pass=$_POST['password'];
  
    $sql="select * from usertable where name='".$name."' limit 1";
    
    $result=mysqli_query($conn,$sql); 
    if(mysqli_num_rows($result)==1){
                    echo '<script language="javascript">';
        			echo 'alert("same username already exists")';
        			echo '</script>';  
        			echo '<Script language="javascript">';
			        echo 'window.location = "login.php" ';
			        echo '</script>';
                    
    }
    else{
        echo '<script language="javascript">';
        echo 'alert("registration sucessfull")';
        echo '</script>';
        echo '<Script language="javascript">';
        echo 'window.location = "login.php" ';
        echo '</script>';
      
        exit();
    }
        
}
?>