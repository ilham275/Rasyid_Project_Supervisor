@extends('layouts.sbadmin')
@section('title', 'Halaman Kurikulum')
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="row">
            <div class="col">
                <h5 class="m-0 pt-2 font-weight-bold text-primary"> Add Jadwal</h5>
            </div>
            <div class="col">
                <a href="{{route('jadwal')}}" class="btn btn-danger btn-sm float-right">
                    <i class="fas fa-angle-left"></i>
                    Back
                </a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <form action="{{route('post-jadwal')}}" method="POST">
            @csrf
            <div class="form-group row">
          
                    <label for="nip" class="col-sm-2 col-form-label">NIP</label>
                    <div class="col-sm-10">
                        <input type="number" name="nip" class="form-control @error('nip') is-invalid @enderror" value="{{old('nip')}}" id="nip" placeholder="NIP">
                        @error('nip')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
                <div class="col-sm-10">
                    <input type="date" name="tanggal" class="form-control @error('tanggal') is-invalid @enderror" value="{{old('tanggal')}}" id="tanggal" placeholder="tanggal">
                    @error('tanggal')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="jam_awal" class="col-sm-2 col-form-label">Waktu Mulai</label>
                <div class="col-sm-10">
                    <input type="time" name="jam_awal" class="form-control @error('tanggal') is-invalid @enderror" value="{{old('jam_awal')}}" id="jam_awal" placeholder="Waktu Mulai">
                    @error('jam_awal')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="jam_akhir" class="col-sm-2 col-form-label">Waktu Selesai</label>
                <div class="col-sm-10">
                    <input type="time" name="jam_akhir" class="form-control @error('jam_akhir') is-invalid @enderror" value="{{old('jam_akhir')}}" id="" placeholder="Waktu Selesai ">
                    @error('jam_akhir')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="nip" class="col-sm-2 col-form-label">Pengajar</label>
                <div class="col-sm-10">
                    <select class="form-control" name="nip" id="nip">
                        <option value="" selected disabled>Pilih...</option>
                        @foreach ($dataGuru as $item)
                            <option value="{{$item->nip}}" {{old('nip') == $item->nip ? 'selected' : ''}}>{{$item->name}}</option>
                        @endforeach
                    </select>
                    @error('nip')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="id_supervisor" class="col-sm-2 col-form-label">Men-Supervisi</label>
                <div class="col-sm-10">
                    <select class="form-control" name="id_supervisor" id="id_supervisor">
                        <option value="" selected disabled >Pilih...</option>
                        @foreach ($dataSupervisor as $item)
                            <option value="{{$item->name}}" {{old('id_supervisor') == $item->id_supervisor ? 'selected' : ''}}>{{$item->name}}</option>
                        @endforeach
                    </select>
                    @error('id_supervisor')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
            </div>
    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-primary btn-sm float-right">
            <i class="fas fa-check"></i>
            Sumbit
        </button>
    </div>
    </form>
</div>
@endsection
