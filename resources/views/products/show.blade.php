<!DOCTYPE html>
<html lang="en">
<head>
  <title>Products Data</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Product Data</h2>
  <table class="table">
    <thead>
      <tr>
        <th>Data</th>
        <th>Result</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Name</td>
        <td>{{$data->name}}</td>
      </tr>
      </tr>
        <td>Form</td>
        <td>{{$data->form}}</td>
      </tr>
      </tr>
        <td>Restriction</td>
        <td>{{$data->restriction}}</td>
      </tr>
      </tr>
        <td>Price</td>
        <td>{{$data->price}}</td>
      </tr>
    </tbody>
  </table>
</div>

</body>
</html>
