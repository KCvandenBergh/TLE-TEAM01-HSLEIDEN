{{-- Add the layout from the user login setup here. --}}
<script>
    function playSound() {
        var sound = document.getElementById("audio");
        sound.play();
    }
</script>
@extends('layouts.app')
@section('scripts')
@routes
    <script>
        let scenarioJson = {{ \Illuminate\Support\Js::from($scenario) }};
        let defaultChoice = {{ \Illuminate\Support\Js::from($defaultChoice) }};
    </script>
    @vite('resources/js/timer.js')
@endsection
@section('content')

    {{-- container to contain the scenario --}}
    <div class="container-fluid">
        {{-- card for scenario --}}
        <div class="card">
            <img src="https://i.pinimg.com/originals/2b/93/e0/2b93e0b6ded8310c25c131bd8146409a.jpg" class="card-img"
                 alt="Image of alley">
            <div class="card-img-overlay">
                <div class="card-header">
                    <h2 class="card-title">{{$scenario->story->title}}</h2>
                    <div class="hidden" id="timer">
                    </div>
                </div>
                <div class="card-body">
                    <p class="card-text">{{$scenario->dialogue}}</p>
                </div>

                {{-- card for each choice --}}
                <ul class="list-group">
                    @if($scenario->is_end)
                        @if(Auth::check())
                                    <a href="{{ route('saves.create') }}" class="choices">Sla mijn
                                        keuzes op</a><br>
                        @endif
                        <a href="{{ route('stories.results', $scenario->story->id) }}"
                           class="choices">Overzicht Keuzes</a><br>
                            <a href="{{route('stories.index')}}" class="choices">Terug naar
                            Start</a><br>
                    @else
                        @foreach($scenario->choices as $choice)
                            @switch($scenario->id)
                                @case("3")
                                    <audio id="audio"
                                           src="https://www.fesliyanstudios.com/play-mp3/1727"
                                           autoplay="false"></audio>
                                    @break
                                @case("4")
                                    <audio id="audio"
                                           src="https://www.fesliyanstudios.com/play-mp3/7541"
                                           autoplay="false"></audio>
                                    @break
                                @case("6")
                                    <audio id="audio"
                                           src="https://www.youtube.com/watch?v=9zw7A9gpTiE&ab_channel=EccentricSounds"
                                           autoplay="false"></audio>
                                    @break
                                @case("7")
                                    <audio id="audio"
                                           src="https://www.fesliyanstudios.com/play-mp3/7151"
                                           autoplay="false"></audio>
                                    @break
                                @case("9")
                                    <audio id="audio"
                                           src="https://www.fesliyanstudios.com/play-mp3/5674"
                                           autoplay="false"></audio>
                                    @break
                                @case("10")
                                    <audio id="audio"
                                           src="https://www.fesliyanstudios.com/play-mp3/4002"
                                           autoplay="false"></audio>
                                    @break
                                    //Werkt niet
                                    {{--                                @case("13")--}}
                                    {{--                                    <audio id="audio" src="public/audio/man-stop.mp3" type="audio/mpeg" autoplay="false" ></audio>--}}
                                    {{--                                @break--}}
                                @case("14")
                                    <audio id="audio"
                                           src="https://www.fesliyanstudios.com/play-mp3/6526"
                                           autoplay="false"></audio>
                                    @break
                                @case("17")
                                    <audio id="audio"
                                           src="https://www.fesliyanstudios.com/play-mp3/2399"
                                           autoplay="false"></audio>
                                    @break
                            @endswitch
                            <a onclick="playSound();"
                               href="{{route('scenario.show', [$scenario->story->id, $choice->scenario_id, $choice->id])}}"
                               class="choices">{{$choice->name}}</a><br>
                        @endforeach
                    @endif
                </ul>
            </div>
        </div>
    </div>
@endsection
