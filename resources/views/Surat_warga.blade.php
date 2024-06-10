<!DOCTYPE html>
<html>

<head>
    <title>Surat Warga</title>
</head>

<body>
    <div class="header">
        <center>
            <div class="mb-0">
                <h3>Pemerintah Kelurahan Sawojajar</h3>
                <h2>Ketua RW 08</h2>
                <h4>Kelurahan Sawojajar Kecamatan Kedungkandang Kota Malang</h4>
            </div>
            <hr>
            <br>
        </center>
        <table cellspacing="0">
            @if ($surat->jenis_surat == 'Kematian')
                <tr>
                    <th>No.Surat</th>
                    <td>:</td>
                    <td>
                        <p>VIII/warga/kematian/{{ $surat->surat_id }}</p>
                    </td>
                </tr>
            @elseif($surat->jenis_surat == 'TidakMampu')
                <tr>
                    <th>No.Surat</th>
                    <td><b>:</b></td>
                    <td>
                        <p>VIII/warga/TidakMampu/{{ $surat->surat_id }}</p>
                    </td>
                </tr>
            @elseif($surat->jenis_surat == 'Pengantar')
                <tr>
                    <td><b>No.Surat</b></td>
                    <td><b>:</b></td>
                    <td>
                        <p>VIII/warga/Pengantar/{{ $surat->surat_id }}</p>
                    </td>
                </tr>
            @endif
        </table>
        <center>
            @if ($surat->jenis_surat == 'Kematian')
                <h3>Surat Keterangan Kematian</h3>
            @elseif($surat->jenis_surat == 'TidakMampu')
                <h3>Surat Keterangan Tidak Mampu</h3>
            @elseif($surat->jenis_surat == 'Pengantar')
                <h3>Surat Pengantar</h3>
            @endif
        </center>

    </div>
    <div class="content">
        <br>
        <p>Yang bertanda tangan dibawah ini Ketua RW 8 Kelurahan Sawojajar Kota Malang</p>
        <p>Menarangkan bahwa</p>
        @if ($surat->jenis_surat == 'Kematian')
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
                        @if ($surat->jenis_kelamin_alm == 'L')
                            Laki-Laki
                        @elseif ($surat->jenis_kelamin_alm == 'P')
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

            <p>Demikian <strong>surat kematian</strong> ini dibuat dengan sebenar-benarnya agar dapat digunakan dengan
                sebagaimana mestinya.</p>
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

            @if ($surat->jenis_surat == 'Pengantar')
                <p>Yang bersangkutan adalah warga setempat kami dan surat keterangan ini dikeluarkan untuk keperluan
                    <b>{{ $surat->tujuan_surat }}</b>.
                </p>
            @elseif($surat->jenis_surat == 'TidakMampu')
                <p>Nama di atas adalah benar warga kami. Berdasarkan keterangan yang ada pada kami, benar bahwa yang
                    bersangkutan tergolong keluarga yang tidak mampu.</p>
            @endif
        @endif
        <p>Demikian surat ini dibuat, atas perhatian dan kerjasamanya kami ucapkan terima kasih.</p>
    </div>
    <div class="footer" style="text-align: right;">
        <p>Malang, {{ \Carbon\Carbon::parse($surat->created_at)->format('F Y') }}</p>
        <br>
        <br>
        <p>Budi Santoso</p>
    </div>
</body>

</html>
