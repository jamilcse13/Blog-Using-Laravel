<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ApiRequest;
use App\Models\ApiModel;

class ApiController extends Controller
{
    public function getApi(){
    	return view('api');
    }

    public function submit(ApiRequest $request){
    	$api = new ApiModel();

    	$api->country = $request->input('country');
    	$api->continent = $request->input('continent');
    	$api->ranking = $request->input('ranking');
    	$api->language = $request->input('language');
    	$api->save();

    	return redirect()->route('api')->with('success', 'Successfully Data Stored!');
    }

    public function Api(){
    	return response()->json(ApiModel::get(), 200); //200==Ok
    }

    public function ApiByID($id){
    	return response()->json(ApiModel::find($id), 200);
    }

    public function ApiSave(Request $request){
    	$api = ApiModel::create($request->all());
    	return response()->json($api, 201);
    }
}
