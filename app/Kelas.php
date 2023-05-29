<?php

namespace App;
use Inc\Koneksi as Koneksi;

class Kelas extends Koneksi {

    public function tampil()
    {
        $sql = "SELECT * FROM tb_kelas";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        $data = [];

        while ($rows = $stmt->fetch()) {
            $data[] = $rows;
        }

        return $data;
    }

    public function simpan()
    {
        $id_kelas = $_POST['id_kelas'];
        $kelas = $_POST['kelas'];

        $sql = "INSERT INTO tb_kelas (id_kelas, kelas) VALUES (:id_kelas, :kelas)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_kelas", $id_kelas);
        $stmt->bindParam(":kelas", $kelas);
        $stmt->execute();

    }

    public function edit($id)
    {

        $sql = "SELECT * FROM tb_kelas WHERE id_kelas=:id_kelas";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_kelas", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function update()
    {
        $kelas = $_POST['kelas'];
        $id_kelas = $_POST['id_kelas'];

        $sql = "UPDATE tb_kelas SET kelas=:kelas WHERE id_kelas=:id_kelas";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":kelas", $kelas);
        $stmt->bindParam(":id_kelas", $id_kelas);
        $stmt->execute();

    }

    public function delete($id)
    {

        $sql = "DELETE FROM tb_kelas WHERE id_kelas=:id_kelas";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_kelas", $id);
        $stmt->execute();

    }

}