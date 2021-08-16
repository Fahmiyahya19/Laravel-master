<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use Illuminate\Database\QueryException;
USE Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Validator;

class CartApiController extends Controller
{
    public function cart_data(){
        $model = Cart::get(['id','username','game','value']);
        $response = [
            'message' => 'Data Users',
            'data'    => $model
        ];
        return response()->json($response, 200);
    }

    public function cart_id_data($id){
        $data= Cart::findOrFail($id);
        $model=[
            'id' => $data->id,
            'username' => $data->username,
            'game' => $data->game,
            'value' => $data->value,
        ];
        $response = [
            'message' => 'Detail of Cart Data',
            'data'    => $model
        ];
        return response()->json($response, Response::HTTP_OK);
    }

    public function cart_store(Request $request){
        $validator = Validator::make($request->all(),[
            'username'  => 'required|min:3',
            'user_id'   => 'required|min:4',
            'game'      => 'required|in:PUBG,Valorant,Genshin Impact',
            'value'     => 'required'
        ]);
        if ($validator->fails()){
            return response()->json($validator->errors(), Response::HTTP_UNPROCESSABLE_ENTITY);
        }
        try {
            $data = Cart::create($request->all());
            $response = [
                'message' => 'Cart Data Created',
                'data'    => $data
            ];
            return response()->json($response, Response::HTTP_CREATED);
        } catch (QueryException $e) {
            return response()->json([
                'message'  => 'Failed' . $e->errorInfo
            ]);
        }
    }
    public function cart_update(Request $request,$id){
        $model = Cart::findOrFail($id);
        $validator = Validator::make($request->all(),[
            'username'  => 'required|min:3',
            'user_id'   => 'required|min:4',
            'game'      => 'required|in:PUBG,Valorant,Genshin Impact',
            'value'     => 'required'
        ]);
        if ($validator->fails()){
            return response()->json($validator->errors(), Response::HTTP_UNPROCESSABLE_ENTITY);
        }
        try {
            $model->update($request->all());
            $response = [
                'message' => 'Cart Data Updated',
                'data'    => $model
            ];
            return response()->json($response, Response::HTTP_OK);
        } catch (QueryException $e) {
            return response()->json([
                'message'  => 'Failed' . $e->errorInfo
            ]);
        }
    }
    public function cart_delete($id){
        $model = Cart::findOrFail($id);
        try {
            $model->delete();
            $response = [
                'message' => 'Cart Data Deleted'
            ];
            return response()->json($response, Response::HTTP_OK);
        } catch (QueryException $e) {
            return response()->json([
                'message'  => 'Failed' . $e->errorInfo
            ]);
        }
    }
}
