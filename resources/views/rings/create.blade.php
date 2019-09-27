@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2 class="mb-3">Create New Ring</h2>

                    {!! Form::model($ring, ['route' => 'rings.store','onsubmit'=> 'return false']) !!}
    
                    <div class="form-group">
                    {!! Form::label('ring_name', 'Ring Name') !!}
                    {!! Form::text('ring_name', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="mt-3">
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#confirm-ring-create">
                            Create New Ring
                        </button>
                    </div>
    
                    <div class="modal fade" id="confirm-ring-create">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                        <h4 class="modal-title" id="modal-label">Confirm：Create New Ring ? </h4>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary w-25" data-dismiss="modal">Cancel</button>
                                    {!! Form::button('OK', ['class' => 'btn btn-success w-25', 'onclick' => 'submit()', 'roll' => 'button']) !!}
                                </div>
                            </div>
                        </div>
                    </div>

                    {!! Form::close() !!}
                    
            </div>
        </div>
    </div>
@endsection