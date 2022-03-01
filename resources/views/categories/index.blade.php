<!DOCTYPE html>
<html lang="en">
<head>
  <title>Categories Index</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Category Index</h2>
  <table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
      </tr>
    </thead>
    <tbody>
        @foreach($result as $category)
      <tr>
        <td>{{$category->id}}</td>
        <td>{{$category->name}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

</body>
</html>
