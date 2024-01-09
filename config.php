<?php
$server="localhost";
$username='root' ;
$password='';
$database='jobs';

$conn= mysqli_connect($server,$username,$password,$database);

if($conn->connect_error)
{
    die("connection failed:".$conn->connect_error);

}
echo"";

if (isset($_POST['submit'])) {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $number=$_POST['phone_no'];
    $password=$_POST['password'];

    $sql="INSERT INTO `users`(`name`,`email`,`password`,`phone_no`)VALUES ($name,$email,$password,$number)";
    if (mysqli_query($conn,$sql)) {
    echo "rocords inserted sucessfully.";
        
    }
    else {
        echo "ERROR: could not able to execute $sql." . mysqli_error($conn);
    }
    
}
session_start();
if(isset($_POST['login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];

    $query="SELECT * FROM users WHERE `email`='$email' AND `password`='$password'";
    $result=mysqli_query($conn,$query);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    if (mysqli_num_rows($result)==1) {
        header("location:dashboard.php");
        # code...
    }
    else {
        $error='emailid or password is incorrect';
    }
}
if (isset($_POST['job'])){
    $cname=$_POST['cname'];
    $pos=$_POST['pos'];
    $jdesc=$_POST['jdesc'];
    $skills=$_POST['skills'];
    $CTC=$_POST['CTC']; 

    $sql="INSERT INTO `jobs`(`cname`, `position`, `jdesc`, `skills`, `CTC`) VALUES ('$cname','$pos`,'$jdesc','$skills','$CTC')";
    mysqli_query($conn,$job);}
    if (isset($_post['submit'])) {
        $name=$_POST['name'];
        $qual=$_POST['qual'];
        $apply=$_POST['apply'];
        $year=$_POST['year'];
        $sql="INSERT INTO `candidates`( `name`, `apply`, `qual`, `year`) VALUES ('$name','$apply','$qual','$year')";
        var_dump($sql);
        die();
        mysqli_query($conn,$sql);
    }
    // if (mysqli_query($conn,$sql)) {
//         echo "new job posted";
        
//     }
//     else{
//         echo "ERROR: failed to post the job $sql." . mysqli_error($conn);
//     }
    
// } 
// mysqli_close($conn);
?>








    


