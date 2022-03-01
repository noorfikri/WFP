<!DOCTYPE html>
<html lang="en">
<head>
  <title>Products Index</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Product Index</h2>
  <table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Form</th>
        <th>Restriction</th>
        <th>Price</th>
      </tr>
    </thead>
    <tbody>
        @foreach($result as $product)
      <tr>
        <td>{{$product->name}}</td>
        <td>{{$product->form}}</td>
        <td>{{$product->restriction}}</td>
        <td>{{$product->price}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

</body>
</html>
