<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Siliwangi Holiday</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="../../assets/img/icon.ico" type="image/x-icon"/>

	<!-- Fonts and icons -->
	<script src="../../assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Open+Sans:300,400,600,700"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands"], urls: ['../../assets/css/fonts.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../../assets/css/azzara.min.css">

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="../../assets/css/demo.css">
</head>
<body>
	<div class="">
		<!--
			Tip 1: You can change the background color of the main header using: data-background-color="blue | purple | light-blue | green | orange | red"
		-->
		<div class="main-header" style="background-color: #0E46A3">
			<!-- Logo Header -->
			<div class="logo-header" style="background-color: #0E46A3;">
				
				<a href="{{ route('dashboard') }}" class="logo">
					<h1 class="navbar-brand" style="color: white">Siliwangi Holiday</h1>
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon" style="color: white">
						<i class="fa fa-bars" style="color: white"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="fa fa-ellipsis-v"></i></button>
				<div class="navbar-minimize">
					<button class="btn btn-minimize btn-rounded">
						<i class="fa fa-bars" style="color: white"></i>
					</button>
				</div>
			</div>
			<!-- End Logo Header -->

			<!-- Navbar Header -->
			<nav class="navbar navbar-header navbar-expand-lg">
				
				<div class="container-fluid">
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<li class="nav-item dropdown hidden-caret">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
								<div class="avatar-sm">
									<img src="../../assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
								</div>
							</a>
							<ul class="dropdown-menu dropdown-user animated fadeIn">
								<li>
									<div class="user-box">
										<div class="avatar-lg"><img src="../../assets/img/profile.jpg" alt="image profile" class="avatar-img rounded"></div>
										<div class="u-text">
											<h4 style="color: rgb(0, 0, 0)">Taufik</h4>
											<p style="color: black">Tour Leader</p>
										</div>
									</div>
								</li>
								<li>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="#">Logout</a>
								</li>
							</ul>
						</li>
						
					</ul>
				</div>
			</nav>
			<!-- End Navbar -->
		</div>

		<!-- Sidebar -->
		<div class="sidebar" style="background-color: #fbfbfc">
			
			<div class="sidebar-background"></div>
			<div class="sidebar-wrapper scrollbar-inner">
				<div class="sidebar-content">
					<div class="user">
						<div class="avatar-sm float-left mr-2">
							<img src="../../assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
						</div>
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span style="color: #1E0342">
									Taufik
									<span class="user-level" style="color: #1E0342">Tour Leader</span>
								</span>
							</a>
							{{-- <div class="clearfix"></div> --}}

							<div class="collapse in" id="collapseExample">
								<ul class="nav">
									<li>
										<a href="#profile">
											<span class="link-collapse">My Profile</span>
										</a>
									</li>
									<li>
										<a href="#edit">
											<span class="link-collapse">Edit Profile</span>
										</a>
									</li>
									<li>
										<a href="#settings">
											<span class="link-collapse">Settings</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<ul class="nav">
						<li class="nav-item">
							<a href="{{ 'dashboard' }}">
								<i class="fas fa-home" style="color: #0E46A3"></i>
								<p style="color: #1E0342">Dashboard</p>
							</a>
						</li>
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section" style="color: #1E0342">Main</h4>
						</li>
						<li class="nav-item">
							<a href="{{ route('pelanggan') }}">
								<i class="fas fa-users" style="color: #0E46A3"></i>
								<p style="color: #1E0342">Peserta</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{ route('registrasi') }}">
								<i class="fa-solid fa-camera" style="color: #0E46A3"></i>
								<p style="color: #1E0342">Registrasi</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{ route('tour') }}">
								<i class="fas fa-solid fa-globe" style="color: #0E46A3"></i>
								<p style="color: #1E0342">Data Tour</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{ route('panitia') }}">
								<i class="fas fa-solid fa-user-pen" style="color: #0E46A3"></i>
								<p style="color: #1E0342">Panitia</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{ route('daftar_hadir') }}">
								<i class="far fa-regular fa-address-book" style="color: #0E46A3"></i>
								<p style="color: #1E0342">Daftar Hadir</p>
							</a>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#charts">
								<i class="far fa-chart-bar" style="color: #0E46A3"></i>
								<p style="color: #1E0342">Laporan</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="charts">
								<ul class="nav nav-collapse">
									<li>
										<a href="charts/charts.html">
											<span class="sub-item" style="color: #1E0342">Laporan Peserta</span>
										</a>
									</li>
									<li>
										<a href="charts/sparkline.html">
											<span class="sub-item" style="color: #1E0342">Laporan Data Tour</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Sidebar -->

    @yield('content')

    <!--   Core JS Files   -->
