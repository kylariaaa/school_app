<!DOCTYPE html>
<html lang="en">
<head>
    <title>Daftar Siswa</title>
    <style>
        body {
            font-family: sans-serif;
            margin: 2rem;
            background-color: #f7fafc;
        }
        .container {
            max-width: 900px;
            margin: auto;
            padding: 2rem;
            background: white;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
        h1 {
            text-align: center;
            color: #2d3748;
        }
        .action-link {
            display: inline-block;
            padding: 0.5rem 1rem;
            background-color: #4a90e2;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            margin-bottom: 1rem;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 1rem;
        }
        th, td {
            padding: 0.75rem;
            text-align: left;
            border-bottom: 1px solid #e2e8f0;
        }
        th {
            background-color: #edf2f7;
            font-weight: bold;
        }
        .btn-edit, .btn-delete {
            padding: 0.25rem 0.75rem;
            text-decoration: none;
            border-radius: 4px;
            color: white;
        }
        .btn-edit {
            background-color: #48bb78;
        }
        .btn-delete {
            background-color: #f56565;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Daftar Siswa</h1>

        <a href="{{ url('students/create') }}" class="action-link">Tambah Siswa Baru</a>

        @if(session('success'))
            <div style="background-color: #f0fff4; color: #38a169; padding: 1rem; border-radius: 4px; margin-bottom: 1rem;">
                {{ session('success') }}
            </div>
        @endif

        <table>
            <thead>
                <tr>
                    <th>NIS</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($students as $student)
                    <tr>
                        <td>{{ $student->nis }}</td>
                        <td>{{ $student->nama }}</td>
                        <td>{{ $student->email }}</td>
                        <td>
                            <a href="{{ url('students/' . $student->id . '/edit') }}" class="btn-edit">Edit</a>
                            <form action="{{ url('students/' . $student->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-delete">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
