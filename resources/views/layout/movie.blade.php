@extends('layout.header')
{{-- title here --}}
@section('title')
    laravel crud
@endsection

{{-- main section here --}}

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <table class="table mt-2 table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">Image</th>
                        <th scope="col">Title</th>
                        <th scope="col">Genre</th>
                        <th scope="col">Release_year</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>

                    @if ($movies)
                    <tbody>
                        @foreach ($movies as $movie)

                      <tr>
                        <td class="align-middle text-center"><img class="img-thumbnail" src="{{asset('uplodes/'.$movie->poster)}}" alt=""></td>
                        <td class="align-middle text-center">{{$movie->title}}</td>
                        <td class="align-middle text-center">{{$movie->genre}}</td>
                        <td class="align-middle text-center">{{$movie->release_year}}</td>
                        <td class="align-middle text-center">

                          <a href="/movie/show , {{$movie->id}}" class="btn btn-info btn-small">show</a>
                          <a href="/movie/edit , {{$movie->id}} " class="btn btn-primary btn-small">Edit</a>

                          <a href="/movie/destroy,{{$movie->id}}" class="btn btn-danger btn-small" type="submit">Delete</a>

                        </form>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                    @endif
                  </table>
               <div class="d-flex">
                   <div class="mx-auto">
                       {{-- {!! $movies->links() !!} --}}
                   </div>
               </div>
            </div>
        </div>
    </div>
@endsection
