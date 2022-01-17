@extends("layout")

@section("content")


<div class="main">


    <div class="SubContent">
        <h3 class="sub_h3">DAY</h3>
        <!-- プロジェクトの表示 -->
        @include("project")
    </div>


    <div class="MainContent">
        @include("task")
    </div>


    <!-- 新規プロジェクトの作成 -->
    <div class="create-project-content">
        @include("create-project")
    </div>

    @foreach($tasks as $task)
    <!-- タスクを作成 -->
    <div class="create-task-content">
        <form action="{{route('update')}}" method="get" class="create-task-form">
            {{ csrf_field() }}

            <div class="task-detail-form">
                <textarea name="detail" cols="60" rows="5" placeholder="">{{$task -> detail}}</textarea>
            </div>

            <label>ジャンル(必須) : </label>
            <select name="genru">


                @foreach($genrus as $genru)
                <option value={{$genru -> genru_id}}>{{$genru ->genru_name}}</option>
                @endforeach

            </select>

            <label>タスク名(必須) : </label>
            <input type="text" name="name" value="{{$task -> name}}" maxlength="50" size="30" required>
            <br>

            <label>回数 : </label>
            <input type="text" name="count" value="{{$task -> count}}" placeholder="" maxlength="3" size="3">
            <label>セット回数 : </label>
            <input type="text" name="setcount" value="{{$task -> setcount}}" maxlength="2" size="2">
            <br>


            @php
            $date = now();
            @endphp
            <label>プロジェクト実行日 : </label>
            <input class="project-text" type="text" name="excution" value="{{$task -> deadline}}">
            <small class="p-small"> ※0000-00-00 の形で記入</small>
            <br>
            <input type="submit" value="  更新  " class="btn btn-success">

            <input type="hidden" name="id" value="{{$task -> id}}">
            <input type="hidden" name="status" value="{{$task -> status}}">
        </form>
    </div>
    @endforeach




</div>
@include("modal")

@endsection("content")