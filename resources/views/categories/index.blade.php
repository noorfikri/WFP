@extends('layout.conquer')

@section('content')
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
@endsection

