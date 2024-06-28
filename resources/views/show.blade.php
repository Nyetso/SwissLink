@extends('layout')

@section('content')
<head>
    <meta http-equiv="refresh" content="120">
</head>
<body>
    <div class="container-fluid px-5">
        <div class="row align-items-center background text-center">
            <h2 class="col">NewsLetter</h2>
        </div>
        <br><br><br>
        @foreach($news as $news)
        <div class="container-fluid px-5 align-items-center">
            <div class="row align-items-center">
                <div class="col-sm-4 background text-center">
                    <img src="{{$news->image}}" alt="Image Error" width="300px" height="300px">
                </div>
                <div class="col-sm-4 background text-center">
                    <h1>{{$news->title}}</h1>
                    {{-- <div>{{$news->created_at}}</div> --}}
                    <div>{{$news->body}}</div>
                </div>
            </div>
            <br><br><br>
        </div>
        @endforeach
        <div>
          <a href="/">Back to Home</a>
        </div>
    </div>
</body>


@endsection
