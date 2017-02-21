@extends('layouts.app')

@section('content')
<div class="container">
	<center><h2><label>Ubah Data Golongan</label></h2></center><hr>
	<form method="POST" action="{{route('golongan.update', $golongan->id)}}">
		{{csrf_field()}}
		<input type="hidden" name="_method" value="PATCH">

		<div class="form-group">
			<label class="col-md-4 control-label">Kode Golongan</label>
			<div class="form-group col-md-6">
				<input class="form-control" type="text" name="kode_golongan" value="{{$golongan->kode_golongan}}">
			</div>
		</div>

		<div class="form-group">
			<label class="col-md-4 control-label">Nama Golongan</label>
			<div class="form-group col-md-6">
				<input class="form-control" type="text" name="nama_golongan" value="{{$golongan->nama_golongan}}">
			</div>
		</div>

		<div class="form-group">
			<label class="col-md-4 control-label">Besaran Uang</label>
			<div class="form-group col-md-6">
				<input class="form-control" type="text" name="besaran_uang" value="{{$golongan->besaran_uang}}">
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-6 col-md-offset-4">
				<input class="btn btn-success" type="submit" value="Simpan">
			</div>
		</div>
	</form>
</div>
@endsection