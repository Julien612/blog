<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Illuminate\Http\Request;
Route::get('/', function () {
    $results=App\Category::all();
    return view('welcome',["obj"=>$results]);
});
Route::get('/posts/{id}',function($id){
    $results=App\Category::all();
    $posts=App\Post::where('category_id',$id)->get();
    return view('posts',["obj"=>$results,"posts"=>$posts]);
});
Route::get('/post/{id}',function($id){
    $post=App\Post::find($id);
    $comments=$post->comments;
  /* $results=App\Category::all();*/
    return view('post', ["post"=>$post, "comments"=>$comments]);
    
});
Route::post('/comment/{id}', function(Request $req, $id){
    App\Comment::create([
        'u_name'=>$req->name,
        'body'=>$req->body,
        'post_id'=>$id,
    ]);
    return back();
   
    
});
Route::get("/admin", function(){
    return view('admin');
});

Route::post('/addPost', function(Request $req){
    App\Post::create([
        'title'=>$req->name,
        'body'=>$req->body,
        'category_id'=>1,
    ]);
   
   
    
});

Route::get('/ajax',function(Request $req){
    header('Access-Control-Allow-Origin: *');
    return $req->id;
    //$results=App\Category::all();
    $posts=App\Post::where('id',$req->id)->get();
    //return $posts->'name';
});
Route::get('/lol',function(Request $req){
    header('Access-Control-Allow-Origin: *');
    $posts=App\Post::all();

     /*for($i=1;$i<3;$i++){
        $posts=App\Post::where('id',$req->id[$i])->get();*/
         return $posts;/*
    }*/
});
