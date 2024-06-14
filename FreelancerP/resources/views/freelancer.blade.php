@extends('layouts.main')
@section('title', "Freelancer Catalog")

@section('artikel')
<div class="card">
    <div class="card-header" style="background-color: #006400; color: white;">
        <div class="d-flex justify-content-between align-items-center">
            <h3 class="card-title mb-0">Freelancers</h3>
            <a href="/freelancer/form-add" class="btn btn-light"><i class="bi bi-plus-square-fill"></i> Add Freelancer</a>
        </div>
    </div>
    <div class="card-body">
        @if (session('alert'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('alert') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        <div class="row">
            @forelse ($freelancers as $freelancer)
            <div class="col-md-4 mb-4">
                <div class="card card-freelancer h-100">
                    <div class="card-body">
                        <h5 class="card-title">{{ $freelancer->nama }}</h5>
                        <p class="card-text">{{ $freelancer->spesialisasi }}</p>
                        <p class="card-text">Rating: {{ $freelancer->rating }}</p>
                        <p class="card-text">Lokasi: {{ $freelancer->lokasi }}</p>
                        <p class="card-text">Kontak: {{ $freelancer->kontak }}</p>
                        <div class="text-right">
                            <a href="/freelancer/edit/{{ $freelancer->id_freelancer }}" class="btn btn-primary btn-sm"><i class="bi bi-pencil-fill"></i></a>
                            <form action="/freelancer/delete/{{ $freelancer->id_freelancer }}" method="POST" style="display: inline;">
                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm btn-delete"><i class="bi bi-trash-fill"></i></button>
                            </form>                            
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12">
                <p class="text-center">No freelancers found.</p>
            </div>
            @endforelse
        </div>
    </div>
</div>
@endsection
