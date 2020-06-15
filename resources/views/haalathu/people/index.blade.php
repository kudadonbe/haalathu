@extends('haalathu.layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <fieldset>
                <legend>
                    <strong>
                        މީހުންގެ ލިސްޓު
                    </strong>
                </legend>
                <div class="row">
                    <div class="col"><strong> ނަން</strong> </div>
                    <div class="col"><strong> ދާއިމީ އެޑްރެސް</strong> </div>
                </div>
                @foreach($people as $person)
                <div class="row">
                    <div class="col links">
                        <a href="/haalathu/person/{{ $person->nid }}">
                            {{$person->name}}
                        </a>
                    </div>
                    <div class="col"><span>{{$person->house}}</span>، <span>{{$person->atoll}}</span> {{$person->island}}<span></span></div>
                </div>
                @endforeach
                <div class="row links">
                    <a href="/haalathu/person/create">+</a>
                </div>


            </fieldset>

        </div>
    </div>

</div>
@endsection