<?php
/**
 * Created by PhpStorm.
 * User: aminur
 * Date: 2/23/21
 * Time: 11:31 PM
 */

session_start();
include('includes/dbconfig.php');

if (isset($_POST['save_push_data']))
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $data = array(
        'username' => $username,
        'email' => $email,
        'phone' => $phone
    );

    $ref = 'contact/';
    $postData = $database->getReference($ref)->push($data);

    if ($postData){
        $_SESSION['status'] = 'Data Inserted Successfully';
        header("Location: index.php");
    }else{
        $_SESSION['status'] = 'Data not Inserted. Something went wrong';
        header("Location: index.php");
    }
}

if (isset($_POST['update_data']))
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $token = $_POST['token'];

    $data = array(
        'username' => $username,
        'email' => $email,
        'phone' => $phone
    );

    $ref = 'contact/'.$token;
    $postData = $database->getReference($ref)->update($data);

    if ($postData){
        $_SESSION['status'] = 'Data Updated Successfully';
        header("Location: index.php");
    }else{
        $_SESSION['status'] = 'Data not Updated. Something went wrong';
        header("Location: index.php");
    }
}

if (isset($_POST['delete_data']))
{
    $token = $_POST['ref_delete_token'];

    $ref = "contact/".$token;
    $deleteData = $database->getReference($ref)->remove();

    if ($deleteData){
        $_SESSION['status'] = 'Data Deleted Successfully';
        header("Location: index.php");
    }else{
        $_SESSION['status'] = 'Data not Deleted. Something went wrong';
        header("Location: index.php");
    }
}