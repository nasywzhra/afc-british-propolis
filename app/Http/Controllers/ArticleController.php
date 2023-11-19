<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function userIndex() {
        return view('pages.articles.user.index');
    }
}
