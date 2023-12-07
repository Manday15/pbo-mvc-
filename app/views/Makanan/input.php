<h2>Input Makanan</h2>

<form action="<?php echo URL; ?>/makanan/save" method="post">
    <table>
        <tr>
            <td>NAMA MAKANAN</td>
            <td><input type="text" name="nama_makanan" required></td>
        </tr>
        <tr>
            <td>JENIS MAKANAN</td>
            <td><input type="text" name="jenis_makanan" required></td>
        </tr>
        <tr>
            <td>HARGA MAKANAN</td>
            <td><input type="text" name="harga_makanan" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_save" value="SAVE"></td>
        </tr>
    </table>
</form>