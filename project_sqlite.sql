-- SQLite schema converted from project.sql (MySQL/MariaDB dump)
-- Compatible with SQLite 3

PRAGMA foreign_keys = OFF;

-- --------------------------------------------------------
-- Table: rstatus (no dependencies)
-- --------------------------------------------------------

CREATE TABLE rstatus (
  id INTEGER NOT NULL PRIMARY KEY,
  deskripsi VARCHAR(50) NOT NULL DEFAULT ''
);

INSERT INTO rstatus (id, deskripsi) VALUES
(0, 'TIDAK AKTIF'),
(1, 'AKTIF');

-- --------------------------------------------------------
-- Table: rdirektorat
-- --------------------------------------------------------

CREATE TABLE rdirektorat (
  id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
  deskripsi VARCHAR(150) NOT NULL DEFAULT '0',
  status INTEGER NOT NULL DEFAULT 0,
  FOREIGN KEY (status) REFERENCES rstatus (id)
);

CREATE INDEX idx_rdirektorat_status ON rdirektorat (status);

INSERT INTO rdirektorat (id, deskripsi, status) VALUES
(1, 'KEUANGAN DAN RISK MANAJEMEN', 1),
(2, 'SDM DAN UMUM', 1),
(3, 'KELEMBAGAAN', 1),
(4, 'NON DIREKTORAT', 1),
(5, 'BOD SUPPORT', 1),
(10, 'LAIN-LAIN', 1);

-- --------------------------------------------------------
-- Table: rproject
-- --------------------------------------------------------

CREATE TABLE rproject (
  id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
  deskripsi VARCHAR(150) NOT NULL DEFAULT '0',
  icon VARCHAR(50) NOT NULL DEFAULT '0',
  status INTEGER NOT NULL DEFAULT 0
);

INSERT INTO rproject (id, deskripsi, icon, status) VALUES
(1, 'DEVELOPMENT', 'development.png', 1),
(2, 'INTERNAL TEST', 'internaltest.png', 1),
(3, 'QA / UAT', 'uat.png', 1),
(4, 'DEPLOYMENT', 'deployment.png', 1),
(5, 'PILOTING', 'piloting.png', 1),
(6, 'LIVE', 'production.png', 1),
(7, 'ON HOLD', 'onhold.png', 1),
(8, 'REJECT', 'reject.png', 1),
(9, 'RETURN', 'reject.png', 1),
(10, 'REQ/ANALISA/DESAIN', 'requirement.png', 1);

-- --------------------------------------------------------
-- Table: project
-- --------------------------------------------------------

CREATE TABLE project (
  id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
  direktorat INTEGER DEFAULT NULL,
  bagian VARCHAR(150) DEFAULT NULL,
  pic_name VARCHAR(150) DEFAULT NULL,
  no_surat VARCHAR(50) DEFAULT NULL,
  tanggal DATE DEFAULT NULL,
  project_name VARCHAR(250) DEFAULT NULL,
  tanggal_awal DATE DEFAULT NULL,
  tanggal_akhir DATE DEFAULT NULL,
  catatan VARCHAR(250) DEFAULT NULL,
  rproject INTEGER DEFAULT 0,
  leadby VARCHAR(150) DEFAULT NULL,
  tgl_update DATETIME DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (direktorat) REFERENCES rdirektorat (id)
);

CREATE INDEX idx_project_direktorat ON project (direktorat);

