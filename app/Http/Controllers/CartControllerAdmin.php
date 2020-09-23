<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;

class CartControllerAdmin extends Controller
{
    public function index(Request $request) 
    {
        if ($request->has('search')) {
            $carts = Cart::where('nama', 'LIKE', '%'.$request->search.'%')->get();    
        } else {
            $carts = Cart::all();
        }

        return view('cartAdmin.index', ['carts'=>$carts]);
    }

    public function create(Request $request)
    {
        $carts = Cart::create([
            "url" => $request->url,
            "nama" => $request->nama,
            "desc" => $request->desc,
            "harga" => $request->harga,
        ]);

        return redirect('/cartItem')->with('success', 'Your Data Has Been Inputed');
    }

    public function edit($id) 
    {
        $carts = Cart::find($id);
        return view('cartAdmin/edit', ['carts'=>$carts]);
    }

    public function update(Request $request, $id) 
    {
        $carts = Cart::where('id',$id)->update([
            "url" => $request->url,
            "nama" => $request->nama,
            "desc" => $request->desc,
            "harga" => $request->harga,
        ]);

        return redirect('/cartItem')->with('success', 'Your Data Has Been Updated');
    }

    public function delete($id) {
        $carts = Cart::find($id);
        $carts->delete();

        return redirect('/cartItem')->with('success', 'Your Data Has Been Deleted');
    }
}
