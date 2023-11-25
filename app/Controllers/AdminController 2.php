<?php

namespace App\Controllers;

use App\Models\ProdukModel;
use App\Models\ProduksiModel;
use App\Models\SeriesModel;
use Endroid\QrCode\Color\Color;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelLow;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Logo\Logo;
use Endroid\QrCode\RoundBlockSizeMode\RoundBlockSizeModeMargin;
use Endroid\QrCode\Writer\PngWriter;

class AdminController extends BaseController
{
    public function index()
    {
        $data = [
            'halaman' => 'Dashboard',
            'nav1' => 'active',
            'nav2' => '',
            'nav3' => '',
            'nav4' => '',
        ];
        return view('Redline/Dashboard/index', $data);
    }

    public function indexSeries()
    {
        $moedlSeries = new SeriesModel();
        $data = [
            'halaman' => 'Series',
            'nav1' => '',
            'nav2' => 'active',
            'nav3' => '',
            'nav4' => '',
            'dataseries' => $moedlSeries->findAll()
        ];
        return view('Redline/Series/index', $data);
    }

    public function createSeries()
    {
        $data = [
            'halaman' => 'Series',
            'nav1' => '',
            'nav2' => 'active',
            'nav3' => '',
            'nav4' => '',
        ];
        return view('Redline/Series/create', $data);
    }

    public function addSeries()
    {
        $modelSeries = new SeriesModel();
        $dataBerkas = $this->request->getFile('foto_series');
        $filename = $dataBerkas->getName();
        $dataBerkas->move('assetsredline/images/series/', $filename);
        $data = [
            'nama_series' => $this->request->getPost('namaseris'),
            'deskripsi_series' => $this->request->getPost('deskripsiseris'),
            'gambar_series' => $filename
        ];
        $modelSeries->insert($data);
        session()->setFlashdata('tambahseries', 'tambah-series');
        return redirect()->to(base_url('admin/series'));
    }

    public function detailSeries($id)
    {
        $modelSeries = new SeriesModel();
        $data = [
            'halaman' => 'Series',
            'nav1' => '',
            'nav2' => 'active',
            'nav3' => '',
            'nav4' => '',
            'dataseries' => $modelSeries->find($id),
        ];
        return view('Redline/Series/detail', $data);
    }

    public function updateSeries()
    {
        $modelSeries = new SeriesModel();
        $dataBerkas = $this->request->getFile('foto_series');
        if ($dataBerkas->getSize() == 0) {
            $data = [
                'nama_series' => $this->request->getPost('namaseris'),
                'deskripsi_series' => $this->request->getPost('deskripsiseris'),
            ];
        } else {
            $filename = $dataBerkas->getName();
            $dataBerkas->move('assetsredline/images/series/', $filename);
            $data = [
                'nama_series' => $this->request->getPost('namaseris'),
                'deskripsi_series' => $this->request->getPost('deskripsiseris'),
                'gambar_series' => $filename
            ];
        }
        $modelSeries->update($this->request->getPost('id_series'), $data);
        session()->setFlashdata('updateseries', 'update-series');
        return redirect()->to(base_url('admin/series'));
    }

    public function deleteSeries($id)
    {
        $modelSeries = new SeriesModel();
        $modelSeries->delete($id);
        session()->setFlashdata('deleteseries', 'delete-series');
        return redirect()->to(base_url('admin/series'));
    }

    public function indexProduk()
    {
        $modelProduk = new ProdukModel();
        $data = [
            'halaman' => 'Produk',
            'nav1' => '',
            'nav2' => '',
            'nav3' => 'active',
            'nav4' => '',
            'dataproduk' => $modelProduk->getAllProduk()
        ];
        return view('Redline/Produk/index', $data);
    }

    public function createProduk()
    {
        $modelProduk = new ProdukModel();
        $modelSeries = new SeriesModel();
        $bahanKode = $modelProduk->getLastProduk();
        if ($bahanKode == null) {
            $kode = "PRODUKRDL001";
        } else {
            $kode = "PRODUKRDL00" . $bahanKode->id_produk + 1;
        }
        $data = [
            'halaman' => 'Produk',
            'nav1' => '',
            'nav2' => '',
            'nav3' => 'active',
            'nav4' => '',
            'idterakhir' => $kode,
            'series' => $modelSeries->findAll()
        ];
        return view('Redline/Produk/create', $data);
    }

    public function addProduk()
    {
        $modelProduk = new ProdukModel();
        $dataBerkas = $this->request->getFile('fotoproduk');
        $filename = $dataBerkas->getName();
        $dataBerkas->move('assetsredline/images/produk/', $filename);
        if ($this->request->getPost('kodeproduk') == null) {
            $kodeproduk = "";
        } else {
            $kodeproduk = $this->request->getPost('kodeproduk');
        }
        $data = [
            'kode_produk' => $kodeproduk,
            'id_series' => $this->request->getPost('seriesproduk'),
            'nama_produk' => $this->request->getPost('namaproduk'),
            'harga_produk' => $this->request->getPost('hargaproduk'),
            'deskripsi_produk' => $this->request->getPost('deskripsiproduk'),
            'foto_produk' => $filename
        ];
        $modelProduk->insert($data);
        session()->setFlashdata('tambahproduk', 'tambah-series');
        return redirect()->to(base_url('admin/produk'));
    }

