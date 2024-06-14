@extends('layouts.main')
@section('title',"Movies")
@section('artikel')
    {{-- CARD --}}
    <div class="card">
        <div class="card-header">
            <a href="/movies/form-add" class="btn btn-primary"><i class="bi bi-plus"></i></a>
        </div>
        <div class="card-body">
            @if (@session('alert'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>{{ session('alert') }}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <table id="example" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Title</th>
                        <th>Genre</th>
                        <th>Year</th>
                        <th>Poster</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($mv as $idx => $m)
                        <tr>
                            <td>{{ $idx+1 }}</td>
                            <td>{{ $m ->title }}</td>
                            <td>{{ $m ->genre }}</td>
                            <td>{{ $m ->year }}</td>
                            <td>
                                <img src="{{ asset('/storage/'.$m->poster )}}" alt="{{ $m->poster }}" height="100" width="125">
                            </td>
                            <td>
                                <a href="/form-edit/{{$m -> id}}" class="btn btn-success"><i class="bi bi-pencil-fill"></i></a>
                                <a href="/delete/{{$m -> id}}" class="btn btn-danger"><i class="bi bi-trash-fill"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>  
@endsection