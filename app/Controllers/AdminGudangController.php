<?php

namespace App\Controllers;

use App\Models\AdminGudang;
use App\Models\BeritaAcaraModel;
use App\Models\ItemBeritaAcaraModel;
use TCPDF;

class AdminGudangController extends BaseController
{
    public function index()
    {
        $modelBeritaAcara = new BeritaAcaraModel();
        $data = [
            'halaman' => 'Dashboard',
            'menu1' => 'selected',
            'menu2' => '',
            'menu3' => '',
            'databeritaacara' => $modelBeritaAcara->findAll()
        ];
        return view('admingudang/beritaacara/index', $data);
    }

    public function index_beritaacara()
    {
        $modelBeritaAcara = new BeritaAcaraModel();
        $data = [
            'halaman' => 'Berita Acara',
            'menu1' => '',
            'menu2' => 'selected',
            'menu3' => '',
            'databeritaacara' => $modelBeritaAcara->findAll()
        ];
        return view('admingudang/beritaacara/index', $data);
    }

    public function create_beritaacara()
    {
        $modelItemBeritaAcara = new ItemBeritaAcaraModel();
        $cekStatus = $modelItemBeritaAcara->getCekStatus();
        $tampilkanItem = false;
        $kodeberitaacara = "BA" . date("dmYhis");
        if ($cekStatus != null) {
            $kodeberitaacara = $cekStatus[0]->kodeberitaacara;
            $tampilkanItem = true;
        }
        $data = [
            'halaman' => 'Berita Acara',
            'menu1' => '',
            'menu2' => 'selected',
            'menu3' => '',
            'menu4' => '',
            'kodeberitaacara' => $kodeberitaacara,
            'tampilkanitem' => $tampilkanItem,
            'item' => $modelItemBeritaAcara->getAllItemDalamProses()
        ];
        return view('admingudang/beritaacara/create', $data);
    }

    public function tambahitem()
    {
        $modelItemBeritaAcara = new ItemBeritaAcaraModel();
        $id_gudang = 1;
        $kodeberitaacara = $this->request->getPost('kode');
        $desa_itemberitaacara = $this->request->getPost('desa');
        $kecamatan_itemberitaacara = $this->request->getPost('kecamatan');
        $kabupaten_itemberitaacara = $this->request->getPost('kota_kabupaten');
        $bobot_itemberitaacara = $this->request->getPost('bobot');
        $status_itemberitaacara = "Dalam Proses";
        $data = [
            'id_gudang' => $id_gudang,
            'kodeberitaacara' => $kodeberitaacara,
            'desa_itemberitaacara' => $desa_itemberitaacara,
            'kecamatan_itemberitaacara' => $kecamatan_itemberitaacara,
            'kabupaten_itemberitaacara' => $kabupaten_itemberitaacara,
            'bobot_itemberitaacara' => $bobot_itemberitaacara,
            'status_itemberitaacara' => $status_itemberitaacara,
        ];
        $modelItemBeritaAcara->insert($data);
        session()->setFlashdata('add-item', 'add-item');
        return redirect()->to('admingudang/beritaacara/create');
    }

    public function removeitem($id)
    {
        $modelItemBeritaAcara = new ItemBeritaAcaraModel();
        $modelItemBeritaAcara->delete($id);
        session()->setFlashdata('delete-item', 'delete-item');
        return redirect()->to('admingudang/beritaacara/create');
    }

