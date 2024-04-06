<?php  
include('connection.php');
if(isset($_POST['submit'])){
   echo  $insert="INSERT into `loan_data` (`iam`,`my_prof`,`loan_upto`,`ann_turnover`,
    `ann_profit`,`practicing`,`itr`,`exi_emi`,`my_office`,`my_house`,`account_type`,`curret_res`,
    `gendor`,`first_name`,`last_name`,`dob`,`mno`,`email`)
    values('".$_POST['iam']."','".$_POST['my_prof']."','".$_POST['loan_upto']."','".$_POST['ann_turnover']."','".$_POST['ann_profit']."',
    '".$_POST['practicing']."','".$_POST['itr']."','".$_POST['exi_emi']."','".$_POST['my_office']."','".$_POST['my_house']."',
    '".$_POST['account_type']."','".$_POST['curret_res']."','".$_POST['gendor']."','".$_POST['first_name']."','".$_POST['last_name']."',
    '".$_POST['dob']."','".$_POST['mno']."','".$_POST['email']."')";
    $query=mysqli_query($conn,$insert);
    if($query){
        echo "<p>Saved</p>";
    }else{
        echo "<p>not</p>";
    }
}
?>