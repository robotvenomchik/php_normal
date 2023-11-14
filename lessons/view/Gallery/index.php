<div>Gallery</div>
<table>
    <th>id</th>
    <th>name</th>
    <th>author_id</th>
    <th>length</th>
    <th>year</th>
    <th>rate</th>
    <th>genre_id</th>
    <th>alboum_id</th>
    <th>update</th>
    <th>delete</th>
    <?php foreach ($data as $row) : ?>


        <tr>
          <?php foreach ($row as $sth) : ?>
              <td> <?= $sth ?> </td>
          <?php endforeach; ?>
            <td><a href='/gallery/update?id=<?=$row['id'] ?>'>update</a></td>
            <td><a href='/gallery/delete?id=<?=$row['id'] ?>'>delete</a></td>
        </tr>
    <?php endforeach; ?>
</table>
