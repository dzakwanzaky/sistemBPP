@extends('Admin/base')
@section('content')
<!-- Content Wrapper. Contains page content -->
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12" style="background:white">
            <div class="box box-primary">
              <div class="box-header">
                <i class="ion ion-clipboard"></i>
              <br/>
              <h2 class="box-title">Detail History Stok</h2>
             </div>
            </div>
           <br/>
            @foreach($data as $d)
            <form action="{{ route('databuku.update', $d->id) }}" method="post" enctype="multipart/form-data">
			{{ csrf_field() }}
			{{ method_field('PUT') }}
					<div class="form-group">
						<label for="nama">Judul :</label>
						<input type="text" class="form-control" id="judul" name="judul" value="{{ $d->judul }}" disabled>
					</div>

					<div class="form-group">
						<label for="tanggal_mulai">Penulis :</label>
						<input type="text" class="form-control" id="penulis" name="penulis" value="{{ $d->penulis }}" disabled>
					</div>

					<div class="form-group">
						<label for="tanggal_selesai">Stok :</label>
						<input type="text" class="form-control" id="stok" name="stok" value="{{ $d->stok }}" disabled> 
					</div>

					<div class="form-group">
					  <a class="btn btn-success" href="{{route('databuku.edit', $d->id)}}" role="button">Edit</a>
					</div>
				</form>
				@endforeach
            <br />
          </div><!-- /.col -->
          <div class="col-sm-6">
           
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

@endsection


