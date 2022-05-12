<?php 
    $mail = "g211210012@sakarya.edu.tr";
    $sifre = "g211210012";
    if ($_POST['mail'] == $mail){
        if($_POST['sifre'] == $sifre){
            echo "<script>
            window.location='../../Hakkimda.html';
            alert('Hosgeldin $mail');
            </script>";
            
        }
        else{
            echo "<script>
            window.location='../../Login.html';
            alert('Yanlış şifre girildi lütfen tekrar deneyiniz');
            </script>";
        }
    }
    else {
        echo "<script>
            window.location='../../Login.html';
            alert('Yalnış email veya şifre lütfen tekrar deneyiniz');
            </script>";
    }
    
?>