    public function add_beritaacara()
    {
        $modelItemBeritaAcara = new ItemBeritaAcaraModel();
        $modelBeritaAcara = new BeritaAcaraModel();
        $tanggalPembuatan = date("Y-m-d");
        $kodeberitaacara = $this->request->getPost('kode');
        $dataStatus = [
            'status_itemberitaacara' => 'Selesai Diproses'
        ];
        $modelItemBeritaAcara->updateStatus($kodeberitaacara, $dataStatus);
        // Load library TCPDF
        $pdf = new TCPDF();
        // Set document properties
        $pdf->SetCreator('kalaitu developer');
        $pdf->SetAuthor('pineapple');
        $pdf->SetTitle('Berita Acara ' . $kodeberitaacara);
        $pdf->SetSubject('Berita Acara ' . $kodeberitaacara);
        $pdf->SetKeywords('Berita Acara ' . $kodeberitaacara);
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
        $pdf->Cell(0, 10, 'BERITA ACARA SERAH TERIMA BARANG', 0, 1, 'C');
        $pdf->Cell(0, 0, 'BANTUAN PANGAN CADANGAN BERAS 2023', 0, 1, 'C');
        $pdf->Ln(5);
        $html = '<hr>';
        // Output the HTML content to the PDF
        $pdf->writeHTML('<hr>', true, false, true, false, '');
        $pdf->SetFont('times', 'B', 10);
        $pdf->Cell(0, 10, 'PENYERAHAN BARANG DARI GUDANG', 0, 1, 'C');
        $pdf->Ln(5);
        // HTML table
        $pdf->SetFont(
            'times',
            'B',
            9
        );
        $html = '<table border="0" style="width:100%">';
        $html .= '<tr>
                    <td width="25%">Nomor LO</td>
                    <td width="25%">: </td>
                    <td width="25%">Gudang Pengirim</td>
                    <td width="25%">: Gudang 1</td>
                </tr>';
        $html .= '<tr>
                    <td width="25%">Tanggal Penyerahan</td>
                    <td width="25%">: ' . date('d/m/Y') . '</td>
                    <td width="25%">Driver/Nopol</td>
                    <td width="25%">: E 1234 YZ</td>
                </tr>';
        $html .= '</table>';
        // Output the HTML content to the PDF
        $pdf->writeHTML($html, true, false, true, false, '');
        $pdf->Ln(0);
        $pdf->SetFont('times', 'B', 9);
        // Add table header
        $html = '<table border="1" style="width:100%">';
        $html .= '<tr style="text-align: center">
                    <th style="width:20px">No</th>
                    <th style="width:150px">ITEM</th>
                    <th style="width:70px">Jumlah Diserahkan (Kg)</th>
                    <th style="width:40px">Kondisi</th>
                    <th style="width:40px">Koll (Bags)</th>
                    <th style="width:40px">Cek Isi (Y/N)</th>
                    <th style="width:180px">Desa/Kecamatan</th>
                </tr>';

        // Fetch data from your database and populate the table
        $dataitem = $modelItemBeritaAcara->getAllItemByKode($kodeberitaacara);
        $jumlah = 0;
        $no = 1;
        foreach ($dataitem as $row) {
            $jumlah = $jumlah + $row->bobot_itemberitaacara;
            $html .= '<tr>';
            $html .= '<td>' . $no++ . '</td>';
            $html .= '<td>Beras Bantuan Pangan Kemasan 10 Kg</td>';
            $html .= '<td>' . $row->bobot_itemberitaacara . '</td>';
            $html .= '<td>Baik</td>';
            $html .= '<td>' . $row->bobot_itemberitaacara / 10 . '</td>';
            $html .= '<td>Y</td>';
            $html .= '<td>' . $row->desa_itemberitaacara . '/' . $row->kecamatan_itemberitaacara . '</td>';
            $html .= '</tr>';
        }
        $html .= '<tr>
                    <td colspan="2">JUMLAH TOTAL</td>
                    <td>' . $jumlah . '</td>
                    <td></td>
                    <td>' . $jumlah / 10 . '</td>
                    <td></td>
                    <td></td>
                </tr>';
        $html .= '</table>';
        // Output the HTML content to the PDF
        $pdf->writeHTML($html, true, false, true, false, '');
        $pdf->Cell(0, 0, 'Pihak yang menyerahkan dan pihak yang menerima telah sepakat bahwa jumlah dan kondisi barang sesuai dengan rincian diatas', 0, 1, 'L');
        $pdf->Ln(4);
        $pdf->SetFont('times', 'B', 9);
        $html = '<table border="0" style="width:100%">';
        $html .= '<tr style="text-align: center">
                    <td width="33%">Diserahkan Oleh</td>
                    <td>Diverifikasi Oleh</td>
                    <td width="33%">Diterima Oleh</td>
                </tr>';
        $html .= '<tr style="text-align: center; height: 50px">
                    <td width="33%" height="70px">Bulog</td>
                    <td>PT.POS Indonesia</td>
                    <td width="33%">Supir</td>
                </tr>';
        $html .= '<tr style="text-align: center;">
                    <td width="33%"><hr></td>
                    <td><hr></td>
                    <td width="33%"><hr></td>
                </tr>';
        $html .= '<tr>
                    <td width="33%">Telp.</td>
                    <td>Nippos.</td>
                    <td width="33%">Telp.</td>
                </tr>';
        $html .= '</table>';
        // Output the HTML content to the PDF
        $pdf->writeHTML($html, true, false, true, false, '');
        $pdf->Cell(0, 0, 'Catatan : ', 0, 1, 'L');
        $pdf->Cell(0, 0, '1. PT.POS Indonesia (Persero) hanya menerima paket sesuai dengan jumlah ', 0, 1, 'L');
        $pdf->Cell(0, 0, '2. Apaliba ditemukan isi paket yang rusak, akan dikembalikan keperusahaan', 0, 1, 'L');
        // set style for barcode
        $style = array(
            'border' => false,
            'vpadding' => 'auto',
            'hpadding' => 'auto',
            'fgcolor' => array(0, 0, 0),
            'bgcolor' => false, //array(255,255,255)
            'module_width' => 1, // width of a single module in points
            'module_height' => 1 // height of a single module in points
        );
        $pdf->write2DBarcode($kodeberitaacara, 'QRCODE,L', $pdf->GetPageWidth() - 30, $pdf->GetY() - 10, 17, 17, $style, 'N');
        $directory = FCPATH . 'pdf/beritaacara/'; // You can change this to your desired directory
        // Ensure the directory exists, if not, create it
        if (!is_dir($directory)) {
            mkdir($directory, 0777, true);
        }
        // Specify the file path
        $filePath = $directory . '' . $kodeberitaacara . '.pdf';
        // Save the PDF to the specified directory
        $pdf->Output($filePath, 'F');
        $data = [
            'id_gudang' => 1,
            'kode_beritaacara' => $kodeberitaacara,
            'tanggal_beritaacara_dibuat' => $tanggalPembuatan,
            'namapdf' => $kodeberitaacara . '.pdf',
            'status_beritaacara' => "Belum Upload"
        ];
        $modelBeritaAcara->insert($data);
        return redirect()->to('admingudang/beritaacara');
    }

