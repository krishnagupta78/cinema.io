<<<<<<< HEAD
<?php

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $subject=$_POST['subject'];
    $mailFrom=$_POST['mail'];
    $message=$_POST['message'];
    
    
    $mailTo="gupttakrisshnaaa@outlook.com";
    $headers="From:".$mailFrom;
    $txt="You have receivedan email from".$name".\n\n".$message;
    
    mail($mailTo, $subject, $txt, $headers)
        header(echo "hey, you have sucessfully submitted your message");
=======
<?php

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $subject=$_POST['subject'];
    $mailFrom=$_POST['mail'];
    $message=$_POST['message'];
    
    
    $mailTo="gupttakrisshnaaa@outlook.com";
    $headers="From:".$mailFrom;
    $txt="You have receivedan email from".$name".\n\n".$message;
    
    mail($mailTo, $subject, $txt, $headers)
        header(echo "hey, you have sucessfully submitted your message");
>>>>>>> 1d1c0a27688f922868dc0015ee9e2160203408bd
}