<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Detail Sidang</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    * {
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
      margin: 0;
      background: #f9f9f9;
    }

    .sideNav {
      position: fixed;
      top: 0;
      left: 0;
      width: 220px;
      height: 100vh;
      background-color: #4538db;
      color: white;
      padding: 30px 20px;
    }

    .sideNav img {
      max-width: 120px;
      margin-bottom: 40px;
    }

    .nav-item {
      padding: 12px 20px;
      margin-bottom: 10px;
      border-radius: 20px;
      cursor: pointer;
      font-weight: 500;
    }

    .nav-item.active {
      background-color: #fff;
      color: #4538db;
      font-weight: 600;
    }

    .bodyContainer {
      margin-left: 240px;
      padding: 40px;
    }

    .statusBadge {
      background-color: #d1f1db;
      color: #2e7d32;
      font-weight: 500;
      padding: 6px 12px;
      border-radius: 20px;
      font-size: 0.9rem;
    }

    .card-note {
      background-color: #fff;
      padding: 20px;
      border-radius: 15px;
      margin-bottom: 20px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.05);
    }

    .approved-badge {
      background: #e6f4ec;
      color: #28a745;
      font-size: 0.85rem;
      padding: 5px 10px;
      border-radius: 20px;
      display: inline-block;
      margin-top: 10px;
    }

    .revision-box {
      background-color: #efefef;
      padding: 30px;
      border-radius: 15px;
      margin-top: 30px;
    }

    .revision-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 15px;
    }

    .img-slot {
      background-color: #dcdcdc;
      height: 120px;
      display: flex;
      align-items: center;
      justify-content: center;
      border-radius: 10px;
      font-size: 48px;
      color: #888;
      margin-bottom: 10px;
    }

    .download-btn {
      padding: 8px 18px;
      border-radius: 8px;
      background-color: #5a67d8;
      color: white;
      text-decoration: none;
      display: inline-block;
    }

    .download-btn:hover {
      background-color: #434190;
    }

    .btn-back {
      margin-top: 30px;
      padding: 10px 16px;
      border-radius: 8px;
      border: 1px solid #5a67d8;
      color: #5a67d8;
      font-weight: bold;
      text-decoration: none;
      display: inline-block;
    }

    .btn-back:hover {
      background-color: #e0e7ff;
    }
  </style>
</head>
<body>

  <div class="sideNav">
    <img src="logo-astratech.png" alt="ASTRAtech Logo" />
    <div class="nav-item active">Detail Sidang</div>
    <div class="nav-item">Evaluasi</div>
    <div class="nav-item">Nilai Akhir</div>
  </div>

  <div class="bodyContainer">
    <h2 class="fw-bold">Detail Sidang - Pemrograman 2</h2>
    <h5 class="mt-3 mb-4">Catatan Perbaikan <span class="statusBadge">Status Revisi: Disetujui</span></h5>

    <!-- Catatan -->
    <div class="card-note">
      <h6>Dr. Rida Indah Fariani, S.Kom, M.Kom – Pembimbing</h6>
      <p>
        Pastikan seluruh bagian dokumen mengikuti format penulisan yang telah ditentukan oleh panduan akademik, termasuk margin, jenis huruf, ukuran font, dan penomoran halaman. Periksa kembali penggunaan bahasa. Hindari kesalahan ejaan, tanda baca, dan kalimat yang kurang efektif. Gunakan bahasa ilmiah yang baik dan konsisten.
      </p>
      <div class="approved-badge">Telah Menyetujui</div>
    </div>

    <!-- Dokumen Revisi -->
    <div class="revision-box">
      <div class="revision-header">
        <p><strong>laporan-revisi_ke1-1.pdf</strong></p>
        <a href="#" class="download-btn">Download</a>
      </div>
      <div class="img-slot">=</div>
    </div>

    <!-- Tombol Kembali -->
    <a href="#" class="btn-back"><i class="fas fa-arrow-left"></i> Kembali</a>
  </div>

</body>
</html>
