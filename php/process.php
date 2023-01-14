<?php
require_once('database.php');
$pdo = $classQa->openConnection();

if(isset($_POST['save_data'])){

    $fname = $_POST['fname'];
    $sname = $_POST['sname'];
    $position = $_POST['position'];
    $email = $_POST['email'];
    // $contact = $_POST['contact'];


    if(($_FILES['picture']['name']) AND !empty($_FILES['picture']['name'])) {
         
         
         $img_name = $_FILES['picture']['name'];
         $tmp_name = $_FILES['picture']['tmp_name'];
         $error = $_FILES['picture']['error'];
         
         if($error === 0){
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_to_lc = strtolower($img_ex);

            $allowed_exs = array('jpg', 'jpeg', 'png');
            if(in_array($img_ex_to_lc, $allowed_exs)){
               $new_img_name = uniqid($fname, true).'.'.$img_ex_to_lc;
               $img_upload_path = '../assets/profile'.$new_img_name;
               move_uploaded_file($tmp_name, $img_upload_path);

               // Insert into Database
               $sql = "INSERT INTO qa_profiling(fname, sname, position, email, profile_pic ) 
                 VALUES(?,?,?,?,?,?)";
               $stmt = $pdo->prepare($sql);
               $stmt->execute([$fname, $sname, $position, $email, $new_img_name]);

            //    header("Location: ../index.php?success=Your account has been created successfully");
            //     exit;
                echo ("<script LANGUAGE='JavaScript'> window.alert('SUCCESS UPDATE PROFILE');
                window.location.href='../pmed-RegistryManagement.php'; </script>");

            }
        }
    }
}