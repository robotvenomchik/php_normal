
<div>Main</div>
<table>
    <tr>
        <th>First name</th>
        <th>Second name</th>
        <th>Login</th>
        <th>Email</th>
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
