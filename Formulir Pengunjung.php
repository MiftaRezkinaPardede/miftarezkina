<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Formulir Pengunjung</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #e8f5e9;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .container {
      background-color: #a5d6a7;
      padding: 30px;
      border-radius: 15px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.2);
      max-width: 400px;
      width: 90%;
    }

    h2 {
      text-align: center;
      color: #1b5e20;
    }

    label {
      display: block;
      margin-top: 15px;
      color: #2e7d32;
      font-weight: bold;
    }

    input, select {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      border: 1px solid #81c784;
      border-radius: 8px;
      box-sizing: border-box;
    }

    button {
      width: 100%;
      padding: 12px;
      margin-top: 20px;
      background-color: #388e3c;
      color: white;
      border: none;
      border-radius: 8px;
      font-size: 16px;
      cursor: pointer;
    }

    button:hover {
      background-color: #2e7d32;
    }
  </style>
</head>
<body>

  <div class="container">
    <h2>Formulir Pengunjung</h2>
    <form action="#" method="post">
      <label for="nama">Nama Lengkap:</label>
      <input type="text" id="nama" name="nama" required>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email">

      <label for="status">Status Pengunjung:</label>
      <select id="status" name="status" required>
        <option value="">-- Pilih Status --</option>
        <option value="dosen">Dosen</option>
        <option value="mahasiswa">Mahasiswa</option>
        <option value="umum">Pengunjung Umum</option>
      </select>

      <label for="tujuan">Tujuan Kunjungan:</label>
      <select id="tujuan" name="tujuan" required>
        <option value="baca">Membaca</option>
        <option value="pinjam">Meminjam Buku</option>
        <option value="riset">Riset</option>
        <option value="lainnya">Lainnya</option>
      </select>

      <button type="submit">Kirim</button>
    </form>
  </div>

</body>
</html>
