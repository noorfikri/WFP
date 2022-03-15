@extends('layout.conquer')

@section('content')
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
@endsection

