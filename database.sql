CREATE TABLE tb_kelas (
      id_kelas INT(50) NOT NULL AUTO_INCREMENT,
      kelas VARCHAR(50) NOT NULL,
      PRIMARY KEY(id_kelas),
      UNIQUE KEY(kelas)
);

CREATE TABLE tb_wali (
      id_wali INT(50) NOT NULL AUTO_INCREMENT,
      id_kelas INT(50) NOT NULL,
      nama_wali VARCHAR(50) NOT NULL,
      tanggal_lahir date(50) NOT NULL, 
      PRIMARY KEY(id_wali),
      UNIQUE KEY(id_kelas)
);

CREATE TABLE tb_siswa (
      id_siswa INT(30) NOT NULL AUTO_INCREMENT,
      id_kelas INT(30) NOT NULL,
      id_wali INT(30) NOT NULL,
      nama_siswa VARCHAR(50) NOT NULL,
      tanggal_lulus date(20) NOT NULL,
      PRIMARY KEY(id_siswa),
      UNIQUE KEY(id_kelas)
);