CREATE VIEW HARDY_DATA AS
SELECT
    MAHASISWA.StudentID AS StudentID,MAHASISWA.NAMA AS Nama,KRS.kode_term AS kode_term,SUM(MATAKULIAH.SKS) AS TOTAL_SKS
FROM mahasiswa
LEFT JOIN krs ON MAHASISWA.StudentID=KRS.StudentID
LEFT JOIN krs_detail ON KRS.kode_krs=KRS_DETAIL.kode_krs
LEFT JOIN matakuliah ON KRS_DETAIL.kode_matakuliah = MATAKULIAH.kode_matakuliah
GROUP BY MAHASISWA.StudentID,MAHASISWA.Nama,kode_term;
CREATE VIEW MATAKULIAH_VIEW AS 
SELECT MAHASISWA.StudentID AS StudentID,MATAKULIAH.kode_matakuliah AS KODE,MATAKULIAH.nama_matakuliah AS NAMA,MATAKULIAH.sks AS sks
FROM mahasiswa
LEFT JOIN krs ON MAHASISWA.StudentID=KRS.StudentID
LEFT JOIN krs_detail ON KRS.kode_krs=KRS_DETAIL.kode_krs
LEFT JOIN matakuliah ON KRS_DETAIL.kode_matakuliah = MATAKULIAH.kode_matakuliah