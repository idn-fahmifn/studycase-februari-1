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
                                <tr>
                                    <th>Status</th>
                                    <td>{{$data->status}}</td>
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


    <div class="col-md-12">
        <div class="card">
            <div class="card-body p-4">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="text-bold">Judul</h5>
                    <span class="text-sm">3 jam yang lalu</span>
                </div>
                <div class="mt-4">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus dolore culpa, autem, quas ipsam esse accusantium molestias unde accusamus, eaque dolor ea excepturi et fugiat non voluptate architecto iure distinctio molestiae! Eveniet eaque minus quaerat exercitationem minima quisquam labore quasi mollitia est delectus, error laudantium cumque nihil, dolore doloremque veniam.
                </div>
            </div>
        </div>
    </div>

</div>

<div class="modal fade" id="exampleModalCenter" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Tanggapi Laporan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="#" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group mt-2">
                        <label class="text-primary">Judul Respon</label>
                        <input type="text" name="judul_respon" required class="form-control">
                    </div>
                    <div class="form-group mt-2">
                        <label class="text-primary">Dokumentasi (jika ada)</label>
                        <input type="file" name="dokumentasi" class="form-control">
                    </div>
                    <div class="form-group mt-2">
                        <label class="text-primary">Deskripsi</label>
                        <textarea name="deskripsi" class="form-control"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Tanggapi</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection