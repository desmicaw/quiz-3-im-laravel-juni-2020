<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArtikelModel;

class ArtikelController extends Controller
{
	public function index(){
		$artikel = ArtikelModel::get_all();
		// dd($artikel);
		return view('artikel.index',compact('artikel'));
	}

	public function create(){
		$artikel = ArtikelModel::get_all();
		return view('artikel.form');
	}

	public function store(Request $request){
		$data = $request->all();
		unset($data["_token"]);
		ArtikelModel::save($data);
		return redirect('/artikel');
	}

	public function show($id){
		$detail = ArtikelModel::find_by_id($id);
		return view('artikel.show',compact('detail'));
	}

	public function edit($id){
		$edit = ArtikelModel::find_by_id($id);
		return view('artikel.edit',compact('edit'));
	}

	public function update($id, Request $request){
		$update = ArtikelModel::update($id,$request->all());
		return redirect('/artikel/'.$id);
	}

	public function destroy($id){
		$deleted = ArtikelModel::delete($id);
		return redirect('/artikel');
	}

}
