
<?php

if (isset($_POST['logar'])) {
    $email = $_POST['email-login'];
    $senha = $_POST['Senha-login'];
    $email2;
    include "config.php";
    $consulta = $conn->prepare('SELECT * FROM `usuario` WHERE `ds_email` = :emaill AND `vl_senha` = :senhal');
    $consulta->bindValue(':emaill',$email);
    $consulta->bindValue(':senhal',$senha);
    $consulta->execute();
    if($consulta->rowCount()==0){
        ?>
        <script>
        window.location.replace("https://siteteste69.000webhostapp.com/index.php");
        </script>
        <?php
    }
    else{
        ?>
        <h1>2222222222222222222</h1>
        <?php
    }



}
    

?>