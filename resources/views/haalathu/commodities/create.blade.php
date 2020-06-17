@extends('haalathu.layouts.app')

@section('content')
<div class="container">

    <div class="row regform">
        <div class="col-3"></div>
        <div class="col">
            <form method="POST" action="/haalathu/commodity" enctype="multipart/form-data">
                <style>
                    .fst-col,
                    .scn-col {
                        padding-left: 5px;
                    }
                </style>
                @csrf
                <fieldset>
                    <legend class="formhead">
                        <strong>
                            މުދަލުގެ މަޢުލޫމާތު
                        </strong>
                    </legend>


                    <div class="row">
                        <label for="name" class="col-4">{{ __('ނަން') }}</label>
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
                        <label for="img_url" class="col-4">{{ __('ތަސްވީރު') }}</label>
                        <div class="col">
                            <input dir="ltr" id="img_url" type="text" class="form-control @error('img_url') is-invalid @enderror" name="img_url" value="{{ old('img_url') }}" autocomplete="img_url" autofocus>
                            @error('img_url')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>



                    <!-- <div class="row">
                        <label for="size" class="col-4">{{ __('މިންވަރު') }}</label>
                        <div class="col">
                            <input id="size" type="text" class="form-control @error('size') is-invalid @enderror" name="size" value="{{ old('size') }}" autocomplete="size" autofocus>
                            @error('size')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div> -->

                    <div class="row">
                        <label for="unit" class="col-4">{{ __('ވަޒަން:') }}</label>
                        <div class="col">
                            <select name="unit" id="unit" autofocus>
                                <!-- <option value="ކިލޯ">
                                    {{ __('ކިލޯ') }}</option> -->
                                <option value="ގުރާމު">
                                    {{ __('ގުރާމު') }} </option>
                                <!-- <option value="ލީޓަރު">
                                    {{ __('ލީޓަރު') }} </option> -->
                                <option value="މިލިލީޓަރު">
                                    {{ __('މިލިލީޓަރު') }} </option>
                            </select>
                            @error('unit')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <!-- <div class="row">
                        <label for="weight" class="col-4">{{ __('ވައްތަރު:') }}</label>
                        <div class="col">
                            <select name="weight" id="weight" autofocus>
                                    <option value="ވަކިވަކިން">
                                        {{ __('ވަކިވަކިން') }} </option>
                                    <option value="ކޭސް">
                                        {{ __('ކޭސް') }}</option>
                                    <option value="ފުޅި">
                                        {{ __('ފުޅި') }} </option>
                                    <option value="ދަޅު">
                                        {{ __('ދަޅު') }} </option>
                                    <option value="ބަސްތާ">
                                        {{ __('ބަސްތާ') }} </option>
                            </select>
                            @error('unit')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div> -->

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