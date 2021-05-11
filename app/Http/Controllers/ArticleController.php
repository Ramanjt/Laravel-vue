<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    //
    public function index()
    {
        $articles=Article::orderBy('created_at','Desc')->paginate(5);

        //return collection of article
        return ArticleResource::collection($article);

    }

}
