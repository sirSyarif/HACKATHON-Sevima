@extends('index')

@section('content')
<div class="container">
    <div class="card mt-5">
        <div class="card-header text-center">
            CRUD Data Rumah Sakit Rujukan Pasien Covid19 - <strong>TAMBAH DATA</strong>
        </div>
        <div class="card-body">
            <a href="/admin/home" class="btn btn-primary">Kembali</a>
            <br/>
            <br/>
            
            <form method="post" action="/admin/home/store">

                {{ csrf_field() }}

                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control" placeholder="Nama Rumah Sakit ..">

                    @if($errors->has('nama'))
                        <div class="text-danger">
                            {{ $errors->first('nama')}}
                        </div>
                    @endif

                </div>

                <div class="form-group">
                    <label>Alamat</label>
                    <textarea name="alamat" class="form-control" placeholder="Alamat Rumah Sakit .."></textarea>

                     @if($errors->has('alamat'))
                        <div class="text-danger">
                            {{ $errors->first('alamat')}}
                        </div>
                    @endif

                </div>

                <div class="form-group">
                    <label>Provinsi</label>
                    <textarea name="provinsi" class="form-control" placeholder="Provinsi Rumah Sakit .."></textarea>

                     @if($errors->has('provinsi'))
                        <div class="text-danger">
                            {{ $errors->first('provinsi')}}
                        </div>
                    @endif

                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="Simpan">
                </div>

            </form>
        </div>
    </div>
</div>
@endsection