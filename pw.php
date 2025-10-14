<?php
$password = '';
if(isset($_POST['generate'])){
    $length = (int)$_POST['length'];
    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()';
    $password = substr(str_shuffle($chars), 0, $length);
}
?>
<form method="post">
    <input type="number" name="length" placeholder="Panjang password" required>
    <button type="submit" name="generate">Generate</button>
</form>
<?php if($password) echo "Password: $password"; ?>
// hacktober-fest2025
// hacktoberfest-2025
