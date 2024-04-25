<?php

namespace App\Http\Controllers;

use App\Imports\ImportPesertaTourClass;
use App\Models\DataTour;
use App\Models\Peserta;
// use BaconQrCode\Encoder\QrCode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use Codedge\Fpdf\Fpdf\Fpdf;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $pelanggans = Peserta::latest()->get();
        $pelanggans = DB::select('CALL sp_datatable_peserta_tour()');
        return view('pelanggan', compact('pelanggans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $results = DB::select('CALL sp_generate_nopes()');
        $generateno = $results[0];
        $peserta = DataTour::all();
        // var_dump($generateno);die;
        return view('tambah_pelanggan', compact('generateno', 'peserta'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pelanggan = ('id');
        
        $pelanggan                                  = new Peserta;
        $pelanggan->id_tour                         = $request->id_tour;
        $pelanggan->no_peserta_tour                 = $request->no_peserta_tour;
        $pelanggan->nama_peserta                    = $request->nama_peserta;
        $pelanggan->no_telepon                      = $request->no_telepon;
        $pelanggan->no_peserta_tour                 = $request->no_peserta_tour;
        $pelanggan->kelas                           = $request->kelas;
        $pelanggan->jurusan                         = $request->jurusan;
        $pelanggan->no_bus_kendaraan                = $request->no_bus_kendaraan;
        $pelanggan->save();
         
        return redirect('pelanggan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function detail($id)
    {
        $pelanggan = Peserta::findOrFail($id);
        return view('detail_pelanggan', compact('pelanggan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $peserta = Peserta::whereId($id)->first();
        return view('ubah_pelanggan')->with('peserta', $peserta);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pelanggan                                  = Peserta::find($id);
        $pelanggan->nama_peserta                    = $request->nama_peserta;
        $pelanggan->no_telepon                      = $request->no_telepon;
        $pelanggan->no_peserta_tour                 = $request->no_peserta_tour;
        $pelanggan->kelas                           = $request->kelas;
        $pelanggan->jurusan                         = $request->jurusan;
        $pelanggan->bidang                          = $request->bidang;
        $pelanggan->no_bus_kendaraan                = $request->no_bus_kendaraan;
        $pelanggan->save();
        
        return redirect('pelanggan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $peserta = Peserta::find($id);
        $peserta->delete();
        return redirect('pelanggan');
    }

    public function import(Request $request) 
	{
		// validasi
		$this->validate($request, [
			'file' => 'required|mimes:csv,xls,xlsx'
		]);
 
		// menangkap file excel
		$file = $request->file('file');
 
		// membuat nama file unik
		$nama_file = rand().$file->getClientOriginalName();
 
		// upload ke folder file_siswa di dalam folder public
		$file->move('file_peserta',$nama_file);
 
		// import data
		Excel::import(new ImportPesertaTourClass, public_path('/file_peserta/'.$nama_file));
 
		// alihkan halaman kembali
		return redirect('/pelanggan');
	}


    protected $fpdf;
 
    public function __construct()
    {
        $this->fpdf = new Fpdf;
    }

    public function pdf() 
    {
        $peserta = Peserta::all();

        foreach ($peserta as $value) {
            $this->fpdf->AddPage("L", ['100', '100']);
            $this->fpdf->SetFont('Arial', '', 15);
        
            // Generate QR code as an image
            $qrCodeData = QrCode::size(100)->generate($value['no_peserta_tour']. ',' .$value['nama_peserta']);
            $qrCodeImage = tempnam(sys_get_temp_dir(), 'qr_code'); // Temp file to store QR code image
            QrCode::format('png')->size(100)->generate($qrCodeData, $qrCodeImage);
        
            // Add QR code image to PDF
            $this->fpdf->Image($qrCodeImage, 10, 20, 50, 50, 'png');
        
            // Add other cell content
            $this->fpdf->Cell(0, 10, $value['nama_peserta'], 1, 1, 'C');
            $this->fpdf->Cell(0, 10, $value['kelas'], 1, 1, 'C');
            $this->fpdf->Text(10, 10, "Hello World!");
        
            // Delete temporary QR code image file
            unlink($qrCodeImage);
        } 


            exit;
    }

}

echo `<script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script>`;
