@extends('haalathu.layouts.app')

@section('content')
<div class="container">

    <div class="row regform">
        <div class="col" style="padding-right: 20px; padding-left: 20px;">
            <form method="POST" action="/haalathu/person/{{$person->nid}}" enctype="multipart/form-data">
                @csrf
                @method ('PATCH')
                <fieldset>
                    <legend class="formhead">
                        <strong>
                            މަޢުލޫމާތު
                        </strong>

                    </legend>
                    <div class="row">
                        <div class="col">

                            <div class="row">
                                <label for="nid" class="col-4">{{ __('އައިޑީ ނަންބަރު:') }}</label>
                                <div class="col">
                                    <input id="nid" type="text" class="form-control @error('nid') is-invalid @enderror" name="nid" value="{{ old('nid') ?? $person->nid }}" autocomplete="nid" autofocus>

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
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') ?? $person->name }}" autocomplete="name" autofocus>
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
                                    <input id="dob" type="date" class="form-control @error('dob') is-invalid @enderror" name="dob" value="{{ old('dob') ?? $person->dob }}" autocomplete="dob" autofocus>
                                    @error('dob')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <label for="contact" class="col-4">{{ __('ގުޅޭނެ ނަންބަރު:') }}</label>
                                <div class="col">
                                    <input id="contact" type="text" class="form-control @error('contact') is-invalid @enderror" name="contact" value="{{ old('contact') ?? $person->contact}}" autocomplete="contact" autofocus>
                                    @error('contact')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row">
                                <label for="gender" class="col">{{ __('ޖިންސު:') }}</label>
                                <div class="col-8">
                                    <div class="row">
                                        <div class="col">
                                            <div class="row">
                                                <label for="male">ފިރިހެން</label>
                                                <input type="radio" id="male" name="gender" value="0">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="row">
                                                <label for="female" style="padding-right: 1vh">އަންހެން</label>
                                                <input type="radio" id="female" name="gender" value="1">
                                            </div>
                                        </div>
                                    </div>
                                    @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <label for="med" class="col">{{ __('ދާއިމީގޮތެއްގައި ބޭސްކާ ބަލިމީހެއް:') }}</label>
                                <div class="col-8">
                                    <div class="row">
                                        <div class="col">
                                            <div class="row">
                                                <label for="no">ނޫން</label><input type="radio" id="no" name="med" value="0">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="row">
                                                <label for="yes" style="padding-right: 1vh">އާދެ</label> <input type="radio" id="yes" name="med" value="1">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @if($person->gender)
                            <div class="row">
                                <label for="preg" class="col">{{ __('މާބަނޑުމީހެއް:') }}</label>
                                <div class="col-8">
                                    <div class="row">
                                        <div class="col">
                                            <div class="row">

                                                <label for="no">ނޫން</label>
                                                <input type="radio" id="no" name="preg" value="0">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="row">

                                                <label for="yes" style="padding-right: 1vh">އާދެ</label>
                                                <input type="radio" id="yes" name="preg" value="1">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @else

                            @endif
                            <div class="row">
                                <label for="sp_care" class="col">{{ __('ޚާއްޞަ އެހީއަށް ބޭނުންވާ މީހެއް:') }}</label>
                                <div class="col-8">
                                    <div class="row">
                                        <div class="col">
                                            <div class="row">
                                                <label for="no">ނޫން</label>
                                                <input type="radio" id="no" name="sp_care" value="0">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="row">
                                                <label for="yes" style="padding-right: 1vh">އާދެ</label>
                                                <input type="radio" id="yes" name="sp_care" value="1">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

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
    </div>
</div>
@endsection