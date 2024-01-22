
    @extends('layouts.main')
    @section('content')
    
    <h1 align="center">BIODATA DIRI</h1>
    <center>
        <table width="745" border="1" cellspacing="0" cellpadding="5" align="center">
            <tr align="center" bgcolor="blue">
                <td width="174">DATA DIRI</td>
                <td width="353">KETERANGAN</td>
                <td width="232">FOTO</td>
            </tr>
        <tr>
            <td>Nama</td>
            <td>Rizki Ramadhan Binyola</td>
            <td rowspan="10" align="center" bgcolor="red"><img src="{{ asset('assets/images/foto.png') }}" alt="Nama Gambar">
            </td>
        </tr>
        <tr>
            <td>Jurusan</td>
            <td>Rekayasa Perangkat Lunak</td>
        </tr>
        <tr>
            <td>Kelas</td>
            <td>XII</td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>Laki-laki</td>
        </tr>
        <tr>
            <td>Tempat/Tanggal Lahir</td>
            <td>Bekasi, 25 September 2006</td>
        </tr>
        <tr>
            <td>Sekolah</td>
            <td>SMK Teratai Putih Global 2 Bekasi</td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>Jl. Semangka 1 No 366</td>
        </tr>
        <tr>
            <td>Hobi</td>
            <td>Gitaran</td>
        </tr>
    </table>
    </center>
    @endsection
