@extends('haalathu.layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3"></div>
        <div class="col">
            <fieldset>
                <legend>
                    <strong>
                        މީހުންގެ މަޢުލޫމާތު
                    </strong>
                </legend>
                <div class="row">
                    <label for="nid" class="col-4">{{ __('އައިޑީ ނަންބަރު:') }}</label>
                    <div class="col">{{$person->nid}}</div>
                </div>
                <div class="row">
                    <label for="name" class="col-4">{{ __('ނަން:') }}</label>
                    <div class="col">{{$person->name}}</div>
                </div>
                <div class="row">
                    <label for="dob" class="col-4">{{ __('އުފަން ތާރީޚު:') }}</label>
                    <div class="col">{{$person->dob}}</div>
                </div>
                <div class="row">
                    <label for="contact" class="col-4">{{ __('ގުޅޭނެ ނަންބަރު:') }}</label>
                    <div class="col">{{$person->contact}}</div>
                </div>
                <div class="row">
                    <label for="gender" class="col-4">{{ __('ޖިންސު:') }}</label>
                    <div class="col">{{$person->gender}}</div>
                </div>
                <a href="/haalathu/person/{{$person->nid}}/edit">އިސްލާހު ކުރުމަށް</a>

            </fieldset>
        </div>
        <div class="col-3"></div>
    </div>

</div>
@endsection