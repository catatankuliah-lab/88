<?php

namespace App\Controllers;

use App\Models\AdminKecamatan;
use App\Models\BASTModel;
use App\Models\KPMModel;
use TCPDF;

class AdminKecamatanController extends BaseController
{
    public function index()
    {
         $data = [
            'halaman' => 'Dashboard',
            'menu1' => 'selected',
            'menu2' => '',
            'menu3' => '',
        
        ];
        return view('adminkecamatan/layout', $data );
    }
    
    public function sptjm()
    {
        $data = [
            'halaman' => 'SPTJM',
            'menu1' => '',
            'menu2' => 'selected',
            'menu3' => '', 
        ];
        return view('adminkecamatan/sptjm/index', $data);
    }

    public function bast()
    {
        $modelBAST = new BASTModel();
        $data = [
            'halaman' => 'BAST',
            'menu1' => '',
            'menu2' => '',
            'menu3' => 'selected', 
            'bast' => $modelBAST->findAll(),
        ];
        return view('adminkecamatan/bast/index', $data);
    }

    public function create()
    {
        $modelBAST = new BASTModel();
        $data = [
            'halaman' => 'BAST',
            'menu1' => '',
            'menu2' => '',
            'menu3' => 'selected', 
            'bast' => $modelBAST->findAll(),
       
        ];
        return view('adminkecamatan/bast/create', $data);
    }

    function add_bast() {
        // $validation = \Config\Services::validation();
        // $valid = [
        //     'no_bast' => 'required',
        // ];
        // // Pesan kesalahan khusus
        // $errors = [
        //     'selected_desa' => [
        //         'not_equals' => 'Pilih desa yang valid.',
        //     ],
        // ];
        // // Memvalidasi input
        // if ($this->validate($valid)) {
        //     // Logika jika valid
        //     dd('Berhasil');
        // } else {
        //     // Menampilkan pesan kesalahan
        //     dd('Gagal Memasukan Data');
        // }

        $pdf = new TCPDF();
        $style = array(
            'border' => false,
            'vpadding' => 'auto',
            'hpadding' => 'auto',
            'fgcolor' => array(0, 0, 0),
            'bgcolor' => false, //array(255,255,255)
            'module_width' => 1, // width of a single module in points
            'module_height' => 1 // height of a single module in points
        );
        $no_bast = $this->request->getPost('no_bast');
        $modelKPM = new KPMModel();
        // Set document properties
        $pdf->SetCreator('kalaitu developer');
        $pdf->SetAuthor('pineapple');
        $pdf->SetTitle('BAST ' . $no_bast);
        $pdf->SetSubject('BAST ' . $no_bast);
        $pdf->SetKeywords('BAST ' . $no_bast);
        // Add a page
        $pdf->AddPage();
        // Add header with images on both sides
        $leftImagePath = FCPATH . 'assets/img/bulog.png'; // Adjust the path to your left image
        $rightImagePath = FCPATH . 'assets/img/pos.png'; // Adjust the path to your right image
        // Add left image
        $pdf->Image($leftImagePath, 10, 17, 40); // X, Y, Width
        // Move to the right for the right image
        $pdf->SetX($pdf->GetPageWidth() - 29);
        // Add right image
        $pdf->Image($rightImagePath, '', 17, 18); // X, Y, Width
        // Center-align the text between the images
        $pdf->SetY(15);
        // Set font
        $pdf->SetFont('times', 'B', 12);
        $pdf->Cell(0, 10, 'BERITA ACARA SERAH TERIMA (BAST)', 0, 1, 'C');
        $pdf->Cell(0, 0, 'PENERIMA BANTUAN PANGAN - CBP 2023', 0, 1, 'C');
        $pdf->Ln(5);
        $html = '<hr>';
        // Output the HTML content to the PDF
        $pdf->writeHTML('<hr>', true, false, true, false, '');
        $pdf->SetFont('times', 'B', 10);
        $pdf->Cell(0, 10, 'NOMOR DOKUMEN OUT : ', 0, 1, 'C');
        $pdf->Cell(0, 10, 'ALOKASI BULAN - TAHAP : ', 0, 1, 'C');
        $pdf->Ln(10);

        // HTML table
        $pdf->SetFont(
            'times',
            'B',
            9
        );
        $html = '<table border="0" style="width:100%">';
        $html .= '<tr>
                    <td width="25%">Provinsi</td>
                    <td width="25%">: Jawa Barat</td>
                    <td width="25%">KCU / KC</td>
                    <td width="25%">: 00000 / CIAWI</td>
                </tr>';
        $html .= '<tr>
                    <td width="25%">Kabupaten / Kota</td>
                    <td width="25%">: Kabupaten Kuningan' . '</td>
                    <td width="25%">Kantor Serah</td>
                    <td width="25%">: 00000 / CIAWI</td>
                </tr>';
        $html .= '<tr>
                    <td width="25%">Kecamatan</td>
                    <td width="25%">: Ciawigebang' . '</td>
                    <td width="25%">No BAST</td>
                    <td width="25%">: ' . $no_bast . '</td>
                </tr>';
        $html .= '<tr>
                    <td width="25%">Kelurahan / Desa</td>
                    <td width="25%">: Desa Sidaraja' . '</td>
                    <td width="25%">RT/RW</td>
                    <td width="25%">: 00/00</td>
                </tr>';
        $html .= '</table>';
        // Output the HTML content to the PDF
        $pdf->writeHTML($html, true, false, true, false, '');
        $pdf->Ln(0);
        $pdf->Cell(0, 10, 'Kami yang bertanda tangan pada daftar dibawah ini, menyatakan dengan sebenar-benarnya bahwa telah menerima 10 Kg Beras Bantuan Pangan - CBP 2023 dengan kualitas baik: ', 0, 1, 'L');
        $pdf->SetFont('times', 'B', 9);
        // Add table header
        $html = '<table border="1" style="width:100%">';
        $html .= '<tr style="text-align: center">
                    <th style="width:20px">No</th>
                    <th style="width:150px">NAMA</th>
                    <th style="width:70px">ALAMAT</th>
                    <th style="width:40px">BARCODE</th>
                    <th style="width:40px">JUMLAH (KG)</th>
                    <th style="width:40px">TTD</th>
                    <th style="width:180px">TANGGAL SERAH</th>
                </tr>';

        // Fetch data from your database and populate the table

        $dataitem = $modelKPM->getAllByDesa('Kutawaringin');
        $jumlah = 0;
        $no = 1;
        foreach ($dataitem as $row) {
            $jumlah = $jumlah + 10;
            $html .= '<tr>';
            $html .= '<td>' . $no++ . '</td>';
            $html .= '<td>' . $row->nama_penerima . '</td>';
            $html .= '<td>' . $row->alamat . '</td>';
            $html .= '<td></td>';
            $html .= '<td>10</td>';
            $html .= '<td></td>';
            $html .= '<td></td>';
            $html .= '</tr>';
        }
        $html .= '<tr>
                    <td colspan="5">JUMLAH TOTAL</td>
                    <td>' . $jumlah . '</td>
                    <td colspan="2"></td>
                </tr>';
        $html .= '</table>';
        // Output the HTML content to the PDF
        $pdf->writeHTML($html, true, false, true, false, '');
       
        $directory = FCPATH . 'pdf/bast/'; // You can change this to your desired directory
        // Ensure the directory exists, if not, create it
        if (!is_dir($directory)) {
            mkdir($directory, 0777, true);
        }
        // Specify the file path
        $filePath = $directory . '' . $no_bast . '.pdf';
        // Save the PDF to the specified directory
        $pdf->Output($filePath, 'F');
    }

}