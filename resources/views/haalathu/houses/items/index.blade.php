@extends('haalathu.layouts.app')

@section('content')
<div class="container">
    <div class="row heading">
        <div class="col-3 reptype">
            <div class="row">
                <div class="col-4 repicon">
                    <img src="\img\png\haalathu\reports\.png" style="height:40px;" alt="">
                </div>
                <div class="col repname">
                    <div class="repnametext">
                        {{$house->name}}
                    </div>
                    <div class="repisland">
                        <span>{{ $house->atoll }} </span>{{ $house->island }}
                    </div>

                </div>
            </div>
        </div>
        <div class="col owner">
            <div class="ownername">

                {{$house->owner->person->name}}
            </div>
            <div class="ownercontact">
                {{$house->owner->person->contact}}
            </div>
        </div>
    </div>
    <div class="row" id="residFrom" style="display: none;">
        <div class="col">
            <form method="POST" action="/haalathu/house/item" enctype="multipart/form-data">
                @csrf
                <fieldset>
                    <legend>މިގޭބިސީއަށް އިތުރުކުރެވޭ މުދާ</legend>
                    <div class="col-3">

                        <input type="hidden" name="house_id" value="{{ $house->id }}">
                    </div>
                    <div class="row">
                        <label class="col-2" for="item_name">މުދަލުގެ ބާވަތް:</label>
                        <div class="col-3">
                            <input type="text" name="item_name">
                        </div>
                        <label class="col-2" for="qty">މުދަލުގެ މިންވަރު:</label>
                        <div class="col-3">
                            <input type="text" name="qty">
                        </div>
                    </div>
                    <button type="submit" class="">
                        {{ __('ރަޖިސްޓަރީ ކުރައްވާ') }}
                    </button>
                </fieldset>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <fieldset>
                <legend>
                    <strong>
                        މުދަލުގެ ލިސްޓު
                    </strong>
                </legend>
                <div class="row">
                    <div class="col"><strong>ނަން</strong> </div>
                    <div class="col"><strong>މިންވަރު</strong></div>
                    <div class="col"><strong>ވަޒަން</strong></div>
                    <!-- <div class="col"><strong>ވައްތަރު</strong></div> -->
                </div>
                @foreach($items as $item)
                <div class="row">
                    <div class="col links">
                        <a href="/haalathu/commodity/{{ $item->name }}">
                            {{ $item->name }}
                        </a>
                    </div>
                    <div class="col">{{ $item->qty }}</div>
                    <div class="col">{{ $item->unit }}</div>
                </div>
                @endforeach
                <div class="row links">
                    <a onclick="regForm()" href="#">+</a>
                </div>
            </fieldset>
            <script>
                function regForm() {
                    var rForm = document.getElementById("residFrom");
                    if (rForm.style.display === "none") {
                        rForm.style.display = "block";
                    } else {
                        rForm.style.display = "none";
                    }
                }
            </script>

        </div>
    </div>

</div>
@endsection