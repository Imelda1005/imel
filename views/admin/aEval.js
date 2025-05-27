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