INSERT INTO project (id, direktorat, bagian, pic_name, no_surat, tanggal, project_name, tanggal_awal, tanggal_akhir, catatan, rproject, leadby, tgl_update) VALUES
(1, 2, 'HCS update', 'Bangsisfo SDM', 'NDE', '2022-01-01', 'POS HADIR v1.0.0', '2022-01-01', '2022-01-01', 'POS HADIR', 9, NULL, NULL),
(3, 1, 'Treasury', 'Treasuri', '-', '2022-01-01', 'UPDATE ITEM SO BARU', '2022-01-01', '2022-01-01', '', 7, NULL, '2022-03-18 16:55:26'),
(4, 10, 'Marketing', 'Marketing', '', '2022-01-01', 'APLIKASI ANALISA DATA OPERASI', '2022-02-17', '2022-02-17', '', 3, NULL, '2022-03-18 16:55:26'),
(5, 10, 'Konsfila', 'Konsfila', '', '2022-02-17', 'UNIVE ', '2022-02-17', '2022-02-17', '', 4, NULL, '2022-03-18 16:55:26'),
(6, 10, 'Konsfila', 'Konsfila', '', '2022-02-17', 'API METERAI dan FILATELI', '2022-02-17', '2022-02-17', '', 6, NULL, '2022-03-18 16:55:26'),
(7, 10, 'Konsfila', 'Konsfila', '', '2022-02-17', 'UPDATE KONSFILA SO BARU', '2022-02-17', '2022-02-17', '', 7, NULL, '2022-03-18 16:55:26'),
(8, 10, 'Konsfila', 'Konsfila', '', '2022-02-17', 'MODUL PENGEMBALIAN METERAI', '2022-02-17', '2022-02-17', '', 6, NULL, '2022-05-20 12:27:04'),
(9, 10, 'RUTA', 'Ruta', '4359/DIV ITSD/1121', '2021-11-22', 'SPPD', '2021-12-01', '2022-04-30', 'VENDOR : PT VODJO TEKNOLOGI INDONESIA', 6, NULL, '2022-07-22 12:38:18'),
(10, 10, 'Persediaan', 'Persediaan', 'C.Pos.54399/SU 500/SU0205/2021', '2021-12-22', 'SIM PERSEDIAAN', '2021-12-22', '2022-02-04', 'UPDATE MODUL dan DASHBOARD', 6, NULL, '2022-03-18 16:55:26'),
(11, 2, 'Human Capital Strategy - RENUMERASI', 'Renumerasi', 'C.Pos.57988/SU 300/SU0213/2021', '2021-12-29', 'UPDATE KUG12A', '2022-02-01', '2022-02-10', '', 6, NULL, '2022-04-01 14:54:11'),
(12, 2, 'HCD', 'HCD', 'C.Pos.44650/SU 200/SU0212/2021', '2021-12-03', 'UPDATE SIMTKK', '2021-12-03', '2021-12-03', '', 7, NULL, '2022-03-18 16:55:26'),
(13, 4, 'Sekretariat', 'Sekretariat', '', '2022-02-17', 'WAHANA ( REBRANDING )', '2021-12-01', '2021-12-01', '', 0, NULL, '2022-07-22 12:43:13'),
(14, 5, 'SPI', 'SPI', 'C.Pos.55950/AU 200/ND062/2021', '2021-12-24', 'DASHBOARD SPI', '2021-12-24', '2022-02-24', '', 7, NULL, '2022-03-18 16:55:26'),
(15, 10, 'Financial Service Product Management ', 'Konsfila', 'C.Pos.7574/KL 100/LK0101/2022', '2022-01-28', 'SIM Konsfila Modul Penjualan Agenpos', '2022-01-28', '2022-02-28', '', 3, NULL, '2022-06-10 09:14:40'),
(16, 2, 'Human Capital Development ', 'Human Capital Development', 'C.Pos.7898/SU 200/SU0212/2022', '2022-01-31', 'SIM SDM Menu validasi histori pelatihan', '2022-01-31', '2022-02-17', 'Update reporting', 6, NULL, '2022-03-18 16:55:26'),
(17, 2, 'Human Capital Service', 'Human Capital Service', 'C.Pos.10983/SU 300/SU0213/2022', '2022-01-10', 'SIM SDM Modul Penghargaan', '2022-01-10', '2022-02-17', 'Update Lokasi pegawai RO Auditor', 6, NULL, '2022-03-18 16:55:26'),
(18, 2, 'HC Policy', 'HC Policy', 'C.Pos.11342/SU 100/SU0211/2022', '2022-02-10', 'Laporan transferabilitas karyawan', '2022-02-10', '2022-02-17', 'Update dan Laporan baru', 6, NULL, '2022-03-18 16:55:26'),
(19, 2, 'Human Capital Service', 'Human Capital Service ', 'C.Pos.13142/SU 300/SU0213/2022', '2022-02-16', 'SIMSDM Modul Surat Pengantar COB BPJS Kesehatan', '2022-03-07', '2022-03-31', 'Dokumen full diterima tgl 04-03-2022 C.Pos.17730/SU 300/SU0213/2022', 6, 'R', '2022-06-20 11:51:06'),
(20, 2, 'Human Capital Service - RENUMERASI', 'RENUMERASI', 'C.Pos.14075/SU 300/SU0213/2022', '2022-02-17', 'Modul Upload Data Rencana Cuti Tahunan pada SIM SDM', '2022-02-21', '2022-03-04', 'MODUL BARU', 6, NULL, '2022-06-20 11:50:28'),
(21, 4, 'VP Hukum Good Governance and Compliance', 'Hukum', 'C.Pos.17789/HK 300/CS0102/2022', '2022-03-02', 'Proses Perjanjian pada Aplikasi SIAP', '2022-03-07', '2022-05-07', 'Update SIAP ke full-version', 3, '', '2022-06-17 13:21:20'),
(22, 1, 'SVP Finance', 'Finance', 'C.Pos.18004/KU 500/KU011/2022', '2022-03-04', 'NPP', '2022-03-07', '2022-05-31', '', 3, '', '2022-07-22 12:40:04'),
(23, 2, 'Divisi Human Capital Service', 'Renumerasi Pensiun', 'C.Pos.18427/SU 300/SU0213/2022', '2022-03-06', 'Sistem Pengelolaan Data dan Pembayaran Tunjangan Pensiun', '2022-03-16', '2022-05-31', '', 7, '', '2022-05-13 09:13:26'),
(24, 1, 'PROJECT SIMKUG', 'SAP', 'C.Pos.19644/KU 800/KU01133/2022', '2022-03-10', 'Penambahan referensi costcenter pada SIMSDM/SIM Payrol', '2022-03-10', '2022-03-31', 'Referensi Cost Center dikelola Tim SIMKUG', 3, '', '2022-06-10 09:32:52'),
(25, 2, 'Human Capital Strategy', 'Human Capital Strategy', 'C.Pos.18749/SU 100/SU0211/2022', '2022-03-08', 'Penyesuaian Referensi Tarif Penyesuaian Gaji Karena Mutasi', '2022-03-11', '2022-03-15', 'NDE diterima tgl 11-03-2022', 6, '', '2022-03-18 16:55:26'),
(26, 2, 'Human Capital Strategy', 'Renumerasi', 'C.Pos.21111/SU 300/SU0213/2022', '2022-03-16', 'Penyesuaian Nopend SIM Payroll dan Kug 12A', '2022-03-16', '2022-03-16', '', 3, '', '2022-05-13 09:15:49'),
(27, 10, 'Konsfila', 'Konsfila', 'C.Pos.29688/KL 100/LK0101/2022', '2022-04-08', 'Modul Laporan Pengembalian Meterai pada Aplikasi SIM Konsfila', '2022-04-08', '2022-04-08', 'Penambahan laporan', 6, '', '2022-05-20 12:24:42'),
(28, 3, 'PSO', 'PSO', 'C.Pos.29502/KN 900/KN0502/2022', '2022-04-08', ' Pengembangan SIM LPU v2.0', '2022-04-08', '2022-05-31', '', 6, '', '2022-07-14 08:03:27'),
(29, 2, 'DIVISI HCS', 'SYSFO SDM', '', '2022-05-13', 'POS HADIR V2', '2022-05-13', '2022-06-17', 'UPDATE ( Pengajuan Cuti  Penghasilan Pegawai )', 3, '', '2022-06-17 13:16:09'),
(30, 2, 'Renumerasi', 'Renumerasi', 'C.Pos.52401/SU 300/HC0201/2022', '2022-06-14', 'Modul Beasiswa', '2022-06-15', '2022-07-31', '', 6, '', '2022-07-14 08:03:45'),
(32, 1, 'Manajemen Keuangan', 'Manajemen Keuangan', 'C.Pos.53268/KU 400/KU0102/2022', '2022-06-17', 'Aplikasi Sistem Penyusunan Anggaran', '2022-06-17', '2022-08-31', '', 2, '', '2022-07-22 12:40:47'),
(33, 4, 'Strategic Planning and Business Transformation', 'Strategic Planning and Business Transformation', 'C.Pos.58828/KN 200/KN051/2022', '2022-06-27', 'Net Promoter Score NPS', '2022-07-01', '2022-07-31', '', 1, '', '2022-07-14 08:05:08');

