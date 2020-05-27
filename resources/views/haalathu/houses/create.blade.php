@extends('haalathu.layouts.app')

@section('content')
<div class="container">

    <div class="row regform">
        <div class="col-3"></div>
        <div class="col">
            <form method="POST" action="/haalathu/house" enctype="multipart/form-data">
                @csrf
                <fieldset>
                    <legend class="formhead">
                        <strong>
                            ގޭގެ މަޢުލޫމާތު
                        </strong>
                    </legend>


                    <div class="row">
                        <label for="house_name" class="col-4">{{ __('ގޭގެ ނަން') }}</label>
                        <div class="col">
                            <input id="house_name" type="text" class="form-control @error('house_name') is-invalid @enderror" name="house_name" value="{{ old('house_name') }}" autocomplete="house_name" autofocus>
                            @error('house_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <label for="owner_nid" class="col-4">{{ __('ގޭގެ ވެރިމީހާގެ އައިޑީ ނަންބަރު:') }}</label>
                        <div class="col">
                            <input id="owner_nid" type="text" class="form-control @error('owner_nid') is-invalid @enderror" name="owner_nid" value="{{ old('owner_nid') }}" autocomplete="owner_nid" autofocus>

                            @error('owner_nid')
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