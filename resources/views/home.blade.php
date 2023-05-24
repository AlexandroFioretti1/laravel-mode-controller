@extends("layouts.app")

@section("content")
<div class="container pt-2 ">
    <div class="row g-3">
        @foreach($movies as $movie)
        <div class="col-4 ">
            <div class="card h-100">
                <div class="card-header">
                    <h1>{{ $movie -> title }}</h1>
                </div>
                <div class="card-body">
                    <h5>{{ $movie -> original_title }}</h5>
                    <span class="d-block">{{ $movie -> nationality }}</span>
                    <span class="d-block">{{ $movie -> date }}</span>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection