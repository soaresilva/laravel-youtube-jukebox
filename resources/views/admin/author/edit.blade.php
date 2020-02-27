<link rel="stylesheet" href="{{asset('css/app.css')}}" type="text/css"> 
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">


@extends('admin/layout', [
  'title' => 'Create a new author'
])

@section('headline')
    Create a new author
@endsection
<!-- or admin.layout, do not forget -->

@section('content')
  <form action="{{ action('AuthorController@store') }}" method="post" class="form-group">
  @csrf
    <label>Artist name</label>
    <input type="text" autocomplete="off" name="name" value="{{ $author->name }}">
    {{-- Adding this the author name as a value here makes it easier when creating the edit method. --}}
    <label>Country</label>
    <input type="text" autocomplete="off" name="country" value="{{ $author->country }}">

    {{-- <input type="text" name="genre_id" placeholder="Genre"><br> --}}
    <input type="submit">
  </form>
@endsection