@extends('layouts.app')

@section('content')

     <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Edit student detail</div>
                    <div class="card-body">
                         <div class="panel panel-default">

       
                <a href="{{ route('atts_3ms.atts_3ms.index') }}" class="btn btn-primary" title="Show All Atts 3Ms">
                    <span class="glyphicon glyphicon-th-list" aria-hidden="true">Back</span>
                </a>

             

            </div>
        </div>

        <div class="panel-body">

            @if ($errors->any())
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            <form method="POST" action="{{ route('atts_3ms.atts_3ms.update', $atts3ms->id) }}" id="edit_atts_3ms_form" name="edit_atts_3ms_form" accept-charset="UTF-8" class="form-horizontal">
            {{ csrf_field() }}
            <input name="_method" type="hidden" value="PUT">
            @include ('atts_3ms.form', [
                                        'atts3ms' => $atts3ms,
                                      ])

                <div class="form-group">
                    <div class="col-md-offset-2 col-md-10">
                        <input class="btn btn-primary" type="submit" value="Update">
                    </div>
                </div>
            </form>

        </div>
    </div>

@endsection