-- --------------------------------------------------------
-- Table: docproject
-- --------------------------------------------------------

CREATE TABLE docproject (
  id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
  idproject INTEGER NOT NULL DEFAULT 0,
  filename VARCHAR(150) NOT NULL DEFAULT '0'
);

INSERT INTO docproject (id, idproject, filename) VALUES
(2, 20, 'uploads/CHANGE_REQUEST_SIMSDM_UANG_CTH_REV.xlsx'),
(3, 20, 'uploads/flow_of_CTH.xls'),
(4, 10, 'uploads/CHANGE_REQUEST_24012022.xlsx'),
(5, 15, 'uploads/CHANGE_REQUEST_AGENPOS.xlsx'),
(6, 16, 'uploads/CHANGE_REQUEST.xlsx'),
(7, 17, 'uploads/CHANGE_REQUEST_SIMSDM_PENGHARGAAN_10022022.xlsx'),
(8, 18, 'uploads/CHANGE_REQUEST_SIMSDM_TRANSFERABILITAS_11022022.xlsx'),
(9, 19, 'uploads/20210112_SKS_Aplikasi_COB.doc'),
(10, 19, 'uploads/DRAFT_LAPORAN_COB_2022.xlsx'),
(11, 19, 'uploads/Form_COB_2022.pdf'),
(12, 19, 'uploads/Pengembangan_Modul_Surat_Pengantar_COB_BPJS_Kesehatan_di_SIM_SDM#2.pdf'),
(13, 21, 'uploads/Permohonan Penambahan fitur pada aplikasi SIAP( diterima 04-03-2021 ).pdf'),
(14, 21, 'uploads/SLA Dokumen antar unit v.02.pptx'),
(15, 22, 'uploads/2021.044.kd044 ttg pengeluaran kas perusahaan pt pos indonesiapersero.pdf'),
(16, 22, 'uploads/Proses Bisnis Sentralisasi NPP.pptx'),
(17, 19, 'uploads/CHANGE_REQUEST_COB.xlsx'),
(18, 21, 'uploads/SIAP versi 2.0.pdf'),
(19, 23, 'uploads/SIMSDM_pensiun.pdf'),
(20, 23, 'uploads/SKB_Pembuatan_Sistem_Pengelolaan_Tunjangan_Pensiun.pdf'),
(21, 23, 'uploads/img20220301_17461093.pdf'),
(22, 23, 'uploads/img20220301_17512375.pdf'),
(23, 23, 'uploads/img20220301_17574879.pdf'),
(24, 23, 'uploads/img20220301_18024496.pdf'),
(25, 24, 'uploads/Action_Plan-Costcentervrsi2.pptx'),
(26, 24, 'uploads/CC_FC_KD77.xlsx'),
(27, 24, 'uploads/Penambahan referensi costcenter pada SIMSDM_SIM Payrol.pdf'),
(28, 24, 'uploads/sample_cek_payroll_maret_2022.xlsx'),
(29, 24, 'uploads/Referensi_CostCentre_posisi17032022_PA_SDM_edited.xlsx'),
(30, 27, 'uploads/NDE 08122022.pdf'),
(31, 27, 'uploads/LAMPIRAN_PERBAIKAN_DAN_PENAMBAHAN_MODUL.pdf'),
(32, 28, 'uploads/MOM EVALUASI SIM LPU PART II.pdf'),
(33, 28, 'uploads/29 Mar 2022 Draf PK BO LPU Tahun 2022.docx'),
(34, 28, 'uploads/29 Mar 2022 Draf Lampiran PK BO LPU Tahun 2022.docx'),
(35, 28, 'uploads/MOM_Pengembangan_SIM_LPU_gOIAOZi.pdf'),
(36, 28, 'uploads/MOM RAPAT SIM LPU PART II.pdf'),
(37, 28, 'uploads/CHANGE_REQUEST_PSO.xlsx'),
(38, 30, 'uploads/BeaSiswa2022.pdf'),
(39, 30, 'uploads/BISNIS_PROSES_PEMBERIAN_BEASISWA.xls'),
(40, 30, 'uploads/CHANGE_REQUEST_SIMSDM_BEASISWA.xlsx'),
(41, 32, 'uploads/1._CAPEX_FIELD_Feasibility_Study.xlsx'),
(42, 32, 'uploads/2._CAPEX_FILED_Business_Case(1).docx'),
(43, 32, 'uploads/DRAFT_FIELD_RKAP_2023_biaya.xlsx'),
(44, 32, 'uploads/DRAFT_FIELD_RKAP_2023_Pendapatan.xlsx'),
(45, 32, 'uploads/DRAFT_FLOWCHART_INVESTASI.pdf'),
(46, 32, 'uploads/rkap2022.pdf'),
(47, 33, 'uploads/KAJIAN_TEKNIS_NPS_APP.docx'),
(48, 33, 'uploads/NPS.pdf'),
(49, 14, 'uploads/spi2021.pdf');

