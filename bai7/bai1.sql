# tạo csdl quản lý xem film 
CREATE DATABASE IF NOT EXISTS fptplay;
USE fptplay;
#SELECT * FROM USER

#1. Tạo bảng
#1.1 PHIM
#1.1 thể loại
CREATE TABLE theloai(
    idtheloai INT PRIMARY KEY,
    tentheloai VARCHAR(50)
);
#1.2 người dùng
CREATE TABLE nguoidung(
    id INT PRIMARY KEY,
    tendangnhap VARCHAR (50),
    hoten VARCHAR (50),
    matkhau VARCHAR (50),
    email VARCHAR (50),
    sdt VARCHAR (10),
    quyen_id INT,
    ngay_sinh DATETIME
);
#1.3 Quyền
CREATE TABLE quyen(
    id INT PRIMARY KEY,
    tenquyen VARCHAR (20)
);
#1.4 phim
CREATE TABLE phim(
    id INT PRIMARY KEY,
    tenphim VARCHAR (50),
    dao_dien_id INT, 
    linktrailer VARCHAR (100),
    linkxem VARCHAR (100),
    namphathanh INT,
    thoiluong INT,
    poster VARCHAR,
    the_loai_id INT, 
    dienvien VARCHAR,
    quoc_gia_id INT,
    so_tap INT,
    mota TEXT
);
#1.5 phim_dienvien
CREATE TABLE phim_dienvien(
    id INT PRIMARY KEY,
    phimid INT,
    dien_vien_id INT
);
#1.6 phim_theloai

#1.7 quốc gia
CREATE TABLE quocgia(
    id INT PRIMARY KEY,
    tenquocgia VARCHAR (50)
);
#1.8 tập phim
CREATE TABLE tapphim(
    id INT PRIMARY KEY,
    tieude VARCHAR (50),
    thoiluong INT,
    trailer VARCHAR
);
# btvn: xây dựng 1 csdl qly film: tạo bảng, viết câu lệnh chyaj nhiều lần k bị lỗi
#mỗi bảng tạo 30dl