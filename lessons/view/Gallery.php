<div>Gallery</div>
<table>
    <tr>
        <th>First</th>
        <th>Second</th>
        <th>Third</th>
    </tr>
    <?php foreach ($data as $row) : ?>


        <tr>
            <td><?= $row['first_name'] ?></td>
            <td><?= $row['second_name'] ?></td>
            <td><?= $row['login'] ?></td>
            <td><?= $row['email'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>
