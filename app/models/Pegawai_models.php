<?php

    class Pegawai_models{
        // properti yang menampung data table 
        private $table = 'pegawai';
        // properti yang menampung instansiasi database
        private $db;

        public function __construct()
        {
            $this->db = new Database();
        }

        public function getAllPegawai()
        {
            $query = "SELECT * FROM $this->table";
            $this->db->query($query);
            return $this->db->resultAll();
        }

        public function singlePegawai($id)
        {
            $query = "SELECT * FROM $this->table WHERE nip=:nip";
            $this->db->query($query);
            $this->db->bind('nip',$id);
            return $this->db->single();
        }

        public function addPegawai($data)
        {
            $query = "INSERT INTO $this->table VALUES(:nip, :nama_pegawai, :foto_pegawai, :tempat_lahir, :tanggal_lahir, :jenis_kelamin, :no_hp, :agama, :email, :alamat, :gol_darah, :status_pernikahan, :status_kepegawaian)";
            $this->db->query($query);

            $this->db->bind('nip', $data['nip']);
            $this->db->bind('nama_pegawai', $data['nama']);
            $this->db->bind('foto_pegawai', $data['foto']);
            $this->db->bind('tempat_lahir', $data['tempat_lahir']);
            $this->db->bind('tanggal_lahir', $data['tgl_lahir']);
            $this->db->bind('jenis_kelamin', $data['jk']);
            $this->db->bind('no_hp', $data['no_hp']);
            $this->db->bind('agama', $data['agama']);
            $this->db->bind('email', $data['email']);
            $this->db->bind('alamat', $data['alamat']);
            $this->db->bind('gol_darah', $data['goldarah']);
            $this->db->bind('status_pernikahan', $data['stat_nikah']);
            $this->db->bind('status_kepegawaian', $data['stat_pegawai']);

            $this->db->execute();
            return $this->db->rowCount();
        }

        public function updatePegawai($data)
        {

            if (isset($data['foto'])) {
                $query = "UPDATE $this->table SET nip=:nip, nama_pegawai=:nama_pegawai, foto_pegawai=:foto_pegawai, tempat_lahir=:tempat_lahir, tanggal_lahir=:tanggal_lahir, jenis_kelamin=:jenis_kelamin, no_hp=:no_hp, agama=:agama, email=:email, alamat=:alamat, gol_darah=:gol_darah, status_pernikahan=:status_pernikahan, status_kepegawaian=:status_kepegawaian WHERE nip=:nip_lama";
                $this->db->query($query);

                $this->db->bind('nip', $data['nip']);
                $this->db->bind('nama_pegawai', $data['nama']);
                $this->db->bind('foto_pegawai', $data['foto']);
                $this->db->bind('tempat_lahir', $data['tempat_lahir']);
                $this->db->bind('tanggal_lahir', $data['tgl_lahir']);
                $this->db->bind('jenis_kelamin', $data['jk']);
                $this->db->bind('no_hp', $data['no_hp']);
                $this->db->bind('agama', $data['agama']);
                $this->db->bind('email', $data['email']);
                $this->db->bind('alamat', $data['alamat']);
                $this->db->bind('gol_darah', $data['goldarah']);
                $this->db->bind('status_pernikahan', $data['stat_nikah']);
                $this->db->bind('status_kepegawaian', $data['stat_pegawai']);
                $this->db->bind('nip_lama', $data['nip_lama']);

                $this->db->execute();
                return $this->db->rowCount();
            }else{
                $query = "UPDATE $this->table SET nip=:nip, nama_pegawai=:nama_pegawai, tempat_lahir=:tempat_lahir, tanggal_lahir=:tanggal_lahir, jenis_kelamin=:jenis_kelamin, no_hp=:no_hp, agama=:agama, email=:email, alamat=:alamat, gol_darah=:gol_darah, status_pernikahan=:status_pernikahan, status_kepegawaian=:status_kepegawaian WHERE nip=:nip_lama";
                $this->db->query($query);

                $this->db->bind('nip', $data['nip']);
                $this->db->bind('nama_pegawai', $data['nama']);
                $this->db->bind('tempat_lahir', $data['tempat_lahir']);
                $this->db->bind('tanggal_lahir', $data['tgl_lahir']);
                $this->db->bind('jenis_kelamin', $data['jk']);
                $this->db->bind('no_hp', $data['no_hp']);
                $this->db->bind('agama', $data['agama']);
                $this->db->bind('email', $data['email']);
                $this->db->bind('alamat', $data['alamat']);
                $this->db->bind('gol_darah', $data['goldarah']);
                $this->db->bind('status_pernikahan', $data['stat_nikah']);
                $this->db->bind('status_kepegawaian', $data['stat_pegawai']);
                $this->db->bind('nip_lama', $data['nip_lama']);

                $this->db->execute();
                return $this->db->rowCount();
            }           
        }

        public function deletePegawai($id)
        {
            $query = "DELETE FROM $this->table WHERE nip=:nip";
            $this->db->query($query);
            $this->db->bind('nip',$id);
            $this->db->execute();
            return $this->db->rowCount();
        }

        public function searchPegawai()
        {
            $keyword = $_POST['keyword'];

            $query = "SELECT * FROM $this->table WHERE nama_pegawai LIKE :keyword";
            $this->db->query($query);

            $this->db->bind('keyword', "%$keyword%");
            return $this->db->resultAll();
        }


    }