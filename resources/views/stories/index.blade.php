@extends('layouts.app')
@section('content')

<form>
    <select class="form-select" aria-label="Disabled select example">
        <option selected>Filter by category</option>
        <option value="{{request(1)}}">verdovende middelen</option>
        <option value="{{request(2)}}">drugs</option>
        <option value="{{request(3)}}">huiselijk geweld</option>
        <option value="{{request(4)}}">seksueel misbruik</option>
        <option value="{{request(5)}}">geweldpleging</option>
        <option value="{{request(6)}}">diefstal</option>
    </select>
</form>


    <form action="#" method="GET" role="search">
        <div class="input-group">
            <input type="text" class="form-control" name="search"
                   placeholder="search stories">

{{--            <span class="input-group-btn"--}}
{{--                value="{{request('/search')}}">--}}
{{--                <button type="submit" class="btn btn-default">--}}
{{--                    <span class="glyphicon glyphicon-search"></span>--}}
{{--                </button>--}}
{{--            </span>--}}
        </div>
    </form>


    <div class="container">
        <table class="table">
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th></th>
            </tr>
            @foreach($stories as $story)
                <tr>
                    <td>{{$story->title}}</td>
                    <td>{{$story->description}}</td>
                    <td>
                        <a href="{{route('stories.show',$story->id)}}">View</a>
                    </td>
                </tr>
            <tfoot>
{{--            <tr>--}}
{{--                <input type = "text" class="form-control filter-input" placeholder="Search for ">--}}
{{--            </tr>--}}
            </tfoot>


            @endforeach
        </table>

    </div>



@endsection
