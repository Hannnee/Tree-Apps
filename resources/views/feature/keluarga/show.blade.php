@extends('layouts.master.index')
@push('title', 'Detail Keluarga')
@push('subtitle', 'Detail Keluarga')
@push('description')
    <span>
        Detail data keluarga
    </span>
@endpush
@push('tools')
    @include('layouts.partials.back-button', ['url' => url('feature/keluarga')])
@endpush
@section('content')
<div class="nk-block nk-block-lg">
    <div class="row d-flex justify-content-center align-content-center">
        <div class="col-sm-12 col-md-6">
            <div class="card">
                <div class="card-inner">
                    <div class="mb-4">
                        <label class="form-label required">Nama keluarga</label>
                        <div class="form-control-wrap">
                            <input type="text" class="form-control" value="{{ $keluarga->nama }}" readonly>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label class="form-label required">Jenis kelamin</label>
                        <div class="form-control-wrap">
                            <input type="text" class="form-control" value="{{ $keluarga->jenis_kelamin }}" readonly>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label class="form-label required">Orang tua</label>
                        <div class="form-control-wrap">
                            <input type="text" class="form-control" value="{{ isset($keluarga->getName->nama) ? $keluarga->getName->nama : '-' }}" readonly>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label class="form-label required">Dibuat pada</label>
                        <div class="form-control-wrap">
                            <input type="text" class="form-control" value="{{ $keluarga->createdAt($keluarga->created_at) }}" readonly>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
