@extends('layouts.app')
@section('content')

    <form class="form-check-inline" action="">
        <label for="category_filter">Filter &nbsp;</label>
        <select class="form-control" id="category_filter" name="category">
            <option value="">Select Category</option>
        </select>
        <label for="keyword">&nbsp;&nbsp;</label>
        <input type="text" class="form-control" name="keyword" placeholder="enter keyword" id="keyword">
       <span>&nbsp;&nbsp;</span>

        <button type="button" class="btn btn-primary">Search</button>
        <a class="btn btn-success" href="">Clear</a>
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

            @endforeach
        </table>
    </div>



@endsection
