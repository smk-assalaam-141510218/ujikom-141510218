@extends('layouts.app')

@section('content')
<div class="container">
	<center><h2><label>Ubah Data Tunjangan Pegawai</label></h2></center><hr>
	<form method="POST" action="{{route('tunjangan-pegawai.update',$tpegawai->id)}}">
		{{csrf_field()}}
		<input type="hidden" name="_method" value="PATCH">

		<div class="form-group">
			<label class="col-md-4 control-label">Tunjangan</label>
			<div class="form-group col-md-6">
				<select name="kode_tunjangan_id" class="form-control">
                    @foreach($tunjangan as $data)
                    <option value="{{$data->id}}">{{$data->besaran_uang}}</option>
                    @endforeach
                </select>
			</div>
		</div>

		<div class="form-group">
			<label class="col-md-4 control-label">NIP</label>
			<div class="form-group col-md-6">
				<select name="pegawai_id" class="form-control">
                    @foreach($pegawai as $data)
                    <option value="{{$data->id}}">{{$data->nip}}</option>
                    @endforeach
                </select>
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