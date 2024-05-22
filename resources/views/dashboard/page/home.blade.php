@extends('dashboard.layout.index')
@section('content')

<div class="wrapper">
    @foreach ($dtAgenda as $item)
        <div class="card" style="width: 100vh;">
            <div class="card-header">
                {{ $item->acara }}
            </div>
            <div class="card-body">
                <p class="card-text mb-1"><i class="bi bi-exclamation-circle-fill" style="margin-right: 10px;"></i>{{ $item->acara }}</p>
                <p class="card-text mb-1"><i class="bi bi-geo-fill" style="margin-right: 10px;"></i>{{ $item->tempat }}</p>
                <p class="card-text mb-1">
                    <i class="bi bi-calendar2-week-fill" style="margin-right: 10px;"></i>
                    {{ date('d/m/y', strtotime($item->tgl_mulai)) }} - {{ date('d/m/y', strtotime($item->tgl_selesai)) }}</p>
                <p class="card-text mb-1">Status : {{ $item->status }}</p>
            </div>
        </div>
    @endforeach
</div>
@endsection