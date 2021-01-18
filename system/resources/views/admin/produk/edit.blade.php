@extends('template.base')

@section('content')
<div class="container">
	<div class="row mt-5">
	<div class="col-md-4">
			<img src="{{url('asset', $produk->foto)}}" alt="" class="img-fluid"></img>					
		<div class="card">
			<div class="card-body">
				<img style="width:100%" src="{{url("public/$produk->foto")}}" >
			</div>
		</div>
	
		</div>

		<div class="col-md-8">
			<div class="card">
				<div class="card-header">
					Ubah Data Produk
				</div>
				<div class="card-body">


					<form action="{{url('admin/produk', $produk->id)}}" method="post" enctype="multipart/form-data">
						@csrf
						@method("PUT")
						

					<div class="form-group">
						<label for="" class="control-label">Nama</label>
						<input type="text" class="form-control" name="nama_produk" value="{{$produk->nama_produk}}">
					</div>

					<div class="row">
						<div class="form-group">
							<label for="" class="control-label">Foto</label>
							<input type="file" name="foto" class="form-control" accept="image/*">
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="" class="control-label">Harga</label>
								<input type="text" class="form-control" name="harga" value="{{$produk->harga}}">
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label for="" class="control-label">Berat</label>
								<input type="text" class="form-control" name="berat" value="{{$produk->berat}}">
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label for="" class="control-label">Stok</label>
								<input type="text" class="form-control" name="stok" value="{{$produk->stok}}">
							</div>
						</div>
					</div>

					<div class="form-group">
						<label for="" class="control-label">Deskripsi</label>
						<textarea name="deskripsi" class="form-control">{{$produk->deskripsi}}</textarea>
					</div>
					<button type="sumbit" class="btn btn-dark float-right"><i class="fa fa-save"></i> Simpan</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@push('style')
	<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endpush

@push('script')
	<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
	<script>
		$(document).ready(function() {
 		 $('#deskripsi').summernote();
		});
	</script>
@endpush