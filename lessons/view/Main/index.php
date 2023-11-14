<div>Main</div>
<table>
    <th>id</th>
    <th>name</th>
    <th>price</th>
    <th>weight</th>
    <?php var_dump($data);
    ?>

    <?php foreach ($data as $row) : ?>


        <tr>
            <?php foreach ($row as $sth) : ?>
                <td> <?= $sth ?> </td>
            <?php endforeach; ?>
            <td><a href='/main/update?id=<?=$row['id'] ?>'>update</a></td>
            <td><a href='/main/delete?id=<?=$row['id'] ?>'>delete</a></td>
        </tr>
    <?php endforeach; ?>
</table>
