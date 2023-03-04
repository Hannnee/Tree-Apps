@extends('layouts.master.index')
@push('title', 'API Documentation')
@push('subtitle', 'API Documentation')
@push('description', 'Data API Documentation')
@section('content')
<div class="nk-block nk-block-lg">
    <div class="row d-flex justify-content-center align-content-center">
        <div class="col-sm-12 col-md-9">
            <div class="card">
                <div class="card-inner">
                    @php
                        print("<pre>".print_r($apis, true)."</pre>");
                    @endphp
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



