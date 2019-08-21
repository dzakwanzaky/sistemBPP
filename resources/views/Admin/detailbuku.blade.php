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
              <h2 class="box-title">Detail Buku</h2>
             
             </div>
            </div>
           <br />
            @foreach($data as $d)
            <form action="{{ route('databuku.update', $d->id) }}" method="post" enctype="multipart/form-data">
			{{ csrf_field() }}
      {{ method_field('PUT') }}
      <div class="form-group">
        <label for="kode_buku">Kode Buku :</label>
        <input type="text" class="form-control" id="id" name="id" value="{{ $d->id }}" disabled>
      </div>

					<div class="form-group">
						<label for="nama">Judul :</label>
						<input type="text" class="form-control" id="judul_buku" name="judul_buku" value="{{ $d->judul_buku }}" disabled>
					</div>

					<div class="form-group">
						<label for="penulis">Penulis :</label>
						<input type="text" class="form-control" id="penulis" name="penulis" value="{{ $d->penulis }}" disabled>
					</div>

					<div class="form-group">
						<label for="price">Price :</label>
						<input type="text" class="form-control" id="price" name="price" value="{{ $d->price }}" disabled> 
          </div>
          
          <div class="form-group">
						<label for="isbn">ISBN :</label>
						<input type="text" class="form-control" id="isbn" name="isbn" value="{{ $d->isbn }}" disabled> 
          </div>
          
          <div class="form-group">
						<label for="cetakan">Cetakan :</label>
						<input type="text" class="form-control" id="cetakan" name="cetakan" value="{{ $d->cetakan }}" disabled> 
          </div>
          
          <div class="form-group">
						<label for="tebal">Tebal :</label>
						<input type="text" class="form-control" id="tebal" name="tebal" value="{{ $d->tebal }}" disabled> 
          </div>
  
          <div class="form-group">
						<label for="ukuran">Ukuran :</label>
						<input type="text" class="form-control" id="ukuran" name="ukuran" value="{{ $d->ukuran }}" disabled> 
          </div>
          
          <div class="form-group">
						<label for="berat">Berat :</label>
						<input type="text" class="form-control" id="berat" name="berat" value="{{ $d->berat }}" disabled> 
          </div>
          
          <div class="form-group">
						<label for="tanggal">Tanggal :</label>
						<input type="text" class="form-control" id="tanggal" name="tanggal" value="{{ $d->tanggal }}" disabled> 
          </div>
          
          <div class="form-group">
						<label for="ketersediaan">Ketersediaan :</label>
						<input type="text" class="form-control" id="ketersediaan" name="ketersediaan" value="{{ $d->ketersediaan }}" disabled> 
          </div>
          
          <div class="form-group">
						<label for="berat">Bahasa :</label>
						<input type="text" class="form-control" id="bahasa" name="bahasa" value="{{ $d->bahasa }}" disabled> 
          </div>
          
          <div class="form-group">
						<label for="kategori">Kategori :</label>
						<input type="text" class="form-control" id="kategori" name="kategori" value="{{ $d->kategori }}" disabled> 
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


