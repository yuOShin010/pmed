<?php
require_once('database.php');
$pdo = $classQa->openConnection();


    if(isset($_POST['si_upload'])){

        
        $title = $_POST['si_title'];

        $pdf = $_FILES['si_file']['name'];
        $pdf_type = $_FILES['si_file']['type'];
        $pdf_size = $_FILES['si_file']['size'];
        $pdf_temp_loc = $_FILES['si_file']['tmp_name'];
        $pdf_store = "../pdf/".$pdf;

        move_uploaded_file($pdf_temp_loc, $pdf_store);

        $sql = "INSERT INTO qa_registry_pdf (title , pdf_file) VALUES (?,?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$title, $pdf]);

        if($stmt){
            $lastId = $pdo->lastInsertId();
            if($lastId){
                $code = rand(1,99999);
                $surveyCode = "SI-".$code."-".$lastId;
                $sql = "UPDATE qa_registry_pdf SET survey_code = ? WHERE id_si = ? ";
                $stmt = $pdo->prepare($sql);
                $stmt->execute([$surveyCode, $lastId]);


                header("Location: ../pmed-RegistryManagement.php");
                // echo ("<script LANGUAGE='JavaScript'> window.alert('SUCCESS REGISTRY');
                // window.location.href='../pmed-RegistryManagement.php'; </script>");
            }
        }

        

    }