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
            <td>price</td>
            <td><input type="text" name="price" value="<?php echo $row['price'] ?>"></td>
        </tr>

        <tr>
            <td>weight</td>
            <td><input type="text" name="weight" value="<?php echo $row['weight'] ?>"></td>
        </tr>

    </table>
    <button type="submit">Створити</button>
</form>
