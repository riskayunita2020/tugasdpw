@extends('template.base')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 mt-5">
			<div class="card">
				<div class="card-header">
					Tambah Data Kategori
				</div>
				<div class="card-body">
					<form action="{{url('admin/kategori', $kategori->id)}}" method="post">
						@csrf
						@method("PUT")
					<div class="form-group">
						<label for="" class="control-label">Nama</label>
						<input type="text" class="form-control" name="nama_kategori" value="{{$kategori->nama_kategori}}">
					</div>

					<div class="form-group">
						<label for="" class="control-label">Jumlah Barang</label>
						<input type="text" class="form-control" name="jumalah_barang" value="{{$kategori->jumlah_barang}}">
					</div>

					<div class="form-group">
						<label for="" class="control-label">Deskripsi</label>
						<textarea name="deskripsi" class="form-control">{{$kategori->deskripsi}}</textarea>
					</div>
					
					<button type="sumbit" class="btn btn-dark float-right"><i class="fa fa-save"></i> Simpan</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection