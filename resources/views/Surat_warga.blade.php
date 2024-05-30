<!DOCTYPE html>
<html>
<head>
    <title>Surat Keterangan</title>
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
        }
        .header {
            text-align: center;
            margin-bottom: 14px;
        }
        .content {
            margin: 12px;
        }
        .footer {
            text-align: right;
            margin-top: 12px;
        }
        .footer p.signature {
            margin-top: 50px;
        }
        table {
            width: 100%;
        }
        table td {
            vertical-align: top;
            padding: 4px 0;
        }
        table td:first-child {
            width: 30%;
        }
        table td:nth-child(2) {
            width: 5%;
        }
    </style>
</head>
<body>
    <div class="header">
        @if ($surat->jenis_surat == "Kematian")
            <h1>Surat Keterangan Kematian</h1>
        @elseif($surat->jenis_surat == "TidakMampu")
            <h1>Surat Keterangan Tidak Mampu</h1>
        @elseif($surat->jenis_surat == "Pengantar")
            <h1>Surat Pengantar</h1>       
        @endif
    </div>
    <div class="content">
        <p>Yang bertanda tangan dibawah ini Ketua RW 8 Kelurahan Sawojajar Kota Malang</p>
        <p>Menarangkan bahwa</p>
        @if ($surat->jenis_surat == "Kematian")
            <table>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td>{{ $surat->nama_alm }}</td>
                </tr>
                <tr>
                    <td>NIK</td>
                    <td>:</td>
                    <td>{{ $surat->NIK_alm }}</td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td>{{ $surat->alamat_alm }}</td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td>
                        @if ($surat->jenis_kelamin_alm == "L")
                            Laki-Laki
                        @elseif ($surat->jenis_kelamin_alm == "P")
                            Perempuan
                        @endif
                    </td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td>:</td>
                    <td>{{ $surat->tanggal_lahir_alm }}</td>
                </tr>
                <tr>
                    <td>Usia</td>
                    <td>:</td>
                    <td>{{ $surat->usia_alm }}</td>
                </tr>
            </table>
            
            <center>
                <p><strong>TELAH MENINGGAL DUNIA</strong></p>
            </center>

            <table>
                <tr>
                    <td>Waktu Kematian</td>
                    <td>:</td>
                    <td>{{ $surat->waktu_kematian_alm }}</td>
                </tr>
                <tr>
                    <td>Penyebab Kematian</td>
                    <td>:</td>
                    <td>{{ $surat->sebab_kematian_alm }}</td>
                </tr>
                <tr>
                    <td>Tempat Kematian</td>
                    <td>:</td>
                    <td>{{ $surat->tempat_kematian_alm }}</td>
                </tr>
            </table>

            <p>Demikian <strong>surat kematian</strong> ini dibuat dengan sebenar-benarnya agar dapat digunakan dengan sebagaimana mestinya.</p>
        @else            
            <table>
                <tr>
                    <td>Nama Warga</td>
                    <td>:</td>
                    <td>{{ $surat->nama_warga }}</td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td>{{ $surat->alamat }}</td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td>{{ $surat->jenis_kelamin }}</td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td>:</td>
                    <td>{{ $surat->tanggal_lahir }}</td>
                </tr>
                <tr>
                    <td>NIK</td>
                    <td>:</td>
                    <td>{{ $surat->NIK }}</td>
                </tr>
            </table>

            @if ($surat->jenis_surat == "Pengantar")
                <p>Yang bersangkutan adalah warga setempat kami dan surat keterangan ini dikeluarkan untuk keperluan {{$surat->tujuan_surat}}.</p>
            @elseif($surat->jenis_surat == "TidakMampu")
                <p>Nama di atas adalah benar warga kami. Berdasarkan keterangan yang ada pada kami, benar bahwa yang bersangkutan tergolong keluarga yang tidak mampu.</p>
            @endif
        @endif
        <p>Demikian surat ini dibuat, atas perhatian dan kerjasamanya kami ucapkan terima kasih.</p>
    </div>
    <div class="footer">
        <p>Malang, {{ \Carbon\Carbon::parse($surat->created_at)->format('F Y') }}</p>
        <p class="signature">Yuma Rakha S</p>
    </div>
</body>
</html>
