@extends("layout")

@section("content")


<div class="main">


    <div class="SubContent">
        <a href="{{route('home')}}"><h3>HOME</h3></a>
        <!-- プロジェクトの表示 -->
        @include("project")
    </div>


    <!-- 日付タスク表示 -->
    <div class="MainContent">
        @include("tasks")
    </div>


    <!-- 新規プロジェクトの作成 -->
    <div class="create-project-content">
        @include("create-project")
    </div>


    <!-- タスクを作成 -->
    <div class="create-task-content">
        @include("create-task")
    </div>



</div>
@include("modal")

@endsection("content")