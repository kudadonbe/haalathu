@extends('layouts.haalathu.app')

@section('content')
<div class="container" style="padding: 50px">
    <div class="row">
    <div class="col">
            <a href="/haalathu/hreport">
                <div class="pagename dhi">
                    ގޭބިސީތައް
                </div>
                <div class="pageimage">
                    <img src="\img\png\haalathu\home.png" style="height:70px;" alt="">
                </div>
            </a>
        </div>
        
        <div class="col">

            <a href="/haalathu/sreport">
                <div class="pagename dhi">
                    ވިޔަފާރިގެތައް
                </div>
                <div class="pageimage" >
                    <img src="\img\png\haalathu\shop.png" style="height:70px;" alt="">
                </div>
            </a>
        </div>
        <div class="col">
            <a href="">
                <div class="pagename dhi">
                    މުޅި ރަށް
                </div>
                <div class="pageimage">
                    <img src="\img\png\haalathu\island.png" style="height:70px; padding:5px" alt="">
                </div>
            </a>

        </div>
        

    </div>

</div>
@endsection