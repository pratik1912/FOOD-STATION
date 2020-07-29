<?php
$db_host="localhost";
$db_user="root";
$db_pass="";
$db_name="food";

$db =  mysqli_connect($db_host,$db_user,$db_pass,$db_name);

?>


<?php 

  if(isset($_POST['send']))
  {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

        $sql="INSERT INTO data(NAME , EMAIL , MESSAGE) VALUES('$name','$email','$message')";
        $result=$db->query($sql);
    

      if($result=== TRUE)
      {
    
         echo '<script type="text/javascript">';
         echo ' alert("Responce send.")';
         echo '</script>';
    
      }

      else
      {
         alert("There is a problem.");
      }

  }
?>