-- --------------------------------------------------------
-- Table: hproject
-- --------------------------------------------------------

CREATE TABLE hproject (
  id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
  idproject INTEGER NOT NULL,
  rproject INTEGER NOT NULL,
  tanggal DATE NOT NULL,
  catatan VARCHAR(150) NOT NULL DEFAULT '0',
  progress INTEGER DEFAULT 0,
  FOREIGN KEY (idproject) REFERENCES project (id),
  FOREIGN KEY (rproject) REFERENCES rproject (id)
);

CREATE INDEX idx_hproject_idproject ON hproject (idproject);
CREATE INDEX idx_hproject_rproject ON hproject (rproject);

INSERT INTO hproject (id, idproject, rproject, tanggal, catatan, progress) VALUES
(1, 1, 5, '2022-01-31', 'PILOTING KANTOR PUSAT .. 01-04-2022 : PILOTING REG-3 SURABAYA', 100),
(4, 5, 4, '2022-02-17', '', 100),
(5, 6, 4, '2022-02-17', '', 100),
(6, 7, 7, '2022-02-17', '', 85),
(7, 8, 5, '2022-02-17', '', 100),
(8, 9, 3, '2022-02-17', 'Perbaikan hasil temuan T-1  27-05-2022 : Test ulang  ', 50),
(9, 10, 6, '2022-02-17', '', 100),
(12, 12, 5, '2022-02-17', 'Belum ada pembahasan lanjutan', 0),
(13, 13, 3, '2022-02-17', 'Ada temuan (  17-02-2022 ) - Belum ada perbaikan ( 25-02-2022 )', 50),
(14, 14, 7, '2022-02-17', 'Belum ada pembahasan lanjutan', 0),
(15, 11, 3, '2022-01-26', 'NDE C.Pos.6786/KN 500/LK0403/2022   ada tambahan requirment utk kantor SPP', 100),
(16, 16, 3, '2022-02-25', 'NDE C.Pos.9156/KN 500/LK0403/2022', 50),
(17, 17, 3, '2022-02-11', 'NDE C.Pos.11785/KN 500/LK0403/2022', 50),
(19, 19, 7, '2022-02-17', 'SKB dan FLOW PROCES belum memenuhi', 0),
(20, 20, 5, '2022-02-17', '', 0),
(21, 18, 5, '2022-02-10', '', 100),
(23, 18, 1, '2022-02-17', '', 85),
(24, 20, 1, '2022-02-24', '', 50),
(25, 15, 1, '2022-02-24', '', 75),
(26, 18, 2, '2022-02-24', '', 100),
(27, 6, 6, '2022-02-21', 'ON POSPAY', 100),
(28, 18, 3, '2022-03-01', 'NDE C.Pos.17423/KN 500/IT 010403/2022', 50),
(29, 20, 2, '2022-03-01', '', 75),
(30, 19, 5, '2022-03-02', 'SKS PERBAIKAN NO.  /ITSG/0322', 50),
(31, 11, 4, '2022-03-02', '', 0),
(32, 11, 5, '2022-03-02', '', 0),
(33, 18, 6, '2022-03-02', '', 100),
(34, 17, 4, '2022-03-02', '', 0),
(35, 16, 4, '2022-03-02', '', 0),
(36, 3, 7, '2022-03-02', 'Belum ada pembahasan lanjutan', 0),
(37, 21, 7, '2022-03-04', 'Start on 07-03-2022', 0),
(38, 8, 6, '2022-03-04', 'Live Nasional menunggu Instruksi DJP    20-05-2022', 100),
(39, 12, 7, '2022-03-04', '', 0),
(40, 15, 2, '2022-03-04', '25-03-2022', 100),
(41, 16, 6, '2022-03-04', '', 100),
(44, 17, 6, '2022-03-04', '', 100),
(45, 22, 5, '2022-03-10', '04-03-2020 : Pengajuan SKS/DPS oleh calon vendor    10-03-2022 : Demo mockup versi 1.0    14-04-2022 : Pengajuan Proposal', 100),
(46, 23, 7, '2022-03-07', 'Sedang dijadwalkan', 0),
(47, 20, 3, '2022-03-15', 'NDE C.Pos.18555/KN 500/IT 010403/2022   dan  C.Pos.21230/KN 600/IT 010505/2022 ( 15 Maret 2022 )   08-04-2022 : 100%', 100),
(48, 21, 5, '2022-03-18', 'Perancangan dan desain aplikasi dan database  	Pembahasan awal dgn tim P Aji / hukum (08-03-2022)', 85),
(50, 24, 5, '2022-03-18', 'Pembuatan desain ', 75),
(51, 25, 6, '2022-03-11', 'Sudah tersedia menu Entri Tarif di SIMPayroll', 100),
(52, 26, 5, '2022-03-16', 'Nopend P3 SDM  RO dam Kepabeanan   18-03-2022 analisa dan Desain', 25),
(53, 19, 1, '2022-03-18', '18-03-2022 : 40%    25-03-2022 : 60%     01-04-2022 : 85%', 85),
(54, 13, 7, '2022-03-25', 'Tidak/belum ada respons perbaikan dari Pengembang', 0),
(55, 21, 1, '2022-03-25', '25-03-2020 : Pembuatan modul referensi    20-05-2022 : Modul Transaksi dan Laporan', 85),
(56, 23, 5, '2022-03-25', '25-03-2020 : Analisa dan Desain 10% ', 10),
(57, 24, 1, '2022-03-25', '25-03-2022 : 50%    01-04-2020 : 85%    08-04-2022 : 100%', 100),
(59, 11, 6, '2022-04-01', '', 100),
(60, 26, 1, '2022-04-01', 'digabung dgn develop CostCenter Payroll', 85),
(61, 26, 1, '2022-04-01', 'digabung dgn develop CostCenter Payroll', 85),
(63, 19, 2, '2022-04-08', '', 50),
(64, 24, 2, '2022-04-08', '14-04-2022', 100),
(65, 26, 2, '2022-04-08', '14-04-2022', 100),
(66, 27, 5, '2022-04-08', '', 0),
(67, 28, 5, '2022-04-08', '14-04-2022 : 85%', 85),
(68, 28, 1, '2022-04-14', '25-04-2022 : 85% ( pengembangan API )', 85),
(69, 24, 3, '2022-04-14', 'C.Pos.32307/KN 500/IT 010403/2022   Penambahan requirment ( metode pencatatan referensi )', 100),
(70, 27, 4, '2022-04-25', 'Internal test oleh Bisnis', 75),
(71, 19, 3, '2022-04-25', 'C.Pos.36375/KN 500/IT 010403/2022   02-06-2022:75%', 75),
(72, 1, 6, '2022-05-10', '', 100),
(73, 20, 5, '2022-05-12', 'NDE C.Pos.40449/KN 600/IT0105/2022 TGL 1 Mei 2022', 100),
(74, 29, 1, '2022-05-13', 'API dan Front-End - 25-05-2022 : Spek Teknis API : 100%  10-06-2022 : Penambahan cuti dan view penghasilan', 100),
(76, 22, 1, '2022-05-13', 'INTERNAL (MT2022)  20-05-03 : 30%  17-06-2022 : 60%   06-07-2022 : 80%', 80),
(77, 23, 7, '2022-05-13', 'PROGRAMMER OFF', 0),
(78, 26, 3, '2022-05-13', 'Incl. di project costcenter', 0),
(80, 27, 6, '2022-05-20', 'KERJA SAMA DGN DJP ', 100),
(81, 28, 2, '2022-05-20', 'Modul Referensi dan validasi transaksi', 85),
(82, 15, 3, '2022-06-03', 'NDE', 10),
(83, 19, 4, '2022-06-07', 'C.Pos.49019/KN 600/IT 010505/2022  tgl 06-06-2022', 100),
(84, 21, 2, '2022-06-10', 'VERSI 1.0', 100),
(85, 28, 3, '2022-06-10', '17-06-2022 : 50%', 50),
(86, 30, 5, '2022-06-15', '', 0),
(87, 32, 5, '2022-06-17', 'Belum ada SPK', 0),
(88, 29, 3, '2022-06-17', '', 75),
(89, 21, 3, '2022-06-17', '', 50),
(90, 20, 6, '2022-06-20', '', 100),
(91, 19, 6, '2022-06-20', '', 0),
(92, 33, 5, '2022-06-29', '', 10),
(93, 32, 1, '2022-07-06', '', 85),
(94, 30, 3, '2022-07-06', '', 0),
(95, 28, 5, '2022-07-06', '', 100),
(97, 33, 1, '2022-07-08', '14-07-2022 : 75%', 75),
(98, 30, 5, '2022-07-08', '', 0),
(99, 22, 2, '2022-07-08', '', 50),
(100, 28, 6, '2022-07-14', '', 100),
(101, 30, 6, '2022-07-14', '', 0),
(102, 9, 6, '2022-07-22', 'START ON 26-07-2022', 100),
(103, 1, 9, '2022-07-22', '', 85),
(104, 22, 3, '2022-07-22', '', 0),
(105, 32, 2, '2022-07-22', '', 0),
(106, 13, 5, '2022-07-22', 'REQUIRMENT BARU', 0);

