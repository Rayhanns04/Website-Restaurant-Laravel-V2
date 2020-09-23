<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Breakfast;

class PagiControllerAdmin extends Controller
{
    public function index(Request $request)
    {
        if($request->has('search')){
            $breakfasts = Breakfast::where('nama', 'LIKE', '%'.$request->search.'%')->get();
        } else {
            $breakfasts = Breakfast::all();
        }
        return view('crud.index', ['breakfasts'=>$breakfasts]);
    }

    public function create(Request $request)
    {
        $breakfasts = Breakfast::create([
            "url" => $request->url,
            "nama" => $request->nama,
            "desc" => $request->desc,
            "harga" => $request->harga,
        ]);

        return redirect('/breakfastMenu')->with('success', 'Your Data Has Been Inputed');
    }

    public function edit($id)
    {
        $breakfasts = Breakfast::find($id);
        return view('crud/edit', ['breakfasts'=>$breakfasts]);
    }

    public function update(Request $request, $id)
    {
        $breakfasts = Breakfast::where('id',$id)->update([
            "url" => $request->url,
            "nama" => $request->nama,
            "desc" => $request->desc,
            "harga" => $request->harga,
        ]);

        return redirect('/breakfastMenu')->with('success', 'Your Data Has Been Updated');
    }

    public function delete($id)
    {
        $breakfasts = Breakfast::find($id);
        $breakfasts->delete();

        return redirect('/breakfastMenu')->with('success', 'Your Data Has Been Deleted');
    }
}
