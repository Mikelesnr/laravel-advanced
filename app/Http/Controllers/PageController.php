<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;

class PageController extends Controller
{
    public function index()
    {
        $pages = Page::query();

        if(request()->has("published")) {
            $pages->where("published", request("published"));
        }

        if(request()->has("sort")) {
            $pages->orderBy("title", request("sort"));
        }

        $pages = $pages->get();

        return view("page.index", ["pages" => $pages]);
    }
}
