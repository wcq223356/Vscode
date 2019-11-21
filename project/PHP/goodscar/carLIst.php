<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script>
       window.onload = function () {
           document.querySelectorAll('.del').forEach(function (item) {
               item.onclick = function () {
                   if (confirm('确定删除？')) {
                       window.location.href = 'delCar.php?gid=' + item.getAttribute('data-item');
                   }
               }
           })
       }

    </script>
</head>
<body>



<table>
    <tr>
        <th>商品id</th>
        <td>数量</td>
        <td>删除</td>
    </tr>

<?php

$cart = json_decode($_COOKIE['Test_goods_car'], true);

if(is_array($cart) && count($cart) > 0) {
    foreach ($cart as $gid => $num) {
        echo "<tr>
                <td>$gid</td>
                <td>$num</td>
                <td class='del' data-item='$gid'>删</td>
              </tr>";
    }
}

?>
</table>
</body>
</html>

