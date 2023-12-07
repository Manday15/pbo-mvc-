<h2>Makanan</h2>

<a href="<?php echo URL; ?>/makanan/input" class="btn">Input Makanan</a>

<table id="dtb">
      <thead>
            <tr>
                  <th>NO</th>
                  <th>NAMA MAKANAN</th>
                  <th>JENIS MAKANAN</th>
                  <th>HARGA MAKANAN</th>
                  <th>EDIT</th>
                  <th>DELETE</th>
            </tr>
      </thead>
      <tbody>
            <?php $no = 1;
            foreach ($data['rows'] as $row) { ?>
                  <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $row['nama_makanan']; ?></td>
                        <td><?php echo $row['jenis_makanan']; ?></td>
                        <td><?php echo $row['harga_makanan']; ?></td>
                        <td><a href="<?php echo URL; ?>/makanan/edit/<?php echo $row['id_makanan']; ?>" class="btn">Edit</a></td>
                        <td><a href="<?php echo URL; ?>/makanan/delete/<?php echo $row['id_makanan']; ?>" class="btn" onclick="return confirm('Are you sure?')">Delete</a></td>
                  </tr>
            <?php $no++;
            } ?>
      </tbody>
</table>