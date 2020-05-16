@extends('layouts.haalathu.app')

@section('content')
<div class="container">
    <div class="column">
        <a href="">
            <div class="pagename dhi">
                މުޅި ރަށް
            </div>
            <div class="pageimage">
                <img src="\img\png\haalathu\island.png" style="height:70px; padding:5px" alt="">
            </div>
        </a>

    </div>
    <div class="column">

    <a href="/haalathu/sreport">
            <div class="pagename dhi">
                ވިޔަފާރިގެތައް
            </div>
            <div class="pageimage">
                <img src="\img\png\haalathu\shop.png" style="height:70px;" alt="">
            </div>
        </a>
    </div>
    <div class="column">
    <a href="/haalathu/hreport">
            <div class="pagename dhi">
                ގޭބިސީތައް
            </div>
            <div class="pageimage">
                <img src="\img\png\haalathu\home.png" style="height:70px;" alt="">
            </div>
        </a>
    </div>
</div>
@endsection