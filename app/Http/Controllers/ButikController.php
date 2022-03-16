<?php

namespace App\Http\Controllers;

use App\Models\produkt;
use App\Models\User;
use App\Models\koszyk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class ButikController extends Controller
{
    public function index()
    {
      return view('index');
    }
    public function koszyk(Request $request)
    {
      $values=$request->value;
      $koszyk=koszyk::with(["produkt" => function($q) use ($values){
      $q->where('id', '=', $values);
      }])->get();
      $json=$koszyk->toArray();
      return response()->json($json);
    }
    public function lista()
    {
      return view('listaproduktow');
    }
    public function listaproduktow()
    {
      $data = produkt::paginate(1);
      return response()->json($data);
    }
    public function filtr()
    {
      $data = produkt::query();
      $columns=[''];
    }
    public function search(Request $request)
    {
      $values=$request->value;
      $search = produkt::query();
      $columns=['marka','typ'];
      foreach($columns as $column){
      $search->orWhere($column,'like','%'.$values.'%');
    };
      $data=$search->get();
      return response()->json($data);
    }
    public function login(request $request)
    {
      $credentials = $request->only('email','password');
      if(Auth::attempt($credentials))
      {
        $user = Auth::User;
        $success=$user->name;
        return response()->json($success);
      }
    }
}
