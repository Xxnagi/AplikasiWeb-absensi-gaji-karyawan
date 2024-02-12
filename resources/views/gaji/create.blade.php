@extends('layout.template');

<!-- START FORM -->
@section('konten')
@if ($errors->any())
<div class="pt-3">
    <div class="alert alert-danger">
        <ul>
        @foreach ($errors->all() as $item)
            <li>{{$item}}</li>
        @endforeach  
        </ul> 
    </div>
</div>    
@endif
<form action='{{ url('gaji') }}' method='post'>
@csrf
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <div class="mb-3 row">
            <label for="id_gaji" class="col-sm-2 col-form-label">ID Gaji</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='id_gaji' id="id_gaji">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="nama_karyawan" class="col-sm-2 col-form-label">Nama Karyawan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='nama' id="nama">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='jabatan' id="jabatan">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="bulan" class="col-sm-2 col-form-label">Bulan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='bulan' id="bulan">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="gaji_pokok" class="col-sm-2 col-form-label">Gaji Pokok</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='gaji_pokok' id="gaji_pokok">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="potongan" class="col-sm-2 col-form-label">Potongan Gaji</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='potongan_gaji' id="potongan_gaji">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="total_gaji" class="col-sm-2 col-form-label">Total Gaji</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='total_gaji' id="total_gaji">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="submit" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
        </div>
      </form>
    </div>
    <!-- AKHIR FORM -->
@endsection