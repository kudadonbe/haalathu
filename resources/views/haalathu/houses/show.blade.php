@extends('haalathu.layouts.app')

@section('content')
<div class="container">
    <style>

    </style>

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
                        ހދ. ވައިކަރަދޫ
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
        <div class="col-6 ppl">
            <div class="row pplHead">
                <div class="col-1 mvicon"><img src="\img\png\haalathu\reports\family.png" style="height:20px;" alt=""></div>
                <div class="col mvdetails">މީހުން</div>
            </div>
            <div class="row data">
                <div class="col-1 mvicon"><img src="\img\png\haalathu\reports\oldage.png" style="height:20px;" alt=""></div>
                <div class="col-9 mvdetails">(65 އަހަރުން މަތީގެ) އިސްރަށްވެހިން</div>
                <div class="col-2 mvqtydata">ނެތް</div>
            </div>
            <div class="row data">
                <div class="col-1 mvicon"><img src="\img\png\haalathu\reports\baby.png" style="height:20px;" alt=""></div>
                <div class="col-9 mvdetails"> ޅަކުދީން (12 އަހަރުން ދަށް) </div>
                <div class="col-2 mvqtydata">ނެތް</div>
            </div>
            <div class="row data">
                <div class="col-1 mvicon"><img src="\img\png\haalathu\reports\pragnent.png" style="height:20px;" alt=""></div>
                <div class="col-9 mvdetails"> މާބަނޑު މީހުން </div>
                <div class="col-2 mvqtydata">ނެތް</div>
            </div>
            <div class="row data">
                <div class="col-1 mvicon"><img src="\img\png\haalathu\reports\medicin.png" style="height:20px;" alt=""></div>
                <div class="col-9 mvdetails"> (ދާއިމީ ގޮތެއްގައި ބޭސްކާ) ބަލި މީހުން </div>
                <div class="col-2 mvqtydata">ނެތް</div>
            </div>
            <div class="row data">
                <div class="col-1 mvicon"><img src="\img\png\haalathu\reports\weelch.png" style="height:20px;" alt=""></div>
                <div class="col-9 mvdetails"> ޚާއްޞަ އެހީއަށް ބޭނުންވާ މީހުން </div>
                <div class="col-2 mvqtydata">ނެތް</div>
            </div>
        </div>

        <!-- status of necessities -->

        <div class="col-6 goods">
            <div class="row goHead">
                <div class="col-1 mvicon"><img src="\img\png\haalathu\reports\food_items.png" style="height:20px;" alt=""></div>
                <div class="col-11 mvdetails">ކާބޯތަކެތި</div>
            </div>
            <div class="row data">
                <div class="col-1 mvicon"><img src="\img\png\haalathu\reports\rice.png" style="height:20px;" alt=""></div>
                <div class="col-7 mvdetails">ހަނޑޫ
                </div>
                <div class="col-2 mvqtydata">50</div>
                <div class="col-2 mvqtyunit">ކިލޯ</div>
            </div>
        </div>
    </div>
</div>
@endsection