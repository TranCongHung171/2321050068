/*# tạo csdl quản lý xem film 
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
#mỗi bảng tạo 30dl */

CREATE DATABASE IF NOT EXISTS film_fptplay;
USE film_fptplay;
-- 1. Bảng thể loại
CREATE TABLE IF NOT EXISTS the_loai (
    id INT PRIMARY KEY AUTO_INCREMENT,
    ten_the_loai VARCHAR(50) NOT NULL
);

-- 2. Bảng vai trò
CREATE TABLE IF NOT EXISTS vai_tro (
    id INT PRIMARY KEY AUTO_INCREMENT,
    ten_vai_tro VARCHAR(20) NOT NULL
);

-- 3. Bảng quốc gia
CREATE TABLE IF NOT EXISTS quoc_gia (
    id INT PRIMARY KEY AUTO_INCREMENT,
    ten_quoc_gia VARCHAR(50) NOT NULL
);

-- 4. Bảng người dùng
CREATE TABLE IF NOT EXISTS nguoi_dung (
    id INT PRIMARY KEY AUTO_INCREMENT,
    ten_dang_nhap VARCHAR(50) NOT NULL,
    mat_khau VARCHAR(50) NOT NULL,
    ho_ten VARCHAR(50),
    email VARCHAR(50),
    sdt VARCHAR(10),
    vai_tro_id INT,
    ngay_sinh DATETIME,
    FOREIGN KEY (vai_tro_id) REFERENCES vai_tro(id)
);

-- 5. Bảng phim
CREATE TABLE IF NOT EXISTS phim (
    id INT PRIMARY KEY AUTO_INCREMENT,
    ten_phim VARCHAR(255) NOT NULL,
    dao_dien_id INT,
    nam_phat_hanh INT,
    poster VARCHAR(255),
    quoc_gia_id INT,
    so_tap INT,
    trailer VARCHAR(255),
    mo_ta TEXT,
    FOREIGN KEY (dao_dien_id) REFERENCES nguoi_dung(id),
    FOREIGN KEY (quoc_gia_id) REFERENCES quoc_gia(id)
);

-- 6. Bảng phim - diễn viên
CREATE TABLE IF NOT EXISTS phim_dien_vien (
    id INT PRIMARY KEY AUTO_INCREMENT,
    phim_id INT,
    dien_vien_id INT,
    FOREIGN KEY (phim_id) REFERENCES phim(id),
    FOREIGN KEY (dien_vien_id) REFERENCES nguoi_dung(id)
);

-- 7. Bảng phim - thể loại
CREATE TABLE IF NOT EXISTS phim_the_loai (
    id INT PRIMARY KEY AUTO_INCREMENT,
    phim_id INT,
    the_loai_id INT,
    FOREIGN KEY (phim_id) REFERENCES phim(id),
    FOREIGN KEY (the_loai_id) REFERENCES the_loai(id)
);

-- 8. Bảng tập phim
CREATE TABLE IF NOT EXISTS tap_phim (
    id INT PRIMARY KEY AUTO_INCREMENT,
    so_tap INT,
    tieu_de VARCHAR(255),
    phim_id INT,
    thoi_luong FLOAT,
    trailer VARCHAR(255),
    FOREIGN KEY (phim_id) REFERENCES phim(id)
);