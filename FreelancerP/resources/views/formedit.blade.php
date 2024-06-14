@extends('layouts.main')
@section('title', "Edit Freelancer")
@section('artikel')
<div class="card">
    <div class="card-header">
        <h3>Edit Freelancer</h3>
    </div>
    <div class="card-body">
        <form action="/freelancer/update/{{ $freelancer->id_freelancer }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama">Name:</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ $freelancer->nama }}">
            </div>
            <div class="form-group">
                <label for="spesialisasi">Specialization:</label>
                <input type="text" class="form-control" id="spesialisasi" name="spesialisasi" value="{{ $freelancer->spesialisasi }}">
            </div>
            <div class="form-group">
                <label for="rating">Rating:</label>
                <input type="number" class="form-control" id="rating" name="rating" value="{{ $freelancer->rating }}">
            </div>
            <div class="form-group">
                <label for="lokasi">Location:</label>
                <input type="text" class="form-control" id="lokasi" name="lokasi" value="{{ $freelancer->lokasi }}">
            </div>
            <div class="form-group">
                <label for="kontak">Contact:</label>
                <input type="text" class="form-control" id="kontak" name="kontak" value="{{ $freelancer->kontak }}">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection
