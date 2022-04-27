@extends('layouts.app')

@section('template_title')
    {{ $character->name ?? 'Show Character' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Character</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('characters.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>First Name:</strong>
                            {{ $character->first_name }}
                        </div>
                        <div class="form-group">
                            <strong>Last Name:</strong>
                            {{ $character->last_name }}
                        </div>
                        <div class="form-group">
                            <strong>Gender:</strong>
                            {{ $character->Gender }}
                        </div>
                        <div class="form-group">
                            <strong>Age:</strong>
                            {{ $character->Age }}
                        </div>
                        <div class="form-group">
                            <strong>City:</strong>
                            {{ $character->city }}
                        </div>
                        <div class="form-group">
                            <strong>State:</strong>
                            {{ $character->State }}
                        </div>
                        <div class="form-group">
                            <strong>Country:</strong>
                            {{ $character->country }}
                        </div>
                        <div class="form-group">
                            <strong>Character:</strong>
                            {{ $character->character }}
                        </div>
                        <div class="form-group">
                            <strong>Comic:</strong>
                            {{ $character->comic }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
