@extends('template.template')

@section('content')
<div class="row">
    <div class="col">
        <div class="card p-2">
            <div class="card-body">
                <h5 class="card-title">Buat laporan</h5>
                <span>Ajukan laporan baru dibawah. Pastikan laporan benar dan bukan hoax.</span>

                <!-- area form -->
                <form action="{{route('laporan.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group p-2 mt-2">
                                <label class="text-primary">Judul Laporan</label>
                                <input type="text" name="judul_laporan" class="form-control mt-2 p-2" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group p-2 mt-2">
                                <label class="text-primary">Dokumentasi</label>
                                <input type="file" name="dokumentasi" class="form-control mt-2 p-2" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group p-2 mt-2">
                                <label class="text-primary">Deskripsi Laporan</label>
                                <textarea name="deskripsi" class="form-control mt-2 p-2"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex justify-content-end">
                            <a href="#" class="btn-btn-outline-primary">Kembali</a>
                            <button type="submit" class="btn btn-primary">Buat Laporan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection