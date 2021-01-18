<?php

namespace App\Http\Controllers;
use App\Models\Produk;
use App\Models\Provinsi;


class HomeController extends Controller{
	
	function showLoginAdmin ()	{
		return view('loginAdmin');
	}

	function showDaftar ()	{
		return view('daftar');
	}

	function showBeranda ()	{
		return view('beranda');
	}

	function showProduk ()	{
		return view('produk');
	}

	function showKategori ()	{
		return view('kategori');
	}

	function showPromo ()	{
		return view('promo');
	}
	function showLogin ()	{
		return view('admin.login');
	}


	public function testCollection()
	{
		$list_bike = ['Arri', 'Panasonic', 'Nikon', 'Canon', 'Sony'];
		$list_bike = collect($list_bike);
		$list_produk = Produk::all();

		// Sorting
		// Sort By Harga Terendah
		// dd($list_-produk->sortBy('harga'));
		// Sort By Harga Tertinggi
		// dd($list_produk->sortByDesc('harga'));
		// $data['list'] = $list_produk;
		// return view('test-collection', $data);
		 //map

		// $map = $list_produk->map(function($item){
		// 	$item->stok = $item->stok+10;
		// 	return $item;
		// });	

		$data['list'] = Produk::simplePaginate(15);		
		return view('test-collection', $data);
	
		dd($list_bike, $list_produk);
	}


	function testAjax(){
		$data['list_provinsi'] = Provinsi::all();
		return view('test-ajax', $data);
	}
}