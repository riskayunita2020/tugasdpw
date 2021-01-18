<?php

namespace App\Http\Controllers;
use App\Models\Produk;
use App\Models\Kategori;
use App\Models\User;

class ProdukController extends Controller
{
	function index(){
		$user = request()->user();
		$data['list_produk'] = Produk::all();
		// $data['list_kategori'] = Kategori::all();
		return view('admin.produk.index', $data);
	}

	function create(){
		$data['list_kategori'] = Kategori::all();
		return view('admin.produk.create');
	}

	function store(){

		// dd(request()->all());
		$produk = new Produk;
		$produk->id_user = request()->user()->id;
		$produk->nama_produk = request('nama_produk');
		$produk->harga = request('harga');
		$produk->berat = request('berat');
		$produk->deskripsi = request('deskripsi');
		$produk->stok = request('stok');
		$produk->save();

		$produk->handleUploadFoto();

		return redirect('admin/produk')->with('success','Data Berhasil Ditambahkan');

	}

	function show(Produk $produk){
		$data['produk'] = $produk;
		return view('admin.produk.show', $data);
	}

	function edit(Produk $produk){
		$data['produk'] = $produk;
		return view('admin.produk.edit', $data);
	}

	function update(Produk $produk){
		$produk->nama_produk = request('nama_produk');
		$produk->harga = request('harga');
		$produk->berat = request('berat');
		$produk->deskripsi = request('deskripsi');
		$produk->stok = request('stok');
		$produk->handleUploadFoto(); 
		$produk->save();

		$produk->handleUploadFoto();

		return redirect('admin/produk')->with('success','Data Berhasil Diubah');
	}

	function destroy(Produk $produk){
		// $produk->handleDelete();
		$produk->delete();
		return redirect('admin/produk')->with('danger','Data Berhasil Dihapus');
	}

	function filter(){
			// $data['list_produk'] = Produk::where('nama_produk',$nama)->get();
			// $data['list_produk'] = Produk::where('nama_produk', 'like', "%$nama%")->get();
			// $data['list_produk'] = Produk::whereIn('stok', $stok)->get();
			// $data['list_produk'] = Produk::whereBetween('harga', [$harga_min, $harga_max])->get();
			// $data['list_produk'] = Produk::whereNotBetween('harga', [$harga_min, $harga_max])->get();
			// $data['list_produk'] = Produk::whereNotin('stok', $stok)->get();
			// $data['list_produk'] = Produk::where('stok', '<>', $stok)->get();
			// $data['list_produk'] = Produk::whereDate('created_at', '2020-11-18')->get();
			// $data['list_produk'] = Produk::whereDate('created_at', ['2020-11-18','2020-11-19'])->get();
			// $data['list_produk'] = Produk::whereYear('created_at', '2020')->get();
			// $data['list_produk'] = Produk::whereMonth('created_at', '11')->whereYear('created_at', '2018')->get();
			// $data['list_produk'] = Produk::whereTime('created_at', '00:45:10')->get();
			// $data['list_produk'] = Produk::whereDate('created_at', ['2020-11-18','2020-11-19'])->get();
			// $data['list_produk'] = Produk::whereBetween('harga', [$harga_min,$harga_max])->whereNotin('stok', [12]) ->whereYear('created_at', '2020') ->get();
		$nama = request('nama');
		$stok = explode(",", request('stok'));
		$data['harga_min'] = $harga_min = request('harga_min');
		$data['harga_max'] = $harga_max = request('harga_max');
			$data['list_produk'] = Produk::where('nama_produk', 'like', "%$nama%")->get();
		$data['nama'] = $nama;
		$data['stok'] = request('stok');
		return view('admin.produk.index', $data);
		// dd(request()->all());
	}
}