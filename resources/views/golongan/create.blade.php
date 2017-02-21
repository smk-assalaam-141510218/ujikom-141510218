@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-">
                <div class="panel-heading"><b><h2><center>Tambah Data Golongan</center></h2></b></div>
                <div class="panel-body">
                    		<form method="POST" action="{{url('golongan')}}">
					{{csrf_field()}}
						<div class="form-group">
							<label>Kode Golongan</label>
								<input class="form-control" type="text" name="kode_golongan">
						</div>
						<div class="form-group">
							<label>Nama Golongan</label>
								<input class="form-control" type="text" name="nama_golongan">
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Besaran Uang</label>
							<input class="form-control" type="text" name="besaran_uang">
						</div>
						<div class="form-group">
			<div class="col-md-6 col-md-offset-4">
				<input class="btn btn-info" type="submit" value="Simpan">
			</div>
				</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