<script src="../../assets/js/core/jquery.3.2.1.min.js"></script>
<script src="../../assets/js/core/popper.min.js"></script>
<script src="../../assets/js/core/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/90c4b6e831.js" crossorigin="anonymous"></script>


<!-- jQuery UI -->
<script src="../../assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="../../assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

<!-- jQuery Scrollbar -->
<script src="../../assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

<!-- Moment JS -->
<script src="../../assets/js/plugin/moment/moment.min.js"></script>

<!-- Chart JS -->
<script src="../../assets/js/plugin/chart.js/chart.min.js"></script>

<!-- jQuery Sparkline -->
<script src="../../assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

<!-- Chart Circle -->
<script src="../../assets/js/plugin/chart-circle/circles.min.js"></script>

<!-- Datatables -->
<script src="../../assets/js/plugin/datatables/datatables.min.js"></script>

<!-- Bootstrap Notify -->
<script src="../../assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

<!-- Datatables -->
<script src="../../../../assets/js/plugin/datatables/datatables.min.js"></script>

<!-- Bootstrap Toggle -->
<script src="../../assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>

<!-- jQuery Vector Maps -->
<script src="../../assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
<script src="../../assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

<!-- Google Maps Plugin -->
<script src="../../assets/js/plugin/gmaps/gmaps.js"></script>

<!-- Sweet Alert -->
<script src="../../assets/js/plugin/sweetalert/sweetalert.min.js"></script>

<!-- Azzara JS -->
<script src="../../assets/js/ready.min.js"></script>
<script >
	$(document).ready(function() {
		$('#basic-datatables').DataTable({
		});

		$('#multi-filter-select').DataTable( {
			"pageLength": 5,
			initComplete: function () {
				this.api().columns().every( function () {
					var column = this;
					var select = $('<select class="form-control"><option value=""></option></select>')
					.appendTo( $(column.footer()).empty() )
					.on( 'change', function () {
						var val = $.fn.dataTable.util.escapeRegex(
							$(this).val()
							);

						column
						.search( val ? '^'+val+'$' : '', true, false )
						.draw();
					} );

					column.data().unique().sort().each( function ( d, j ) {
						select.append( '<option value="'+d+'">'+d+'</option>' )
					} );
				} );
			}
		});

		// Add Row
		$('#add-row').DataTable({
			"pageLength": 5,
		});

		var action = '<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

		$('#addRowButton').click(function() {
			$('#add-row').dataTable().fnAddData([
				$("#addName").val(),
				$("#addPosition").val(),
				$("#addOffice").val(),
				action
				]);
			$('#addRowModal').modal('hide');

		});
	});
</script>

<!-- SCANNER -->
<script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script>	
<script>
function onScanSuccess(decodedText, decodedResult) {
  // handle the scanned code as you like, for example:
//   console.log(`Code matched = ${decodedText}`, decodedResult);

$.ajax({
        type: "POST",
        url: '/scan',
        data: {
            id_peserta: decodedText
        },
        beforeSend: function (xhr) {
            $('.loading').removeClass('hide');
        },
        success: function (response, status, xhr) {
			
			$("#nama_peserta").val(response.peserta[0]['nama_peserta'])
			$("#no_telepon").val(response.peserta[0]['no_telepon'])
			$("#kelas").val(response.peserta[0]['kelas'])
        }
    });


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

</script>

</body>
</html>