<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Guru & Siswa</title>
</head>
<body>
    <h1>Daftar Guru dan Siswa yang Diajar</h1>

    @if ($teachers->isEmpty())
        <p>Tidak ada data guru yang ditemukan.</p>
    @else
        @foreach ($teachers as $teacher)
            <div>
                <h3>{{ $teacher->nama }} (Bidang Studi: {{ $teacher->bidang_studi }})</h3>

                @if ($teacher->students->isEmpty())
                    <p><i>Guru ini belum mengajar siswa.</i></p>
                @else
                    <h4>Siswa yang Diajar:</h4>
                    <ul>
                        @foreach ($teacher->students as $student)
                            <li>{{ $student->nama }} (NIS: {{ $student->nis }})</li>
                        @endforeach
                    </ul>
                @endif
            </div>
            <hr>
        @endforeach
    @endif
</body>
</html>
