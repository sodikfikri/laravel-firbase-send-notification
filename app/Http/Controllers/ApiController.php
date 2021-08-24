<?php

namespace App\Http\Controllers;

use Illumiinate\Http\Request;
use App\Item;

class ApiController extends Controller
{
	public function update(Request $request, $id)
	{
		$nama = $request->nama;
		$description = $request->description;
		$price = $request->price;
		$is_acitve = $request->is_acitve;

		$item = Item::find($id);
		$item->nama = $nama;
		$item->description = $description;
		$item->price = $price;
		$item->is_acitve = $is_acitve;
		$item->save();

		return 'Data telah berhasil di ubah!!!';
	}
}