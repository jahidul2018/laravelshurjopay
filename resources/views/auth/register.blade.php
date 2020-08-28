@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('User Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="fathername" class="col-md-4 col-form-label text-md-right">{{ __('Father Name') }}</label>

                            <div class="col-md-6">
                                <input id="fathername" type="text" class="form-control @error('fathername') is-invalid @enderror" name="fathername" value="{{ old('fathername') }}" required autocomplete="name" autofocus>

                                @error('fathername')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="mothername" class="col-md-4 col-form-label text-md-right">{{ __('Mother Name') }}</label>

                            <div class="col-md-6">
                                <input id="mothername" type="text" class="form-control @error('mothername') is-invalid @enderror" name="mothername" value="{{ old('mothername') }}" required autocomplete="mothername" autofocus>

                                @error('mothername')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="presentaddress" class="col-md-4 col-form-label text-md-right">{{ __('Present Address') }}</label>

                            <div class="col-md-6">
                                <input id="presentaddress" type="text" class="form-control @error('presentaddress') is-invalid @enderror" name="presentaddress" value="{{ old('presentaddress') }}" required autocomplete="presentaddress" autofocus>

                                @error('presentaddress')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="permanentaddress" class="col-md-4 col-form-label text-md-right">{{ __('Permanent Address') }}</label>

                            <div class="col-md-6">
                                <input id="permanentaddress" type="text" class="form-control @error('permanentaddress') is-invalid @enderror" name="permanentaddress" value="{{ old('permanentaddress') }}" required autocomplete="permanentaddress" autofocus>

                                @error('permanentaddress')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="mobile" class="col-md-4 col-form-label text-md-right">{{ __('Mobile(Mother) ') }}</label>

                            <div class="col-md-6">
                                <input id="mobile" type="text" class="form-control @error('mobile') is-invalid @enderror" name="mobile" value="{{ old('mobile') }}" required autocomplete="mobile" autofocus>

                                @error('mobile')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="parentmobileno" class="col-md-4 col-form-label text-md-right">{{ __('Parent mobile No(Father)') }}</label>

                            <div class="col-md-6">
                                <input id="parentmobileno" type="text" class="form-control @error('parentmobileno') is-invalid @enderror" name="parentmobileno" value="{{ old('parentmobileno') }}" required autocomplete="parentmobileno" autofocus>

                                @error('parentmobileno')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="presentschoolname" class="col-md-4 col-form-label text-md-right">{{ __('Present School Name') }}</label>

                            <div class="col-md-6">
                                <input id="presentschoolname" type="text" class="form-control @error('presentschoolname') is-invalid @enderror" name="presentschoolname" value="{{ old('presentschoolname') }}" required autocomplete="presentschoolname" autofocus>

                                @error('presentschoolname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="classname" class="col-md-4 col-form-label text-md-right">{{ __('Class Name') }}</label>

                            <div class="col-md-6">
                                <input id="classname" type="text" class="form-control @error('classname') is-invalid @enderror" name="classname" value="{{ old('classname') }}" required autocomplete="classname" autofocus>

                                @error('classname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="roll" class="col-md-4 col-form-label text-md-right">{{ __('Roll') }}</label>

                            <div class="col-md-6">
                                <input id="roll" type="number" class="form-control @error('roll') is-invalid @enderror" name="roll" value="{{ old('roll') }}" required autocomplete="roll" autofocus>

                                @error('roll')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="examlanguage" class="col-md-4 col-form-label text-md-right">{{ __('Exam Language') }}</label>

                            <div class="col-md-6">
                                <input id="examlanguage" type="text" class="form-control @error('examlanguage') is-invalid @enderror" name="examlanguage" value="{{ old('examlanguage') }}" required autocomplete="examlanguage" autofocus>

                                @error('examlanguage')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>








                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
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
