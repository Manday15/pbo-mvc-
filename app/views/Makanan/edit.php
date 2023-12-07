<h2>Edit Makanan</h2>

<form action="<?php echo URL; ?>/makanan/update" method="post">
    <input type="hidden" name="id_makanan" value="<?php echo $data['row']['id_makanan']; ?>">
    <table>
       
        <tr>
            <td>NAMA MAKANAN</td>
            <td><input type="text" name="nama_makanan" value="<?php echo $data['row']['nama_makanan']; ?>" required></td>
        </tr>
        <tr>
            <td>JENIS MAKANAN</td>
            <td><input type="text" name="jenis_makanan" value="<?php echo $data['row']['jenis_makanan']; ?>" required></td>
        </tr>
        <tr>
            <td>HARGA MAKANAN</td>
            <td><input type="text" name="harga_makanan" value="<?php echo $data['row']['harga_makanan']; ?>" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_edit" value="EDIT"></td>
        </tr>
    </table>
</form>