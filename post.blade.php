@extends('layout')
@section('links')

@endsection
@section('body')

<h3>{{$post->title}}</h3>
<p>{{$post->body}}</p>
@foreach($comments as $comment)

 <div class="row">
            <div class="col s12">
              <div class="card   blue-grey lighten-2">
                <div class="card-content white-text">
                  <p class="">{{$comment->u_name}}</p>
                    <h7>{{$comment->body}}</h7>
                    
                </div>

              </div>
            </div>
          </div>


@endforeach
<form action="/comment/{{$post->id}}" method="post">
   @csrf
    <input type="text" name="name" placeholder="name">
    <input type="text" name="body" placeholder="comment">
    <button class="submit">
        Комментировать
    </button>
</form>
@endsection
