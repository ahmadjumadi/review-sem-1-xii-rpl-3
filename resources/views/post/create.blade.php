<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Post</title>
</head>
<body>
  <h1>Halaman Create Post</h1>
  <form action="/post" method="POST">
    @csrf
    <input type="text" name="title" placeholder="Title">
    <input type="text" name="body" placeholder="Body">
    <button type="submit">Submit</button>
  </form>
</body>
</html>