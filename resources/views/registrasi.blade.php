@extends('layouts.main')

@section('content')

<div class="main-panel">
  <div class="content">
    <div class="page-inner">
      <div class="page-header">
        <h4 class="page-title">Registrasi</h4>
        <ul class="breadcrumbs">
          <li class="nav-home">
            <a href="{{ route('dashboard') }}">
              <i class="flaticon-home"></i>
            </a>
          </li>
          <li class="separator">
            <i class="flaticon-right-arrow"></i>
          </li>
          <li class="nav-item">
            <a href="#">Data tour</a>
          </li>
        </ul>
      </div>
      <div class="row">
        <div class="col-12 col-md-6" style="display: block; margin-left: auto; margin-right: auto;">
        <div id="reader" width="600px"></div>
    </div>
      </div>
      
      <div class="row">
        <div class="form-group col-6" style="display: block; margin-left: auto; margin-right: auto;">
          <label for="email2">Nama Peserta</label>
          <input readonly type="text" name="nama_peserta" class="form-control" id="nama_peserta">
        </div>
        <div class="form-group col-6" style="display: block; margin-left: auto; margin-right: auto;">
          <label for="email2">No Telepon</label>
          <input readonly type="text" name="no_telepon" class="form-control" id="no_telepon">
        </div>
        </div>

    </div>
  </div>
  
</div>



@endsection
{{-- <script>

function onScanSuccess(decodedText, decodedResult) {
  // handle the scanned code as you like, for example:
//   console.log(`Code matched = ${decodedText}`, decodedResult);
$("#nama_peserta").val(decodedText)
}

function onScanFailure(error) {
  // handle scan failure, usually better to ignore and keep scanning.
  // for example:
}

let html5QrcodeScanner = new Html5QrcodeScanner(
  "reader",
  { fps: 10, qrbox: {width: 250, height: 250} },
  /* verbose= */ false);
html5QrcodeScanner.render(onScanSuccess, onScanFailure);

</script> --}}