-- --------------------------------------------------------
-- Table: pengguna
-- --------------------------------------------------------

CREATE TABLE pengguna (
  idtable INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
  idpengguna VARCHAR(150) NOT NULL,
  password VARCHAR(150) DEFAULT NULL,
  nama VARCHAR(150) DEFAULT NULL,
  email VARCHAR(150) DEFAULT NULL,
  kodelokasi VARCHAR(50) DEFAULT NULL,
  levelpengguna INTEGER DEFAULT NULL,
  status VARCHAR(1) DEFAULT '1',
  bypass VARCHAR(150) DEFAULT NULL
);

INSERT INTO pengguna (idtable, idpengguna, password, nama, email, kodelokasi, levelpengguna, status, bypass) VALUES
(1, 'psis', '78cbe41de3539331ca03747d28c5ecfa', 'enterprice', 'enterprice@gmail.com', '40005', 0, '1', 'k_aja'),
(2, 'orang', '8c8d357b5e872bbacd45197626bd5759', 'orang ', 'orang@gmail.com', '40005', 1, '1', 'ada'),
(3, 'dimas', '51947e3cf64ee746b6f2c73d174d525a', 'dimas', 'dimas@gmail.com', NULL, 1, '1', NULL);

-- --------------------------------------------------------
-- Table: pic_project
-- --------------------------------------------------------

