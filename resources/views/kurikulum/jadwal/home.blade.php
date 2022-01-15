@extends('layouts.sbadmin')
@section('title', 'Halaman Kurikulum')
@section('content')
<div class="container-fluid">
    @if (session('success_message'))
        <div class="alert alert-success">
            {{session('success_message')}}
        </div>
    @endif
    {{-- data table --}}
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col">
                    <h5 class="m-0 pt-2 font-weight-bold text-primary">Jadwal</h5>
                </div>
                <div class="col">
                    <a href="{{route('get-jadwal')}}" class=" m-0 font-weight-bold text-white btn btn-primary btn-sm float-right">
                        <i class="fas fa-plus"></i>
                        Add Jadwal
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-center" id="data_table" width="100%" cellspacing="0">
                    <thead>
                        <tr class="text-primary">
                            <th>NO</th>
                            <th>NIP</th>
                            <th>TANGGAL</th>
                            <th>MULAI</th>
                            <th>SELESAI</th>
                            <th>MEN-SUPERVISI</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dataJadwal as $item)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$item->nip}}</td>
                                <td>{{$item->tanggal}}</td>
                                <td>{{$item->jam_awal}}</td>
                                <td>{{$item->jam_akhir}}</td>
                                <td>{{$item->id_supervisor}}</td>
                                {{-- <td>
                                    <form action="#" method="post">
                                        @method('patch')
                                        @csrf

                                    </form>
                                </td> --}}
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
