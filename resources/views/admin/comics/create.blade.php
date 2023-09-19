@extends('layouts.main')

@section('page-title', 'Crea Comic')



@section('main-content')
<div class="container">
    <div class="row">
        <div class="col bg-light">

            @if ($errors->any())
                <div class="alert alert-danger mb-4">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>

            @endif


            <form action="{{ route('comics.store') }}" method="POST">

                @csrf

                <div class="mb-3">
                    <label for="title" class="form-label">Title <span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}" id="title" name="title" placeholder="Write a Title..." required>
                    @error('title')
                        <div class="alert alert-danger my-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="thumb" class="form-label">Thumb <span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb" name="thumb" placeholder="Write a Thumble..." required>
                    @error('thumb')
                    <div class="alert alert-danger my-2">
                        {{ $message }}
                    </div>
                @enderror
                </div>

                <div class="mb-3">
                    <label for="type" class="form-label">Type <span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('type') is-invalid @enderror" value="{{ old('type') }}" id="type" name="type" placeholder="Write a Type..." required>
                    @error('type')
                    <div class="alert alert-danger my-2">
                        {{ $message }}
                    </div>
                @enderror
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Price <span class="text-danger">*</span></label>
                    <input type="number" class="form-control @error('price') is-invalid @enderror" value="{{ old('price') }}" id="price" name="price" placeholder="Write a Price..." required>
                    @error('price')
                    <div class="alert alert-danger my-2">
                        {{ $message }}
                    </div>
                @enderror
                </div>

                <div class="mb-3">
                    <label for="series" class="form-label">Series <span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('series') is-invalid @enderror" value="{{ old('serie') }}" id="series" name="series" placeholder="Write a Series..." required>
                    @error('series')
                    <div class="alert alert-danger my-2">
                        {{ $message }}
                    </div>
                @enderror
                </div>

                <div class="mb-3">
                    <label for="sale_date" class="form-label">Sale Date <span class="text-danger">*</span></label>
                    <input type="date" class="form-control @error('sale_date') is-invalid @enderror" value="{{ old('sale_date') }}" id="sale_date" name="sale_date" placeholder="Write Sale Date..." required>
                    @error('sale_date')
                    <div class="alert alert-danger my-2">
                        {{ $message }}
                    </div>
                @enderror
                </div>

                <div class="mb-3">
                    <label for="artists" class="form-label">Artists <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" value="{{ old('artists') }}" id="artists" name="artists" placeholder="Write Artists..." required>
                </div>

                <div class="mb-3">
                    <label for="writers" class="form-label">Writers <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" value="{{ old('writers') }}" id="writers" name="writers" placeholder="Write Writers..." required>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description <span class="text-danger">*</span></label>
                    <textarea name="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="3" required></textarea>
                    @error('description')
                    <div class="alert alert-danger my-2">
                        {{ $message }}
                    </div>
                @enderror
                </div>

                <div class="text-center">
                    
                    <button type="submit" class="btn btn-success w-25">
                        Add
                    </button>
                    
                </div>


            </form>
        </div>
    </div>
</div>
@endsection