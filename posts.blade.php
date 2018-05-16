@extends('layout')


@section('links')
@foreach($obj as $res)
<li><a href="/posts/{{$res->id}}">
    {{$res->name}}
</a></li>
@endforeach
@endsection



    @section('body')
 
   @foreach($posts as $res)
   <h3>{{$res->title}}</h3>
   <p>
   {{str_limit($res->body, 200)}} 
</p>
 <a href="/post/{{$res->id}}">read more</a>
  @endforeach  
@endsection