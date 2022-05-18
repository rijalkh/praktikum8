<html>
    <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <style>
        .warning {
            color: #FF0000;
        }
    </style>
    </head>

<body>
    <?php
    // formdata Peserta 
    $error_jenis = ""; // jenis pendaftar
    $error_tgl_masuk = ""; // tgl masuk sekolah
    $error_nis = ""; // nomor induk siswa
    $error_npu = ""; // nomor peserta ujian
    $error_paud = ""; // 2 choice Y/N
    $error_tk =  ""; // 2 choices Y/N
    $error_skhun = ""; // NOMOR Seri SKHUN Sebelumnya
    $error_ijazah = ""; // Nomor Seri ijazah sebelumnya
    $error_hobi = ""; // hobi 
    $error_cita = ""; // cita
    // data Pribadi
    $error_nama = "";
    $error_jk = "";
    $error_nisn = "";
    $error_nik = "";
    $error_tl = ""; // tempat lahir
    $error_tgl_lahir = "";
    $error_agama = "";
    $error_bk = ""; // berkebutuhan khusus
    $error_jalan = "";
    $error_rt = "";
    $error_rw = "";
    $error_dusun = "";
    $error_desa = ""; //nama kelurahan
    $error_kecamatan = "";
    $error_kodepos = "";
    $error_tinggal = "";
    $error_transportasi = "";
    $error_nohp = "";
    $error_notelp = "";
    $error_email = "";
    $error_kps = "";
    $error_nokps = "";
    $error_kwn = ""; // kewarganegaraan
    $error_nanegara = "";
    //data ayah
    $error_nama_ayah = "";
    $error_tgl_lahir_ayah = "";
    $error_pendidikan_ayah = "";
    $error_pekerjaan_ayah = "";
    $error_penghasilan_ayah = "";
    $error_khusus_ayah = "";
    //data ibu
    $error_nama_ibu = "";
    $error_tgl_lahir_ibu = "";
    $error_pendidikan_ibu = "";
    $error_pekerjaan_ibu = "";
    $error_penghasilan_ibu = "";
    $error_khusus_ibu = "";

    $jenis = "";
    $tgl_masuk = "";
    $nis = "";
    $npu = "";
    $paud = "";
    $tk = "";
    $skhun = "";
    $ijazah = "";
    $hobi = "";
    $cita = "";
    $nama = "";
    $jk  = "";
    $nisn = "";
    $nik = "";
    $tl = "";
    $tgl_lahir = "";
    $agama = "";
    $bk = "";
    $jalan = "";
    $rt = "";
    $rw = "";
    $dusun = "";
    $desa = "";
    $kecamatan = "";
    $kodepos = "";
    $tinggal = "";
    $transportasi = "";
    $nohp = "";
    $notelp = "";
    $email = "";
    $kps = "";
    $nokps = "";
    $kwn = "";
    $namaayah = "";
    $tgl_lahir_ayah = "";
    $pendidikan_ayah = "";
    $pekerjaan_ayah = "";
    $penghasilan_ayah = "";
    $khusus_ayah = "";
    $namaibu = "";
    $tgl_lahir_ibu = "";
    $pendidikan_ibu = "";
    $pekerjaan_ibu = "";
    $penghasilan_ibu = "";
    $khusus_ibu = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // jenis pendaftaran Siswa baru/pindahan
        if (empty($_POST["jenis"])) {
            $error_jenis = "Jenis Pendaftaran Tidak Boleh Kosong";
        } else {
            $jenis = cek_input($_POST["jenis"]);
        }

        // tanggal masuk sekolah
        if (empty($_POST["tgl_masuk"])) {
            $error_tgl_masuk = "Tanggal Masuk tidak boleh kosong";
        } else {
            $tgl_masuk = cek_input($_POST["tgl_masuk"]);
        }

        // NIS
        if (empty($_POST["nis"])) {
            $error_nis = "NIS tidak boleh kosong";
        } else {
            $nis = cek_input($_POST["nis"]);
            if (!is_numeric($nis)) {
                $error_nis = "Nomor Induk Siswa hanya boleh angka";
            }
        }

        // Nomor Peserta Ujian
        if (empty($_POST["npu"])) {
            $error_npu = "Nomor Pesarta Ujian tidak boleh kosong";
        } else {
            $npu = cek_input($_POST["npu"]);
            if (!is_numeric($npu)) {
                $error_npu = "Nomor Peserta Ujian hanya boleh angka";
            }
        }

        if (empty($_POST["paud"])) {
            $error_paud = "Tidak Boleh Kosong";
        } else {
            $paud = cek_input($_POST["paud"]);
        }

        if (empty($_POST["tk"])) {
            $error_tk = "Tidak Boleh Kosong";
        } else {
            $tk = cek_input($_POST["tk"]);
        }

        if (empty($_POST["skhun"])) {
            $error_skhun = "No. Seri SKHUN tidak boleh kosong";
        } else {
            $skhun = cek_input($_POST["skhun"]);
            if (!is_numeric($skhun)) {
                $error_skhun = "No. Seri SKHUN hanya boleh angka";
            }
        }

        if (empty($_POST["ijazah"])) {
            $error_ijazah = "No. Seri Ijazah tidak boleh kosong";
        } else {
            $ijazah = cek_input($_POST["ijazah"]);
            if (!is_numeric($ijazah)) {
                $error_ijazah = "No. Seri Ijazah hanya boleh angka";
            }
        }

        if (empty($_POST["hobi"])) {
            $error_hobi = "Hobi Tidak Boleh Kosong";
        } else {
            $hobi = cek_input($_POST["hobi"]);
        }

        if (empty($_POST["cita"])) {
            $error_cita = "Cita-cita Tidak Boleh Kosong";
        } else {
            $cita = cek_input($_POST["cita"]);
        }

        if (empty($_POST["nama"])) {
            $error_nama = "Nama tidak boleh kososng";
        } else {
            $nama = cek_input($_POST["nama"]);
            if (!preg_match("/^[a-zA-Z ]*$/", $nama)) {
                $error_nama = "Inputan Hanya boleh hururf dan spasi";
            }
        }

        if (empty($_POST["jk"])) {
            $error_jk = "Jenis Kelamin Tidak Boleh Kosong";
        } else {
            $jk = cek_input($_POST["jk"]);
        }

        if (empty($_POST["nisn"])) {
            $error_nisn = "NISN tidak boleh kosong";
        } else {
            $nisn = cek_input($_POST["nisn"]);
            if (!is_numeric($nisn)) {
                $error_nisn = "NISN hanya boleh angka";
            }
        }

        if (empty($_POST["nik"])) {
            $error_nik = "NIK tidak boleh kosong";
        } else {
            $nik = cek_input($_POST["nik"]);
            if (!is_numeric($nik)) {
                $error_nik = "NIK hanya boleh angka";
            }
        }

        // tempat lahir
        if (empty($_POST["tl"])) {
            $error_tl = "Tempat Lahir Tidak Boleh Kosong";
        } else {
            $tl = cek_input($_POST["tl"]);
            if (!preg_match("/^[a-zA-Z ]*$/", $tl)) {
                $error_tl = "Inputan Hanya boleh huruf dan spasi";
            }
        }

        // tgl lahir
        if (empty($_POST["tgl_lahir"])) {
            $error_tgl_lahir = "Tanggal Masuk tidak boleh kosong";
        } else {
            $tgl_lahir = cek_input($_POST["tgl_lahir"]);
        }

        // agama
        if (empty($_POST["agama"])) {
            $error_agama = "Agama Tidak Boleh Kosong";
        } else {
            $agama = cek_input($_POST["agama"]);
        }

        // berkebutuhan khusus
        if (empty($_POST["bk"])) {
            $error_bk = "Pilihan ini Tidak Boleh Kosong";
        } else {
            $bk = cek_input($_POST["bk"]);
        }

        // Alamat Jalan
        if (empty($_POST["jalan"])) {
            $error_jalan = "Alamat Jalan Tidak Boleh Kosong";
        } else {
            $jalan = cek_input($_POST["jalan"]);
            if (!preg_match("/^[a-zA-Z ]*$/", $jalan)) {
                $error_jalan = "Inputan Hanya boleh huruf dan spasi";
            }
        }

        // RT
        if (empty($_POST["rt"])) {
            $error_rt = "RT tidak boleh kosong";
        } else {
            $rt = cek_input($_POST["rt"]);
            if (!is_numeric($rt)) {
                $error_rt = "RT hanya boleh angka";
            }
        }

        // RW
        if (empty($_POST["rw"])) {
            $error_rw = "RW tidak boleh kosong";
        } else {
            $rw = cek_input($_POST["rw"]);
            if (!is_numeric($rw)) {
                $error_rw = "RW hanya boleh angka";
            }
        }

        // Dusun
        if (empty($_POST["dusun"])) {
            $error_dusun = "Dusun Tidak Boleh Kosong";
        } else {
            $dusun = cek_input($_POST["dusun"]);
            if (!preg_match("/^[a-zA-Z ]*$/", $dusun)) {
                $error_dusun = "Inputan Hanya boleh huruf dan spasi";
            }
        }

        // Kecamatan5
        if (empty($_POST["kecamatan"])) {
            $error_kecamatan = "Kecamatan Tidak Boleh Kosong";
        } else {
            $kecamatan = cek_input($_POST["kecamatan"]);
            if (!preg_match("/^[a-zA-Z ]*$/", $kecamatan)) {
                $error_kecamatan = "Inputan Hanya boleh huruf dan spasi";
            }
        }

        // Kodepos
        if (empty($_POST["kodepos"])) {
            $error_kodepos = "Kodepos tidak boleh kosong";
        } else {
            $kodepos = cek_input($_POST["kodepos"]);
            if (!is_numeric($kodepos)) {
                $error_kodepos = "Kodepos hanya boleh angka";
            }
        }

        // Tempat Tinggal
        if (empty($_POST["tinggal"])) {
            $error_tinggal = "Pilihan ini Tidak Boleh Kosong";
        } else {
            $tinggal = cek_input($_POST["tinggal"]);
        }

        // Moda Transportasi
        if (empty($_POST["transportasi"])) {
            $error_transportasi = "Pilihan ini Tidak Boleh Kosong";
        } else {
            $transportasi = cek_input($_POST["transportasi"]);
        }

        // No HP
        if (empty($_POST["nohp"])) {
            $error_nohp = "Nomor HP tidak boleh kosong";
        } else {
            $nohp = cek_input($_POST["nohp"]);
            if (!is_numeric($nohp)) {
                $error_nohp = "Nomor HP hanya boleh angka";
            }
        }

        // No Telp  
        if (empty($_POST["notelp"])) {
            $error_notelp = "Nomor Telp tidak boleh kosong";
        } else {
            $notelp = cek_input($_POST["notelp"]);
            if (!is_numeric($notelp)) {
                $error_notelp = "Nomor Telp hanya boleh angka";
            }
        }

        // email
        if (empty($_POST["email"])) {
            $error_email = "Email Tidak Boleh Kosong";
        } else {
            $email = cek_input($_POST["email"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $error_email = "Format Email Salah";
            }
        }

        // Penerima KPS/PKH/KIP
        if (empty($_POST["kps"])) {
            $error_kps = "Pilihan ini Tidak Boleh Kosong";
        } else {
            $kps = cek_input($_POST["kps"]);
        }

        // No KPS/KKS/PKH/KIP 
        if (empty($_POST["nokps"])) {
            $error_kps = "Nomor tersebut tidak boleh kosong";
        } else {
            $nokps = cek_input($_POST["nokps"]);
            if (!is_numeric($nokps)) {
                $error_kps = "Nomor Telp hanya boleh angka";
            }
        }

        // Kewarganegaraan
        if (empty($_POST["kwn"])) {
            $error_kwn = "Kewarganegaraan tidak boleh kosong";
        } else {
            $kwn = cek_input($_POST["kwn"]);
            if (!preg_match("/^[a-z A-Z]*$/", $kwn)) {
                $error_kwn = "Inputan hanya boleh huruf dan spasi";
            }
        }
        // Nama ayah Kandung
        if (empty($_POST["namaayah"])) {
            $error_nama_ayah = "Nama tidak boleh kososng";
        } else {
            $namaayah = cek_input($_POST["namaayah"]);
            if (!preg_match("/^[a-zA-Z ]*$/", $namaayah)) {
                $error_nama_ayah = "Inputan Hanya boleh hururf dan spasi";
            }
        }

         // tanggal lahir ayah
        if (empty($_POST["tgl_lahir_ayah"])) {
            $error_tgl_lahir_ayah = "Tanggal Lahir tidak boleh kosong";
        } else {
            $tgl_lahir_ayah = cek_input($_POST["tgl_lahir_ayah"]);
        }

         // Pendidikan
        if (empty($_POST["pendidikan_ayah"])) {
        $error_pendidikan_ayah = "Pendidikan Tidak Boleh Kosong";
        } else {
        $pendidikan_ayah = cek_input($_POST["pendidikan_ayah"]);
        }

        // Pekerjaan
        if (empty($_POST["pekerjaan_ayah"])) {
            $error_pekerjaan_ayah = "Pekerjaan Tidak Boleh Kosong";
                } else {
                    $pekerjaan_ayah = cek_input($_POST["pekerjaan_ayah"]);
                }

        // Penghasilan
        if (empty($_POST["penghasilan_ayah"])) {
            $error_penghasilan_ayah = "Penghasilan Tidak Boleh Kosong";
            } else {
            $penghasilan_ayah = cek_input($_POST["penghasilan_ayah"]);
            }

            // berkebutuhan khusus
        if (empty($_POST["khusus_ayah"])) {
            $error_khusus_ayah = " Tidak Boleh Kosong";
            } else {
            $khusus_ayah = cek_input($_POST["khusus_ayah"]);
            }

            // Nama Ibu Kandung
        if (empty($_POST["namaibu"])) {
            $error_nama_ibu = "Nama tidak boleh kososng";
        } else {
            $namaibu = cek_input($_POST["namaibu"]);
            if (!preg_match("/^[a-zA-Z ]*$/", $namaibu)) {
                $error_nama_ibu = "Inputan Hanya boleh hururf dan spasi";
            }
        }

         // tanggal lahir ibu
        if (empty($_POST["tgl_lahir_ibu"])) {
            $error_tgl_lahir_ibu = "Tanggal Lahir tidak boleh kosong";
        } else {
            $tgl_lahir_ibu = cek_input($_POST["tgl_lahir_ibu"]);
        }

         // Pendidikan
        if (empty($_POST["pendidikan_ibu"])) {
        $error_pendidikan_ibu = "Pendidikan Tidak Boleh Kosong";
        } else {
        $pendidikan_ibu = cek_input($_POST["pendidikan_ibu"]);
        }

        // Pekerjaan
        if (empty($_POST["pekerjaan_ibu"])) {
            $error_pekerjaan_ibu = "Pekerjaan Tidak Boleh Kosong";
            } else {
                $pekerjaan_ibu = cek_input($_POST["pekerjaan_ibu"]);
            }

        // Penghasilan
        if (empty($_POST["penghasilan_ibu"])) {
            $error_penghasilan_ibu = "Penghasilan Tidak Boleh Kosong";
            } else {
            $penghasilan_ibu = cek_input($_POST["penghasilan_ibu"]);
            }

            // berkebutuhan khusus
        if (empty($_POST["khusus_ibu"])) {
            $error_khusus_ibu = " Tidak Boleh Kosong";
            } else {
            $khusus_ibu = cek_input($_POST["khusus_ibu"]);
            }

        // Cek Konektivitas
        $host = "localhost";
        $username = "root";
        $password = "";
        $namadb = "form";
        try {
            $conn = mysqli_connect($host, $username, $password, $namadb) or die("Koneksi gagal dibangun");
            $sql = "INSERT INTO `data`
            (`jenis`, `tgl_masuk`, `nis`, `npu`, `paud`, `tk`, `skhun`, `ijazah`, `hobi`, `cita`, 
            `nama`, `jk`, `nisn`, `nik`, `tl`, `tgl_lahir`, `agama`, `bk`, `jalan`, `rt`, `rw`,
            `dusun`, `desa`, `kecamatan`, `kodepos`, `tinggal`, `transportasi`, `nohp`, `notelp`, 
            `email`, `kps`, `nokps`, `kwn`, `namaayah`, `tgl_lahir_ayah`, `pendidikan_ayah`, `pekerjaan_ayah`, 
            `penghasilan_ayah`, `khusus_ayah`, `namaibu`, `tgl_lahir_ibu`, `pendidikan_ibu`, `pekerjaan_ibu`, `penghasilan_ibu`, `khusus_ibu` ) 
            VALUES ('$jenis','$tgl_masuk','$nis','$npu','$paud','$tk','$skhun','$ijazah','$hobi','$cita',
            '$nama','$jk','$nisn','$nik','$tl','$tgl_lahir','$agama','$bk','$jalan','$rt','$rw', 
            '$dusun', '$desa', '$kecamatan', '$kodepos', '$tinggal', '$transportasi', '$nohp', '$notelp',
            '$email', '$kps', '$nokps', '$kwn' , '$namaayah', '$tgl_lahir_ayah', '$pendidikan_ayah', '$pekerjaan_ayah', '$penghasilan_ayah',
            '$khusus_ayah', '$namaibu', '$tgl_lahir_ibu', '$pendidikan_ibu', '$pekerjaan_ibu', '$penghasilan_ibu', '$khusus_ibu')";
            mysqli_query($conn, $sql);
            mysqli_close($conn);
        } catch (Exception $e) {
            echo $e;
        }
    }

    function cek_input($data)
    {
        $data = trim($data);
        $data = stripcslashes($data);
        //$data = htmlspecialchars($data);
        return $data;
    }

    ?>

    <h1 align="center">FORMULIR PESERTA DIDIK</h1>
    <div class="row">
        <div class="col-md-7">
            <div class="card">
                <div class="card-body">
                    <form method="post">
                        <!-- Header 1 -->
                        <div class="p-3 mb-2 bg-dark text-white">REGISTRASI PESERTA DIDIK</div>

                        <!-- Jenis Daftar Radio Button -->
                        <div class="form-group row">
                            <label for="jenis" class="col-sm-3 col-form-label">Jenis Daftar</label>
                            <div class="radio-inline" style="margin-left: 15px; margin-top: 7px;">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="baru" name="jenis" class="custom-control-input" value="Siswa Baru">
                                    <label class="custom-control-label" for="baru">Siswa Baru</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="pindahan" name="jenis" class="custom-control-input" value="Pindahan">
                                    <label class="custom-control-label" for="pindahan">Pindahan</label>
                                </div>
                                <span class="warning"><?php echo $error_jenis; ?></span>
                            </div>

                        </div>

                        <!-- Tanggal Masuk -->
                        <div class="form-group row">
                            <label for="tgl_masuk" class="col-sm-3 col-form-label">Tanggal Masuk Sekolah</label>
                            <div class="col-sm-5">
                                <input type="date" name="tgl_masuk" class="form-control" <?php echo ($error_tgl_masuk != "" ? "is-invalid" : ""); ?> id="tgl_masuk" value="<?php echo $tgl_masuk; ?>">
                            </div>
                            <span class="warning"><?php echo $error_tgl_masuk; ?></span>
                        </div>

                        <!-- NIS -->
                        <div class="form-group row">
                            <label for="nis" class="col-sm-3 col-form-label">NIS</label>
                            <div class="col-sm-5">
                                <input type="text" name="nis" class="form-control" <?php echo ($error_nis != "" ? "is-invalid" : ""); ?> id="nis" placeholder="NIS" value="<?php echo $nis; ?>">
                            </div>
                            <span class="warning"><?php echo $error_nis; ?></span>
                        </div>

                        <!-- Nomor Peserta -->
                        <div class="form-group row">
                            <label for="npu" class="col-sm-3 col-form-label">Nomor Peserta Ujian</label>
                            <div class="col-sm-5">
                                <input type="text" name="npu" class="form-control" <?php echo ($error_npu != "" ? "is-invalid" : ""); ?> id="npu" placeholder="Nomor Peserta Ujian" value="<?php echo $npu; ?>">

                            </div>
                            <span class="warning"><?php echo $error_npu; ?></span>
                        </div>

                        <!-- PAUD -->
                        <div class="form-group row">
                            <label for="paud" class="col-sm-3 col-form-label">Apakah pernah PAUD</label>
                            <div class="radio-inline" style="margin-left: 15px; margin-top: 7px;">
                                <input type="radio" name="paud" value="Ya"> Ya
                                &nbsp;&nbsp;
                                <input type="radio" name="paud" value="Tidak"> Tidak
                                <br>
                            </div>
                            <span class="warning"><?php echo $error_paud; ?></span>
                        </div>

                        <!-- TK -->
                        <div class="form-group row">
                            <label for="paud" class="col-sm-3 col-form-label">Apakah pernah TK</label>
                            <div class="radio-inline" style="margin-left: 15px; margin-top: 7px;">
                                <input type="radio" name="tk" value="Ya"> Ya
                                &nbsp;&nbsp;
                                <input type="radio" name="tk" value="Tidak"> Tidak
                                <br>
                            </div>
                            <span class="warning"><?php echo $error_tk; ?></span>
                        </div>

                        <!-- SKHUN -->
                        <div class="form-group row">
                            <label for="skhun" class="col-sm-3 col-form-label">No. Seri SKHUN</label>
                            <div class="col-sm-5">
                                <input type="text" name="skhun" class="form-control" <?php echo ($error_skhun != "" ? "is-invalid" : ""); ?> id="skhun" placeholder="16 Digit SKHUN SD" pattern="[0-9]{16}" value="<?php echo $skhun; ?>">
                            </div>
                            <span class="warning"><?php echo $error_skhun; ?></span>
                        </div>

                        <!-- Ijazah -->
                        <div class="form-group row">
                            <label for="ijazah" class="col-sm-3 col-form-label">No. Seri Ijazah</label>
                            <div class="col-sm-5">
                                <input type="text" name="ijazah" class="form-control" <?php echo ($error_ijazah != "" ? "is-invalid" : ""); ?> id="ijazah" placeholder="16 Digit Ijazah SD" pattern="[0-9]{16}" value="<?php echo $ijazah; ?>">
                            </div>
                            <span class="warning"><?php echo $error_ijazah; ?></span>
                        </div>

                        <!-- Hobi -->
                        <div class="form-group row">
                            <label for="hobi" class="col-sm-3 col-form-label">Hobi</label>
                            <select id="hobi" name="hobi" class="form-control col-sm-3" style="margin-left: 15px; margin-top: 7px;">
                                <option value="">-Pilih Hobi</option>
                                <option value="Olah raga">Olah Raga</option>
                                <option value="Kesenian">Kesenian</option>
                                <option value="Membaca">Membaca</option>
                                <option value="Menulis">Menulis</option>
                                <option value="Traveling">Traveling</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                            <br>
                            <span class="warning"><?php echo $error_hobi; ?></span>
                        </div>

                        <!-- Cita -->
                        <div class="form-group row">
                            <label for="cita" class="col-sm-3 col-form-label">Cita-cita</label>
                            <select id="cita" name="cita" class="form-control col-sm-3" style="margin-left: 15px; margin-top: 7px;">
                                <option value="">-Pilih Cita-Cita</option>
                                <option value="PNS">PNS</option>
                                <option value="TNI/POLRI">TNI / POLRI</option>
                                <option value="Guru/Dosen">Guru / Dosen</option>
                                <option value="Dokter">Dokter</option>
                                <option value="Politikus">Politikus</option>
                                <option value="Seni/Lukis">Seni / Lukis / Artis</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                            <br>
                            <span class="warning"><?php echo $error_cita; ?></span>
                        </div>

                        <!-- Header 2 -->
                        <div class="p-3 mb-2 bg-dark text-white">data PRIBADI</div>
                        <br>

                        <!-- Nama -->
                        <div class="form-group row">
                            <label for="nama" class="col-sm-3 col-form-label">Nama</label>
                            <div class="col-sm-5">
                                <input type="text" name="nama" class="form-control" <?php echo ($error_nama != "" ? "is-invalid" : ""); ?>" id="nama" placeholder="Isi Nama Lengkap" value="<?php echo $nama; ?>">
                            </div>
                            <span class="warning"><?php echo $error_nama; ?></span>
                        </div>

                        <!-- Jenis Kelamin -->
                        <div class="form-group row">
                            <label for="jk" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                            <div class="radio-inline" style="margin-left: 15px; margin-top: 7px;">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="laki-laki" name="jk" class="custom-control-input" value="Laki-laki">
                                    <label class="custom-control-label" for="laki-laki">Laki-laki</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="perempuan" name="jk" class="custom-control-input" value="Perempuan">
                                    <label class="custom-control-label" for="perempuan">Perempuan</label>
                                </div>
                            </div>
                            <span class="warning"><?php echo $error_jk; ?></span>
                        </div>

                        <!-- NISN -->
                        <div class="form-group row">
                            <label for="nisn" class="col-sm-3 col-form-label">NISN</label>
                            <div class="col-sm-5">
                                <input type="text" name="nisn" class="form-control" <?php echo ($error_nisn != "" ? "is-invalid" : ""); ?> id="nisn" placeholder="Isi NISN" value="<?php echo $nisn; ?>">
                            </div>
                            <span class="warning"><?php echo $error_nisn; ?></span>
                        </div>

                        <!-- NIK -->
                        <div class="form-group row">
                            <label for="nik" class="col-sm-3 col-form-label">NIK</label>
                            <div class="col-sm-5">
                                <input type="text" name="nik" class="form-control" <?php echo ($error_nik != "" ? "is-invalid" : ""); ?> id="nik" placeholder="Isi NIK" value="<?php echo $nik; ?>">
                            </div>
                            <span class="warning"><?php echo $error_nik; ?></span>
                        </div>

                        <!-- Tempat Lahir -->
                        <div class="form-group row">
                            <label for="tl" class="col-sm-3 col-form-label">Tempat Lahir</label>
                            <div class="col-sm-5">
                                <input type="text" name="tl" class="form-control" <?php echo ($error_tl != "" ? "is-invalid" : ""); ?> id="tl" placeholder="Isi Tempat Lahir" value="<?php echo $tl; ?>">
                            </div>
                            <span class="warning"><?php echo $error_tl; ?></span>
                        </div>

                        <!-- Tanggal Lahir (Date) -->
                        <div class="form-group row">
                            <label for="tgl_lahir" class="col-sm-3 col-form-label">Tanggal Lahir</label>
                            <div class="col-sm-5">
                                <input type="date" name="tgl_lahir" class="form-control" <?php echo ($error_tgl_lahir != "" ? "is-invalid" : ""); ?> id="tgl_lahir" placeholder="Tanggal Lahir" value="<?php echo $tgl_lahir; ?>">
                            </div>
                            <span class="warning"><?php echo $error_tgl_lahir; ?></span>
                        </div>

                        <!-- Agama (Dropdown) -->
                        <div class="form-group row">
                            <label for="agama" class="col-sm-3 col-form-label">Agama</label>
                            <select name="agama" class="col-sm-3" style="margin-left: 15px; margin-top: 7px;">
                                <option value="Islam">Islam</option>
                                <option value="Kristen/Protestan">Kristen / Protestan</option>
                                <option value="Katholik">Katholik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Budha">Budha</option>
                                <option value="Khong Hu Chu">Khong Hu Chu</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                            <span class="warning"><?php echo $error_agama; ?></span>
                        </div>

                        <!-- Khusus (Dropdown) -->
                        <div class="form-group row">
                            <label for="bk" class="col-sm-3 col-form-label">Berkebutuhan Khusus</label>
                            <select name="bk" class="col-sm-3" style="margin-left: 15px; margin-top: 7px;">
                                <option value="Tidak">Tidak</option>
                                <option value="Netra">Netra</option>
                                <option value="Rungu">Rungu</option>
                                <option value="Grahita Ringan">Grahita Ringan</option>
                                <option value="Grahita Sedang">Grahita Sedang</option>
                                <option value="Daksa Ringan">Daksa Ringan</option>
                                <option value="Daksa Sedang">Daksa Sedang</option>
                                <option value="Laras">Laras</option>
                                <option value="Wicara">Wicara</option>
                                <option value="Tuna Ganda">Tuna Ganda</option>
                                <option value="Hiper Aktif">Hiper Aktif</option>
                                <option value="Cerdas Istimewa">Cerdas Istimewa</option>
                                <option value="Bakat Istimewa">Bakat Istimewa</option>
                                <option value="Kesulitan Belajar">Kesulitan Belajar</option>
                                <option value="Narkoba">Narkoba</option>
                                <option value="Indigo">Indigo</option>
                                <option value="Down Syndrome">Down Syndrome</option>
                                <option value="Autis">Autis</option>
                            </select>
                            <span class="warning"><?php echo $error_bk; ?></span>
                        </div>

                        <!-- Alamat -->
                        <div class="form-group row">
                            <label for="jalan" class="col-sm-3 col-form-label">Alamat</label>
                            <div class="col-sm-5">
                                <textarea name="jalan" class="form-control" <?php echo ($error_jalan != "" ? "is-invalid" : ""); ?> id="jalan" placeholder="Isi Alamat Lengkap Rumah" value="<?php echo $jalan; ?>"></textarea>
                            </div>
                            <span class="warning"><?php echo $error_jalan; ?></span>
                        </div>

                        <!-- RT -->
                        <div class="form-group row">
                            <label for="rt" class="col-sm-3 col-form-label">RT</label>
                            <div class="col-sm-5">
                                <input type="text" name="rt" class="form-control" <?php echo ($error_rt != "" ? "is-invalid" : ""); ?> id="rt" placeholder="Nomor RT" value="<?php echo $rt; ?>">
                            </div>
                            <span class="warning"><?php echo $error_rt; ?></span>
                        </div>

                        <!-- RW -->
                        <div class="form-group row">
                            <label for="rw" class="col-sm-3 col-form-label">RW</label>
                            <div class="col-sm-5">
                                <input type="text" name="rw" class="form-control" <?php echo ($error_rw != "" ? "is-invalid" : ""); ?> id="rw" placeholder="Nomor RW" value="<?php echo $rw; ?>">
                            </div>
                            <span class="warning"><?php echo $error_rw; ?></span>
                        </div>

                        <!-- Dusun -->
                        <div class="form-group row">
                            <label for="dusun" class="col-sm-3 col-form-label">Dusun</label>
                            <div class="col-sm-5">
                                <input type="text" name="dusun" class="form-control" <?php echo ($error_dusun != "" ? "is-invalid" : ""); ?> id="dusun" placeholder="Nama Dusun" value="<?php echo $dusun; ?>">
                            </div>
                            <span class="warning"><?php echo $error_dusun; ?></span>
                        </div>

                        <!-- Kelurahan -->
                        <div class="form-group row">
                            <label for="desa" class="col-sm-3 col-form-label">Nama Kelurahan / Desa</label>
                            <div class="col-sm-5">
                                <input type="text" name="desa" class="form-control" <?php echo ($error_desa != "" ? "is-invalid" : ""); ?> id="desa" placeholder="Nama Kelurahan/Desa" value="<?php echo $desa; ?>">
                            </div>
                            <span class="warning"><?php echo $error_desa; ?></span>
                        </div>

                        <!-- Kecamatan -->
                        <div class="form-group row">
                            <label for="kecamatan" class="col-sm-3 col-form-label">Kecamatan</label>
                            <div class="col-sm-5">
                                <input type="text" name="kecamatan" class="form-control" <?php echo ($error_kecamatan != "" ? "is-invalid" : ""); ?> id="kecamatan" placeholder="Nama Kecamatan" value="<?php echo $kecamatan; ?>">
                            </div>
                            <span class="warning"><?php echo $error_kecamatan; ?></span>
                        </div>

                        <!-- Kode pos -->
                        <div class="form-group row">
                            <label for="kodepos" class="col-sm-3 col-form-label">Kode Pos</label>
                            <div class="col-sm-5">
                                <input type="text" name="kodepos" class="form-control" <?php echo ($error_kodepos != "" ? "is-invalid" : ""); ?> id="kodepos" placeholder="Nomor Kodepos" value="<?php echo $kodepos; ?>">
                            </div>
                            <span class="warning"><?php echo $error_kodepos; ?></span>
                        </div>

                        <!-- Tempat Tinggal (Dropdown) -->
                        <div class="form-group row">
                            <label for="tinggal" class="col-sm-3 col-form-label">Tempat Tinggal</label>
                            <select name="tinggal" class="col-sm-3" style="margin-left: 15px; margin-top: 7px;">
                                <option value="Orang Tua">Bersama Orang Tua</option>
                                <option value="Wali">Wali</option>
                                <option value="Kos">Kos</option>
                                <option value="Asrama">Asrama</option>
                                <option value="Panti Asuhan">Panti Asuhan</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                            <span class="warning"><?php echo $error_tinggal; ?></span>
                        </div>

                        <!-- Transportasi (Dropdown) -->
                        <div class="form-group row">
                            <label for="transportasi" class="col-sm-3 col-form-label">Moda Transportasi</label>
                            <select name="transportasi" class="col-sm-3" style="margin-left: 15px; margin-top: 7px;">
                                <option value="Jalan Kaki">Jalan Kaki</option>
                                <option value="Kendaraan Pribadi">Kendaraan Pribadi</option>
                                <option value="Kendaraan Umum">Kendaraan Umum</option>
                                <option value="Jemputan Sekolah">Jemputan Sekolah</option>
                                <option value="Kereta Api">Kereta Api</option>
                                <option value="Ojek">Ojek</option>
                                <option value="Andong / Bendi / Becak">Andong / Bendi / Becak</option>
                                <option value="Perahu Penyebrangan">Perahu Penyebrangan</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                            <span class="warning"><?php echo $error_transportasi; ?></span>
                        </div>

                        <!-- Nomor HP -->
                        <div class="form-group row">
                            <label for="nohp" class="col-sm-3 col-form-label">Nomor HP</label>
                            <div class="col-sm-5">
                                <input type="text" name="nohp" class="form-control" <?php echo ($error_nohp != "" ? "is-invalid" : ""); ?> id="nohp" placeholder="Nomor HP" value="<?php echo $nohp; ?>">
                            </div>
                            <span class="warning"><?php echo $error_nohp; ?></span>
                        </div>

                        <!-- Nomor Telp -->
                        <div class="form-group row">
                            <label for="notelp" class="col-sm-3 col-form-label">Nomor Telepon</label>
                            <div class="col-sm-5">
                                <input type="text" name="notelp" class="form-control" <?php echo ($error_notelp != "" ? "is-invalid" : ""); ?> id="notelp" placeholder="Nomor Telepon (021)-.." value="<?php echo $notelp; ?>">
                            </div>
                            <span class="warning"><?php echo $error_nohp; ?></span>
                        </div>

                        <!-- Email -->
                        <div class="form-group row">
                            <label for="email" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-5">
                                <input type="text" name="email" class="form-control" <?php echo ($error_email != "" ? "is-invalid" : ""); ?>" id="email" placeholder="Email" value="<?php echo $email; ?>">
                            </div>
                            <span class="warning"><?php echo $error_email; ?></span>
                        </div>

                        <!-- KPS (Radio) -->
                        <div class="form-group row">
                            <label for="kps" class="col-sm-3 col-form-label">Penerima KPS</label>
                            <div class="radio-inline" style="margin-left: 15px; margin-top: 7px;">
                                <input type="radio" name="kps" value="Ya"> Ya
                                &nbsp;&nbsp;
                                <input type="radio" name="kps" value="Tidak"> Tidak
                                <br>
                            </div>
                            <span class="warning"><?php echo $error_kps; ?></span>
                        </div>

                        <!-- Nomor KPS -->
                        <div class="form-group row">
                            <label for="nokps" class="col-sm-3 col-form-label">Nomor KPS</label>
                            <div class="col-sm-5">
                                <input type="text" name="nokps" class="form-control" <?php echo ($error_nokps != "" ? "is-invalid" : ""); ?>" id="nokps" placeholder="Nomor KPS" value="<?php echo $nokps; ?>">
                            </div>
                            <span class="warning"><?php echo $error_nokps; ?></span>
                        </div>

                        <!-- Kewarganegaraan -->
                        <div class="form-group row">
                            <label for="kwn" class="col-sm-3 col-form-label">Kewarganegaraan</label>
                            <div class="col-sm-5">
                                <input type="text" name="kwn" class="form-control" <?php echo ($error_kwn != "" ? "is-invalid" : ""); ?> id="kwn" placeholder="Kewarganegaraan" value="<?php echo $kwn; ?>">
                            </div>
                            <span class="warning"><?php echo $error_kwn; ?></span>
                        </div>

                         <!-- Header 3 NEW -->
                        <div class="p-3 mb-2 bg-dark text-white">data AYAH KANDUNG</div>
                        <br>

                        <!-- Nama -->
                        <div class="form-group row">
                            <label for="namaayah" class="col-sm-3 col-form-label">Nama Ayah Kandung</label>
                            <div class="col-sm-5">
                                <input type="text" name="namaayah" class="form-control" <?php echo ($error_nama_ayah != "" ? "is-invalid" : ""); ?>" id="namaayah" placeholder="Isi Nama Lengkap" value="<?php echo $namaayah; ?>">
                            </div>
                            <span class="warning"><?php echo $error_nama_ayah; ?></span>
                        </div>

                         <!-- Tanggal Lahir (Date) -->
                         <div class="form-group row">
                            <label for="tgl_lahir_ayah" class="col-sm-3 col-form-label">Tanggal Lahir</label>
                            <div class="col-sm-5">
                                <input type="date" name="tgl_lahir_ayah" class="form-control" <?php echo ($error_tgl_lahir_ayah != "" ? "is-invalid" : ""); ?> id="tgl_lahir_ayah" placeholder="Tanggal Lahir" value="<?php echo $tgl_lahir_ayah; ?>">
                            </div>
                            <span class="warning"><?php echo $error_tgl_lahir_ayah; ?></span>
                        </div>

                            <!-- Pendidikan (Dropdown) -->
                            <div class="form-group row">
                            <label for="pendidikan_ayah" class="col-sm-3 col-form-label">Pendidikan</label>
                            <select name="pendidikan_ayah" class="col-sm-3" style="margin-left: 15px; margin-top: 7px;">
                                <option value="TDS">Tidak Sekolah</option>
                                <option value="PSD">Putus SD</option>
                                <option value="SD">SD Sederajat</option>
                                <option value="SMP">SMP Sederajat</option>
                                <option value="SMA">SMA Sederajat</option>
                                <option value="D1">D1</option>
                                <option value="D2">D2</option>
                                <option value="D3">D3</option>
                                <option value="S1">S1</option>
                                <option value="S1">S2</option>
                                <option value="S3">S3</option>
                            </select>
                            <span class="warning"><?php echo $error_pendidikan_ayah; ?></span>
                        </div>

                            <!-- Pekerja (Dropdown) -->
                            <div class="form-group row">
                            <label for="pekerjaan_ayah" class="col-sm-3 col-form-label">Pekerjaan</label>
                            <select name="pekerjaan_ayah" class="col-sm-3" style="margin-left: 15px; margin-top: 7px;">
                                <option value="TDB">Tidak Bekerja</option>
                                <option value="Nelayan">Nelayan</option>
                                <option value="Petani">Petani</option>
                                <option value="Peternak">Peternak</option>
                                <option value="PNS">PNS/TNI/POLRI</option>
                                <option value="Swasta">Karyawan Swasta</option>
                                <option value="Kecil">Pedagang Kecil</option>
                                <option value="Pedagang">Pedagang Besar</option>
                                <option value="Wiraswasta">Wiraswasta</option>
                                <option value="Wirausaha">WIrausaha</option>
                                <option value="Buruh">Buruh</option>
                                <option value="Pensiunan">Pensiunan</option>
                                <option value="Lainnya">Lain-lain</option>
                            </select>
                            <span class="warning"><?php echo $error_pekerjaan_ayah; ?></span>
                        </div>

                        <!-- Penghasilann Bulanan (Dropdown) -->
                        <div class="form-group row">
                            <label for="penghasilan_ayah" class="col-sm-3 col-form-label">Penghasilan</label>
                            <select name="penghasilan_ayah" class="col-sm-3" style="margin-left: 15px; margin-top: 7px;">
                            <option value="0">  Pilih</option>   
                            <option value="1"> Kurang dari 500.000</option>
                                <option value="2">500.000 - 999.999</option>
                                <option value="3">1.000.000 - 1.999.999</option>
                                <option value="4">2.000.000 - 4.999.999</option>
                                <option value="5">5.000.000 - 20.000.000</option>
                                <option value="6">Lebih dari 20.000.000</option>
                            </select>
                            <span class="warning"><?php echo $error_penghasilan_ayah; ?></span>
                        </div>

                        <!-- Berkebutuhan Khusus -->
                        <div class="form-group row">
                            <label for="khusus_ayah" class="col-sm-3 col-form-label">Berkebutuhan Khusus</label>
                            <select name="khusus_ayah" class="col-sm-3" style="margin-left: 15px; margin-top: 7px;">
                                <option value="Tidak"> Tidak</option>
                                <option value="Netra">Netra</option>
                                <option value="Rungu">Rungu</option>
                                <option value="Ringan">Grahita Ringan</option>
                                <option value="Daksa">Daksa Ringan</option>
                                <option value="DaksaSedang">Daksa Sedang</option>
                                <option value="Laras">Laras</option>
                                <option value="Wicara">Wicara</option>
                                <option value="Tuna">Tuna Ganda</option>
                                <option value="Hiper">Hiper Aktif</option>
                                <option value="Cerdas">Cerdas Istimewa</option>
                                <option value="Bakat">Bakat Istimewa</option>
                                <option value="Belajar">Kesulitan Belajar</option>
                                <option value="Narkiba">Narkoba</option>
                                <option value="Indigo">Indigo</option>
                                <option value="Sindrome">Down Sindrome</option>
                                <option value="Autis">Autis</option>
                            </select>
                            <span class="warning"><?php echo $error_khusus_ayah; ?></span>
                        </div>

                        <!-- Header 4 NEW -->
                        <div class="p-3 mb-2 bg-dark text-white">data IBU KANDUNG</div>
                        <br>

                        <!-- Nama -->
                        <div class="form-group row">
                            <label for="namaibu" class="col-sm-3 col-form-label">Nama Ibu Kandung</label>
                            <div class="col-sm-5">
                                <input type="text" name="namaibu" class="form-control" <?php echo ($error_nama_ibu != "" ? "is-invalid" : ""); ?>" id="namaibu" placeholder="Isi Nama Lengkap " value="<?php echo $namaibu; ?>">
                            </div>
                            <span class="warning"><?php echo $error_nama_ibu; ?></span>
                        </div>

                        <!-- Tanggal Lahir (Date) -->
                        <div class="form-group row">
                            <label for="tgl_lahir_ibu" class="col-sm-3 col-form-label">Tanggal Lahir</label>
                            <div class="col-sm-5">
                                <input type="date" name="tgl_lahir_ibu" class="form-control" <?php echo ($error_tgl_lahir_ibu != "" ? "is-invalid" : ""); ?> id="tgl_lahir_ibu" placeholder="Tanggal Lahir" value="<?php echo $tgl_lahir_ibu; ?>">
                            </div>
                            <span class="warning"><?php echo $error_tgl_lahir; ?></span>
                        </div>

                            <!-- Pendidikan (Dropdown) -->
                            <div class="form-group row">
                            <label for="pendidikan_ibu" class="col-sm-3 col-form-label">Pendidikan</label>
                            <select name="pendidikan_ibu" class="col-sm-3" style="margin-left: 15px; margin-top: 7px;">
                            <option value="TDS">Tidak Sekolah</option>
                                <option value="PSD">Putus SD</option>
                                <option value="SD">SD Sederajat</option>
                                <option value="SMP">SMP Sederajat</option>
                                <option value="SMA">SMA Sederajat</option>
                                <option value="D1">D1</option>
                                <option value="D2">D2</option>
                                <option value="D3">D3</option>
                                <option value="S1">S1</option>
                                <option value="S1">S2</option>
                                <option value="S3">S3</option>
                            </select>
                            <span class="warning"><?php echo $error_agama; ?></span>
                        </div>

                        <!-- Pekerja (Dropdown) -->
                            <div class="form-group row">
                            <label for="pekerjaan_ibu" class="col-sm-3 col-form-label">Pekerjaan</label>
                            <select name="pekerjaan_ibu" class="col-sm-3" style="margin-left: 15px; margin-top: 7px;">
                                <option value="TDB">Tidak Bekerja</option>
                                <option value="Nelayan">Nelayan</option>
                                <option value="Petani">Petani</option>
                                <option value="Peternak">Peternak</option>
                                <option value="PNS">PNS/TNI/POLRI</option>
                                <option value="Swasta">Karyawan Swasta</option>
                                <option value="Kecil">Pedagang Kecil</option>
                                <option value="Pedagang">Pedagang Besar</option>
                                <option value="Wiraswasta">Wiraswasta</option>
                                <option value="Wirausaha">WIrausaha</option>
                                <option value="Buruh">Buruh</option>
                                <option value="Pensiunan">Pensiunan</option>
                                <option value="Lainnya">Lain-lain</option>
                            </select>
                            <span class="warning"><?php echo $error_agama; ?></span>
                        </div>

                        <!-- Penghasilann Bulanan (Dropdown) -->
                        <div class="form-group row">
                        <label for="penghasilan_ibu" class="col-sm-3 col-form-label">Penghasilan</label>
                            <select name="penghasilan_ibu" class="col-sm-3" style="margin-left: 15px; margin-top: 7px;">
                                <option value="0"> Kurang dari 500.000</option>
                                <option value="1">500.000 - 999.999</option>
                                <option value="2">1.000.000 - 1.999.999</option>
                                <option value="3">2.000.000 - 4.999.999</option>
                                <option value="4">5.000.000 - 20.000.000</option>
                                <option value="5">Lebih dari 20.000.000</option>
                            </select>
                            <span class="warning"><?php echo $error_agama; ?></span>
                        </div>
                        
                        <!-- Berkebutuhan Khusus -->
                        <div class="form-group row">
                            <label for="khusus_ibu" class="col-sm-3 col-form-label">Berkebutuhan Khusus</label>
                            <select name="khusus_ibu" class="col-sm-3" style="margin-left: 15px; margin-top: 7px;">
                                <option value="Tidak"> Tidak</option>
                                <option value="Netra">Netra</option>
                                <option value="Rungu">Rungu</option>
                                <option value="Ringan">Grahita Ringan</option>
                                <option value="Daksa">Daksa Ringan</option>
                                <option value="DaksaSedang">Daksa Sedang</option>
                                <option value="Laras">Laras</option>
                                <option value="Wicara">Wicara</option>
                                <option value="Tuna">Tuna Ganda</option>
                                <option value="Hiper">Hiper Aktif</option>
                                <option value="Cerdas">Cerdas Istimewa</option>
                                <option value="Bakat">Bakat Istimewa</option>
                                <option value="Belajar">Kesulitan Belajar</option>
                                <option value="Narkiba">Narkoba</option>
                                <option value="Indigo">Indigo</option>
                                <option value="Sindrome">Down Sindrome</option>
                                <option value="Autis">Autis</option>
                            </select>
                            <span class="warning"><?php echo $error_agama; ?></span>
                        </div>

                        <!-- Button Sign In -->
                        <div class="form-group row">
                            <div class="col-sm-5">
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Kirim</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
