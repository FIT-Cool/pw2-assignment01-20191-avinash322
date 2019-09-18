<?php
include_once 'function/asuransi_function.php';
include_once 'function/pasien_function.php';
?>
<!DOCTYPE HTML>
<html>
<head>
    <link rel="stylesheet" href="datatables.min.css">
    <script type="text/javascript" src="datatables.min.js"></script>
</head>
<body>
    <h1>
        <a href="?menu=pasien">Pasien</a>
        <br>
        <a href="?menu=asuransi">Asuransi </a>
    </h1>
<main>
    <?php
    $targetmenu = filter_input(INPUT_GET, 'menu');
    switch ($targetmenu) {
        case 'pasien':
            include_once 'view/pasien.php';
            break;
        case 'asuransi':
            include_once 'view/asuransi.php';
            break;
        default:
            include_once 'index.php';
            break;}
    ?>
</main>
</body>
<script>
    $(document).ready(function () {
        $('#myTable').DataTable();
    });
</script>
</html>
