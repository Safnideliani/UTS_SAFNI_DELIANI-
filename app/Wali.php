<?php

namespace App;
use Inc\Koneksi as Koneksi;

class Wali extends Koneksi {

    public function tampil()
    {
        $sql = "SELECT * FROM tb_wali";
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
        $id_wali = $_POST['id_wali'];
        $id_kelas= $_POST['id_kelas'];
        $nama_wali= $_POST['nama_wali'];
        $tanggal_lahir= $_POST['tanggal_lahir'];
        
        $sql = "INSERT INTO tb_wali (id_wali, id_kelas, nama_wali, tanggal_lahir) VALUES (:id_wali, :id_kelas, :nama_wali, :tanggal_lahir)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_wali", $id_wali);
        $stmt->bindParam(":id_kelas", $id_kelas);
        $stmt->bindParam(":nama_wali", $nama_wali);
        $stmt->bindParam(":tanggal_lahir", $tanggal_lahir);
        $stmt->execute();

    }
    public function edit($id)
    {

        $sql = "SELECT * FROM tb_wali WHERE id_wali=:id_wali";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_wali", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function update()
    {
        $id_kelas = $_POST['id_kelas'];
        $nama_wali = $_POST['nama_wali'];
        $tanggal_lahir= $_POST['tanggal_lahir'];
        $id_wali = $_POST['id_wali'];

        $sql = "UPDATE tb_wali SET id_kelas=:id_kelas, nama_wali=:nama_wali, tanggal_lahir=:tanggal_lahir WHERE id_wali=:id_wali";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_kelas", $id_kelas);
        $stmt->bindParam(":nama_wali", $nama_wali);
        $stmt->bindParam(":tanggal_lahir", $tanggal_lahir);
        $stmt->bindParam(":id_wali", $id_wali);
        $stmt->execute();

    }

    public function delete($id)
    {

        $sql = "DELETE FROM tb_wali WHERE id_wali=:id_wali";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_wali", $id);
        $stmt->execute();

    }

}