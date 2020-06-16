@extends('haalathu.layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <fieldset>
                <legend>
                    <strong>
                        މުދަލުގެ މަޢުލޫމާތު
                    </strong>
                </legend>

                <div class="row">
                    <label for="name" class="col-4">{{ __('ނަން:') }}</label>
                    <div class="col">{{$commodity->name}}</div>
                </div>
                <div class="row">
                    <label for="dob" class="col-4">{{ __('ވަޒަން:') }}</label>
                    <div class="col">{{$commodity->unit}}</div>
                </div>

                <a href="/haalathu/commodity/{{$commodity->name}}/edit">އިސްލާހު ކުރުމަށް</a>
                <a href="/haalathu/commodities">*</a>

            </fieldset>
        </div>
    </div>

</div>
@endsection