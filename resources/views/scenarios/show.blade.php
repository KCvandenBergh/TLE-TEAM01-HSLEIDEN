{{-- Add the layout from the user login setup here. --}}
<script>
    function playSound() {
        var sound = document.getElementById("audio");
        sound.play();
    }
</script>
@extends('layouts.app')
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
                </div>
                <div class="card-body">
                    <p class="card-text">{{$scenario->dialogue}}</p>
                </div>

                {{-- card for each choice --}}
                <ul class="list-group">
                    @foreach($scenario->choices as $choice)
                        @switch($scenario->id)
                            @case("3")
                                <audio id="audio" src="https://www.fesliyanstudios.com/play-mp3/1727" autoplay="false" ></audio>
                                @break
                            @case("4")
                                <audio id="audio" src="https://www.fesliyanstudios.com/play-mp3/7541" autoplay="false" ></audio>
                                @break
                            @case("6")
                                <audio id="audio" src="https://www.youtube.com/watch?v=9zw7A9gpTiE&ab_channel=EccentricSounds" autoplay="false"></audio>
                                @break
                            @case("7")
                                <audio id="audio" src="https://www.fesliyanstudios.com/play-mp3/7151" autoplay="false" ></audio>
                                @break
                            @case("9")
                                <audio id="audio" src="https://www.fesliyanstudios.com/play-mp3/5674" autoplay="false" ></audio>
                                @break
                            @case("10")
                                <audio id="audio" src="https://www.fesliyanstudios.com/play-mp3/4002" autoplay="false" ></audio>
                                @break
                                //Werkt niet
                                {{--                                @case("13")--}}
                                {{--                                    <audio id="audio" src="public/audio/man-stop.mp3" type="audio/mpeg" autoplay="false" ></audio>--}}
                                {{--                                @break--}}
                            @case("14")
                                <audio id="audio" src="https://www.fesliyanstudios.com/play-mp3/6526" autoplay="false" ></audio>
                                @break
                            @case("17")
                                <audio id="audio" src="https://www.fesliyanstudios.com/play-mp3/2399" autoplay="false" ></audio>
                                @break
                        @endswitch
                        @if($choice->id === 1)
                            {{--  if choice is to download made choices --}}

                            <a href="#" class="choices">{{$choice->name}}
                                <bold> [WIP]</bold>
                            </a><br>

                        @elseif($choice->id === 2)
                            {{--  if choice is to go back to the start menu --}}
                            {{-- currently links back to start scenario, needs to be linked to stories overview --}}
                            <a href="{{route('stories.index')}}" class="choices">{{$choice->name}}</a>
                        @else
                            <a onclick="playSound();"  href="{{route('scenario.show', [$scenario->story->id, $choice->scenario_id])}}"
                               class="choices">{{$choice->name}}</a><br>
                        @endif
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
