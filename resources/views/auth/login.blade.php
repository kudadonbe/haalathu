@extends('haalathu.layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3"></div>
        <div class="col">
            <div class="card-body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <fieldset>
                        <legend>ވެދެވަޑައިގަންނަވާ</legend>
                        <div class="row">
                            <label for="username" class="col-4">{{ __('ޔޫސާރ އައިޑީ:') }}</label>
                            <div class="col">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="username" value="{{ old('username') }}" autocomplete="username" autofocus>

                                @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <label for="password" class="col-4">{{ __('ޕާސްވޯޑު:') }}</label>

                            <div class="col">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row rwbsline">
                            <div class="col-4">
                                <div class="row rwbsline">
                                    <label class="" for="remember">
                                        {{ __('އަހުރެންގެ މަޢުލޫމާތު ރައްކާކުރައްވާ') }}
                                    </label>
                                    <input class="" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                </div>
                            </div>
                            <div class="col">
                                <div class="row rwbsline">
                                    <div class="col">
                                        <button type="submit" class="">
                                            {{ __('ވެދެވަޑައިގަންނަވާ') }}
                                        </button>
                                    </div>
                                    <div class="col-4 links" style="text-align: center;">

                                        @if (Route::has('password.request'))
                                        <a class="" href="{{ route('password.request') }}">
                                            {{ __('ޕާސްވޯޑު ހަނދާންނެތިއްޖެ!') }}
                                        </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
        <div class="col-3"></div>
    </div>
</div>
@endsection