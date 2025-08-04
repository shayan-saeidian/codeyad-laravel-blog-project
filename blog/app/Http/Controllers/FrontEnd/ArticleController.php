<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function article(){
        return view('frontend.single_article');
    }
    public function articles(){
        return view('frontend.articles');
    }
}
