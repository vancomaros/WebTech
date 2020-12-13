<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductListController extends Controller
{
    function index()
    {
        $temp = "";
        $page = request('page');
        $color = request('color');
        $brand = request('brand');
        $order = request('order');
        $how = request('how');
        if (!(strlen($order) > 0)) {
            $order = "id";
        }
        else {
            $temp = $order;
        }
        if (!(strlen($how) > 0)) {
            $how = "asc";
        }

        $items = DB::table('items')->select('*')
            ->where('color', 'like', '%' . $color . '%')
            ->orderBy($order, $how)->get();

        $data = DB::table('items')->select('*')
            ->where('color', 'like', '%' . $color . '%')
            ->orderBy($order, $how)->paginate(9);

        $url = url()->full();
        if (strlen($color) > 0 || strlen($brand) > 0 || strlen($temp) > 0 || strlen($page) > 0) {
            $url .= "&";
        }
        else {
            $url .= "?";
        }

        if (!(strlen($page) > 0)) {
            $page = 1;
        }

        return view('contents.list', ['data' => $data, 'url' => $url,
            'length' => count($items), 'page' => $page]);
    }

    public function category($category)
    {
        $temp = "";
        $page = request('page');
        $color = request('color');
        $brand = request('brand');
        $order = request('order');
        $how = request('how');
        if (!(strlen($order) > 0)) {
            $order = "id";
        }
        else {
            $temp = $order;
        }
        if (!(strlen($how) > 0)) {
            $how = "asc";
        }

                            // and brand like '%$brand%'
        $items = DB::table('items')->select('*')
            ->where([['category', 'like', '%' . $category  . '%'],
                    ['color', 'like', '%' . $color . '%']])
            ->orderBy($order, $how)->get();

        $data = DB::table('items')->select('*')
            ->where([['category', 'like', '%' . $category  . '%'],
                ['color', 'like', '%' . $color . '%']])
            ->orderBy($order, $how)->paginate(9);

        $url = url()->full();
        if (strlen($color) > 0 || strlen($brand) > 0 || strlen($temp) > 0 || strlen($page)) {
            $url .= "&";
        }
        else {
            $url .= "?";
        }

        if (!(strlen($page) > 0)) {
            $page = 1;
        }

        return view('contents.list', ['data' => $data, 'url' => $url, 'category' => $category,
            'length' => count($items), 'page' => $page]);
    }

    public function search() {
        $temp = "";
        $page = request('page');
        $color = request('color');
        $brand = request('brand');
        $order = request('order');
        $how = request('how');

        if (!(strlen($order) > 0)) {
            $order = "id";
        }

        if (!(strlen($how) > 0)) {
            $how = "asc";
        }

        $search_text = $_GET['query'];

        $items = DB::table('items')->select('*')
            ->where([['title', 'ilike', '%' . $search_text  . '%'],
                ['color', 'like', '%' . $color . '%'],/*
                ['brand', 'like', '%' . $brand . '%']*/])
            ->orWhere([['description', 'ilike', '%' . $search_text  . '%'],
                ['color', 'like', '%' . $color . '%'],/*
                ['brand', 'like', '%' . $brand . '%']*/])
            ->orderBy($order, $how)->get();

        $data = DB::table('items')->select('*')
            ->where([['title', 'ilike', '%' . $search_text  . '%'],
                ['color', 'like', '%' . $color . '%']/*,
                ['brand', 'like', '%' . $brand . '%']*/])
            ->orWhere([['description', 'ilike', '%' . $search_text  . '%'],
                ['color', 'like', '%' . $color . '%']/*,
                ['brand', 'like', '%' . $brand . '%']*/])
            ->orderBy($order, $how)->paginate(9);

        $url = url()->full();
        $url .= "&";

        if (!(strlen($page) > 0)) {
            $page = 1;
        }

        return view('contents.list', ['data' => $data, 'url' => $url,
            'length' => count($items), 'page' => $page]);
    }
}

