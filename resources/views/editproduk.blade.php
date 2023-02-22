@extends('layouts.admin')

@section('content')
<section class="section">
    <div class="section-header">
        <div class="row col-12">
            <div class="col-9">
                <h1>Tambah Data Produk</h1>
            </div>
            <div class="col-3">
                Tanggal Hari ini: <b class="" id="date"></b>
            </div>
        </div>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card">
                            <div class="buttons">
                                <button type="button" class="btn btn-primary" onclick="location.href='{{ url('produk') }}'">
                                    Kembali
                                </button>
                            </div>
                        </div>
                        <div>
                            <form method="post" action="" enctype="multipart/form-data">
                            @csrf
                            <div class="row form-group">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <a class="text-dark">id<a class='red'> *</a></a>
                                        <input class="form-control input-bb" type="text" name="id" id="id"
                                            value="{{ old('id') }}" />
                                        <span style="color:red">
                                            @error('id')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <a class="text-dark">Nama barang<a class='red'> *</a></a>
                                        <input class="form-control input-bb" type="text" name="namabarang" id="namabarang"
                                            value="{{ old('namabarang') }}" />
                                        <span style="color:red">
                                            @error('namabarang')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <a class="text-dark">Kategori<a class='red'> *</a></a>
                                        <input class="form-control input-bb" type="text" name="kategori" id="kategori"
                                            value="{{ old('kategori') }}" />
                                        <span style="color:red">
                                            @error('kategori')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <a class="text-dark">harga<a class='red'> *</a></a>
                                        <input class="form-control input-bb" type="password" name="harga" id="harga"
                                            value="{{ old('harga') }}" />
                                        <span style="color:red">
                                            @error('harga')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <a class="text-dark">foto<a class='red'> *</a></a>
                                        <input class="form-control input-bb" type="image" name="foto" id="foto"
                                            value="{{ old('foto') }}" />
                                        <span style="color:red">
                                            @error('foto')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-actions float-right">
                                        <button type="reset" name="Reset" class="btn btn-danger"
                                            onClick="window.location.reload();"><i class="fa fa-times"></i> Batal</button>
                                        <button type="submit" id="btnSubmit" name="btnSubmit" class="btn btn-primary" title="Save"><i
                                                class="fa fa-check"></i> Simpan</button>
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@section('scripts')