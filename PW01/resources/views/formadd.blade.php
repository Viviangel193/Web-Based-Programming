@extends('layouts.main')
@section('title',"Form Add Movies")
@section('artikel')
    <div class="card">
        <div class="card-header">
            <h3>Tambahkan Movies gan <i class="bi bi-emoji-angry-fill"></i> </h3>
        </div>
        <div class="card-body">
            <form action="/save" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="title" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Genre</lel>
                    <select name="genre" class="form-control">
                        <option value="0">--Pilih Genre--</option>
                        <option value="Action">Action</option>
                        <option value="Horror">Horror</option>
                        <option value="Thriller">Thriller</option>
                        <option value="Comedy">Comedy</option>
                        <option value="Crime">Crime</option>
                        <option value="Romance">Romance</option>
                        <option value="Anime">Anime</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Year</label>
                    <input type="number" min="1900" max="2100" name="year" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Poster</label>
                    <input type="file" accept="image/*" name="poster" class="form-control-file" required>
                </div>
                <div class="form-group text-right">
                    <button type="submit" class="btn btn-primary"><i class="bi bi-floppy"></i></i></button>
                </div>
            </form>
        </div>
    </div>
@endsection
