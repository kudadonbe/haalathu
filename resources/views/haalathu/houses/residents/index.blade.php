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
        <div class="col-3"></div>
        <div class="col">
            <form method="POST" action="/haalathu/house/resident" enctype="multipart/form-data">
                @csrf
                <fieldset>
                    <legend>މިގޭބިސީގައި ރެޖިސްޓަރީވުމަށް</legend>
                    <div class="col-3">

                        <input type="hidden" name="house_id" value="{{ $house->id }}">
                    </div>
                    <div class="row">
                        <label class="col-2" for="nid">އައިޑީ ކާޑުނަންބަރު:</label>
                        <div class="col-3">
                            <input type="text" name="nid">
                        </div>
                    </div>
                    <button type="submit" class="">
                        {{ __('ރަޖިސްޓަރީ ކުރައްވާ') }}
                    </button>
                </fieldset>
            </form>
        </div>
        <div class="col-3"></div>
    </div>
    <div class="row">
        <div class="col">
            <fieldset>
                <legend>
                    <strong>
                        މިގޭބިސީގައި ދިރިއުޅޭ މީހުންގެ ލިސްޓު
                    </strong>
                </legend>
                <div class="row">
                    <div class="col"><strong> ނަން</strong> </div>
                    <div class="col"><strong>ދާއިމީ އެޑްރެސް</strong></div>
                    <div class="col"><strong>ގުޅޭނެ ނަންބަރު</strong></div>
                </div>
                @foreach($people as $person)
                <div class="row">
                    <div class="col links">
                        <a href="/haalathu/person/{{ $person['nid'] }}">
                            {{$person->name}}
                        </a>
                    </div>
                    <div class="col"><span>{{ $person->house }}،</span> <span>{{ $person->atoll }}</span> <span> {{ $person->island }} </span></div>
                    <div class="col">{{$person->contact}}</div>

                </div>
                @endforeach
                <div class="row links">
                    <a onclick="regForm()" href="#">+</a>
                </div>
            </fieldset>
        </div>
    </div>

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
@endsection