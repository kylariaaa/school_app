<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Guru</title>
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
        <h1>Edit Guru</h1>
        <form action="{{ url('teachers/' . $teacher->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label>NIP:</label>
                <input type="text" name="nip" value="{{ $teacher->nip }}">
            </div>

            <div class="form-group">
                <label>Nama:</label>
                <input type="text" name="nama" value="{{ $teacher->nama }}">
            </div>

            <div class="form-group">
                <label>Email:</label>
                <input type="email" name="email" value="{{ $teacher->email }}">
            </div>

            <div class="form-group">
                <label>Email:</label>
                <input type="bidang_studi" name="bidang_studi" value="{{ $teacher->bidang_studi }}">
            </div>

            <button type="submit" class="btn-submit">Update</button>
        </form>
    </div>
</body>
</html>
