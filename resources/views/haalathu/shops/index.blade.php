@extends('haalathu.layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <fieldset>
                <legend>
                    <strong>
                        ވިޔަފާރިގެތަކުގެ ލިސްޓު
                    </strong>
                </legend>
                <div class="row">
                    <div class="col"><strong> ނަން</strong> </div>
                    <div class="col"><strong>ވެރިފަރާތް</strong></div>
                    <div class="col"><strong>ގުޅޭނެ ނަންބަރު</strong></div>
                </div>
                @foreach($shops as $shop)
                <div class="row">
                    <div class="col links">
                        <a href="/haalathu/shop/{{ $shop->id }}">
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
    </div>

</div>
@endsection