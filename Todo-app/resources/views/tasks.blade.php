@if($tasks != NULL)



@foreach($tasks as $task)
@if($task -> deleted_at == NULL)

<!-- 要素一つずつを囲うdiv -->
<div class="tasks-div">

    <!-- ステータス表示 -->
    <label class="status-label">
        @switch($task -> status)
        @case(0) <h5>未完了</h5>
        @break
        @case(1) <h5>完了</h5>
        @break
        @case(2) <h5>期限切れ2</h5>
        @endswitch
        <small>
            @if($task->achivement != NULL)
            完了日 : {{$task ->achivement}}
            @endif
        </small>


    </label>

    <br>

    <!-- ジャンル表示 -->
    <label class="genru-label">
        @foreach($genrus as $genru)
        @if($task -> genru == $genru -> genru_id)
        部位 : {{$genru -> genru_name}}
        @endif
        @endforeach
    </label>

    <!--　タスク名 -->
    <label class="task-label">
        種目 : {{$task -> name}}
    </label>

    <div>
        <label class="">セット × 回数</label> <br>
        {{$task -> setcount}} × {{$task -> count}}
    </div>

    <textarea name="" id="" cols="60" rows="3" readonly>
    {{$task -> detail}}
    </textarea>
    <br>


    <label for="">更新日 :
        {{$task ->updated_at}}
    </label>


    <!-- 完了ボタン -->
    @if($task -> achivement == NULL)
    <form action="{{route('clear')}}" method="get">
        <input type="hidden" name="id" value="{{$task -> id}}">
        <input type="hidden" name="status" value="1">
        <input type="hidden" name="name" value="{{$task -> name}}">
        @foreach($excutions as $excution)
        @if($excution ->excution == $task -> deadline)
        <input type="hidden" name="excution" value="{{$excution -> excution}}">
        @endif
        @endforeach
        <input type="submit" value="          完了            " class="btn btn-secondary">
    </form>
    @else
    <form action="{{route('return')}}" method="get">
        <input type="hidden" name="id" value="{{$task -> id}}">
        <input type="hidden" name="status" value="0">
        <input type="hidden" name="name" value="{{$task -> name}}">
        @foreach($excutions as $excution)
        @if($excution ->excution == $task -> deadline)
        <input type="hidden" name="excution" value="{{$excution -> excution}}">
        @endif
        @endforeach
        <input type="submit" value="   未完了に戻す    " class="btn btn-secondary">
    </form>
    @endif

    <!-- 編集ボタン -->
    <form action="{{route('edit')}}" method="get">
        <input type="submit" value="           編集           " class="btn btn-success">
        <input type="hidden" name="id" value="{{$task -> id}}">
        @foreach($excutions as $excution)
        @if($excution ->excution == $task -> deadline)
        <input type="hidden" name="excution" value="{{$excution -> excution}}">
        @endif
        @endforeach
    </form>

    <!-- 削除ボタン -->
    <form action="{{route('delete')}}" method="get">
        <input type="submit" value="           削除           " class="btn btn-danger">
        <input type="hidden" name="id" value="{{$task -> id}}">
        @foreach($excutions as $excution)
        @if($excution ->excution == $task -> deadline)
        <input type="hidden" name="excution" value="{{$excution -> excution}}">
        @endif
        @endforeach
    </form>


</div>

@endif
@endforeach
@endif