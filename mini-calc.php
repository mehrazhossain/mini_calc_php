<?php

$result='';
if(isset($_POST['btn'])){
    $first_number = $_POST['first_number'];
    $second_number = $_POST['second_number'];

    $btn = $_POST['btn'];
    switch ($btn) {
        case '+':
            $result = $first_number + $second_number;
            break;
        case '-':
            $result = $first_number - $second_number;
            break;
        case '*':
            $result = $first_number * $second_number;
            break;
        case '/':
            $result = $first_number / $second_number;
            break;
        case '%':
            $result = $first_number % $second_number;
            break;
        
        default:
            # code...
            break;
    }
}

?>


<form action="" method="post">
<table>
    <tr>
        <td>First Number</td>
        <td><input type="number" name='first_number'></td>
    </tr>
    <tr>
        <td>Second Number</td>
        <td><input type="number" name='second_number'></td>
    </tr>
    <tr>
        <td>Result</td>
        <td><input type="text" value="<?php echo $result; ?>"></td>
    </tr>
    <tr>
        <td></td>
    <td>
        <input type="submit" name='btn' value='+'>
        <input type="submit" name='btn' value='-'>
        <input type="submit" name='btn' value='*'>
        <input type="submit" name='btn' value='/'>
        <input type="submit" name='btn' value='%'>
    </td>
    </tr>
</table>
</form>