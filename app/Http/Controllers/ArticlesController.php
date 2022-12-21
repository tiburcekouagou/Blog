<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index() {
        $articles = [
            ["title" => "Titre article 1", "body" => "Contenu de l'article 1"],
            ["title" => "Titre article 2", "body" => "Contenu de l'article 2"],
            ["title" => "Titre article 3", "body" => "Contenu de l'article 3"],
            ["title" => "Titre article 4", "body" => "Contenu de l'article 4"],
            ["title" => "Titre article 5", "body" => "Contenu de l'article 5"],
        ];

        return view("layouts.articles", compact("articles"));
    }
}
