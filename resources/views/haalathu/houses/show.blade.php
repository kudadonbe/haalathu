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
    <div class="row report">
        <!-- status of residents -->
        <div class="col ppl">
            <div class="row pplHead">
                <div class="col-1 mvicon"><img src="\img\png\haalathu\reports\family.png" style="height:20px;" alt=""></div>
                <div class="col-9 mvdetails">މީހުން</div>
                <div class="col-2"><a href="/haalathu/{{ $house->id }}/residents"><img src="\img\svg\card-list.svg" style="height:20px;" alt=""></a></div>
            </div>
            <div class="row data">
                <div class="col-1 mvicon"><img src="\img\svg\people.svg" style="height:20px;" alt=""></div>
                <div class="col-9 mvdetails">މިގޭބިސީގައި ދިރިއުޅޭމީހުންގެ ޖުމުލަ</div>
                <div class="col-2 mvqtydata">{{ $dataObj->get('residents') }}</div>
            </div>
            <div class="row data">
                <div class="col-1 mvicon"><img src="\img\png\haalathu\reports\oldage.png" style="height:20px;" alt=""></div>
                <div class="col-9 mvdetails">(65 އަހަރުން މަތީގެ) އިސްރަށްވެހިން</div>
                <div class="col-2 mvqtydata">{{ $dataObj->get('up65') }}</div>
            </div>
            <div class="row data">
                <div class="col-1 mvicon"><img src="\img\png\haalathu\reports\baby.png" style="height:20px;" alt=""></div>
                <div class="col-9 mvdetails"> ޅަކުދީން (12 އަހަރުން ދަށް) </div>
                <div class="col-2 mvqtydata">{{ $dataObj->get('down12') }}</div>
            </div>
            <div class="row data">
                <div class="col-1 mvicon"><img src="\img\png\haalathu\reports\pragnent.png" style="height:20px;" alt=""></div>
                <div class="col-9 mvdetails"> މާބަނޑު މީހުން </div>
                <div class="col-2 mvqtydata">{{ $dataObj->get('preg') }}</div>
            </div>
            <div class="row data">
                <div class="col-1 mvicon"><img src="\img\png\haalathu\reports\medicin.png" style="height:20px;" alt=""></div>
                <div class="col-9 mvdetails"> (ދާއިމީ ގޮތެއްގައި ބޭސްކާ) ބަލި މީހުން </div>
                <div class="col-2 mvqtydata">{{ $dataObj->get('med') }}</div>
            </div>
            <div class="row data">
                <div class="col-1 mvicon"><img src="\img\png\haalathu\reports\weelch.png" style="height:20px;" alt=""></div>
                <div class="col-9 mvdetails"> ޚާއްޞަ އެހީއަށް ބޭނުންވާ މީހުން </div>
                <div class="col-2 mvqtydata">{{ $dataObj->get('sp_care') }}</div>
            </div>
        </div>

        <!-- status of necessities -->

        <div class="col goods">
            <div class="row goHead">
                <div class="col-1 mvicon"><img src="\img\png\haalathu\reports\food_items.png" style="height:20px;" alt=""></div>
                <div class="col-11 mvdetails">ކާބޯތަކެތި</div>
                <div class="col-2"><a href="/haalathu/{{ $house->id }}/items"><img src="\img\svg\cart3.svg" style="height:20px;" alt=""></a></div>
            </div>
            @foreach($items as $item)
            <div class="row data">
                <div class="col-1 mvicon"><img src="{{ $item->img_url }}" style="height:20px;" alt=""></div>
                <div class="col-7 mvdetails">{{ $item->name }}</div>
                <div class="col-2 mvqtydata">{{ $item->qty }}</div>
                <div class="col-2 mvqtyunit">{{ $item->unit }}</div>
            </div>
            @endforeach

        </div>
    </div>
</div>
@endsection