<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Siswa</title>
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
            background-color: #48bb78;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1rem;
        }

        .btn-submit:hover {
            background-color: #3b9e69;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Edit Siswa</h1>
        <form action="{{ url('students/' . $student->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label>NIS:</label>
                <input type="text" name="nis" value="{{ $student->nis }}">
            </div>

            <div class="form-group">
                <label>Nama:</label>
                <input type="text" name="nama" value="{{ $student->nama }}">
            </div>

            <div class="form-group">
                <label>Tanggal Lahir:</label>
                <input type="date" name="tanggal_lahir" value="{{ $student->tanggal_lahir }}">
            </div>

            <div class="form-group">
                <label>Gender:</label>
                <select name="gender">
                    <option value="P" {{ $student->gender == 'P' ? 'selected' : '' }}>Perempuan</option>
                    <option value="L" {{ $student->gender == 'L' ? 'selected' : '' }}>Laki-Laki</option>
                </select>
            </div>

            <div class="form-group">
                <label>Alamat:</label>
                <textarea name="alamat">{{ $student->alamat }}</textarea>
            </div>

            <div class="form-group">
                <label>Email:</label>
                <input type="email" name="email" value="{{ $student->email }}">
            </div>

            <button type="submit" class="btn-submit">Update</button>
        </form>
    </div>
</body>
</html>
