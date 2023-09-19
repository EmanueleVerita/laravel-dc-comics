@extends('layouts.main')

@section('page-title', $comic->title)



@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-12 bg-light">
           <h1>
            {{ $comic->title }}
           </h1>
        </div>

        <div class="card col-6 bg-light">
            <div class="img-box">
                <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}">
            </div>
        </div>

        <div class="card col-6 bg-light">
            <div class="card-body">
                <h5 class="card-title">
                    {{ $comic->title }}
                </h5>
                <span class="card-text">
                    Description:
                    {{ $comic->description }}
                </span>
                <br>
                <span>
                    Series:
                    {{ $comic->series }}
                </span>
                <br>
                <span>
                    Artists:
                    {{ $comic->artists }}
                </span>
                <br>
                <span>
                    Writers:
                    {{ $comic->writers }}
                </span>
            </div>
        </div>
    </div>
</div>
@endsection