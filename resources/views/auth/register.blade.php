@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('User Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">

                        @csrf
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="name" class="form-control-label">Image (passport size, max-100 kb)</label>
                                        <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('imgae') }}" required autocomplete="image" autofocus>
        
                                        @error('image')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>   
                            </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="name" class="form-control-label">Student's Name <span class="text-danger">*</span></label>
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
    
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>   
                        </div>


                        {{-- <div class="col-6">
                            <div class="form-group">
                                <label for="email" class="form-control-level">{{ __('E-Mail Address') }}</label>

                                
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                        </div> --}}


                        <div class="col-6">
                            <div class="form-group">
                                <label for="fathername" class="form-control-level">Father's Name <span class="text-danger">*</span></label>

                                
                                    <input id="fathername" type="text" class="form-control @error('fathername') is-invalid @enderror" name="fathername" value="{{ old('fathername') }}" required autocomplete="name" autofocus>

                                    @error('fathername')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <label for="mothername" class="form-control-level">Mother's Name <span class="text-danger">*</span></label>
                                <input id="mothername" type="text" class="form-control @error('mothername') is-invalid @enderror" name="mothername" value="{{ old('mothername') }}" required autocomplete="mothername" autofocus>

                                    @error('mothername')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="presentaddress" class="form-control-level">{{ __('Present Address') }}</label>
                                <input id="presentaddress" type="text" class="form-control @error('presentaddress') is-invalid @enderror" name="presentaddress" value="{{ old('presentaddress') }}" required autocomplete="presentaddress" autofocus>

                                    @error('presentaddress')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="permanentaddress" class="form-control-level">{{ __('Permanent Address') }}</label>

                                
                                    <input id="permanentaddress" type="text" class="form-control @error('permanentaddress') is-invalid @enderror" placeholder="same" name="permanentaddress" value="{{ old('permanentaddress') }}" autocomplete="permanentaddress" autofocus>

                                    @error('permanentaddress')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="mobile" class="form-control-level">{{ __('Mobile Number (Mother) ') }} <span class="text-danger">*</span></label>

                                
                                    <input id="mobile" type="text" class="form-control @error('mobile') is-invalid @enderror" name="mobile" value="{{ old('mobile') }}" required autocomplete="mobile" autofocus>

                                    @error('mobile')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                        </div>
                        {{-- <div class="col-6">
                            <div class="form-group">
                                <label for="parentmobileno" class="form-control-level">{{ __('Parent mobile No(Father)') }}</label>

                                
                                    <input id="parentmobileno" type="text" class="form-control @error('parentmobileno') is-invalid @enderror" name="parentmobileno" value="{{ old('parentmobileno') }}" required autocomplete="parentmobileno" autofocus>

                                    @error('parentmobileno')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                        </div> --}}
                    <div class="col-6">
                        <div class="form-group">
                            <label for="presentschoolname" class="form-control-level">{{ __('School') }}</label>
                                <input id="presentschoolname" type="text" class="form-control @error('presentschoolname') is-invalid @enderror" name="presentschoolname" value="{{ old('presentschoolname') }}" required autocomplete="presentschoolname" autofocus>

                                @error('presentschoolname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="classname" class="form-control-level">{{ __('Class') }} <span class="text-danger">*</span></label>

                                <Select name="classname" class="form-control">
                                    <option value="Three">Three</option>
                                    <option value="Four">Four</option>
                                    <option value="Five">Five</option>
                                    <option value="Six">Six</option>
                                    <option value="Seven">Seven</option>
                                    <option value="Eight">Eight</option>
                                    <option value="Nine">Nine</option>
                                    <option value="Ten">Ten</option>
                        
                                </Select>
                                    @error('classname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="roll" class="form-control-level">{{ __('School Roll') }} <span class="text-danger">*</span></label>

                                
                                    <input id="roll" type="number" class="form-control @error('roll') is-invalid @enderror" name="roll" value="{{ old('roll') }}" required autocomplete="roll" autofocus>

                                    @error('roll')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="examlanguage" class="form-control-level">{{ __('Exam Language') }} <span class="text-danger">*</span></label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="examlanguage" id="exampleRadios1" value="Bangla Version" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                      Bangla Version
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="examlanguage" id="exampleRadios2" value="Bangla Version">
                                    <label class="form-check-label" for="exampleRadios2">
                                      English Version
                                    </label>
                                  </div>
                        

                                    @error('examlanguage')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                        </div>

                        <div class="form-group mb-0">
                            <div class="col-xd-6 offset-md-4 float-right">
                                <button type="submit" class="btn btn-success text-right">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
