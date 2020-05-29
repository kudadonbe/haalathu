@extends('haalathu.layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3"></div>
        <div class="col">
            <fieldset>
                <legend>
                    <strong>
                        މުދަލުގެ ލިސްޓު
                    </strong>
                </legend>
                <div class="row">
                    <div class="col"><strong>ނަން</strong> </div>
                    <!-- <div class="col"><strong>މިންވަރު</strong></div> -->
                    <div class="col"><strong>ވަޒަން</strong></div>
                    <!-- <div class="col"><strong>ވައްތަރު</strong></div> -->
                </div>
                @foreach($commodities as $commodity)
                <div class="row">
                    <div class="col links">
                        <a href="/haalathu/commodity/{{ $commodity->name }}">
                        {{$commodity->name}}
                        </a>
                    </div>
                    <!-- <div class="col">{{$commodity->size}}</div> -->
                    <!-- <div class="col">{{$commodity->weight}}</div> -->
                    <div class="col">{{$commodity->unit}}</div>
                </div>
                @endforeach
                <div class="row links">
                <a href="/haalathu/commodity/create">+</a>
            </div>


            </fieldset>
            
        </div>
        <div class="col-3"></div>
    </div>

</div>
@endsection