    public function detailProduk($id)
    {
        $modelProduk = new ProdukModel();
        $modelSeries = new SeriesModel();
        $data = [
            'halaman' => 'Produk',
            'nav1' => '',
            'nav2' => '',
            'nav3' => 'active',
            'nav4' => '',
            'dataproduk' => $modelProduk->find($id),
            'series' => $modelSeries->findAll()
        ];
        return view('Redline/Produk/detail', $data);
    }

    public function updateProduk()
    {
        $modelProduk = new ProdukModel();
        $dataBerkas = $this->request->getFile('fotoproduk');
        if ($dataBerkas->getSize() == 0) {
            $data = [
                'id_series' => $this->request->getPost('seriesproduk'),
                'nama_produk' => $this->request->getPost('namaproduk'),
                'harga_produk' => $this->request->getPost('hargaproduk'),
                'deskripsi_produk' => $this->request->getPost('deskripsiproduk'),
            ];
        } else {
            $filename = $dataBerkas->getName();
            $dataBerkas->move('assetsredline/images/produk/', $filename);
            $data = [
                'id_series' => $this->request->getPost('seriesproduk'),
                'nama_produk' => $this->request->getPost('namaproduk'),
                'harga_produk' => $this->request->getPost('hargaproduk'),
                'deskripsi_produk' => $this->request->getPost('deskripsiproduk'),
                'foto_produk' => $filename
            ];
        }
        $modelProduk->update($this->request->getPost('idproduk'), $data);
        session()->setFlashdata('updateproduk', 'update-series');
        return redirect()->to(base_url('admin/produk'));
    }

    public function deleteProduk($id)
    {
        $modelProduk = new ProdukModel();
        $modelProduk->delete($id);
        session()->setFlashdata('deleteproduk', 'delete-series');
        return redirect()->to(base_url('admin/produk'));
    }

    public function indexProduksi()
    {
        $modelProduksi = new ProduksiModel();
        $data = [
            'halaman' => 'Produksi',
            'nav1' => '',
            'nav2' => '',
            'nav3' => '',
            'nav4' => 'active',
            'dataproduk' => $modelProduksi->getAllProduk()
        ];
        return view('Redline/Produksi/index', $data);
    }

    public function createProduksi()
    {
        $modelProduksi = new ProduksiModel();
        $modelProduk = new ProdukModel();
        $bahanKode = $modelProduksi->getLastProduk();
        if ($bahanKode == null) {
            $kode = "RDL001";
        } else {
            $kode = "RDL00" . $bahanKode->id_produk + 1;
        }
        $data = [
            'halaman' => 'Produksi',
            'nav1' => '',
            'nav2' => '',
            'nav3' => '',
            'nav4' => 'active',
            'idterakhir' => $kode,
            'series' => $modelProduk->findAll()
        ];
        return view('Redline/Produksi/create', $data);
    }

    public function addProduksi()
    {
        $modelProduksi = new ProduksiModel();
        $modelProduk = new ProdukModel();
        $kodeproduknya = $this->request->getPost('kodeproduk');
        $jumlahnya = $this->request->getPost('jumlahproduksi');
        for ($i = 1; $i <= $jumlahnya; $i++) {
            $bahanKode = $modelProduksi->getLastProduk();
            if ($bahanKode == null) {
                $kode = "RDL001";
            } else {
                $kode = "RDL00" . $bahanKode->id_produksi + 1;
            }
            $namaFile = $kode . '.png';
            $kodeproduk = base64_encode($kode);
            $writer = new PngWriter();
            $qrCode = QrCode::create($kodeproduk)
                ->setEncoding(new Encoding('UTF-8'))
                ->setErrorCorrectionLevel(new ErrorCorrectionLevelLow())
                ->setSize(300)
                ->setMargin(10)
                ->setRoundBlockSizeMode(new RoundBlockSizeModeMargin())
                ->setForegroundColor(new Color(0, 0, 0))
                ->setBackgroundColor(new Color(255, 255, 255));
            $logo = Logo::create(FCPATH . '/assetsredline/images/logos/redlogo.png')
                ->setResizeToWidth(100);
            $result = $writer->write($qrCode, $logo);
            $result->saveToFile(FCPATH . '/assetsredline/images/qrcode/' . $namaFile);
            $data = [
                'kode_produksi' => $kode,
                'kode_produk' => $kodeproduknya,
                'tanggal_produksi' => date('Y-m-d'),
                'qrcode' => $namaFile,
                'encode' => $kodeproduk
            ];
            $modelProduksi->insert($data);
        }
        session()->setFlashdata('tambahproduksi', 'tambah-series');
        return redirect()->to(base_url('admin/produksi'));
    }

    public function detailProduksi($id)
    {
        $modelProduk = new ProdukModel();
        $modelProduksi = new ProduksiModel();
        $data = [
            'halaman' => 'Produksi',
            'nav1' => '',
            'nav2' => '',
            'nav3' => '',
            'nav4' => 'active',
            'dataproduksi' => $modelProduksi->getProduk($id),
            'dataproduk' => $modelProduk->findAll(),
        ];
        return view('Redline/Produksi/detail', $data);
    }

    public function deleteProduksi($id)
    {
        $modelProduksi = new ProduksiModel();
        $modelProduksi->delete($id);
        session()->setFlashdata('deleteproduksi', 'delete-series');
        return redirect()->to(base_url('admin/produksi'));
    }

    public function downloadProduksi($id)
    {
        $modelProduksi = new ProduksiModel();
        $data = $modelProduksi->find($id);
        return $this->response->download('assetsredline/images/qrcode/' . $data->qrcode, null);
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('/'));
    }
}
