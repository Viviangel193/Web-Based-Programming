@extends('layouts.main')

@section('title', 'Edit User')

@section('artikel')
    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('user.update') }}" method="POST">
            @csrf
            <div class="form-group">
                <label>Name</label>
                <input type="text" value="{{ Auth::user()->name }}" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="new_password">New Password</label>
                <input type="password" name="new_password" id="new_password" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="new_password_confirmation">Confirm New Password</label>
                <input type="password" name="new_password_confirmation" id="new_password_confirmation" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Update Password</button>
        </form>
        @if (session('alert'))
            <div class="alert alert-success mt-3">
                {{ session('alert') }}
            </div>
        @endif
    </div>
@endsection
