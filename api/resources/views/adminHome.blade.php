@extends('index')
   
@section('content')
        <div class="container crud">
            <div class="card mt-5">
                <div class="card-header text-center">
                    CRUD Data Rumah Sakit Rujukan Pasien Covid19
                </div>
                <div class="card-body">
                    <a href="/admin/home/tambah" class="btn btn-primary">Input Rumah Sakit Baru</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Provinsi</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($rumah_sakit as $p)
                            <tr>
                                <td>{{ $p->nama }}</td>
                                <td>{{ $p->alamat }}</td>
                                <td>{{ $p->provinsi }}</td>
                                <td>
                                    <a href="/admin/home/edit/{{ $p->id }}" class="fa fa-edit" style="font-size: 20px"></a>
                                    <a href="/admin/home/hapus/{{ $p->id }}" class="fa fa-trash" style="font-size: 20px"></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
@endsection 