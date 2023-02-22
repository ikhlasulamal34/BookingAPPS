@extends('layouts.admin')

@section('content')
<div class="container-fluid">

    <!-- Content Row -->
        <div class="card">
            <div class="card-header py-3 d-flex">
                <h6 class="m-0 font-weight-bold text-primary">
                Produk
                </h6>
                <div class="ml-auto">
                    <a href="{{url('produk-tambah')}}" class="btn btn-primary">
                        <span class="icon text-white-50">
                            <i class="fa fa-plus"></i>
                        </span>
                        <span class="text">Produk Baru</span>
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover datatable datatable-User" cellspacing="0" width="100%">
                        <thead>
                           
                                <th>No</th>
                                <th>Nama</th>
                                <th>Kategori</th>
                                <th>Harga</th>
                                <th>Gambar</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($getProduk as $a)
                            <tr>
                                <td>{{$a->id}}</td>
                                <td>{{$a->namabarang}}</td>
                                <td>{{$a->kategori}}</td>
                                <td>{{$a->harga}}</td>
                                <td>{{$a->foto}}</td>
                                <td>
                                    <a href="/produk/{{ $a->id }}/edit-produk"
                                        class="btn btn-outline-warning btn-sm">Edit</a>
                                    <a href="/produk/{{ $a->id }}/hapus-produk"
                                        class="btn btn-outline-danger btn-sm">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    <!-- Content Row -->

</div>
@endsection