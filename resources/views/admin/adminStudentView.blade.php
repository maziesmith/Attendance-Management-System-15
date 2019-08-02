@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Individual Student Attendance') }}</div>

                <div class="card-body">


                @if(Session::has('error_message'))
                    <div class="alert alert-warning">
                        <span class="glyphicon glyphicon-ok"></span>
                        {!! session('error_message') !!}

                        <button type="button" class="close" data-dismiss="alert" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>

                    </div>
                @endif
                    <form method="POST" action="/STAdminView">
                        @csrf

                        <div class="form-group row">
                            <label for="RegistrationNo" class="col-md-4 col-form-label text-md-right">{{ __('RegistrationNo') }}</label>

                            <div class="col-md-6">
                                <input id="RegistrationNo" type="text" class="form-control{{ $errors->has('RegistrationNo') ? ' is-invalid' : '' }}" pattern="^([0-9]{4}/[A-Za-z]{3}/[0-9]{3})?([0-9]{4}/[A-Za-z]{2}/[0-9]{3})?([0-9]{4}/[A-Za-z]{3}/[A-Za-z]{2}/[0-9]{3})?$"  title="Enter Your Registration No  Eg: 2011/XX/000 or 2011/XXX/000 or 2011/XXX/XX/000"name="RegistrationNo" value="{{ old('RegistrationNo') }}" required autofocus>

                                @if ($errors->has('RegistrationNo'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('RegistrationNo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                       

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                  View Attendance
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
