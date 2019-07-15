@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register New User') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ url('userPermission') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                    

                        <div class="form-group row">
                            <label for="RegistrationNo" class="col-md-4 col-form-label text-md-right">{{ __('username') }}</label>

                            <div class="col-md-6">
                                <input id="RegistrationNo" type="text" class="form-control{{ $errors->has('RegistrationNo') ? ' is-invalid' : '' }}" pattern="^([0-9]{4}/[A-Za-z]{3}/[0-9]{3})?([0-9]{4}/[A-Za-z]{2}/[0-9]{3})?$"  title="Enter Your Registration No  Eg: 2011/XX/000 or 2011/XXX/000" name="RegistrationNo" value="{{ old('RegistrationNo') }}" required autofocus>

                                @if ($errors->has('RegistrationNo'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('RegistrationNo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="UserType" class="col-md-4 col-form-label text-md-right">{{ __('UserType') }}</label>

                            <div class="col-md-6">
                                <select id="UserType" class="form-control{{ $errors->has('UserType') ? ' is-invalid' : '' }}" name="UserType" value="{{ old('UserType') }}" required autofocus>
                                    <option value="lecturer">Lecturer</option>
                                    <option value="student">Student</option> 
                                    <option value="head_of_the_department">Head of The Department</option> 
                                    <option value="admin">Admin</option>    
                                </select>
                                @if ($errors->has('UserType'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('UserType') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"  title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
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
