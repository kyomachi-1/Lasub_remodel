@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2 class="mb-3">Edit Ring ： {{ $ring->ring_name }} </h2>

                    {!! Form::model($ring, ['route' => ['rings.update', $ring->id], 'method' => 'put']) !!}

                    <div class="form-group">
                    {!! Form::label('ring_name', 'NEW Ring Name') !!}
                    {!! Form::text('ring_name', null, ['class' => 'form-control']) !!}
                    </div>
                    
                    <div class="mt-3">
                    {!! Form::submit('Update Ring', ['class' => 'btn btn-warning w-25', 'roll' => 'button']) !!}
                    </div>
                    
                    {!! Form::close() !!}
                    
                    <div class="mt-3">
                        <a class="btn btn-secondary w-25" href="{{ route('rings.index') }}" role="button">Back to Index Ring</a>
                    </div>

            </div>
        </div>
    </div>

@endsection