<?php
session_start();
?>
<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <title>Pig Latin</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1 class="header_text">Hello, this is PigLatin translator</h1>
<form action="code.php" method="post" class="form">
    <input type="text" name="text" class="input input_text" placeholder="Enter your text">
    <input type="submit" name="submit" class="input input_submit" value="Translate">
</form>
<?php
if(isset($_SESSION["success"]) && $_SESSION["success"] !=''){
    echo '<h3 class="text-info-success"> '.$_SESSION["success"].' </h3>';
    unset($_SESSION['success']);
}
if(isset($_SESSION["status"]) && $_SESSION["status"] !='') {
    echo '<h3 class="text-info-fail"> ' . $_SESSION["status"] . ' </h3>';
    unset($_SESSION['status']);
}
?>
</body>
</html>

