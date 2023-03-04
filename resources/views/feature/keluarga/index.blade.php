@extends('layouts.master.index')
@push('title', 'Keluarga')
@push('subtitle', 'Keluarga')
@push('description', 'Data Keluarga')
@push('description')
    <span>
        Data keluarga
    </span>
@endpush
@push('tools')
    <a href="{{ url('feature/keluarga/create') }}" class="btn btn-primary letter-space-1">
        <em class="icon ni ni-account-setting"></em>
        <span>Tambah Keluarga</span>
    </a>
@endpush
@section('content')
<div class="nk-block">
    <table class="datatable-init nowrap nk-tb-list is-separate" data-auto-responsive="false">
        <thead>
            <tr class="nk-tb-item nk-tb-head letter-space-1">
                <th class="nk-tb-col nk-tb-col-check ff-mono"><span>No</span></th>
                <th class="nk-tb-col tb-col-md ff-mono"><span>Nama</span></th>
                <th class="nk-tb-col ff-mono"><span>Jenis Kelamin</span></th>
                <th class="nk-tb-col tb-col-md ff-mono"><span>Orang Tua</span></th>
                <th class="nk-tb-col nk-tb-col-tools">
                    <ul class="nk-tb-actions gx-1 my-n1">
                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                    </ul>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($keluarga as $data)
                <tr class="nk-tb-item">
                    <td class="nk-tb-col nk-tb-col-check">
                        <span> {{ $loop->iteration }} </span>
                    </td>
                    <td class="nk-tb-col tb-col-md">
                        <span class="tb-lead letter-space-1">{{ $data->nama }}</span>
                    </td>
                    <td class="nk-tb-col">
                        <span class="tb-lead letter-space-1">{{ $data->jenis_kelamin }}</span>
                    </td>
                    <td class="nk-tb-col tb-col-md">
                        <span class="tb-lead letter-space-1">{{ isset($data->getName->nama) ? $data->getName->nama : '' }}</span>
                    </td>
                    <td class="nk-tb-col nk-tb-col-tools">
                        <ul class="nk-tb-actions gx-1 my-n1">
                            <li class="me-n1">
                                <div class="dropdown">
                                    <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <ul class="link-list-opt no-bdr ff-mono letter-space-1">
                                            <li>
                                                <a href="{{ url('feature/keluarga/'.$data->id.'/edit') }}"><em class="icon ni ni-edit"></em><span>Edit</span></a>
                                            </li>
                                            <li>
                                                <a href="{{ url('feature/keluarga/'.$data->id) }}"><em class="icon ni ni-eye"></em><span>Detail</span></a>
                                            </li>
                                            <li>
                                                <li><a data-bs-toggle="modal" data-bs-target="#delete{{ $data->id }}"><em class="icon ni ni-trash-empty"></em><span>Hapus</span></a></li>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </td>
                </tr>
                @include('layouts.partials.delete.index', ['id' => 'delete'.$data->id, 'url' => url('feature/keluarga/'.$data->id)])
            @endforeach
        </tbody>
    </table>
</div>
@endsection



