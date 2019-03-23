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

//Route::get('/contact',function (){
//    return 'صفحه تماس با ما' ;
//});
//
//Route::get('/about',function (){
//    return 'صفحه درباره ما';
//});
//
//Route::get('/post/{id}/{name?}',function ($id , $name = null){
//    return 'آی دی این پست برابر است با :'. " " . $id . "$name";
//});
//
//Route::get('admin/post/example',function (){
//    $url = route('admin');
//    return 'این آدرس برای صفحه مدیریت میباشد و url برابر است با: '.$url;
//})->name('admin');
//
//Route::prefix('admin')->group(function (){
//    Route::get('post/example',function (){
//        return "گروه بندی ادمین";
//    });
//    Route::get('login',function (){
//        return "صفحه لاگین";
//    });
//});
//Route::get('/contact','PostsController@contact');
//Route::get('/posts/{id?}','PostsController@index');
//Route::get('/show-view/{id}/{name}/{password}','PostsController@showMyView');
//
//Route::get('/insert','PostsController@insert');
//Route::get('/select','PostsController@select');
//Route::get('/update','PostsController@updatePost');
//Route::get('/delete','PostsController@deletePost');

//Route::get('posts','PostsController@allPosts');
//Route::get('save-post','PostsController@savePosts');
//Route::get('update-post','PostsController@newUpdatePosts');
//Route::get('delete-post','PostsController@newDeletePosts');
//Route::get('data-trash','PostsController@workWithTrash');
//Route::get('restore-post','PostsController@restorePosts');
//Route::get('force-delete-post','PostsController@forceDelete');

// Eloqent Relationships

//One To One Relationships

//Route::get('user/{id}/post',function ($id){
//    $user_post = \App\User::find($id)->post;
//    return $user_post;
//});
//
//Route::get('post/{id}/user',function ($id){
//    $post_user = \App\Post::find($id)->user;
//    return $post_user;
//});

//One To Many Relationships

//Route::get('user/{id}/posts',function ($id){
//    $user_posts = \App\User::find($id)->posts;
//    foreach ($user_posts as $posts){
//        echo $posts->title;
//        echo '</br>';
//    }
//});

//Many to Many Relationships
//Route::get('user/{id}/roles',function ($id){
//    $user = \App\User::find($id);
//    foreach ($user->roles as $role){
//        echo $role->name;
//        echo '<br/>';
//    }
//});
//
//Route::get('user/pivot',function (){
//    $user = \App\User::find(1);
//    foreach ($user->roles as $role){
//        echo $role->pivot->created_at;
//        echo '<br/>';
//    }
//});

//// Has Many Through Relationship
//Route::get('user/country',function (){
//   $country = \App\Country::find(1);
//   foreach ($country->posts as $post){
//       echo $post->title;
//       echo '</br>';
//   }
//});

//Polymorphic Relationship
//Route::get('user/photos',function (){
//   $user = \App\User::find(1);
//   foreach ($user->photos as $photo){
//       echo $photo->path;
//       echo '</br>';
//   }
//});
//
//Route::get('post/photos',function (){
//   $post = \App\Post::find(4);
//   foreach ($post->photos as $photo){
//       echo $photo->path;
//       echo '</br>';
//   }
//});
//
//Route::get('photo/{id}/post',function ($id){
//   $photo = \App\Photo::find($id);
//   return $photo->imageable;
//});
//
//Route::get('post/tags',function (){
//   $post = \App\Post::find(4);
//   foreach ($post->tags as $tag){
//       echo $tag->name;
//       echo '</br>';
//   }
//});
//
//Route::get('video/tags',function (){
//    $video = \App\Video::find(1);
//    foreach ($video->tags as $tag){
//        echo $tag->name;
//        echo '</br>';
//    }
//});

//CRUD One to Many Relationship
//Route::get('create',function (){
//    $user = \App\User::find(1);
//    $post = new \App\Post();
//    $post->title = 'یک پست جدید در رابطه one to many';
//    $post->content = 'یک توضیح جدید برای این پست';
//    $user->posts()->save($post);
//});
//
//Route::get('read',function (){
//   $user = \App\User::find(1);
//   foreach ($user->posts as $post){
//       echo $post->title;
//       echo '</br>';
//   }
//});
//
//Route::get('update',function (){
//   $user = \App\User::find(1);
//   $user->posts()->whereId(4)->update(['title'=>'بروزرسانی با CRUD','content'=>'بروزرسانی توضیحات']);
//});
//
//Route::get('delete',function (){
//    $user = \App\User::find(1);
//    $user->posts()->whereId(4)->delete();
//});

//CRUD Many to Many Relationship
//Route::get('create',function (){
//   $user = \App\User::find(1);
//   $role = new \App\Role();
//   $role->name = 'نویسنده';
//   $user->roles()->save($role);
//});
//
//Route::get('update',function (){
//   $user = \App\User::find(1);
//   if ($user->has('roles')){
//       foreach ($user->roles as $role){
//           if ($role->name == 'نویسنده'){
//               $role->name = 'Author';
//               $role->save();
//           }
//       }
//   }
//});
//
//Route::get('delete',function (){
//   $user = \App\User::find(1);
//   foreach ($user->roles as $role){
//       if ($role->name == 'Author'){
//           $role->delete();
//       }
//   }
//});
//
//Route::get('detach',function (){
//   $user = \App\User::find(1);
//   $user->roles()->detach();
//});
//
//Route::get('attach',function (){
//   $user = \App\User::find(1);
//   $user->roles()->attach(1);
//});
//
//Route::get('sync',function (){
//   $user = \App\User::find(1);
//   $user->roles()->sync([1,2]);
//});

//CRUD Polymorphic Relationship
//Route::get('create',function (){
//   $video = \App\Video::find(1);
//   $video->tags()->create(['name'=>'morph video']);
//});
//
//Route::get('read',function (){
//   $video = \App\Video::find(1);
//   foreach ($video->tags as $tag){
//       echo $tag->name;
//       echo '</br>';
//   }
//});
//
//Route::get('update',function (){
//    $video = \App\Video::find(1);
//    $tag = $video->tags;
//    $newtags = $tag->where('id',3)->first();
//    $newtags->name = 'تگ جدید';
//    $newtags->save();
//});
//
//Route::get('sync',function (){
//    $video = \App\Video::find(1);
//    $video->tags()->sync([1,2]);
//});



//Authentication
//use Illuminate\Support\Facades\Auth;
//
Auth::routes(['verify' => true]);
//
Route::middleware(['auth', 'verified'])->group(function (){
    Route::get('/home', 'HomeController@index')->name('home');
    //Form Route
    Route::resource('/posts','PostsController');
});
Route::get('/');
Route::get('/admin', function (){
    echo "Hello to Admin Page";
})->middleware('isAdmin:مدیر');
//
//Route::get('/',function (){
//   $user = Auth::user();
//   $id = Auth::id();
//
//   if (Auth::check()){
//       echo "Hello: " . $user->name;
//       echo '<br />';
//       echo "User ID: " . $id;
//   }else{
//       return redirect()->to('home');
//   }
//});

//Session
//use \Illuminate\Http\Request;
//
//Route::get('session', function (Request $request){
//    $request->session()->put(["username"=>"mohammad"]);
//    return $request->session()->get('username');
//});

//



