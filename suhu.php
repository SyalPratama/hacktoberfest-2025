<?php
$result = '';
if(isset($_POST['convert'])){
    $temp = $_POST['temp'];
    $type = $_POST['type'];

    if($type == 'CtoF'){
        $result = $temp * 9/5 + 32;
    } else {
        $result = ($temp - 32) * 5/9;
    }
}
?>
<form method="post">
    <input type="number" name="temp" required>
    <select name="type">
        <option value="CtoF">Celsius ke Fahrenheit</option>
        <option value="FtoC">Fahrenheit ke Celsius</option>
    </select>
    <button type="submit" name="convert">Konversi</button>
</form>
<?php if($result !== '') echo "Hasil: $result"; ?>
