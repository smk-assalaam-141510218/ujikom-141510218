@extends('layouts.app')

@section('content')
<div class="container">
	<center><h2><label>Ubah Data Kategori Lembur</label></h2></center><hr>
	<form method="POST" action="{{route('lembur-kategori.update',$kategoril->id)}}">
		{{csrf_field()}}
		<input type="hidden" name="_method" value="PATCH">

		<div class="form-group">
			<label class="col-md-4 control-label">Kode Lembur</label>
			<div class="form-group col-md-6">
				<input class="form-control" type="text" name="kode_lembur" value="{{$kategoril->kode_lembur}}">
			</div>
		</div>

		<div class="form-group">
			<label class="col-md-4 control-label">Jabatan</label>
			<div class="form-group col-md-6">
				<select name="jabatan_id" class="form-control">
                    @foreach($jabatan as $data)
                    <option value="{{$data->id}}">{{$data->nama_jabatan}}</option>
                    @endforeach
                </select>
			</div>
		</div>

		<div class="form-group">
			<label class="col-md-4 control-label">Golongan</label>
			<div class="form-group col-md-6">
				<select name="golongan_id" class="form-control">
                    @foreach($golongan as $data)
                    <option value="{{$data->id}}">{{$data->nama_golongan}}</option>
                    @endforeach
                </select>
			</div>
		</div>

		<div class="form-group">
			<label class="col-md-4 control-label">Besaran Uang</label>
			<div class="form-group col-md-6">
				<input class="form-control" type="text" name="besaran_uang" value="{{$kategoril->besaran_uang}}">
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