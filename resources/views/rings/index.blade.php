@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2 class="mb-3">Index Ring</h2>

                @if(count($rings) > 0)
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Ring Name</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                                @foreach ($rings as $ring)
                                    <tr>
                                        <!--<td class="align-middle">{{ $ring->ring_name }}</td>-->
                                        <td class="align-middle">{!! link_to_route('rings.edit',"$ring->ring_name", ['id' => $ring->id]) !!}</td>
                                        <td class="align-middle" align="right">
                                            {!! link_to_route('rings.edit', 'edit', ['id' => $ring->id], ['class' => 'btn btn-success', 'roll' => 'button']) !!}</td>
                                    </tr>
                                @endforeach

                        </tbody>
                    </table>
                @endif
                <div class="mt-3">
                    <a class="btn btn-primary btn-block" href="{{ route('rings.create') }}" role="button">Create New Ring</a>
                </div>
                
                <!-- link_to_route でボタン作成 -->
                <div class="mt-3">
                    {!! link_to_route('rings.create', 'Create New Ring', null, ['class' => 'btn btn-primary btn-block', 'roll' => 'button']) !!}
                </div>
            </div>
        </div>
    </div>
@endsection