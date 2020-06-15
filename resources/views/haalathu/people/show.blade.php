@extends('haalathu.layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <fieldset>
                <legend>
                    <strong>
                        މީހުންގެ މަޢުލޫމާތު
                    </strong>
                </legend>
                <div class="col">
                    <div class="row">
                        <label for="nid" class="col-5">{{ __('އައިޑީ ކާޑު ނަންބަރު:') }}</label>
                        <div class="col">{{$person->nid}}</div>
                    </div>
                    <div class="row">
                        <label for="name" class="col-5">{{ __('ނަން:') }}</label>
                        <div class="col">{{$person->name}}</div>
                    </div>
                    <div class="row">
                        <label for="name" class="col-5">{{ __('ދާއިމީ އެޑްރެސް:') }}</label>
                        <div class="col"><span>{{ $person->house }}،</span> <span>{{ $person->atoll }}</span> <span> {{ $person->island }} </span></div>
                    </div>
                    <div class="row">
                        <label for="dob" class="col-5">{{ __('ޢުމުރު:') }}</label>
                        <div class="col"><span>{{$age}}</span><span> އަހަރު</span></div>
                    </div>
                    <div class="row">
                        <label for="contact" class="col-5">{{ __('ގުޅޭނެ ނަންބަރު:') }}</label>
                        <div class="col">{{$person->contact}}</div>
                    </div>
                    <div class="row">
                        <label for="gender" class="col-5">{{ __('ޖިންސު:') }}</label>
                        <div class="col">

                            @if($person->gender)
                            <span>{{ __('އަންހެން') }}</span>
                            @else
                            <span>{{ __('ފިރިހެން') }}</span>

                            @endif

                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="row">
                        <label for="med" class="col-5">{{ __('ދާއިމީގޮތެއްގައި ބޭސްކާ ބަލިމީހެއް:') }}</label>
                        <div class="col">
                            @if ($person->med)

                            <img src="\img\png\haalathu\reports\medicin.png" style="height: 1em;" alt="">

                            @else
                            {{ __('ނޫން') }}
                            @endif

                        </div>
                    </div>
                    @if ($person->gender)
                    <div class="row">
                        <label for="preg" class="col-5">{{ __('މާބަނޑުމީހެއް:') }}</label>
                        <div class="col">
                            @if ($person->preg)
                            <img src="\img\png\haalathu\reports\pragnent.png" style="height: 30px;" alt="">

                            @else
                            {{ __('ނޫން') }}
                            @endif

                        </div>
                    </div>
                    @endif
                    <div class="row">
                        <label for="sp_care" class="col-5">{{ __('ޚާއްޞަ އެހީއަށް ބޭނުންވާ މީހެއް:') }}</label>
                        <div class="col">
                            @if ($person->sp_care)
                            <img src="\img\png\haalathu\reports\weelch.png" style="height: 30px;" alt="">


                            @else
                            {{ __('ނޫން') }}
                            @endif
                        </div>
                    </div>
                </div>


                <a href="/haalathu/person/{{$person->nid}}/edit">އިސްލާހު ކުރުމަށް</a>

            </fieldset>
        </div>
    </div>

</div>
@endsection