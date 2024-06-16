<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

use App\Models\ArticleModel;


class HomeController extends Controller
{
    public function index(){
        $article = DB::table('tbl_article')->select('*')->orderByDESC('created_at')->get();

        return view('home.index',['article' => $article]);
    }

    public function detail($id){
        $article = DB::table('tbl_article')->select('*')->where('id',$id)->first();

        return view('home.detail', ['article' => $article]);
    }

    public function publish(){
        return view('home.publish');
    }

    public function store_blog(Request $request){
        $request->validate([
            'title_article' => 'required',
            'name_writer' => 'required',
            'upload_cover' => 'required',
            'content_article' => 'required'
        ]);

        $title = htmlspecialchars($request->input('title_article'));
        $writer = htmlspecialchars($request->input('name_writer'));
        $cover = $request->file('upload_cover');
        $content = $request->input('content_article');

        $filename = null;

        if($cover){
            $filename = rand() . '_' . $cover->getClientOriginalName(); 
            Storage::disk('cover_article')->put($filename, file_get_contents($cover));
        }

        ArticleModel::create([
            'id_user_writer' => Str::uuid(),
            'cover' => $filename,
            'title' => $title,
            'writer' => $writer,
            'content' => $content
        ]);

        return redirect()->to('/');
    }
}
