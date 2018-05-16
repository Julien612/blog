@extends('layout')
@section('body')
<form action="/addPost" method="post">
   @csrf
    <input type="text" placeholder="Title" name="name">
    <input type="text" placeholder="Text" name="body">
    
    <button>
        Новый пост
    </button>
</form>
@endsection