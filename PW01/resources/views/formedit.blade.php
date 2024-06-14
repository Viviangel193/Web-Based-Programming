@extends('layouts.main')
@section('title',"Form Edit Movies")
@section('artikel')
    <div class="card">
        <div class="card-header">
            <h3>Edit Movies gan <i class="bi bi-emoji-angry-fill"></i> </h3>
        </div>
        <div class="card-body">
            <form action="/update/{{ $mv -> id }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="title" class="form-control" value="{{ $mv -> title }}" required>
                </div>
                <div class="form-group">
                    <label>Genre</label>
                    <select name="genre" class="form-control">
                        <option value="0">--Pilih Genre--</option>
                        <option value="Action"{{ ($mv -> genre == "Action") ? "selected":""}}>Action</option>
                        <option value="Horror"{{ ($mv -> genre == "Horror") ? "selected":""}}>Horror</option>
                        <option value="Thriller"{{ ($mv -> genre == "Thiller") ? "selected":""}}>Thriller</option>
                        <option value="Comedy"{{ ($mv -> genre == "Comedy") ? "selected":""}}>Comedy</option>
                        <option value="Crime"{{ ($mv -> genre == "Crime") ? "selected":""}}>Crime</option>
                        <option value="Romance"{{ ($mv -> genre == "Romance") ? "selected":""}}>Romance</option>
                        <option value="Anime"{{ ($mv -> genre == "Anime") ? "selected":""}}>Anime</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Year</label>
                    <input type="number" min="1900" max="2100" name="year" value="{{ $mv -> year }}" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Poster</label>
                    <input type="file" accept="image/*" name="poster" class="form-control-file" required>
                </div>
                <div class="form-group">
                    <img src="{{ asset('/storage/'.$mv->poster )}}" alt="{{ $mv->poster }}" height="100" width="125">
                </div>
                <div class="form-group text-right">
                    <button type="submit" class="btn btn-primary"><i class="bi bi-floppy"></i></i></button>
                </div>
            </form>
        </div>
    </div>
@endsection