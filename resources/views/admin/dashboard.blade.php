
@extends('layouts.app')
@section('content')
    <div>
        <div class="justify-content-center py-5">
            <div>
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title"> <h1> Benvenuto: {{$restaurant->name}} </h1>{{ Auth::user()->business_name }}</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            {{-- box alert registrazione effettuata con successo --}}
                        <div class="alert alert-success" role="alert">
                            Salve {{ Auth::user()->name }}, il login è avvenuto con successo.
                        </div>
                        </p>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

