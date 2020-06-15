@extends('haalathu.layouts.app')

@section('content')
<div class="container">

    <div class="row regform">
        <div class="col-3"></div>
        <div class="col">
            <form method="POST" action="/haalathu/person" enctype="multipart/form-data">
                @csrf
                <fieldset>
                    <legend class="formhead">
                        <strong>
                            މަޢުލޫމާތު
                        </strong>
                    </legend>

                    <div class="row">
                        <label for="nid" class="col-4">{{ __('އައިޑީ ނަންބަރު:') }}</label>
                        <div class="col">
                            <input dir="ltr" id="nid" type="text" class="form-control @error('nid') is-invalid @enderror" name="nid" value="{{ old('nid') }}" autocomplete="nid" autofocus>

                            @error('nid')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <label for="name" class="col-4">{{ __('ނަން:') }}</label>
                        <div class="col">
                            <input id="name" lang="dv" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <label for="dob" class="col-4">{{ __('އުފަން ތާރީޚު:') }}</label>
                        <div class="col">
                            <input id="dob" type="date" class="form-control @error('dob') is-invalid @enderror" name="dob" value="{{ old('dob') }}" autocomplete="dob" autofocus>
                            @error('dob')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <label for="address" class="col-4">{{ __('ދާއިމީ އެޑްރެސް:') }}</label>
                        <div class="col">
                            <div class="row">
                                <label for="house" class="col-4">{{ __('ގޭގެ ނަން:') }}</label>
                                <div class="col">
                                    <input id="house" type="text" class="form-control @error('house') is-invalid @enderror" name="house" value="{{ old('house') }}" autocomplete="house" autofocus>
                                    @error('house')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
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
                        <label for="contact" class="col-4">{{ __('ގުޅޭނެ ނަންބަރު:') }}</label>
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
                        <label for="gender" class="col-4">{{ __('ޖިންސު:') }}</label>
                        <div class="col">
                            <div class="row">
                                <label for="male">ފިރިހެން</label>
                                <input type="radio" id="male" name="gender" value="0">
                                <label for="female" style="padding-right: 1vh">އަންހެން</label>
                                <input type="radio" id="female" name="gender" value="1">
                            </div>
                            @error('gender')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <label for="med" class="col-4">{{ __('ދާއިމީގޮތެއްގައި ބޭސްކާ ބަލިމީހެއް:') }}</label>
                        <div class="col">
                            <input type="checkbox" id="med" name="med" value="1">
                        </div>
                    </div>
                    <div class="row">
                        <label for="preg" class="col-4">{{ __('މާބަނޑުމީހެއް:') }}</label>
                        <div class="col">
                            <input type="checkbox" id="preg" name="preg" value="1">
                        </div>
                    </div>
                    <div class="row">
                        <label for="sp_care" class="col-4">{{ __('ޚާއްޞަ އެހީއަށް ބޭނުންވާ މީހެއް:') }}</label>
                        <div class="col">
                            <input type="checkbox" id="sp_care" name="sp_care" value="1">
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