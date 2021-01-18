<?php

namespace App\Http\Controllers;
use App\Models\Kategori;

class KategoriController extends Controller
{
	function index(){
		$data['list_kategori'] = Kategori::all();
		return view('admin.kategori.index', $data);
	}

	function create(){
		return view('admin.kategori.create');
	}

	function store(){
		$kategori = new kategori;
		$kategori->nama_kategori = request('nama_kategori');
		$kategori->save();

		return redirect('admin/kategori');
	}

	function show(Kategori $kategori){
		$data['kategori'] = $kategori;
		return view('admin.kategori.show', $data);
	}

	function edit(Kategori $kategori){
		$data['kategori'] = $kategori;
		return view('admin.kategori.edit', $data);
	}

	function update(Kategori $kategori){
		$kategori->nama_kategori = request('nama_kategori');
		$kategori->deskripsi = request('deskripsi');
		$kategori->save();

		return redirect('admin/kategori')->with('success','Data Berhasil Diubah');
	}

	function destroy(Kategori $kategori){
		$kategori->delete();
		return redirect('admin/kategori')->with('danger','Data Berhasil Dihapus');
	}

	function filter(){
			// $data['list_kategori'] = kategori::where('nama_kategori',$nama)->get();
			// $data['list_kategori'] = kategori::where('nama_kategori', 'like', "%$nama%")->get();
			// $data['list_kategori'] = kategori::whereIn('stok', $stok)->get();
			// $data['list_kategori'] = kategori::whereBetween('harga', [$harga_min, $harga_max])->get();
			// $data['list_kategori'] = kategori::whereNotBetween('harga', [$harga_min, $harga_max])->get();
			// $data['list_kategori'] = kategori::whereNotin('stok', $stok)->get();
			// $data['list_kategori'] = kategori::where('stok', '<>', $stok)->get();
			// $data['list_kategori'] = kategori::whereDate('created_at', '2020-11-18')->get();
			// $data['list_kategori'] = kategori::whereDate('created_at', ['2020-11-18','2020-11-19'])->get();
			// $data['list_kategori'] = kategori::whereYear('created_at', '2020')->get();
			// $data['list_kategori'] = kategori::whereMonth('created_at', '11')->whereYear('created_at', '2018')->get();
			// $data['list_kategori'] = kategori::whereTime('created_at', '00:45:10')->get();
			// $data['list_kategori'] = kategori::whereDate('created_at', ['2020-11-18','2020-11-19'])->get();
			// $data['list_kategori'] = kategori::whereBetween('harga', [$harga_min,$harga_max])->whereNotin('stok', [12]) ->whereYear('created_at', '2020') ->get();
		$nama = request('nama');
		$stok = explode(",", request('stok'));
		$data['harga_min'] = $harga_min = request('harga_min');
		$data['harga_max'] = $harga_max = request('harga_max');
			$data['list_kategori'] = kategori::where('nama_kategori', 'like', "%$nama%")->get();
		$data['nama'] = $nama;
		$data['stok'] = request('stok');
		return view('admin.kategori.index', $data);
		// dd(request()->all());
	}
}