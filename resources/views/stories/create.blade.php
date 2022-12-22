@extends('layouts.app')
@section('content')

    {{--    <div class="card">--}}
    {{--        <div class="card-header">Create Story</div>--}}
    {{--        <div class="card-body">--}}
    {{--            <form action="{{ route('stories.store') }}" method="post">--}}
    {{--                @csrf--}}
    {{--                <label>Title</label>--}}
    {{--                <input type="text" name="title" id="title" class="form-control"/>--}}
    {{--                @error('title')--}}
    {{--                <div class="alert alert-danger">{{ $message }}</div>--}}
    {{--                @enderror--}}
    {{--                <label>Description</label>--}}
    {{--                <input type="text" name="description" id="description" class="form-control"/>--}}
    {{--                @error('description')--}}
    {{--                <div class="alert alert-danger">{{ $message }}</div>--}}
    {{--                @enderror--}}
    {{--                <label>Zichtbaar (0 of 1)</label>--}}
    {{--                <input type="number" min="0" max="1" name="is_visible" id="is_visible" class="form-control"/>--}}
    {{--                @error('is_visible')--}}
    {{--                <div class="alert alert-danger">{{ $message }}</div>--}}
    {{--                @enderror--}}
    {{--                <button type="submit" value="Create" class="btn btn-primary">Create</button>--}}
    {{--            </form>--}}
    {{--        </div>--}}
    {{--    </div>--}}

    <div class="test">
        <form action="{{ route('stories.store') }}" method="post">
            @csrf
            <label>Casus Titel</label>
            <input type="text" placeholder="Casus titel" name="title" id="title" class="form-control"/>
            @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </form>
    </div>

    <div id="test">
        <div class="dialogue">
            <form action="{{ route('scenarios.store') }}" method="post">
            <label>Dialoog</label>
                <input type="text" placeholder="Scenario dialoog" name="dialogue" id="dialogue" class="form-control"/>
                @error('dialogue')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </form>
        </div>
        <div class="choices">
            <form action="{{ route('choices.store')}}" method="post">
                <fieldset class="input-set" id="choice-list" class="input-field">
                @csrf
                <label>Keuze</label>
                    <div class="choices-input">
                <input type="text" placeholder="Keuze" name="name" id="name" class="choices-input"/>
                    <button class="btn-add-choice" onclick="addChoice()">+</button>
                    </div>
                </fieldset>
            </form>

        </div>
    </div>

    <script>
        const myForm = document.getElementById("choice-list");

        function addChoice() {

            const nef_wrapper = document.createElement("div");
            const nef = document.createElement("input");
            const btnAdd = document.createElement("button");
            const btnDel = document.createElement("button");

            nef_wrapper.classList.add("choices-input");

            btnAdd.type = "button";
            btnAdd.classList.add("btn-add-choice");
            btnAdd.innerText = "+";
            btnAdd.setAttribute("onclick", "addChoice()");

            btnDel.type = "button";
            btnDel.classList.add("btn-del-choice");
            btnDel.innerText = "-";

            nef.type = "choice";
            nef.name = "choice_field";
            nef.setAttribute("required", "");
            nef.classList.add("input-field");

            nef_wrapper.appendChild(nef);
            nef_wrapper.appendChild(btnAdd);
            nef_wrapper.appendChild(btnDel);

            myForm.appendChild(nef_wrapper);
            btnDel.addEventListener("click", removeChoice);

            const node = document.getElementById("test");
            const clone = node.cloneNode(true);
            document.body.appendChild(clone);
        }

        function removeChoice(el) {
            const field = el.target.parentElement;
            field.remove();
        }
    </script>
@endsection
