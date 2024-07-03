<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Daftar Kamar Tersedia</title>
    <!-- Anda bisa menambahkan link CSS atau library lain di sini -->
</head>
<body>
    <h1>Daftar Kamar Tersedia</h1>
    <ul>
        @foreach ($rooms as $room)
            <p>{{ $room->name }} - Level: {{ $room->level }} - Kapasitas: {{ $room->capacity }}</p>
        @endforeach
    </ul>
</body>
</html>