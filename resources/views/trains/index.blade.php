@extends('layouts.app')

@section('page-title', 'Home')

@section('main-content')
<h1>
    tutti i treni
</h1>
<div class="row">
    @foreach ($trains as $train)
        <div class="col-12 col-sm-3">
            <div class="card">
                <div class="card-body">
                    <h3>
                        {{ $train->stazione_di_partenza }}
                    </h3>

                    <a href="{{ route('trains.show', ['id' => $train->id]) }}" class="btn btn-primary">
                        Vai al film
                    </a>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection