<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    public function index() {
        
        // $articles = Article::all(); // digunakan untuk menampilkan semua isi
        $articles = Article::orderBy('id', 'desc')->simplePaginate(6); // paginate digunakan membagi beberapa halaman pada html

        return view('articles/index', compact('articles'));
    }

    public function single(Article $article) {
        
        return view('articles/single', [
            'article' => $article
        ]);
    }

    public function create() {

        return view('articles/create');
    }

    public function store(Request $request) {

        $request->validate([
            'title' => ['required', 'min:3', 'max:255'],
            'textbody' => ['required']
        ]);

        // $article = new Article();
        // $article->title = $request->title;
        // $article->body = $request->textbody;
        // $article->save();

        Article::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title, '-'),
            'body' => $request->textbody
        ]);

        return redirect('/article');
    }

    public function edit(Article $article) {

        $article = Article::find($article->id);

        return view('/articles/edit', compact('article'));
    }

    public function update(Request $request, Article $article) {

        $article = Article::find($article->id);
        $article->title = $request->title;
        $article->slug = Str::slug($request->title, '-');
        $article->body = $request->textbody;
        $article->save();

        // Article::find($article->id)->update([
        //     'title' => $request->title,
        //     'slug' => Str::slug($request->title, '-'),
        //     'body' => $request->textbody
        // ]);

        return redirect("/article/$article->slug");
    }

    public function destroy($id) {

        Article::find($id)->delete();

        return redirect('/article');
    } 
}
