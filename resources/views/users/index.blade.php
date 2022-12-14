@extends('layouts.app')

@section('content')
<div class="container">
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Email</th>
      <th scope="col">Imie</th>
      <th scope="col">Nazwisko</th>
      <th scope="col">Nr telefonu</th>
      <th scope="col">Akcje</th>
    </tr>
  </thead>
  <tbody>
    @foreach($users as $user)
    <tr>
      <th scope="row">{{$user->id}}</th>
      <td>{{$user->email}}</td>
      <td>{{$user->name}}</td>
      <td>{{$user->surname}}</td>
      <td>{{$user->phone_name}}</td>
    </tr>
    <tr>
      @endforeach
  </tbody>
</table>
{{ $users->links() }}
</div>
@endsection