<?php session_start();
include('db_connect/online_test_json_angular_db_connect.php');

if(isset($_POST['submit']))
   {

    $organization_id = $_POST['organization_id'];
    $class_id = $_POST['class_id'];
    $subject_id = $_POST['subject_id'];

    

    $_SESSION['organization_id_for_fetch_exam'] = $organization_id;
    $_SESSION['class_id_for_fetch_exam'] = $class_id;
    $_SESSION['subject_id_for_fetch_exam'] = $subject_id;

    echo "<script>location.href='start_test.php'</script>";
   }
?>