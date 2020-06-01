@extends('haalathu.layouts.app')

@section('content')
<div class="container">

    <div class="row regform">
        <div class="col-3"></div>
        <div class="col">
            <form method="POST" action="/haalathu/shop" enctype="multipart/form-data">
                @csrf
                <fieldset>
                    <legend class="formhead">
                        <strong>
                            ވިޔަފާރިގޭގެ މަޢުލޫމާތު
                        </strong>
                    </legend>


                    <div class="row">
                        <label for="name" class="col-4">{{ __('ވިޔަފާރިގޭގެ ނަން') }}</label>
                        <div class="col">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <label for="atoll_island" class="col-4">{{ __('އަތޮޅާއި ރަށް:') }}</label>
                        <div class="col">
                            <div class="row">
                                <label for="atoll" class="col-2">{{ __('އަތޮޅު:') }}</label>
                                <div class="col-3">
                                    <input id="atoll" type="text" class="form-control @error('atoll') is-invalid @enderror" name="atoll" value="{{ old('atoll') }}" autocomplete="atoll" autofocus>
                                    @error('atoll')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <label for="island" class="col-2" style="padding-right: 10px;">{{ __('ރަށް:') }}</label>
                                <div class="col">
                                    <input id="island" type="text" class="form-control @error('island') is-invalid @enderror" name="island" value="{{ old('island') }}" autocomplete="island" autofocus>
                                    @error('island')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <label for="contact" class="col-4">{{ __('ގުޅޭނެ ނަންބަރު') }}</label>
                        <div class="col">
                            <input id="contact" type="text" class="form-control @error('contact') is-invalid @enderror" name="contact" value="{{ old('contact') }}" autocomplete="contact" autofocus>
                            @error('contact')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <label for="person_nid" class="col-4">{{ __('ވެރިފަރާތުގެ އައިޑީ ނަންބަރު:') }}</label>
                        <div class="col">
                            <input id="person_nid" type="text" class="form-control @error('person_nid') is-invalid @enderror" name="person_nid" value="{{ old('person_nid') }}" autocomplete="person_nid" autofocus>

                            @error('person_nid')
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
                        <div class="col"></div>
                    </div>
                </fieldset>
            </form>
        </div>
        <div class="col-3"></div>
    </div>
</div>
@endsection