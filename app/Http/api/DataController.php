<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\shopping;
use App\Models\User;


class DataController extends Controller
{
    public function index()
    {
        $user = User::all();
        return response ([$user]);
    }
    public function indexShopping()
    {
        $shopping = shopping::all();
        return response()->json($shopping);
    }

    public function getShoppingByID($id)
    {
        $shopping = shopping::where('id', $id)->get();
        return $shopping;
    }
    public function deleteShopping($id)
    {
        shopping::destroy($id);
        return "data berhasil dihapus";
    }
    public function updateShopping(Request $req, $id)
    {
        $shopping = shopping::findOrFail($id);
        $shopping->name = $req->name;
        $shopping->save();

        return response()->json($shopping);

    }
    public function create(Request $req){

        $shopping = new shopping();
        $shopping -> name = $req->input('name');
        $shopping->save();
        return response()->json($shopping);
    }
}
