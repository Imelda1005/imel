<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Detail Sidang</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet"/>
  <!-- <link rel ="stylesheet" href="aEval.css>
    <script type="text/javascript" src="aEval.js"></script> -->
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
      z-index: 1000;
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

    .revision-box {
      background-color: #efefef;
      padding: 30px;
      border-radius: 15px;
      text-align: center;
    }

    .download-btn {
      margin-top: 15px;
    }

    .btn-back {
      margin-top: 30px;
    }

    @media (max-width: 768px) {
      .sideNav {
        position: relative;
        width: 100%;
        height: auto;
        flex-direction: row;
        justify-content: space-around;
      }

      .bodyContainer {
        margin-left: 0;
        padding: 20px;
      }
      .card-note {
      border: 1px solid #ccc;
      padding: 15px;
      border-radius: 10px;
      margin: 10px;
      cursor: pointer;
      transition: 0.3s;
    }

    .card-note:hover {
      background-color: #f9f9f9;
    }

    .approved-badge {
      background-color: #d4edda;
      color: #155724;
      padding: 6px 12px;
      border-radius: 6px;
      display: inline-block;
      margin-top: 10px;
    }

    .popup-overlay {
      display: none;
      position: fixed;
      top: 0; left: 0;
      width: 100%; height: 100%;
      background: rgba(0, 0, 0, 0.6);
      justify-content: center;
      align-items: center;
      z-index: 999;
    }

    .popup-content {
      background: #fff;
      padding: 20px;
      border-radius: 12px;
      max-width: 500px;
      width: 90%;
      position: relative;
    }

    .close-btn {
      position: absolute;
      top: 10px; right: 15px;
      font-size: 20px;
      cursor: pointer;
    }
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

    <!-- Catatan 1 -->
    <div class="card-note" id ="catatan1">
      <h6>Dr. Rida Indah Fariani, S.Kom, M.Kom – Pembimbing</h6>
      <p>Pastikan seluruh bagian dokumen mengikuti format penulisan yang telah ditentukan oleh panduan akademik, termasuk margin, jenis huruf, ukuran font, dan penomoran halaman. Periksa kembali penggunaan bahasa. Hindari kesalahan ejaan, tanda baca, dan kalimat yang kurang efektif. Gunakan bahasa ilmiah yang baik dan konsisten.</p>
      <div class="approved-badge">Telah Menyetujui</div>
    </div>

    <!-- Catatan 2 -->
    <div class="card-note">
      <h6>Dr. Rida Indah Fariani, S.Kom, M.Kom – Pembimbing</h6>
      <p>Pastikan seluruh bagian dokumen mengikuti format penulisan yang telah ditentukan oleh panduan akademik, termasuk margin, jenis huruf, ukuran font, dan penomoran halaman. Periksa kembali penggunaan bahasa. Hindari kesalahan ejaan, tanda baca, dan kalimat yang kurang efektif. Gunakan bahasa ilmiah yang baik dan konsisten.</p>
      <div class="approved-badge">Telah Menyetujui</div>
    </div>

    <!-- Catatan 3 -->
    <div class="card-note">
      <h6>Dr. Rida Indah Fariani, S.Kom, M.Kom – Pembimbing</h6>
      <p>Pastikan seluruh bagian dokumen mengikuti format penulisan yang telah ditentukan oleh panduan akademik, termasuk margin, jenis huruf, ukuran font, dan penomoran halaman. Periksa kembali penggunaan bahasa. Hindari kesalahan ejaan, tanda baca, dan kalimat yang kurang efektif. Gunakan bahasa ilmiah yang baik dan konsisten.</p>
      <div class="approved-badge">Telah Menyetujui</div>
    </div>

    <script>
    function showPopup(cardElement) {
      const popup = document.getElementById('popup');
      const popupContent = document.getElementById('popup-content');

      // Ambil isi dari card yang diklik
      const content = cardElement.innerHTML;

      // Masukkan isi card ke dalam popup (selain tombol close)
      popupContent.innerHTML = '<span class="close-btn" onclick="closePopup()">&times;</span>' + content;

      // Tampilkan popup
      popup.style.display = 'flex';
    }

    function closePopup() {
      document.getElementById('popup').style.display = 'none';
    }
  </script>

    <!-- Dokumen Revisi -->
    <div class="revision-box mt-4">
      <p><strong>Dokumen Revisi</strong></p>
      <div class="img-slot mb-2">=</div>
      <p>laporan-revisi_ke1-1.pdf</p>
      <a href="#" class="btn btn-primary download-btn">Download</a>
    </div>

    <!-- Tombol Kembali -->
    <a href="#" class="btn btn-outline-primary btn-back"><i class="fas fa-arrow-left"></i> Kembali</a>
  </div>

  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

  <style>
    body {
      font-family: sans-serif;
      margin: 20px;
      background-color: #f9f9f9;
    }

    .revision-box {
      border: 2px solid #3498db;
      border-radius: 12px;
      padding: 20px;
      background-color: #f0f0f0;
      max-width: 600px;
      margin: auto;
    }

    .img-slot {
      background-color: #e5e5e5;
      border-radius: 15px;
      padding: 40px;
      text-align: center;
      min-height: 100px;
    }

    .img-slot i {
      color: gray;
      font-size: 36px;
    }

    .download-btn {
      float: right;
      margin-top: 10px;
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

    .btn-outline-secondary {
      background: transparent;
      border: 1px solid #aaa;
      padding: 6px 12px;
      border-radius: 8px;
      cursor: pointer;
      margin-top: 10px;
    }

    .btn-outline-secondary:hover {
      background-color: #ddd;
    }

    .btn-back {
      display: inline-block;
      margin-top: 30px;
      padding: 8px 14px;
      border-radius: 8px;
      border: 1px solid #5a67d8;
      color: #5a67d8;
      text-decoration: none;
      font-weight: bold;
    }

    .btn-back i {
      margin-right: 5px;
    }

    .btn-back:hover {
      background-color: #e0e7ff;
    }

    #fileName {
      font-size: 14px;
      color: #555;
      margin-top: 5px;
    }
  </style>
</head>
<body>

  <div class="revision-box">
    <p><strong>Dokumen Revisi</strong></p>

    <div id="previewArea" class="img-slot mb-2">
      <div id="uploadPlaceholder">
        <i class="fas fa-upload fa-2x"></i>
        <p class="text-muted">Unggah berkas revisi dengan format pdf, docx, pptx, dan zip</p>
      </div>
    </div>

    <p id="fileName" class="text-muted"></p>

    <input type="file" id="fileInput" style="display:none" accept=".pdf,.docx,.pptx,.zip" />
    <button class="btn-outline-secondary" onclick="document.getElementById('fileInput').click()">Pilih Dokumen</button>

    <a id="downloadBtn" href="#" class="download-btn" style="display:none" download>Download</a>
  </div>

  <!-- Tombol Kembali -->
  <a href="#" class="btn-back"><i class="fas fa-arrow-left"></i> Kembali</a>

  <script>
    document.getElementById('fileInput').addEventListener('change', function(event) {
      const file = event.target.files[0];
      if (file) {
        // Tampilkan nama file
        document.getElementById('fileName').innerText = file.name;

        // Ganti tampilan preview
        document.getElementById('previewArea').innerHTML = `
          <div style="font-size: 50px; color: gray;">
            <i class="fas fa-file-alt"></i>
          </div>
        `;

        // Atur tombol download
        const downloadLink = document.getElementById('downloadBtn');
        downloadLink.href = URL.createObjectURL(file);
        downloadLink.download = file.name;
        downloadLink.style.display = 'inline-block';
      }
    });
  </script>
</body>
</html>
