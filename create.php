
<?php



include_once ('lib/application.php');

echo "<pre>";
print_r($_POST);
echo "</pre>";

echo "<pre>";
print_r($_SESSION);
echo "</pre>";


if(!array_key_exists('myemails', $_SESSION)){
$_SESSION['myemails']= array();
}


if(array_key_exists('email', $_POST) && !empty($_POST['email'])){
$_SESSION['myemails'][]  =  $_POST;

}
 else {
    echo "Not Defined";
     }
     
     header('location:index.php');
     
   //  header("location:index.php?email=".$_POST["email"]);
    ?>
