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
  <table>
    <thead>
      <tr>
        <th>Nama</th>
        <th>Alamat</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($profiles as $profile)
        <tr>
          <td>{{ $profile->nama }}</td>
          <td>{{ $profile->alamat }}</td>
        </tr>
      @endforeach
    </tbody>
  </table>
</body>
</html>