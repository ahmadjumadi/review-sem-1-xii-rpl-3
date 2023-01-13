<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Profile</title>
</head>
<body>
  <h1>Detail Profile</h1>
    <input type="text" name="nama" value="{{ $profiles->nama }}" disabled>
    <input type="text" name="alamat" value="{{ $profiles->alamat }}" disabled>
    {{-- <a href="/profile">Kembali</a> --}}
                              <a href="{{ route('profile.index') }}">Kembali</a>
</body>
</html>