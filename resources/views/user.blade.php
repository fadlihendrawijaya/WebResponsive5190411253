@extends('layouts.main')
@section('article')
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <th scope="col">Email</th>
        <th scope="col">Password</th>
      </tr>
    </thead>
    <tbody>
        @php $no=0;@endphp
        @foreach ($data  as $item)
        @php $no++;@endphp
      <tr>
        <th scope="row">{{$no}}</th>
        <td>{{$item['name']}}</td>
        <td>{{$item['email']}}</td>
        <td>{{$item['password']}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  {{$data  ->links()}}
@endsection