CREATE TABLE pic_project (
  id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
  idproject INTEGER NOT NULL DEFAULT 0,
  pic_name VARCHAR(50) NOT NULL DEFAULT '0',
  FOREIGN KEY (idproject) REFERENCES project (id)
);

CREATE INDEX idx_pic_project_idproject ON pic_project (idproject);

INSERT INTO pic_project (id, idproject, pic_name) VALUES
(1, 17, 'RENATTI');

-- --------------------------------------------------------
-- Views
-- --------------------------------------------------------

DROP VIEW IF EXISTS view_progress;

CREATE VIEW view_progress AS
SELECT
  d.id AS id,
  d.deskripsi AS direktorat,
  a.bagian AS bagian,
  a.pic_name AS pic_name,
  a.no_surat AS no_surat,
  a.tanggal AS tgl_surat,
  a.project_name AS project_name,
  a.tanggal_awal AS tanggal_awal,
  a.tanggal_akhir AS tanggal_akhir,
  a.rproject AS rproject,
  c.deskripsi AS status_project,
  a.leadby AS assign_to,
  a.id AS idproject,
  c.icon AS icon,
  a.tgl_update AS tgl_update,
  CAST(julianday('now', 'localtime') - julianday(a.tgl_update) AS INTEGER) AS durasi
