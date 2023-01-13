<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Profile</title>
</head>
<body>
  <h1>Profile</h1>
  <form action="{{ route('profile.store') }}" method="post">
    @csrf
    <input type="text" name="nama" placeholder="Nama">
    <input type="text" name="alamat" placeholder="alamat">
    <input type="submit" value="Submit">
  </form>
</body>
</html>