    public function scan_beritaacara()
    {
        $modelBeritaAcara = new BeritaAcaraModel();
        $data = [
            'halaman' => 'Berita Acara',
            'menu1' => '',
            'menu2' => 'selected',
            'menu3' => '',
            'databeritaacara' => $modelBeritaAcara->findAll()
        ];
        return view('admingudang/beritaacara/scan', $data);
    }

    public function detail_beritaacara($kode)
    {
        $modelBeritaAcara = new BeritaAcaraModel();
        $data = [
            'halaman' => 'Berita Acara',
            'menu1' => '',
            'menu2' => 'selected',
            'menu3' => '',
            'databeritaacara' => $modelBeritaAcara->getAllItemByKode($kode)
        ];
        return view('admingudang/beritaacara/detail', $data);
    }

    public function showFile()
    {
        helper("filesystem");
        $path = WRITEPATH . 'pdf/beritaacara/';
        $filename = 'BA30112023105254.pdf';
        $fullpath = $path . $filename;
        $file = new \CodeIgniter\Files\File($fullpath, true);
        $binary = readfile($fullpath);
        return $this->response
            ->setHeader('Content-Type', $file->getMimeType())
            ->setHeader('Content-disposition', 'inline; filename="' . $file->getBasename() . '"')
            ->setStatusCode(200)
            ->setBody($binary);
    }

    public function index_suratjalan()
    {
        $modelBeritaAcara = new BeritaAcaraModel();
        $data = [
            'halaman' => 'Surat Jalan',
            'menu1' => '',
            'menu2' => '',
            'menu3' => 'selected',
            'datasuratjalan' => $modelBeritaAcara->findAll()
        ];
        return view('admingudang/beritaacara/index', $data);
    }
}
