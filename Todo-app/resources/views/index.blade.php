
@extends("layout")

@section("content")
@include("menu")

<div class="main">

  <div class="SubContent">
        <div class="newProject">
          <h3 class="sub_h3">DAY</h3>
          <a href="#" class="js-modal-open btn btn-success btn btn-success P_button" data-target="modal01">新規プロジェクトの作成</a>

        </div>
      
        <!-- プロジェクトの表示 -->
        @include("project")
  </div>


  <div class="MainContent">
    <div class="newProject">

      <h1 class="sub_h3">Task</h1>
      <a href="#" class="js-modal-open btn btn-success btn btn-success P_button" data-target="modal02">新規タスクの作成</a>
      
   </div>

      @include("task")
  </div>
</div>

@include("modal")

@endsection("content")