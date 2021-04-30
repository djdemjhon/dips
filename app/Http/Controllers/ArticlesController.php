<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticlesController extends Controller
{
    

   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$articles = Article::all();
        //return Article::where ('title',"Article Two")->get();
        //$articles = DB::select('SELECT * FROM articles); add use DB at top 
        //return Article::orderBy('title','desc')->take(1)->get();
        //$articles = Article::orderBy('title','desc')->get();

        $articles = Article::orderBy('created_at','desc')->paginate(1);

        return view('articles.index')->with('articles', $articles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [ 'title' => 'required',
                                    'body' => 'required' ]);
        $article = new Article;
        $article->title = $request->input('title');
        $article->body = $request->input('body');
        $article->save();

        return redirect('/articles')->with('success', 'Article Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::find($id);
        return view('articles.show')->with('article', $article);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::find($id);
        return view('articles.edit')->with('article', $article);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [ 'title' => 'required',
                                    'body' => 'required' ]);
        $article =  Article::find($id);
        $article->title = $request->input('title');
        $article->body = $request->input('body');
        $article->save();

        return redirect('/articles')->with('success', 'Article Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article =  Article::find($id);
        $article->delete();
        return redirect('/articles')->with('success', 'Article Removed');
    }















}
