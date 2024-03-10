<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('location: index.php');
    exit();
}
require 'db_connect.php';

$sql = "select seats fromactivites where id={$FET['id']}";
$result = $conn->query($sql);
if($row = result->fatch_assoc()&& $row['seats']> 0 ) {
}
$coon->begin_transaction();
try {
    $sal = "insert into enrollments (stu_id, act_id)
        values (?,?)";
        $stm = $conn->prepare($sql);
        $stm->bind_param('si',$_SESSION['user']['id'],$_GET['id']);
        $stm->execute();
        $sql = "update activities set seats=sets-1 where id= {$_GET['id']}";
        $stm = $conn->prepare('1',$_GET['id']);
        $stm->execute();
        $conn->commit();
        }
        catch (Exception) {
            $conn->rollback();
            $resp = ['status'=> 'error','message'=>' Opreration error'];
        }
else {
        $resp = ['status'=> 'error','message'=>' Please check activity again']; 
}
echo json_encode($resp);