<!DOCTYPE html>
<?php
$result = 0;
if($_GET['act'] === 'posting') {
    $num1 = intval($_POST['num1']);
    $num2 = intval($_POST['num2']);
    $type = $_POST['type'];

    switch($type) {
        case 'add':
            $result = $num1 + $num2;
            break;
        case 'sub':
            $result = $num1 - $num2;
            break;
        case 'mul':
            $result = $num1 * $num2;
            break;
        case 'div':
            if ($num2 !=0) {
                $result = $num1 / $num2;
            } else {
                $result = 'error';
            }
            break;

        default:
            $result = 0;

    }
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="?act=posting" method="post">
        <input type="text" name="num1" value="<?=$num1;?>">
        <select name="type">
            <option value="add" <?php if ($type === 'add') echo 'selected';?>>+</option>
            <option value="sub" <?php if ($type === 'sub') echo 'selected';?>>-</option>
            <option value="mul" <?php if ($type === 'mul') echo 'selected';?>>*</option>
            <option value="div" <?php if ($type === 'div') echo 'selected';?>>/</option>
        </select>
        <input type="text" name="num2" value="<?=$num2;?>">
        <button >=</button>
        <input type="text" readonly value="<?php echo $result;?>">
    </form>
</body>
</html>
