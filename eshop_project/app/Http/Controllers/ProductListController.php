<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductListController extends Controller
{
    function index()
    {
        $data =  DB::table('items')->get();
        return view('contents.list', ['data' => $data, 'url' => url()->current()]);
    }

    public function category($category)
    {
        $color = request('color');
        $data = DB::select("select * from items where category like '%$category%' and
                color like '%$color%'");
        $url = url()->current();
        $url .= "?";
        return view('contents.list', ['data' => $data, 'url' => $url, 'category' => $category]);
    }
}

