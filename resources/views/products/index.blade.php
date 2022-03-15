@extends('layout.conquer')

@section('content')
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
@endsection
