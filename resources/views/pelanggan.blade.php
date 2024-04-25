@extends('layouts.main')

@section('content')

<div class="main-panel">
  <div class="content">
    <div class="page-inner">
      <div class="page-header">
        <h4 class="page-title">Peserta Tour</h4>
        <ul class="breadcrumbs">
          <li class="nav-home">
            <a href="#">
              <i class="flaticon-home"></i>
            </a>
          </li>
          <li class="separator">
            <i class="flaticon-right-arrow"></i>
          </li>
          <li class="nav-item">
            <a href="#">Peserta</a>
          </li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <div class="row">
              <a href="{{ url('pelanggan/create') }}" class="btn btn-success ml-auto" style="float: right;"><i class="fa-solid fa-plus mr-2"></i> Tambah Data </a>

              <button type="button" style="float: right;" class="btn btn-primary ml-3" data-toggle="modal" data-target="#importExcel">
                IMPORT EXCEL
              </button>
              <a href="{{ url('pelanggan/pdf') }}" class="btn btn-danger" style="float: right;"><i class="fa-solid fa-plus ml-2"></i>Export PDF</a>

              <!-- Import Excel -->
		<div class="modal fade" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<form method="post" action="{{ url('/pelanggan/import') }}" enctype="multipart/form-data">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Import Excel</h5>
						</div>
						<div class="modal-body">
 
							{{ csrf_field() }}
 
							<label>Pilih file excel</label>
							<div class="form-group">
								<input type="file" name="file" required="required">
							</div>
 
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-primary">Import</button>
						</div>
					</div>
				</form>
			</div>
		</div>

              
            </div>
          </div>
            <div class="card-body">
              <div class="table-responsive">
                <table id="basic-datatables" class="display table table-striped table-hover" >
                  <thead>
                    <tr>
                    <th>No</th>
                    <th>No Pelanggan</th>
                    <th>Nama Lengkap</th>
                    <th>No.Telepon</th>
                    <th>Kelas</th>
                    <th>No Bus/Kendaraan</th>
                    <th>ACTION</th>
                    </tr>
                  </thead>
                  <tbody>

                    @foreach ($pelanggans as $pelanggan)
                        
                    <tr style="text-align: center;">
                        <td>{{ $loop->iteration }}</td>
                        <td>
                          <div>
                          {!! QrCode::size(100)->generate($pelanggan->no_peserta_tour. ',' .$pelanggan->nama_peserta) ;!!}
                        </div>    
                        </td>
                        <td>{{ $pelanggan->nama_peserta }}</td>
                        <td>{{ $pelanggan->no_telepon }}</td>
                        <td>{{ $pelanggan->kelas }}</td>
                        <td>{{ $pelanggan->no_bus_kendaraan }}</td>
                        {{-- <td>{{ \App\Library\helper::format_date_ind($pelanggan->tgl_berangkat_tour) }}</td> --}}
                        <td>

                            <a href="{{ url('pelanggan/edit') }}/{{$pelanggan->id}}">
                                <button type="button" class="btn btn-primary"><i class="fa-solid fa-pencil"></i></button>
                              </a>
                                <a href="{{ url('pelanggan/delete') }}/{{$pelanggan->id}}">
                                <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                              </a> 
                                <a href="{{ url('pelanggan/detail') }}/{{$pelanggan->id}}">
                                <button type="button" class="btn btn-success"><i class="fa-solid fa-file"></i></button>
                              </a>    

                        </td>
                    </tr>

                    @endforeach


                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
</div>

@endsection