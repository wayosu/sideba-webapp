<?php
$id = $_POST['id'];
$result = $mysqli->query("SELECT * FROM user WHERE id='$id'");
$row = $result->fetch_assoc();

function tgl_indo($tanggal)
{
    $bulan = array(
        1 =>   'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
    );
    $pecahkan = explode('-', $tanggal);

    // variabel pecahkan 0 = tanggal
    // variabel pecahkan 1 = bulan
    // variabel pecahkan 2 = tahun

    return $pecahkan[2] . ' ' . $bulan[(int)$pecahkan[1]] . ' ' . $pecahkan[0];
}

function getRomawi($bln){
    switch ($bln){
        case 1: 
            return "I";
            break;
        case 2:
            return "II";
            break;
        case 3:
            return "III";
            break;
        case 4:
            return "IV";
            break;
        case 5:
            return "V";
            break;
        case 6:
            return "VI";
            break;
        case 7:
            return "VII";
            break;
        case 8:
            return "VIII";
            break;
        case 9:
            return "IX";
            break;
        case 10:
            return "X";
            break;
        case 11:
            return "XI";
            break;
        case 12:
            return "XII";
            break;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Keterangan Tidak Mampu</title>
    <style>
        body {
            font-size: 13pt;
            font-family: 'Times New Roman', Times, serif;
            width: 21cm;
            min-height: 29.7cm;
            padding: 2cm;
            margin: 1cm auto;
            /* border: 1px #d3d3d3 solid; */
        }

        .gambar {
            width: 120px;
            height: 50px;
            margin-top: 5px;
        }

        #judul {
            padding-top: 7px;
            line-height: 10%;
            text-align: center;
        }

        .bio1 {
            padding-left: 10px;
        }

        .bio2 {
            padding-left: 10px;
        }

        #ttd {
            position: relative;
            width: 100%;
            /* border: 1px solid black; */
        }

        #ttd table {
            position: absolute;
            margin-left: 400px;
        }

        .nama {
            padding-top: 70px;
        }

        #judul {
            width: 80%;
            margin: 0 auto;
        }

        #isi {
            width: 100%;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <div id="kopsurat">
        <center>
            <table>
                <tr>
                    <td class="gambar"><img src="assets/images/logo.png" width="90" height="100"></td>
                    <td>
                        <center>
                            <font size="5"><b>PEMERINTAH KABUPATEN BONE BOLANGO</b></font><br>
                            <font size="5"><b>KECAMATAN TILONGKABILA</b></font><br>
                            <font size="5"><b>DESA BERLIAN</b></font><br>
                            <font size="2"><i>Jl. Tapa - Kabila, Tamboo, Tilongkabila, Kabupaten Bone Bolango, Gorontalo - 96129</i></font>
                        </center>
                    </td>
                </tr>
            </table>
        </center>
    </div>

    <hr size="3px" color="black">

    <div id="judul">
        <h3 align="center"><u>SURAT KETERANGAN TIDAK MAMPU</u></h3>
        <h4 align="center">
            Nomor : 145/ BN-TKBL /&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/<?= getRomawi(date('n')) ?>/<?= date('Y') ?>
        </h4>
    </div>

    <div id="isi">
        <p>Yang bertanda tangan dibawah ini : </p>

        <div class="bio1">
            <table>
                <tr>
                    <td style="width: 1%;">Nama</td>
                    <td style="width: 1%;">:</td>
                    <td style="width: 1%;">
                        <b>HAIRUN NISA SULE, SE</b>
                    </td>
                </tr>
                <tr>
                    <td style="width: 37%;">Jabatan</td>
                    <td style="width: 7%;">:</td>
                    <td style="width: 65%;">
                        Kepala Desa
                    </td>
                </tr>
                <tr>
                    <td style="width: 37%;">Alamat</td>
                    <td style="width: 7%;">:</td>
                    <td style="width: 65%;">
                        Desa Berlian Kec.Tilongkabila
                        Kab.Bone Bolango
                    </td>
                </tr>
            </table>
        </div>

        <p>Menerangkan Kepada : </p>
        <div class="bio2">
            <table>
                <tr>
                    <td style="width: 24%;">Nama</td>
                    <td style="width: 7%;">:</td>
                    <td style="width: 65%;">
                        <?= $row['nama']; ?>
                    </td>
                </tr>
                <tr>
                    <td style="width: 24%;">Jenis Kelamin</td>
                    <td style="width: 7%;">:</td>
                    <td style="width: 65%;">
                        <?= $row['jk']; ?>
                    </td>
                </tr>
                <tr>
                    <td style="width: 24%;">Tempat / Tgl Lahir</td>
                    <td style="width: 7%;">:</td>
                    <td style="width: 65%;">
                        <?= tgl_indo($row['tgl_lahir']); ?>
                    </td>
                </tr>
                <tr>
                    <td style="width: 24%;">Pekerjaan</td>
                    <td style="width: 7%;">:</td>
                    <td style="width: 65%;">
                        <?= $row['pekerjaan']; ?>
                    </td>
                </tr>
            </table>
        </div>

        <p>
            Bahwa yang bersangkutan diatas adalah benar-benar penduduk Desa
            Berlian (Dusun <?= $row['dusun']; ?>) Kecamatan Tilongkabila Kabupaten Bone Bolango
            dan benar benar tergolong keluarga tidak mampu (miskin)
        </p>
        <br>
        <p style="margin-top: -15px;">
            Demikian surat keterangan ini diberikan kepada yang bersangkutan
            untuk dipergunakan seperlunya.
        </p>

        <div id="ttd">

            <table>
                <tr>
                    <td>Berlian,</td>
                </tr>
                <tr>
                    <td>Kepala Desa</td>
                </tr>
                <tr>
                    <td style="padding-top: 80px;"><b><u>HAIRUN NISA SULE, SE</u></b></td>
                </tr>
            </table>

        </div>
    </div>
</body>

</html>