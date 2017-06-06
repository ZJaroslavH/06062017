<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class IndexController extends Controller {

    public function view (){
        $menu = [
            "Home" => "/public",
            "Article" => "/public/article",
            "Contacts" => "/public/contacts"
        ];
        return view("view", ["menu" => $menu]);
    }
}