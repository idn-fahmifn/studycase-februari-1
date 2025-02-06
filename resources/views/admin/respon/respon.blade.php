@extends('template.template')

@section('content')
<div class="row">
    <div class="col">
        <div class="card p-2">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div>
                        <h5 class="card-title">{{ $data->judul_laporan }}</h5>
                        <p>Status laporan saat ini <span class="text-primary">{{$data->status}}</span></p>
                    </div>
                    <div>
                        <button type="button" class="btn btn-primary mb-4" data-bs-toggle="modal"
                            data-bs-target="#exampleModalCenter">
                            Tanggapi laporan ini
                        </button>
                    </div>
                </div>

                <!-- area detail -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th>Judul Laporan</th>
                                    <td>{{$data->judul_laporan}}</td>
                                </tr>
                                <tr>
                                    <th>Nama Pelapor</th>
                                    <td>{{$data->user->name}}</td>
                                </tr>
                                <tr>
                                    <th>Dibuat Pada</th>
                                    <td>{{$data->tanggal_laporan->diffForHumans()}}</td>
                                </tr>
                            </table>
                            {{ $data->deskripsi }}
                        </div>
                    </div>
                    <div class="col-md-6 text-center">
                        <img src="{{asset('storage/images/laporan/'.$data->dokumentasi)}}" class="p-6 img-thumbnail" width="300" alt="Gambar">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection