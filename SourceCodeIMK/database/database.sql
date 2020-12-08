DROP DATABASE IF EXISTS jadwaldotcom;
CREATE DATABASE IF NOT EXISTS jadwaldotcom;
USE jadwaldotcom;

CREATE TABLE pengguna (
    id_user VARCHAR(10),
    waktu_dibuat VARCHAR (20),
    PRIMARY KEY (id_user)
) ENGINE = InnoDB;

CREATE TABLE matkul (
    id_matkul INTEGER AUTO_INCREMENT,
    nama_matkul VARCHAR(20),
    keterangan VARCHAR(20),
    hari VARCHAR(6),
    waktumulai VARCHAR(2),
    waktuakhir VARCHAR(2),
    id_user VARCHAR(10),
    PRIMARY KEY  (id_matkul, id_user),
    FOREIGN KEY (id_user) REFERENCES pengguna (id_user)
) ENGINE = InnoDB;

CREATE TABLE logging (
    id_log INTEGER AUTO_INCREMENT,
    id_user VARCHAR(10),
    aksi VARCHAR (30),
    created_at VARCHAR (20),
    PRIMARY KEY (id_log, id_user),
    FOREIGN KEY (id_user) REFERENCES pengguna (id_user)
) ENGINE = InnoDB;

