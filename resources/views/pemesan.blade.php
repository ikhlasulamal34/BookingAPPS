@extends('layouts.admin')

@section('content')
<div class="container-fluid">

    <!-- Content Row -->
        <div class="card">
            <div class="card-header py-3 d-flex">
                <h6 class="m-0 font-weight-bold text-primary">
                Pemesan
                </h6>
                <div class="ml-auto">
                    <a href="#" class="btn btn-primary">
                        <span class="icon text-white-50">
                            <i class="fa fa-plus"></i>
                        </span>
                        <span class="text">Pemesan Baru</span>
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover datatable datatable-User" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Pemesan</th>
                                <th>Nama Barang</th>
                                <th>Jumlah Pcs</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($getBarang as $a)
                        @foreach ($getClient as $b)
                        @foreach ($getBarangClient as $c)
                            <tr>
                                <td>{{$c->id}}</td>
                                <td>{{$b->namaclient}}</td>
                                <td>{{$a->namabarang}}</td>
                                <td>{{$c->jmldipesan}}</td>
                                <td>
                                    <button type="button" class="btn btn-warning">
                                        Detail
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                        @endforeach
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    <!-- Content Row -->

</div>
@endsection