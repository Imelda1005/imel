<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Detail Sidang</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
  <style>
    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background-color: #f9f9f9;
    }

    .sideNav {
      position: fixed;
      top: 0;
      left: 0;
      width: 220px;
      height: 100vh;
      background-color: #4538db;
      padding: 30px 15px;
      color: white;
      display: flex;
      flex-direction: column;
      align-items: flex-start;
    }

    .sideNav img {
      width: 100%;
      max-width: 120px;
      margin-bottom: 30px;
    }

    .nav-item {
      padding: 12px 20px;
      width: 100%;
      border-radius: 20px;
      margin-bottom: 10px;
      text-align: left;
      font-weight: 500;
      cursor: pointer;
    }

    .nav-item.active {
      background-color: white;
      color: #4538db;
      font-weight: 600;
    }

    .bodyContainer {
      margin-left: 220px;
      padding: 40px;
    }

    .statusBadge {
      background-color: #d1f1db;
      color: #2e7d32;
      font-weight: 500;
      padding: 6px 12px;
      border-radius: 20px;
      display: inline-block;
      font-size: 0.9rem;
    }

    .card-note {
      background-color: #fff;
      padding: 20px;
      border-radius: 15px;
      box-shadow: 0 0 8px rgba(0, 0, 0, 0.05);
      margin-bottom: 20px;
      cursor: pointer;
    }

    .card-note:hover {
      background-color: #f1f1f1;
    }

    .card-note h6 {
      font-weight: 600;
      margin-bottom: 10px;
      color: #333;
    }

    .approved-badge {
      color: #28a745;
      background-color: #e6f4ec;
      font-size: 0.8rem;
      padding: 5px 10px;
      border-radius: 20px;
      display: inline-block;
      font-weight: 500;
      margin-top: 10px;
    }

    .img-slot {
      background-color: #efefef;
      padding: 30px;
      border-radius: 15px;
      text-align: center;
    }

    .download-btn {
      background-color: #5a67d8;
      color: white;
      padding: 6px 16px;
      border-radius: 8px;
      border: none;
      text-decoration: none;
    }

    .download-btn:hover {
      background-color: #434190;
    }

    .btn-back {
      margin-top: 30px;
      padding: 8px 14px;
      border-radius: 8px;
      border: 1px solid #5a67d8;
      color: #5a67d8;
      text-decoration: none;
      font-weight: bold;
    }

    .btn-back:hover {
      background-color: #e0e7ff;
    }

    /* POPUP STYLING */
    .popup-overlay {
      display: none;
      position: fixed;
      top: 0; left: 0;
      width: 100%; height: 100%;
      background: rgba(0, 0, 0, 0.5);
      justify-content: center;
      align-items: center;
      z-index: 999;
    }

    .popup-content {
      background: white;
      padding: 25px;
      border-radius: 12px;
      max-width: 500px;
      width: 90%;
      position: relative;
      box-shadow: 0 5px 15px rgba(0,0,0,0.3);
    }

    .popup-content h5 {
      margin-top: 0;
      font-weight: 600;
    }

    .popup-content p {
      font-size: 15px;
    }

    .close-btn {
      position: absolute;
      top: 10px;
      right: 15px;
      font-size: 20px;
      cursor: pointer;
      color: #888;
    }

    .close-btn:hover {
      color: #000;
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

    <!-- CATATAN -->
    <div class="card-note clickable-note" data-id="1">
      <h6>Dr. Rida Indah Fariani, S.Kom, M.Kom – Pembimbing</h6>
      <p>Pastikan seluruh bagian dokumen mengikuti format penulisan yang telah ditentukan oleh panduan akademik...</p>
      <div class="approved-badge">Telah Menyetujui</div>
    </div>

    <div class="card-note clickable-note" data-id="2">
      <h6>Dr. Rida Indah Fariani, S.Kom, M.Kom – Pembimbing</h6>
      <p>Pastikan seluruh bagian dokumen mengikuti format penulisan yang telah ditentukan oleh panduan akademik...</p>
      <div class="approved-badge">Telah Menyetujui</div>
    </div>

    <div class="card-note clickable-note" data-id="3">
      <h6>Dr. Rida Indah Fariani, S.Kom, M.Kom – Pembimbing</h6>
      <p>Pastikan seluruh bagian dokumen mengikuti format penulisan yang telah ditentukan oleh panduan akademik...</p>
      <div class="approved-badge">Telah Menyetujui</div>
    </div>

    <!-- Dokumen Revisi -->
    <div class="img-slot mb-2">
      <p><strong>Dokumen Revisi</strong></p>
      <i class="fas fa-upload fa-2x"></i>
      <p>laporan-revisi_ke1-1.pdf</p>
      <a href="#" class="download-btn" download>Download</a>
    </div>

    <!-- Tombol Kembali -->
    <a href="#" class="btn-back"><i class="fas fa-arrow-left"></i> Kembali</a>
  </div>

  <!-- POPUP -->
  <div class="popup-overlay" id="popupOverlay">
    <div class="popup-content">
      <span class="close-btn" onclick="closePopup()">&times;</span>
      <h5 id="popupTitle">Detail Catatan</h5>
      <p id="popupText">Isi catatan akan muncul di sini</p>
    </div>
  </div>

  <script>
    const catatanList = {
      1: "Pastikan seluruh bagian dokumen mengikuti format penulisan yang telah ditentukan oleh panduan akademik, termasuk margin, jenis huruf, ukuran font, dan penomoran halaman. Periksa kembali penggunaan bahasa. Hindari kesalahan ejaan, tanda baca, dan kalimat yang kurang efektif. Gunakan bahasa ilmiah yang baik dan konsisten.",
      2: "Catatan kedua ini sama pentingnya, pastikan kamu memperhatikan detail kecil dari format penulisan dan kesesuaian isi dengan topik.",
      3: "Catatan ketiga menekankan pentingnya struktur logika yang konsisten dan penggunaan kutipan atau referensi yang sesuai."
    };

    document.querySelectorAll('.clickable-note').forEach(card => {
      card.addEventListener('click', () => {
        const id = card.getAttribute('data-id');
        document.getElementById('popupText').innerText = catatanList[id];
        document.getElementById('popupOverlay').style.display = 'flex';
      });
    });

    function closePopup() {
      document.getElementById('popupOverlay').style.display = 'none';
    }
  </script>
</body>
</html>
