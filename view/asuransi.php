<?php
$add = filter_input(INPUT_POST, 'btnSubmit');
if (isset($add)) {
    $nama = filter_input(INPUT_POST, 'txtName');
    addAsuransi($nama);
}
?>
<Form action="" method="post">
    <fieldset>
        <legend><p>Tambah Asuransi</p></legend>
        <input type="text" placeholder="Nama Asuransi" name="txtName">
        <button type="submit" name="btnSubmit">ADD</button>
    </fieldset>
</Form>

<br/>
<table id="myTable">
    <thead>
    <tr>
        <th>ID</th>
        <th>Nama Asuransi</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $data = getAsuransi();
    foreach ($data as $dataasuransi) {
        echo '<tr>';
        echo '<td>' . $dataasuransi['id'] . '</td>';
        echo '<td>' . $dataasuransi['name_class'] . '</td>';
        echo '</tr>';
    }
    ?>
    </tbody>
</table>