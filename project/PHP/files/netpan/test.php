<?php

require '../Myclass.php';

$Myclass = new \app\file\Myclass();

$items = $Myclass ->readDir('../file');


?>

<style>

    .dirbg {
        background-color: bisque;
    }

</style>

<table width="100%" border="1">
        <tr>
            <th>名称</th>
            <th>大小</th>
            <th>创建时间</th>
            <th>修改时间</th>
            <th>删除</th>
        </tr>

<?php

if (is_array($items) && count($items) == 2) {

    if (isset($items['dir']) && is_array($items['dir']) && count($items['dir'])) {
        foreach ($items['dir'] as $onceDir) {
            echo "<tr class='dirbg'>
                <td>$onceDir</td>
                <td>12312KB</td>
                <td>***</td>
                <td>***</td>
                <td>
                    <a>删除</a>
                </td>
</tr>";
        }
    }

    if (isset($items['file']) && is_array($items['file']) && count($items['file'])) {
        foreach ($items['file'] as $onceDir) {
            echo "<tr>
                <td>$onceDir</td>
                <td>12312KB</td>
                <td>***</td>
                <td>***</td>
                <td>
                    <a>删除</a>
                </td>
</tr>";
        }
    }

}
?>
</table>

