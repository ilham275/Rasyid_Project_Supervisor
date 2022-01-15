@extends('layouts.sbadmin')
@section('title', 'Halaman Kurikulum')
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="row">
            <div class="col">
                <h5 class="m-0 pt-2 font-weight-bold text-primary"> Add Identitas</h5>
            </div>
            <div class="col">
                <a href="{{route('kurikulum.home')}}" class="btn btn-danger btn-sm float-right">
                    <i class="fas fa-angle-left"></i>
                    Back
                </a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <form action="{{route('post-kurikulum')}}" method="POST">
            @csrf
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Nama Lengkap</label>
                <div class="col-sm-10">
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}" id="name" placeholder="Nama Lengkap">
                </div>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
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
            </div>
            <div class="form-group row">
                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <textarea type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror" value="{{old('alamat')}}" id="alamat" placeholder="Alamat">{{old('alamat')}}</textarea>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="role" class="col-sm-2 col-form-label">jabatan Utama</label>
                <div class="col-sm-10">
                    <select class="form-control" name="role" id="role">
                        <option value="" selected disabled>Pilih...</option>
                        {{-- @if ()

                        @else

                        @endif --}}
                        <option value="kepsek" {{old('role') == 'kepsek' ? 'selected' : ''}}>Kepala Sekolah</option>
                        <option value="kurikulum" {{old('role') == 'kurikulum' ? 'selected' : ''}}>Kurikulum</option>
                        <option value="guru" {{old('role') == 'guru' ? 'selected' : ''}}>Guru</option>
                    </select>
                    @error('role')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
    </div>
</div>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="row">
            <div class="col">
                <h5 class="m-0 pt-3 font-weight-bold text-primary">Add Account </h5>
            </div>
        </div>
    </div>
    <div class="card-body">
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}" id="email" placeholder="Email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="footer">
                <button type="submit" class="btn btn-primary btn-sm float-right">
                    <i class="fas fa-check"></i>
                    Sumbit
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
