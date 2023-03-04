@extends('layouts.master.index')
@push('title', 'Tree')
@push('subtitle', 'Tree')
@push('description')
    <span>
        Visualisasi Tree
    </span>
@endpush
@section('content')
<div class="nk-block nk-block-lg">
    <div class="row d-flex justify-content-center align-content-center">
        <div class="col-sm-12 col-md-6">
            <div class="card card-bordered card-preview">
                <div class="card-inner">
                    <div id="custom-icon-tree">
                        <ul>
                            @foreach ($members as $member)
                                <li class="mt-1" data-jstree='{ "opened" : true, "icon" : "icon ni ni-user-fill text-primary" }'>  {{ $member['name'] }}
                                    @include('feature.tree.children', ['data' => $member['children']])
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



