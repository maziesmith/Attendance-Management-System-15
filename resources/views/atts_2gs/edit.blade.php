@extends('layouts.app')

@section('content')

     <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Edit student detail</div>
                    <div class="card-body">
                         <div class="panel panel-default">

            <div class="btn-group btn-group-sm pull-right" role="group">

                <a href="{{ route('atts_2gs.atts_2gs.index') }}" class="btn btn-primary" title="Show All Atts 2Gs">
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

            <form method="POST" action="{{ route('atts_2gs.atts_2gs.update', $atts2gs->id) }}" id="edit_atts_2gs_form" name="edit_atts_2gs_form" accept-charset="UTF-8" class="form-horizontal">
            {{ csrf_field() }}
            <input name="_method" type="hidden" value="PUT">
            @include ('atts_2gs.form', [
                                        'atts2gs' => $atts2gs,
                                      ])

                <div class="form-group">
                    <div class="col-md-offset-2 col-md-10">
                        <input class="btn btn-primary" type="submit" value="Update">
                    </div>
                </div>
            </form>

        </div>
    </div>
 </div>
    </div>
@endsection