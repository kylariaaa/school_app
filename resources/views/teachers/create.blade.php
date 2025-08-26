<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Guru Baru</title>
    <style>
        body {
            font-family: sans-serif;
            margin: 2rem;
            background-color: #f7fafc;
        }

        .container {
            max-width: 600px;
            margin: auto;
            padding: 2rem;
            background: white;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #2d3748;
        }

        .form-group {
            margin-bottom: 1rem;
        }

        label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: bold;
        }

        input[type="text"],
        input[type="date"],
        input[type="email"],
        select,
        textarea {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #e2e8f0;
            border-radius: 4px;
        }

        .btn-submit {
            width: 100%;
            padding: 0.75rem;
            background-color: #4a90e2;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1rem;
        }

        .btn-submit:hover {
            background-color: #3f7ac6;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Tambah Guru Baru</h1>
        <form action="{{ url('teachers') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nip">NIP:</label>
                <input type="text" name="nip" id="nip">
            </div>

            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" name="nama" id="nama">
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email">
            </div>

            <div class="form-group">
                <label for="bidang_studi">bidang studi:</label>
                <input type="text" name="bidang_studi" id="bidang_studi">
            </div>

            <button type="submit" class="btn-submit">Simpan</button>
        </form>
    </div>
</body>
</html>
