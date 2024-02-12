@extends('layout.template')
<!-- START DATA -->
@section('konten')
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <!-- FORM PENCARIAN -->
        <div class="pb-3">
            <form class="d-flex" action="" method="get">
                <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}"
                    placeholder="Masukkan kata kunci" aria-label="Search">
                <button class="btn btn-secondary" type="submit">Cari</button>
            </form>
        </div>

        <!-- TOMBOL TAMBAH DATA -->
        <div class="pb-3">
            <a href='' class="btn btn-primary">+ Tambah Data</a>
        </div>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="col-md-1">ID Gaji</th>
                    <th class="col-md-3">Nama Karyawan</th>
                    <th class="col-md-2">Jabatan</th>
                    <th class="col-md-2">Bulan</th>
                    <th class="col-md-2">Gaji Pokok</th>
                    <th class="col-md-2">Potongan Gaji</th>
                    <th class="col-md-2">Total Gaji</th>
                    <th class="col-md-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1001</td>
                    <td>Ani</td>
                    <td>Manajer</td>
                    <td>Januari</td>
                    <td>5,000,000</td>
                    <td>500,000</td>
                    <td>4,500,000</td>
                    <td>
                        <a href='' class="btn btn-warning btn-sm mx-1">Edit</a>
                        <a href='' class="btn btn-danger btn-sm mx-1">Del</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
