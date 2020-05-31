@extends('layouts.app')

@section('content')
<div class="container">

    <div class="regform">
        <div class="col">
            <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                @csrf
                <fieldset>
                    <legend class="formhead">
                        <strong>
                            ރަޖިސްޓަރީ ފޯމު
                        </strong>
                    </legend>

                    <div class="row">
                        <div class="col">
                            <div class="row">
                                <label for="username" class="col-5">{{ __('ޔޫސާރ އައިޑީ:') }}</label>
                                <div class="col">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="username" value="{{ old('username') }}" autocomplete="username" autofocus>
                                    @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row">
                                <label for="nid" class="col-5">{{ __(' އައިޑީ ކާޑު ނަންބަރު:') }}</label>
                                <div class="col">
                                    <input id="nid" type="text" class="form-control @error('nid') is-invalid @enderror" name="nid" value="{{ old('nid') }}" autocomplete="nid" autofocus>

                                    @error('nid')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="row">
                                <label for="name" class="col-5">{{ __('ނަން:') }}</label>

                                <div class="col">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row">
                                <label for="email" class="col-5">{{ __('އީމެއިލް:') }}</label>

                                <div class="col">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col">
                            <div class="row">
                                <label for="password" class="col-5">{{ __('ޕާސްވޯޑު:') }}</label>

                                <div class="col">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row">
                                <label for="password-confirm" class="col-5">{{ __('ޕާސްވޯޑު (ކަށަވަރު ކުރުމަށް):') }}</label>

                                <div class="col">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label for="user_img" class="col-2">{{ __('ފޮޓޯ:') }}</label>

                        <div class="col">
                            <input id="user_img" type="file" class="" name="user_img">

                            @error('user_img')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-2">
                            <button type="submit" class="">
                                {{ __('ރަޖިސްޓަރީ ކުރައްވާ') }}
                            </button>
                        </div>
                    </div>
            </form>
            </fieldset>
        </div>
    </div>
</div>
@endsection