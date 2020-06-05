@extends('haalathu.layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3"></div>
        <div class="col">
            <fieldset>
                <legend>
                    <strong>
                        މީހުންގެ ލިސްޓު
                    </strong>
                </legend>
                <div class="row">
                    <div class="col"><strong> ނަން</strong> </div>
                    <div class="col"><strong>ގުޅޭނެ ނަންބަރު</strong></div>
                    <div class="col"><strong>އައިޑީ ކާޑު ނަންބަރު</strong></div>
                </div>
                @foreach($people as $person)
                <div class="row">
                    <div class="col links">
                        <a href="/haalathu/person/{{ $person->nid }}">
                            {{$person->name}}
                        </a>
                    </div>
                    <div class="col">{{$person->contact}}</div>
                    <div class="col">{{$person->nid}}</div>
                </div>
                @endforeach
                <div class="row links">
                <a href="/haalathu/person/create">+</a>
            </div>


            </fieldset>
            
        </div>
        <div class="col-3"></div>
    </div>

</div>
@endsection