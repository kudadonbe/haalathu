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
                        {{$shop->name}}
                    </div>
                    <div class="repisland">
                        <span>{{ $shop->atoll }} </span>{{ $shop->island }}
                    </div>

                </div>
            </div>
        </div>
        <div class="col owner">
            <div class="ownername">

                {{$shop->owner->person->name}}
            </div>
            <div class="ownercontact">
                {{$shop->owner->person->contact}}
            </div>
        </div>
    </div>
    <div class="row report">
        <!-- status of necessities -->

        <div class="col goods">
            <div class="row goHead">
                <div class="col-1 mvicon"><img src="\img\png\haalathu\reports\food_items.png" style="height:20px;" alt=""></div>
                <div class="col-11 mvdetails">ކާބޯތަކެތި</div>
                <div class="col-2"><a href="/haalathu/{{ $shop->id }}/stocks"><img src="\img\svg\cart3.svg" style="height:20px;" alt=""></a></div>
            </div>
            @foreach($stocks as $stock)
            <div class="row data">
                <div class="col-1 mvicon"><img src="{{ $stock->img_url }}" style="height:20px;" alt=""></div>
                <div class="col-7 mvdetails">{{ $stock->name }}</div>
                <div class="col-2 mvqtydata">{{ $stock->qty }}</div>
                <div class="col-2 mvqtyunit">{{ $stock->unit }}</div>
            </div>
            @endforeach

        </div>
    </div>
</div>
@endsection