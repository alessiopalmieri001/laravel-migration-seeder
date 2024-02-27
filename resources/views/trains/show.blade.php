@extends('layouts.app')

@section('page-title', 'treno')

@section('main-content')
<h1>
    un treno solo
</h1>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body text-center ">
                <h3>
                    {{ $train->azienda }}
                </h3>

                <p>
                    {{ $train->stazione_di_partenza }}
                </p>
                <p>
                    {{ $train->stazione_di_arrivo }}
                </p>
                <p>
                    {{ $train->orario_di_partenza }}
                </p>
                <p>
                    {{ $train->orario_di_arrivo }}
                </p>
                <p>
                    {{ $train->codice_treno}}
                </p>
                <p>
                    {{ $train->numero_carozze}}
                </p>
            </div>
        </div>
    </div>
</div>
@endsection