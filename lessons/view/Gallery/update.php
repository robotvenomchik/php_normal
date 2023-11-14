<div> Update Gallery</div>
<form method="post">
    <?php $row= array_shift($data);
    ?>

    <table>
        <tr style="display: none">
            <td>id</td>
            <td><input type="hidden" name="id"></td>
        </tr>
        <tr>
            <td>name</td>
            <td><input type="text" name="name" value="<?php echo $row['name'] ?>"></td>
        </tr>

        <tr>
            <td>author_id</td>
            <td><input type="text" name="author_id" value="<?php echo $row['author_id'] ?>"></td>
        </tr>

        <tr>
            <td>length</td>
            <td><input type="text" name="length" value="<?php echo $row['length'] ?>"></td>
        </tr>

        <tr>
            <td>year</td>
            <td><input type="text" name="year" value="<?php echo $row['year'] ?>"></td>
        </tr>

        <tr>
            <td>rate</td>
            <td><input type="text" name="rate" value="<?php echo $row['rate'] ?>"></td>
        </tr>

        <tr>
            <td>genre_id</td>
            <td><input type="text" name="genre_id" value="<?php echo $row['genre_id'] ?>"></td>
        </tr>
        <tr>
            <td>album_id</td>
            <td><input type="text" name="alboum_id" value="<?php echo $row['alboum_id'] ?>"></td>
        </tr>
    </table>
    <button type="submit">Створити</button>
</form>
