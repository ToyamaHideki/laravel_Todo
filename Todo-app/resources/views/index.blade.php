@extends("layout")

@section("content")
@include("menu")

<div class="main">

  <div class="SubContent">
        <div class="newProject">
          <h3 class="sub_h3">DAY</h3>
          <a class="btn btn-success P_button" href="#popup1">プロジェクトの新規作成</a>
        </div>
      
        <!-- プロジェクトの表示 -->
        @include("project")
  </div>


  <div class="MainContent">
    <div class="newProject">

      <h1 class="sub_h3">Task</h1>
      <a class="btn btn-success P_button" onclick=disp()>タスクの追加</a>
   </div>

      @include("task")
  </div>
</div>

@include("newprojuct")

@include("newtask")

@endsection("content")