FROM project a
LEFT JOIN rproject c ON a.rproject = c.id
LEFT JOIN rdirektorat d ON a.direktorat = d.id
ORDER BY a.direktorat, a.id, a.tanggal_awal;

DROP VIEW IF EXISTS view_users;

CREATE VIEW view_users AS
SELECT
  pengguna.idpengguna AS user_id,
  pengguna.password AS user_pass,
  pengguna.nama AS user_name,
  pengguna.email AS user_email,
  pengguna.kodelokasi AS user_location,
  pengguna.levelpengguna AS user_level,
  '' AS user_class,
  '0' AS view_data_only,
  pengguna.idtable AS idtable
FROM pengguna
WHERE pengguna.status = '1';

-- --------------------------------------------------------
-- Reset AUTOINCREMENT counters after explicit ID inserts
-- --------------------------------------------------------

INSERT OR REPLACE INTO sqlite_sequence (name, seq) VALUES ('docproject', 49);
INSERT OR REPLACE INTO sqlite_sequence (name, seq) VALUES ('hproject', 106);
INSERT OR REPLACE INTO sqlite_sequence (name, seq) VALUES ('pengguna', 3);
INSERT OR REPLACE INTO sqlite_sequence (name, seq) VALUES ('pic_project', 1);
INSERT OR REPLACE INTO sqlite_sequence (name, seq) VALUES ('project', 33);
INSERT OR REPLACE INTO sqlite_sequence (name, seq) VALUES ('rdirektorat', 10);
INSERT OR REPLACE INTO sqlite_sequence (name, seq) VALUES ('rproject', 10);

PRAGMA foreign_keys = ON;
