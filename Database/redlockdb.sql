CREATE TABLE users (
  ID int(11) NOT NULL,
  Nama varchar(255) NOT NULL,
  Alamat varchar(255) NOT NULL,
  Jabatan varchar(255) NOT NULL,
  PRIMARY KEY (ID)
);

INSERT INTO users (ID, Nama, Alamat, Jabatan) VALUES
(1, 'SAEP', 'Jl kali yak no 1, NTT', 'CEO'),
(2, 'PETOT', 'Jl kemana ya? c 9 no 30 , Jakarta', 'Manager'),
(3, 'SAPRUDIN', 'Jl jalan yuk c 5 no 1, Banten', 'Karyawan')
