@extends('haalathu.layouts.app')

@section('content')
<div class="container">

    <div class="row regform">
        <div class="col-3"></div>
        <div class="col">
            <form method="POST" action="/haalathu/house/{{ $house->id }}" enctype="multipart/form-data">
                @csrf
                @method ('PATCH')
                <fieldset>
                    <legend class="formhead">
                        <strong>
                            ގޭގެ މަޢުލޫމާތު
                        </strong>
                    </legend>

                    <div class="row">
                        <input type="hidden" name="house_id" value="{{ $house->id }}">
                    </div>
                    <div class="row">
                        <label for="house_name" class="col-4">{{ __('ގޭގެ ނަން:') }}</label>
                        <div class="col">
                            <input id="house_name" type="text" class="form-control @error('house_name') is-invalid @enderror" name="house_name" value="{{ old('house_name') ?? $house->name }}" autocomplete="house_name" autofocus>
                            @error('house_name')
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
                                    <input id="atoll" type="text" class="form-control @error('atoll') is-invalid @enderror" name="atoll" value="{{ old('atoll') ?? $house->atoll }}" autocomplete="atoll" autofocus>
                                    @error('atoll')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <label for="island" class="col-2" style="padding-right: 10px;">{{ __('ރަށް:') }}</label>
                                <div class="col">
                                    <input id="island" type="text" class="form-control @error('island') is-invalid @enderror" name="island" value="{{ old('island') ?? $house->island }}" autocomplete="island" autofocus>
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
                        <label for="owner_nid" class="col-4">{{ __('ގޭގެ ވެރިމީހާގެ އައިޑީ ނަންބަރު:') }}</label>
                        <div class="col">
                            <input id="owner_nid" type="text" class="form-control @error('owner_nid') is-invalid @enderror" name="owner_nid" value="{{ old('owner_nid') ?? $house->owner->person->nid }}" autocomplete="owner_nid" autofocus>

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