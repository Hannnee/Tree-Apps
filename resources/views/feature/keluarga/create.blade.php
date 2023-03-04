@extends('layouts.master.index')
@push('title', 'Tambah Keluarga')
@push('subtitle', 'Tambah Keluarga')
@push('description')
    <span>
        Tambah data keluarga
    </span>
@endpush
@push('tools')
    @include('layouts.partials.back-button', ['url' => url('feature/keluarga')])
@endpush
@section('content')
<div class="nk-block nk-block-lg">
    <form action="{{ URL('feature/keluarga') }}" method="post" class="form-input" enctype="multipart/form-data">
        @csrf
        @method('post')
        <div class="row d-flex justify-content-center align-content-center">
            <div class="col-sm-12 col-md-8">
                <div class="card">
                    <div class="card-inner">
                        <div class="mb-4">
                            <label class="form-label required">Nama keluarga</label>
                            <div class="form-control-wrap">
                                <input type="text" name="nama" class="form-control" value="{{ old('nama') }}" required>
                                <span class="d-flex justify-content-end mt-1 letter-space-1 fs-12px">string | maks : 225 </span>
                                @include('layouts.partials.error-input', ['name' => 'nama'])
                            </div>
                        </div>
                        <div class="mb-4">
                            <label class="form-label required">Jenis kelamin</label>
                            <div class="@error('jenisKelamin') border border-danger @enderror rounded">
                                <select name="jenisKelamin" class="form-select js-select2" data-search="on" required>
                                    <option value="" selected disabled>Pilih salah satu</option>
                                    <option value="L" {{ old('jenisKelamin') == 'L' ? 'selected' : '' }}>Laki laki</option>
                                    <option value="P" {{ old('jenisKelamin') == 'P' ? 'selected' : '' }}>Perempuan</option>
                                </select>
                            </div>
                            <span class="d-flex justify-content-end mt-1 letter-space-1 fs-12px"> pilih salah satu </span>
                            @include('layouts.partials.error-input', ['name' => 'jenisKelamin'])
                        </div>
                        <div class="mb-4">
                            <label class="form-label required">Orang tua</label>
                            <div class="@error('orangTua') border border-danger @enderror rounded">
                                <select name="orangTua" class="form-select js-select2" data-search="on">
                                    <option value="" selected disabled>Pilih salah satu</option>
                                    <option value="0" {{ old('orangTua') == '0' ? 'selected' : '' }}>Tidak punya orang tua</option>
                                    @foreach ($keluarga as $data)
                                        <option value="{{ $data->id }}" {{ old('orangTua') == $data->id ? 'selected' : '' }}>{{ $data->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <span class="d-flex justify-content-end mt-1 letter-space-1 fs-12px"> pilih salah satu </span>
                            @include('layouts.partials.error-input', ['name' => 'orangTua'])
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between mt-4">
                    <button type="submit" class="btn btn-primary"><em class="icon ni ni-save"></em><span>Simpan</span></button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
