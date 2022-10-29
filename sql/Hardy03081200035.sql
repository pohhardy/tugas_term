CREATE VIEW khs_detail_view as
SELECT
    siswa.StudentID as StudentID,
    siswa.Nama as nama,
    kuliah.kode_matakuliah as kode_matkul,
    kuliah.nama_matakuliah as nama_matkul,
    kuliah.sks as sks,
    khd.NilaiHuruf as huruf
FROM mahasiswa siswa
LEFT JOIN krs ON siswa.StudentID = krs.StudentID
LEFT JOIN krs_detail kd on krs.kode_krs = kd.kode_krs
LEFT JOIN matakuliah kuliah on kd.kode_matakuliah = kuliah.kode_matakuliah
LEFT JOIN khs_detail khd on kd.kode_krsdetail = khd.kode_krs_detail;