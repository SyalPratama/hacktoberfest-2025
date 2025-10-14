<?php
$result = '';
if(isset($_POST['submit'])){
    $a = $_POST['a'];
    $b = $_POST['b'];
    $op = $_POST['operator'];

    switch($op){
        case '+': $result = $a + $b; break;
        case '-': $result = $a - $b; break;
        case '*': $result = $a * $b; break;
        case '/': $result = $b != 0 ? $a / $b : 'Error: Division by zero'; break;
    }
}
?>
<form method="post">
    <input type="number" name="a" required>
    <select name="operator">
        <option>+</option>
        <option>-</option>
        <option>*</option>
        <option>/</option>
    </select>
    <input type="number" name="b" required>
    <button type="submit" name="submit">Hitung</button>
</form>
<?php if($result !== '') echo "Hasil: $result"; ?>
