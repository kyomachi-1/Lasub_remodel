@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
            <div class="mt-3">
                <a class="btn btn-primary btn-block" href="{{ route('rings.index') }}" role="button">Card study</a>
            </div>
            <div class="mt-3">
                <a class="btn btn-success btn-block disabled" href="{{ route('rings.index') }}" role="button" >Note study</a>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
