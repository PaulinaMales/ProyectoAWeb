@extends('layouts.app')

@section('content')
  <!-- <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<
                      matchs Part start
    >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> -->
    <section id="matchs" class="">
    <div class="container px-lg-0">
        <div class="row m-auto d-flex justify-content-center ">
            <div class="col-lg-12">
                <div data-wow-duration="1s" class="wow fadeInLeftBig common-head text-start" style="visibility: visible; animation-duration: 1s; animation-name: fadeInLeftBig;">
                    <h2>Recent</h2>
                    <h3 style="color:black">recent match </h3>
                </div>
            </div>
            @if($schedule)
            <div data-wow-duration="1s" class="wow flipInX col-lg-12" style="visibility: visible; animation-duration: 1s; animation-name: flipInX;">
                <div class="team_view d-flex flex-wrap justify-content-center">
                    <div class="team_one d-flex  flex-wrap justify-content-center">
                        <h6 class="m-auto" style="color:white">{{ $schedule->equipo_1 }}</h6>
                        <img src="{{ $schedule->local_logo }}" alt="">
                    </div>
                    <div class="vs m-auto"><strong>VS</strong></div>
                    <div class="team_one d-flex flex-wrap justify-content-center">
                        <img src="{{ $schedule->visitor_logo }}" alt="">
                        <h6 class="m-auto" style="color:white">{{ $schedule->equipo_2 }}</h6>
                    </div>
                </div>
                <div class="match_time d-flex flex-wrap text-center justify-content-center ">
                    <h6 style="color:white"><i class="fa-solid fa-calendar-days"></i> {{ $schedule->fecha }} - {{ $schedule->hora }}</h6>
                    <h6 style="color:white"><i class="fa-solid fa-location-dot"></i> {{ $schedule->lugar }}</h6>
                </div>               
            </div>
            @endif
        </div>
    </div>
</section>
  <!-- <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<
                      matchs Part end
    >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> -->

@endsection