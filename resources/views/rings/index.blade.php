@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="mb-3">Index Ring</h2>

            @if(count($rings) > 0)
            <table class="table table-hover position-relative">
                <thead>
                    <tr>
                        <th>Ring Name</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($rings as $ring)
                    <tr>
                        <td class="align-middle" data-toggle="modal" data-target="#ring{{$ring->id}}">
                        {{ $ring->ring_name }}
                        </td>
                    </tr>

                    @component('components.editRing', ['ring' => $ring])
                    @endcomponent
                    @endforeach

                </tbody>
            </table>
            @endif

            <div class="mt-5">
                @if($customer_id === "" && $num_rings > 4)
                    <button type="button" class="btn btn-danger btn-block" data-toggle="modal" data-target="#limit-ring-create">
                        Rings Too Many！！
                    </button>
                    <p class="mt-3" align="right">
                        {!! link_to_route('subscription', 'Click here & Please think about Paid Plan！') !!}
                    </p>
                    <div class="modal fade" id="limit-ring-create">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="modal-label">Sorry：Rings has reached the limit </h4>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary w-25" data-dismiss="modal">OK</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <!-- link_to_route でボタン作成 -->
                    {!! link_to_route('rings.create', 'Create New Ring', null, ['class' => 'btn btn-primary btn-block', 'role' => 'button']) !!}
                @endif
            </div>

        </div>
    </div>
</div>
@endsection