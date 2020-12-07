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
        $data = DB::select("select * from items where
                color like '%$color%' order by $order $how");

        $url = url()->full();
        if (strlen($color) > 0 || strlen($brand) > 0 || strlen($temp) > 0) {
            $url .= "&";
        }
        else {
            $url .= "?";
        }

        return view('contents.list', ['data' => $data, 'url' => $url]);

        //$data =  DB::table('items')->get();
        //return view('contents.list', ['data' => $data, 'url' => url()->current()]);
    }

    public function category($category)
    {
        $temp = "";
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
        $data = DB::select("select * from items where category like '%$category%' and
                color like '%$color%' order by $order $how");

        $url = url()->full();
        if (strlen($color) > 0 || strlen($brand) > 0 || strlen($temp) > 0) {
            $url .= "&";
        }
        else {
            $url .= "?";
        }

        return view('contents.list', ['data' => $data, 'url' => $url, 'category' => $category]);
    }
}

