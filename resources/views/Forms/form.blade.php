<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation Form</title>
    @include('include.style1')
</head>
<body>
    <style>
        .image-preview {
            margin-top: 20px;
            display: none; /* Default tidak terlihat */
            text-align: center;
        }
        .image-preview img {
            max-width: 300px;
            height: 400px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .paket-image {
            width: 300px;
            height: 400px;
            margin-top: 10px;
            display: none; /* Default disembunyikan */
        }
    </style>
    <form class="reservation-form" action="{{ route('reservasi.submit') }}" method="POST">
        @csrf
        <h2>Book a Table</h2>
        <div class="form-group">
            <label for="name">Nama Lengkap</label>
            <input type="text" id="name" name="name" placeholder="Enter your name" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>
        </div>
        <div class="form-group">
            <label for="phone">Nomor Telepon</label>
            <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required>
        </div>
        <div class="form-group">
            <label for="date">Tanggal Reservasi</label>
            <input type="date" id="date" name="date" required>
        </div>
        <div class="form-group">
            <label for="time">Jam Reservasi</label>
            <input type="time" id="time" name="time" required>
        </div>
        <div class="form-group">
            <label for="paket">Pilih Paket Anda</label>
            <select id="paket" name="paket" required>
                <option value="">Pilih paket</option>
                <option value="paket1">Paket 1</option>
                <option value="paket2">Paket 2</option>
                <option value="paket3">Paket 3</option>
            </select>
        </div>
        

        <div class="image-preview" id="image-preview">
            <img src="" alt="Preview Paket" id="preview-image">
        </div>

        <div class="form-group">
            <label for="guests">Number of Guests</label>
            <select id="guests" name="guests" required>
                <option value="">Select number of guests</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select>
        </div>
        <div class="form-group">
            <label for="message">Additional Notes</label>
            <textarea id="message" name="message" rows="4" placeholder="Enter any special requests or notes"></textarea>
        </div>
        <button type="submit">Book a Table</button>
    </form>
</body>

</html>

<script>
    // Ambil elemen
    const paketSelect = document.getElementById('paket');
    const imagePreview = document.getElementById('image-preview');
    const previewImage = document.getElementById('preview-image');

    // Map gambar berdasarkan paket
    const paketImages = {
        paket1: '/image/paket1.jpg',
        paket2: '/image/paket2.jpg',
        paket3: '/image/paket3.jpg'
    };

    // Event listener untuk perubahan dropdown
    paketSelect.addEventListener('change', function () {
        const selectedValue = paketSelect.value;

        if (paketImages[selectedValue]) {
            // Set gambar dan tampilkan
            previewImage.src = paketImages[selectedValue];
            imagePreview.style.display = 'block';
        } else {
            // Sembunyikan jika tidak ada pilihan
            imagePreview.style.display = 'none';
            previewImage.src = '';
        }
    });
</script>
