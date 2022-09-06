@extends('template.admin')
@section('base')
<br>
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                      
                    <div class="card-header">
                            <h3 class="card-title">Data Produk</h3>
                            <div class="float-right full">

                                <a href="{{url('produk/create')}}" class="btn btn-dark"><span class="fa fa-plus"></span> Tambah Data</a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Aksi</th>
                                        <th>Nama Produk</th>
                                        <th>Harga</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($list_produk as $produk)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="{{url("produk/show/$produk->id")}}" class="btn btn-dark"><span class="fa fa-info"></span></a>
                                                <a href="{{url("produk/edit/$produk->id")}}" class="btn btn-warning"><span class="fa fa-edit"></span></a>
                                                <a href="{{url("produk/delete/$produk->id")}}" class="btn btn-danger"><span class="fa fa-trash"> </span></a>
                                            </div>
                                        </td>
                                        <td> {{$produk->nama_produk}} </td>
                                        <td> {{$produk->harga}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection