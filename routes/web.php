<?php


use App\Models\Post;
use App\Models\User;
use App\Http\Controllers\HomeController;
use App\Models\Category;
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TopicController;
use App\Models\Article;
use Illuminate\Support\Facades\Validator;
require __DIR__.'/auth.php';
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

Route::get('/', [HomeController::class, 'index']);

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');


Route::get('posts/{post:slug}', [PostsController::class, 'postDetail']);

Route::get('categories/{category:slug}', function (Category $category) {
    return view('posts', [
        'posts' => $category->posts
    ]);
});

Route::get('author/{author:username}', function (User $author) {
    return view('posts', [
        'posts' => $author->posts
    ]);
});


// -------------------------------------------------------------------------------------


Route::get('/create',function(){
    return view('create');
});

Route::post('/create',function(){
    $validate_data = Validator::make(request()->all(),[
        'title' => 'required|min:10|max:50',
        'body' => 'required'
    ],[
        'title.required' => 'Het titel veld moet nog ingevuld worden.',
        'body.required' => 'Het body veld moet nog ingevuld worden.'
    ])->validated();
    Article::create([
        'title' => $validate_data['title'],
        'body' => $validate_data['body']
    ]);
    return redirect('/create');
});

Route::get('/articles/{id}/update',function($id){
    $article = Article::find($id);
    return view('update',[
        'article' => $article
    ]);
});

Route::post('/articles/{id}/edit',function($id){
    $validate_data = Validator::make(request()->all(),[
        'title' => 'required|min:10|max:50',
        'body' => 'required'
    ],[
        'title.required' => 'Het titel veld moet nog ingevuld worden.',
        'body.required' => 'Het body veld moet nog ingevuld worden.'
    ])->validated();
    $article = Article::findOrFail($id);
    $article->update($validate_data);
    return back();
});

Route::get('/articles',function(){
    return view('index',[
        'articles' => Article::all()
    ]);
});

Route::delete('/articles/{id}',function($id){
    $article = Article::findOrFail($id);
    $article->delete();
    return back();
});