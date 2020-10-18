<?php
    class Home extends Controller{
        public function index()
        {
            // menyimpan data judul web
            $data['judul'] = 'Home';
            // jalankan model(pegawai_model) untuk mengakses method getallpegawai dan mendapatkan seluruh data pegawai
            $data['pegawai'] = $this->model('Pegawai_models')->getAllPegawai();
            // jalankan method view untuk menampilkan halaman web serta mengirim data
            $this->view('templates/header',$data);
            $this->view('home/index',$data);
            $this->view('templates/footer');
        }

        public function detail($id)
        {
            $data['judul'] = 'Home - Detail Pegawai';
            $data['pegawai'] = $this->model('Pegawai_models')->singlePegawai($id);
            $this->view('templates/header',$data);
            $this->view('home/detail',$data);
            $this->view('templates/footer');
        }

        public function cekFile($file)
        {
            $ekstensi  = ['png','jpeg','jpg'];
            $namaFile    = strtolower($_FILES['foto']['name']);
            $tipe   = pathinfo($namaFile, PATHINFO_EXTENSION);
            $ukuranFile    = $_FILES['foto']['size'];
            $sumber   = $_FILES['foto']['tmp_name'];
            $foto = uniqid();
            $foto .= '.';
            $foto .= $tipe;

            if(in_array($tipe, $ekstensi) === true)
            {
                if($ukuranFile < 1048576) {//1 mb
                    $lokasi = "img/".$foto;
                    move_uploaded_file($sumber, $lokasi);
                    return $_POST['foto'] = $foto;
                } else{
                    flasher::setFlash('tambah','gagal','danger');
                    header("location:".BASEURL."/home");
                    exit;
                }
            }else{
                flasher::setFlash('tambah','gagal','danger');
                header("location:".BASEURL."/home");
                exit;
            }
        }
        
        public function tambahPegawai()
        {
            $data['judul'] = 'Home - Tambah Data Pegawai';
            $this->view('templates/header',$data);
            $this->view('home/tambahPegawai');
            $this->view('templates/footer');
        }

        public function simpanPegawai()
        {
            $this->cekFile($_FILES);
            if ($this->model('Pegawai_models')->addPegawai($_POST) > 0) {
                flasher::setFlash('tambah','berhasil','success');
                header("location:".BASEURL."/home");
                exit;
            }else{
                flasher::setFlash('tambah','gagal','danger');
                header("location:".BASEURL."/home");
                exit;
            }
        }

        public function edit($id)
        {
            $data['judul'] = 'Home - Ubah Data Pegawai';
            $data['pegawai'] = $this->model('Pegawai_models')->singlePegawai($id);
            $this->view('templates/header',$data);
            $this->view('home/edit',$data);
            $this->view('templates/footer');
        }

        public function updatePegawai()
        {
            if ($_FILES['foto']['name'] != '' ) {
                $this->cekFile($_FILES);
            }
            if ($this->model('Pegawai_models')->updatePegawai($_POST) > 0) {
                flasher::setFlash('tambah','berhasil','success');
                header("location:".BASEURL."/home");
                exit;
            }else{
                flasher::setFlash('tambah','gagal','danger');
                header("location:".BASEURL."/home");
                exit;
            }
        }

        public function delete($id)
        {
            if ($this->model('Pegawai_models')->deletePegawai($id) > 0) {
                flasher::setFlash('hapus','berhasil','success');
                header("location:".BASEURL."/home");
                exit;
            }else{
                flasher::setFlash('hapus','gagal','danger');
                header("location:".BASEURL."/home");
                exit;
            }
        }

        public function search()
        {
            $data['judul'] = 'Home';
            $data['pegawai'] = $this->model('Pegawai_models')->searchPegawai();
            $this->view('templates/header',$data);
            $this->view('home/index',$data);
            $this->view('templates/footer');
        }


    }