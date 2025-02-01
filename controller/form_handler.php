<?php 
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $form_nama = $_POST["form_nama"]; 
        $form_saran = $_POST["form_saran"];

        if(empty($form_nama) && empty($form_saran)){
            header("location: ../pages/index.php?errors=all");
            exit();
        }

        if(empty($form_nama)){
            header("location: ../pages/index.php?errors=nama");
            exit();
        }

        if(empty($form_saran)){
            header("location: ../pages/index.php?errors=saran");
            exit();
        }

        header("location: ../pages/index.php?success");
        exit();
    }
?>