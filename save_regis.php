<?php

include "include/include_db_oo.php";

$prefix=$_POST["prefix"];
$firstName=$_POST["firstName"];
$lastName=$_POST["lastName"];
$mail=$_POST["email"];
$password=$_POST["password"];
$dob=$_POST["dob"];
$gender=$_POST["gender"];
$studentId=$_POST["studentId"];
$phoneNumber=$_POST["phoneNumber"];
$address=$_POST["address"];

$options = [
    'cost' => 10,
];

$password = password_hash($password,  PASSWORD_BCRYPT, $options);

$sql_mail = "SELECT users_mail
            FROM users
            WHERE users_mail = '$mail'";
$result_mail=get_data($conn,$sql_mail);

if(count($result_mail)==0){
echo count($result_mail);
$sql = "INSERT INTO users (users_prefix, users_name, users_lastname, 
        users_mail, users_password, users_date,
        users_sex, users_code, users_phone, 
        users_add)
VALUES ('$prefix', '$firstName', '$lastName', 
      '$mail', '$password', '$dob', 
      '$gender', '$studentId', '$phoneNumber', 
      '$address')";
if($conn->query($sql)===TRUE){
    echo"บันทึกสำเร็จ";
}else{
    echo"บันทึกข้อมูลมีปัญหากรุณาติดต่อ Admin";
}
}else{
    echo"E-mailที่ใช้ในการสมัครซ้ำกับข้อมูลที่มี";
}
?>