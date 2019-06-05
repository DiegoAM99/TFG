<?php
session_start();
$sessData = !empty($_SESSION['sessData'])?$_SESSION['sessData']:'';
if(!empty($sessData['status']['msg'])){
    $statusMsg = $sessData['status']['msg'];
    $statusMsgType = $sessData['status']['type'];
    unset($_SESSION['sessData']['status']);
}
?>
<h2>Introduce tu email</h2>
<?php echo !empty($statusMsg)?'<p class="'.$statusMsgType.'">'.$statusMsg.'</p>':''; ?>
<div class="container">
    <div class="regisFrm">
        <form action="userAccount.php" method="post">
            <input type="email" name="email" placeholder="EMAIL" required="">
            <br>
            <br>
            <div class="send-button">
                <button type="submit" name="forgotSubmit" value="CONTINUE"><a href="ResetContraseña.php">Continuar</a></button>
            </div>
        </form>
    </div>
</div>
