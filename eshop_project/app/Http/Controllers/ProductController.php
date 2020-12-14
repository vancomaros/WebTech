<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $items = Item::all();
        return view('contents.product')->with('items', $items);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $item = Item::find($id);
        $similar  = Item::where('category', $item->category)->get();
        return view('contents.product')->with('item', $item)->with('similar', $similar);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function cart()
    {
        
        return view('contents.cart');
    }


    public function checkout()
    {
        return view('contents.checkout');
    }   


    public function paymentshipping(Request $request)
    {

        return view('contents.checkout2');

    }

    public function credentials(Request $request)
    {
        $this->validate($request, [
            'firstName' => 'required|max:255',
            'lastName' => 'required|max:255',
            'address' => 'required|max:255',
            'city' => 'required|max:255',
            'email' => 'required|max:255',
            'phoneNumber' => 'required|max:255',
        ]);
        $request->session()->forget('cart');

        return redirect('/')->with('success', 'Order finished, thank you for your purchase!');
    }

    public function addToCart(Request $request, $id)
    {
        $this->validate($request, [
            'q' => 'required',
        ]);

        $product = Item::find($id);
        if(!$product) {
            abort(404);
        }
        $cart = session()->get('cart');
        // if cart is empty then this the first product
        if(!$cart) {
            $cart = [
                    $id => [
                        "name" => $product->title,
                        "quantity" => $request->input('q'),
                        "price" => $product->price,
                        // "photo" => $product->photo
                    ]
            ];
            
            session()->put('cart', $cart);
            // return redirect()->back()->with('success', 'Product added to cart successfully!');
            return view('contents.cart');
        }
        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
            session()->put('cart', $cart);
            // return redirect()->back()->with('success', 'Product added to cart successfully!');
            return view('contents.cart');
        }
        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "name" => $product->title,
            "quantity" => 1,
            "price" => $product->price,
            // "photo" => $product->photo
        ];
        session()->put('cart', $cart);
        // return redirect()->back()->with('success', 'Product added to cart successfully!');
        return view('contents.cart');
    }

    public function update(Request $request)
    {
        if($request->id and $request->quantity)
        {
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
            // redirect('/cart')->with('success', 'Cart updated!');
        }
    }

    public function remove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
            // return redirect('/cart')->with('success', 'Item removed!');
        }
        //return view('contents.main');
    }


}
