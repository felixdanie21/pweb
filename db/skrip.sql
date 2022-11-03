create database si_absen;

use si_absen;
    create table admin(
        id_admin int not null primary key,
        username varchar(100) not null,
        password varchar(100) not null
    );

create table karyawan(
                         id_karyawan int not null primary key,
                         password varchar(100) not null,
                         nama_karyawan varchar(100) not null,
                         dob_karyawan date,
                         divisi varchar(100) not null
);

create table absen(
                      id_absen int not null primary key auto_increment,
                      nama_kegiatan varchar(100) not null,
                      tgl_kegiatan datetime not null,
                      status enum('Buka','Tutup') default 'Buka' not null,
                      tgl_absen datetime
);

create table detailabsen(
                            id_detail int  not null primary key auto_increment,
                            id_absen int not null,
                            id_karyawan int not null,
                            foreign key (id_absen) references absen(id_absen),
                            foreign key (id_karyawan) references karyawan(id_karyawan)
);