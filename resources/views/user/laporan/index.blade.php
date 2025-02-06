@extends('template.template')

@section('content')
<div class="row">
    <div class="col">
        <div class="card p-2">
            <div class="card-body">
                <h5 class="card-title">Laporan Saya</h5>
                <span>Semua laporan saya, Klik pada judul laporan untuk melihat detai laporan.</span>

                <!-- area table -->

                <div class="table-responsive mt-4">
                    <table id="zero-conf" class="table table-striped display">
                        <thead>
                            <th>Judul Laporan</th>
                            <th>Status</th>
                            <th>Dibuat pada</th>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <td><a href="{{route('laporan.detail', $item->id)}}" class="text-primary">{{$item->judul_laporan}}</a></td>
                                    <td>{{$item->status}}</td>
                                    <td>{{$item->tanggal_laporan->diffForHumans()}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
