
<?php
// Unsets all session variables

session_start(); 
// session_unset();
include('connection.php');



if(isset($_POST['userbtn'])){
$email = $_POST['gesemail'];
$pass = $_POST['gespass'];

$query = mysqli_query($mysqli,"SELECT * FROM registration WHERE Email='$email' AND Passwoord='$pass' AND (Roll='user' OR Roll IS NULL)");
$row = mysqli_fetch_assoc($query);
if($row){
  
    $_SESSION['usernmae']=$row['First_name'];
    $_SESSION['useremail']=$row['Email'];
    echo "<script>alert ('cart added succsecfully')</script>";
    echo "<script>window.location.href='index.php'</script>";
    
}else{
    echo "Invalid Email or Password";
}



}

if (isset($_POST['addpro'])) {
    if (isset($_SESSION['cart'])) {
        $count = count($_SESSION['cart']);
        $_SESSION['cart'][$count] = array(
            'pid' => $_POST['proid'],
            'pname' => $_POST['proname'],
            'pds' => $_POST['prods'],
            'pqty' => $_POST['quantity'],
            'pprice' => $_POST['propr'],
            'pimg' => $_POST['proimg']
        );
        echo "<script>alert ('cart added succsecfully');
        location.assign('index.php')</script>";
    } else {
        $_SESSION['cart'][0] = array(
            'pid' => $_POST['proid'],
            'pname' => $_POST['proname'],
            'pds' => $_POST['prods'],
            'pqty' => $_POST['quantity'],
            'pprice' => $_POST['propr'],
            'pimg' => $_POST['proimg']
        );
        echo "<script>alert ('cart added succsecfully');
        location.assign('index.php')</script>";
    }
}
?>