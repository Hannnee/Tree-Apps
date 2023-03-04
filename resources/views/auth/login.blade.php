@extends('layouts.auth.index')
@push('title', 'Login Tree Apps')
@section('content')
<div class="nk-block nk-block-middle nk-auth-body  wide-xs">
    <div class="card">
        <div class="card-inner card-inner-lg">
            @include('layouts.partials.alert')
            <div class="nk-block-head">
                <div class="nk-block-head-content">
                    <h4 class="nk-block-title">Log-In</h4>
                </div>
            </div>
            <form action="{{URL('/')}}" method="POST">
                @csrf
                @method('POST')
                <div class="form-group">
                    <div class="form-label-group">
                        <label class="form-label">Email or Username</label>
                    </div>
                    <div class="form-control-wrap">
                        <input type="text" name="email" class="form-control form-control-lg @error('email') error @enderror" value="{{ old('email') }}" placeholder="Masukan email atau username anda disini">
                        @include('layouts.partials.error-input', ['name' => 'email'])
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-label-group">
                        <label class="form-label">Password</label>
                        <a class="link link-primary link-sm" href="#">Lupa password ?</a>
                    </div>
                    <div class="form-control-wrap">
                        <a href="#" class="form-icon form-icon-right passcode-switch lg" data-target="password">
                            <em class="passcode-icon icon-show icon ni ni-eye"></em>
                            <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                        </a>
                        <input type="password" name="password" class="form-control form-control-lg @error('password') error @enderror" placeholder="Masukan password anda">
                        @include('layouts.partials.error-input', ['name' => 'password'])
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-lg btn-primary btn-block">Log-in</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
