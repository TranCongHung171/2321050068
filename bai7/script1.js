let danhSachFilm = [
  {
    id: 1,
    tenPhim: "Beauty and Beast",
    namPhathanh: 2025,
    tuoi: 16,
    thoiLuong: 2,
    quocGia: "Việt Nam",
    poster: "/2321050068/bai7/img/phim/beautyandthebeaets.jpg",
    theLoai: "Phim chiếu rạp",
  },
  {
    id: 2,
    tenPhim: "Bông đừng trúng số",
    namPhathanh: 2025,
    tuoi: 16,
    thoiLuong: 2,
    quocGia: "Việt Nam",
    poster: "/2321050068/bai7/img/phim/bongdungtrungso.jpg",
    theLoai: "Phim chiếu rạp",
  },
];
let phimHienTai = danhSachFilm[0];
let banner = document.getElementById("anhx");
function chonFilm(idFilm) {
  for (let i = 0; i < danhSachFilm.length; i++) {
    if (danhSachFilm[i].id == idFilm) {
      banner.src = danhSachFilm[i].poster;
      alert("Bạn đã chọn phim: " + danhSachFilm[i].tenPhim);
    }
  }
}
