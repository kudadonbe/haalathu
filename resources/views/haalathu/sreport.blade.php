@extends('layouts.haalathu.app')

@section('content')

<div class="container">
    <div class="row heading">
        <div class="col-3 reptype">
            <div class="row ">
                <div class="col-3 repicon">
                    <img src="\img\png\haalathu\home.png" style="height:30px;" alt="">
                </div>
                <div class="col repname">
                    <div class="repnametext">
                        މަދަދު
                    </div>
                    <div class="repisland">
                        ހދ. ވައިކަރަދޫ
                    </div>
                </div>

            </div>
        </div>
        <div class="col owner">
        <div class="ownername">
            ޢަބްދުﷲ ޒަރީރު
        </div>
        <div class="ownercontact">
            9898250
        </div>
        </div>
    </div>
    <div class="row report">
        <div class="col">
            <div class="row heading">
                <div class="col-2 mvicon"><img src="\img\png\haalathu\home.png" style="height:20px;" alt=""></div>
                <div class="mvdetails">ތަފްޞީލު</div>
            </div>
            <div class="row data">
                <div class="col-1 mvicon"><img src="\img\png\haalathu\home.png" style="height:20px;" alt=""></div>
                <div class="col mvdetails">ހަނޑޫ</div>
                <div class="col-1 mvqtydata">50</div>
                <div class="col-1 mvqtyunit">ކިލޯ</div>
            </div>
        </div>
    </div>
</div>
@endsection