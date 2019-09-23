@extends('layouts.app')

@section('content')

<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">Laravel Pay Subscription with Excel</h1>
        <p class="lead">Developed by PHP/Laravel/Vue.js/PAY.JP API</p>
    </div>
</div>
<div class="mt-3">
    <h4>Export user information</h4><hr>
    <a href="/users/export" class="btn btn-primary">Start export</a>
</div>
<div class="mt-5">
    <h4>Import user information</h4><hr>
    <div class="form-group">
        <form action="/users/import" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="mt-3">
                <input type="file" name="file">
            </div>
            <div class="mt-3">
                <button class="btn btn-success"type="submit">Start Import</button>
            </div>
        </form>
    </div>
</div>
<!--</div>-->
<!--<div class="mt-3">-->
<!--    <button class="btn btn-success"type="submit">Import</button>-->
<!--</div>-->
        

@endsection