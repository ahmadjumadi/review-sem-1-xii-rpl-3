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
        <th>No</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($profiles as $profile)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $profile->nama }}</td>
          <td>{{ $profile->alamat }}</td>
          <td>
            {{-- <a href="/post/{{ $profile->id }}">Edit</a> --}}
            <a href="{{ route('profile.show', $profile->id) }}">Detail</a>
            <a href="{{ route('profile.edit', $profile->id) }}">Edit</a>

          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</body>
</html>