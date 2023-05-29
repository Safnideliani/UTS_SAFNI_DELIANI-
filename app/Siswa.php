<?php

namespace App;
use Inc\Koneksi as Koneksi;

class Siswa extends Koneksi {

    public function tampil()
    {
        $sql = "SELECT * FROM tb_siswa";
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
        $id_siswa = $_POST['id_siswa'];
        $id_kelas = $_POST['id_kelas'];
        $id_wali = $_POST['id_wali'];
        $nama_siswa = $_POST['nama_siswa'];
        $tanggal_lulus = $_POST['tanggal_lulus'];

        $sql = "INSERT INTO tb_siswa (id_siswa, id_kelas, id_wali, nama_siswa, tanggal_lulus) VALUES (:id_siswa, :id_kelas, :id_wali, :nama_siswa, :tanggal_lulus)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_siswa", $id_siswa);
        $stmt->bindParam(":id_kelas", $id_kelas);
        $stmt->bindParam(":id_wali", $id_wali);
        $stmt->bindParam(":nama_siswa", $nama_siswa);
        $stmt->bindParam(":tanggal_lulus", $tanggal_lulus);
        $stmt->execute();

    }

    public function edit($id)
    {

        $sql = "SELECT * FROM tb_siswa WHERE id_siswa=:id_siswa";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_siswa", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function update()
    {
        $id_kelas = $_POST['id_kelas'];
        $id_wali = $_POST['id_wali'];
        $nama_siswa = $_POST['nama_siswa'];
        $tanggal_lulus = $_POST['tanggal_lulus'];
        $id_siswa = $_POST['id_siswa'];

        $sql = "UPDATE tb_siswa SET id_kelas=:id_kelas, id_wali=:id_wali, nama_siswa=:nama_siswa, tanggal_lulus=:tanggal_lulus WHERE id_siswa=:id_siswa";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_kelas", $id_kelas);
        $stmt->bindParam(":id_wali", $id_wali);
        $stmt->bindParam(":nama_siswa", $nama_siswa);
        $stmt->bindParam(":tanggal_lulus", $tanggal_lulus);
        $stmt->bindParam(":id_siswa", $id_siswa);
        $stmt->execute();

    }

    public function delete($id)
    {

        $sql = "DELETE FROM tb_siswa WHERE id_siswa=:id_siswa";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_siswa", $id);
        $stmt->execute();

    }

}