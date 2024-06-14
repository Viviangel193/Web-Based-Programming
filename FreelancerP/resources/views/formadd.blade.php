@extends('layouts.main')
@section('title', "Form Add Freelancer")
@section('artikel')
    <div class="card">
        <div class="card-header">
            <h3>Add Freelancer</i></h3>
        </div>
        <div class="card-body">
            <form action="/freelancer/save" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Spesialisasi</label>
                    <input type="text" name="spesialisasi" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Lokasi</label>
                    <input type="text" name="lokasi" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Rating</label>
                    <input type="number" step="0.01" name="rating" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Kontak</label>
                    <input type="text" name="kontak" class="form-control" required>
                </div>
                <div class="form-group text-right">
                    <button type="submit" class="btn btn-primary"><i class="bi bi-floppy"></i></button>
                </div>
            </form>
        </div>
    </div>
@endsection
