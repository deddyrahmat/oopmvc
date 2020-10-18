<?php
    // cek apakah sudah ada session, jika belum aktifkan session
    if (!session_id()) session_start();

    // panggil file init dan instansiasi class App
    require_once "../app/init.php";
    new App();