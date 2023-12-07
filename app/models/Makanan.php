<?php

namespace App\Models;

use App\Core\Model;

class Makanan extends Model
{

      public function show()
      {
            $query = "SELECT * FROM tb_makanan";
            $stmt = $this->db->prepare($query);
            $stmt->execute();

            return $this->selects($stmt);
      }

      public function save()
      {
            $nama_makanan = $_POST['nama_makanan'];
            $jenis_makanan = $_POST['jenis_makanan'];
            $harga_makanan = $_POST['harga_makanan'];

            $sql = "INSERT INTO tb_makanan(nama_makanan, jenis_makanan, harga_makanan) VALUES (:nama_makanan, :jenis_makanan, :harga_makanan)";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":nama_makanan", $nama_makanan);
            $stmt->bindParam(":jenis_makanan", $jenis_makanan);
            $stmt->bindParam(":harga_makanan", $harga_makanan);

            $stmt->execute();
      }

      public function edit($id)
      {
            $query = "SELECT * FROM tb_makanan WHERE id_makanan=:id_makanan";
            $stmt = $this->db->prepare($query);

            $stmt->bindParam(":id_makanan", $id_makanan);
            $stmt->execute();

            return $this->select($stmt);
      }

      public function update()
      {
            $nama_makanan = $_POST['nama_makanan'];
            $jenis_makanan = $_POST['jenis_makanan'];
            $harga_makanan = $_POST['harga_makanan'];
            $id_makanan = $_POST['id_makanan'];

            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":nama_makanan", $nama_makanan);
            $stmt->bindParam(":jenis_makanan", $jenis_makanan);
            $stmt->bindParam(":harga_makanan", $harga_makanan);
            $stmt->bindParam(":id_makanan", $id_makanan);

            $stmt->execute();
      }

      public function delete($id)
      {
            $sql = "DELETE FROM tb_makanan WHERE id_makanan=:id_makanan";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":id_makanan", $id);
            $stmt->execute();
      }
}
