@extends('layout.header')

@section('title')
    Add new movie
@endsection

@section('content')
    <div class="container">
                <div class="card bg-success">
                    <div class="card-body">
            <div class="col-md-6 m-auto my-3">
                                          
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form class="form" action="/movie/store" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Title</label>
                    <span class="text-danger">*</span>
                    <input type="text" name="title" class="form-control" value="{{old('title')}}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Genre</label>
                    <span class="text-danger">*</span>
                    <input type="text" name="genre" class="form-control" value="{{old('genre')}}">
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Release_year</label>
                    <span class="text-danger">*</span>
                    <input type="text" name="release_year" class="form-control" value="{{old('release_year')}}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Poster</label>
                    <span class="text-danger">*</span>
                    <input class="form-control" type="file" name="poster" value="{{old('release_year')}}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
                    </div>
                </div>
    </div>
@endsection
