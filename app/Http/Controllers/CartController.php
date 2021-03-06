<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cart(){
        return view('Cart.cart',[
            'title' => "Cart"
        ]);
    }

    public function cartdata(){
        $model  = Cart::all();
        $response = [
            'message' => 'Data Berdasarkan ID',
            'data'    => $model
        ];
        return response()->json($response, 200);
    }

    public function cartform(){
        return view('Cart.cartform',[
            'title' => "Form"
        ]);
    }
    public function edit($id)
    {
        $data = Cart::findOrfail($id);
        return view('Cart.cartedit', compact('data'),[
            'title' => "Edit"
        ]);
    }
    public function update(Request $request,$id){
        $data = Cart::findorfail($id);
        $data -> update($request->all());
        return redirect()->route('cart');
    }
    public function store(Request $request){
        $rules = [
            'username'              => 'required|min:3',
            'user_id'               => 'required|min:4',
            'game'                  => 'required|in:PUBG,Valorant,Genshin Impact',
            'value'                 => 'required'
        ];

        $messages = [
            'username.required'     => 'Nama harus diisi',
            'username.min'          => 'Nama minimal 3 karakter',
            'user_id.required'      => 'User id harus diisi',
            'user_id.min'           => 'User id salah',
            'game.required'         => 'Game harus diisi',
            'game.in'               => 'Penulisan Game Harus Sesuai Contoh',
            'value.required'        => 'Value harus diisi'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }

        $carts = new Cart;
        $carts->username = ($request->username);
        $carts->user_id = ($request->user_id);
        $carts->game = ucwords($request->game);
        $carts->value = ($request->value);
        $simpan = $carts->save();

        if($simpan){
            Session::flash('success');
            return redirect()->route('cart');
        } else {
            Session::flash('errors');
            return redirect()->route('cartform');
        }
    }
    public function destroy($id){
        $data = Cart::findorfail($id);
        $data->delete();
        Session::flash('delete');
        return back();
    }
}
