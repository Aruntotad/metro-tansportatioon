<?php   
    include('c.php');
    session_start();

    if(isset($_POST['submit'])) {  
    $cardno = $_POST['cardno'];
    $uname = $_POST['uname'];
    $exp = $_POST['exp'];
    $cvc = $_POST['cvc'];
    $amt = $_POST['amt'];  
     $sql = "INSERT INTO `payment`(`card_no`, `username`, `exp_date`, `cvc`, `amount`) VALUES ('$cardno', '$uname','$exp','$cvc','$amt')";
     $result = mysqli_query($conn,$sql);
       $sql1 = "UPDATE users SET `amount`=amount+'$amt' WHERE username='$uname' ";
         $result1 = mysqli_query($conn,$sql1);
               if(!$result)
               {
                header("location:payment.php?err=1");
               }
               else
               {
                header("location:payment.php?succ=1");
               }
    }
    ?>