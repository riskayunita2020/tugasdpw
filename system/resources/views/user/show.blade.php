@extends('template.base')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 mt-5">
			<div class="card">
				<div class="card-header">
					Detail Data user
				</div>
				<div class="card-body">
					<table class="table">
						<tbody>
							<h3>{{$user->nama_user}}</h3>
							<hr>
							<p> Username : {{$user->username}} |
								Jenis Kelamin : {{$user->jenis_kelamin_string}} |
								Email : {{$user->email}}
							</p>
							<p>
								No. Handphone : {{$user->detail->no_handphone}}
							</p>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection