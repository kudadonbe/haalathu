@extends('haalathu.layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3"></div>
        <div class="col">
            <fieldset>
                <legend>
                    <strong>
                        ވިޔަފާރިގެތަކުގެ ލިސްޓު
                    </strong>
                </legend>
                <div class="row">
                    <div class="col"><strong> ނަން</strong> </div>
                    <div class="col"><strong>ވެރިފަރާތުގެ ނަން</strong></div>
                    <div class="col"><strong>ވެރިފަރާތަށް ގުޅޭނެ ނަންބަރު</strong></div>
                </div>
                @foreach($shops as $shop)
                <div class="row">
                    <div class="col links">
                        <a href="/haalathu/shop/{{ $shop->name }}">
                            {{$shop->name}}
                        </a>
                    </div>
                    <div class="col">{{$shop->owner->person->name}}</div>
                    <div class="col">{{$shop->owner->person->contact}}</div>
                </div>
                @endforeach
                <div class="row links">
                    <a href="/haalathu/shop/create">+</a>
                </div>


            </fieldset>

        </div>
        <div class="col-3"></div>
    </div>

</div>
@endsection