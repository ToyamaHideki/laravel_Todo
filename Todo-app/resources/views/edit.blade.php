@extends("layout")

@section("content")


<div class="main">
    <div class="SubContent">

        <!-- プロジェクトの表示 -->
        @include("project")
    </div>


    <div class="MainContent">
        @include("tasks")
    </div>


    <!-- 新規プロジェクトの作成 -->
    <div class="create-project-content">
        @include("create-project")
    </div>

    <div class="create-task-content">
    @foreach($tasks as $task)
    <!-- タスクを作成 -->
    
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

            <br>
            <label>タスク名(必須) : </label>
            <input type="text" name="name" value="{{$task -> name}}" maxlength="50" size="30" required>
            <br>

            <label>回数 : </label>
            <input type="text" name="count" value="{{$task -> count}}" placeholder="" maxlength="3" size="3">
            <label>セット回数 : </label>
            <input type="text" name="setcount" value="{{$task -> setcount}}" maxlength="2" size="2">


            @php
            $date = now();
            @endphp
            <label>プロジェクト実行日 : </label>
            <input class="project-text" type="date" name="excution" valu="{{$task -> deadline}}" >
            
            <br>
            <input type="submit" value="  更新  " class="btn btn-success">

            <input type="hidden" name="id" value="{{$task -> id}}">
            <input type="hidden" name="status" value="{{$task -> status}}">
        </form>
        @endforeach
    </div>




</div>
@include("modal")

@endsection("content")