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
              <h2 class="box-title">Stok Buku</h2>
             
             </div>
            </div>
           <br />
            <table class="table table-bordered table-striped table-responsive-sm" id="databuku"> 
              <thead>
                <tr class="table-secondary" style="text-align:center; text-transform: uppercase">
                  <th>No.</th>
                  <th>Judul</th>
                  <th>Stok</th>
                  <th>Aksi</th>
               </tr>
              </thead>
          <body>
              @php $no = 1; @endphp
                @foreach($data as $d)
                  <tr style="text-transform: uppercase">
                      <td>{{ $d->id }}</td>
                      <td>{{ $d->judul }}</td>
                      <td>{{ $d->stok }}</td>                    
                      <td>
                          <a href="{{route('databuku.show',$d->id)}}" class="btn btn-sm btn-primary">Detail</a>
                      </td>
                   </tr>
                @endforeach
             </body>
          </table>
         <br />        
        </div><!-- /.col -->
       <div class="col-sm-6">  
      </div><!-- /.col -->
     </div><!-- /.row -->
    </div><!-- /.container-fluid -->
   </div>
   <script
   src="https://code.jquery.com/jquery-3.4.1.min.js"
   integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
   crossorigin="anonymous"></script>
   @endsection
   @section('sweet')
   <script>
     $(document).ready( function () {
       $('#databuku').DataTable();
       });
  </script>
  @endsection
  
