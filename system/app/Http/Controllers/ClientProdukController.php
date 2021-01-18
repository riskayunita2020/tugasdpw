<?php

namespace App\Http\Controllers;
use App\Models\Produk;

class ClientProdukController extends Controller
{
	function index(){
		$data['list_produk'] = produk::all();
		return view('customer.home', $data);
	}

	function showProduk(){
		$data['show_produk'] = produk::all();
		return view('produk');
	}

	function show(Produk $produk){
		$data['produk'] = $produk;
		return view('customer.produk_single', $data);
	}

	function kontak(){
		return view('customer.kontak');
	}
	function filter(){
		$nama = request('nama');
		$data['show_produk'] = Produk::where('nama_produk', 'like', "%$nama%")->get();
		$data['nama'] = $nama;
		return view('customer.produk', $data);
	}
}