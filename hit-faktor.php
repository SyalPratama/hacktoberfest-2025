<?php
$result = '';
if(isset($_POST['calc'])){
    $n = (int)$_POST['n'];
    $fact = 1;
    for($i=2; $i <= $n; $i++){
        $fact *= $i;
    }
    $result = "Faktorial $n! = $fact";
}
?>
<form method="post">
    <input type="number" name="n" required>
    <button type="submit" name="calc">Hitung</button>
</form>
<?php if($result) echo $result; ?>
    <p>Hacktoberfest2025</p>
