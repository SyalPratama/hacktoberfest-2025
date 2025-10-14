<?php
$result = '';
if(isset($_POST['check'])){
    $num = (int)$_POST['num'];
    $isPrime = $num > 1;
    for($i=2; $i <= sqrt($num); $i++){
        if($num % $i == 0){
            $isPrime = false;
            break;
        }
    }
    $result = $isPrime ? "$num adalah bilangan prima" : "$num bukan bilangan prima";
}
?>
<form method="post">
    <input type="number" name="num" required>
    <button type="submit" name="check">Cek</button>
</form>
<?php if($result) echo $result; ?>
// hf2025
