<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") { ?>
    <table>
        <tr>
            <td>Nama</td>
            <td>: <?= $_POST['nama'] ?></td>
        </tr>
    </table>
<?php 
} else {
    header(location : form.php);
}
?>