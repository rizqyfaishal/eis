<?php

namespace App\Http\Controllers;

use App\Article;
use App\Helper\AttachmentHelper;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Session;

class ArticleController extends Controller
{

    use AttachmentHelper;

    public function store(Requests\ArticleRequest $request){
        $article = Article::create($request->all());
        if(is_null($article)){
            abort(500);
        }
        if($request->has('thumbnail')){
            $file = $this->saveFile($request->file('thumbnail'));
            $article->thumbnail()->save($file);
        }
        Session::flash('article_created',true);
        return redirect(action('DashboardController@articleManager'));
    }

    public function show($id){
        $article = Article::find($id);
        if(is_null($article)){
            abort(404);
        }
        return view('viewpost')->with([
            'article' => $article
        ]);
    }

    public function edit($id){
        $article = Article::find($id);
        if(is_null($article)){
            abort(404);
        }
        return view('dashboard-admin-article-edit')->with([
            'article' => $article
        ]);
    }

    public function update($id,Requests\ArticleEditRequest $request){
        $article = Article::find($id);
        if(is_null($article)){
            abort(404);
        }
        $article->update($request->all());
        if($request->hasFile('thumbnail')){
            $this->updateFile($article->thumbnail(),$request->file('thumbnail'));
        }
        Session::flash('article_edited',true);
        return redirect(action('DashboardController@articleManager'));
    }

    public function delete($id){
        $article = Article::find($id);
        if(is_null($article)){
            abort(404);
        }
        if($article->delete()){
            Session::flash('article_deleted',true);
            return redirect(action('DashboardController@articleManager'));
        }
        abort(500);
    }
}
