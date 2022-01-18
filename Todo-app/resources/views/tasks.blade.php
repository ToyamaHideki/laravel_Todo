@if($tasks != NULL)



@foreach($tasks as $task)
@if($task -> deleted_at == NULL)

<!-- 要素一つずつを囲うdiv -->
<div class="tasks-div">
    @php
    $time = date("Y-m-d")
    @endphp

    <!-- ステータス表示 -->

    @if($task -> status == "1" && $task -> deadline < $time)
     <label class="status-label" style="background: rgb(252, 83, 83);">
        <h5>期限切れ</h5>
        </label>
        @else
        @switch($task -> status)
        @case(1)
        <label class="status-label" style="background: rgb(252, 83, 83);">
            未達成
            </label>
        @break
        @case(0)
        <label class="status-label" style="background: rgb(209, 235, 62);">
            達成
            <small>
                @if($task->achivement != NULL)
                {{$task ->achivement}}
                @endif
            </small>

        </label>
        @break
        @endswitch
        @endif



        </label>

        <br>

        <!-- ジャンル表示 -->
        <label class="genru-label">
            @foreach($genrus as $genru)
            @if($task -> genru == $genru -> genru_id)
            部位 :({{$genru -> genru}}) {{$genru -> genru_name}}
            @endif
            @endforeach
        </label>

        <br>
        <!--　タスク名 -->
        <label class="task-label">
            種目 : {{$task -> name}}
        </label>

        <br>
        <label class="count-label">
            セット: {{$task -> setcount}} &emsp;&emsp;&emsp;
             回数 : {{$task -> count}}
        </label>
        <label class="coment-label">
        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;  詳細
        </label>
        <br>

        <textarea name="" id="" cols="60" rows="3" readonly>
        {{$task -> detail}}
        </textarea>
        <br>


        <label class="update-label">&emsp;更新日 :
            {{$task ->updated_at}}&emsp;&emsp;&emsp;&emsp;
        </label>
        <label class="deadline-class">
            完了期限 : {{$task -> deadline}}
        </label>



        <!-- 完了ボタン -->
        @if($task -> achivement == NULL)
        <form class="clear-form" action="{{route('clear')}}" method="post">
            @csrf
            <input type="hidden" name="id" value="{{$task -> id}}">
            <input type="hidden" name="status" value="0">
            <input type="hidden" name="name" value="{{$task -> name}}">
            @foreach($excutions as $excution)
            @if($excution ->excution == $task -> deadline)
            <input type="hidden" name="excution" value="{{$excution -> excution}}">
            @endif
            @endforeach
            <input type="submit" value="          達成            " class="btn btn-secondary clear-button">
        </form>
        @else
        <form class="clear-form" action="{{route('return')}}" method="get">
            @csrf
            <input type="hidden" name="id" value="{{$task -> id}}">
            <input type="hidden" name="status" value="1">
            <input type="hidden" name="name" value="{{$task -> name}}">
            @foreach($excutions as $excution)
            @if($excution ->excution == $task -> deadline)
            <input type="hidden" name="excution" value="{{$excution -> excution}}">
            @endif
            @endforeach
            <input type="submit" value="           未達成            " class="btn btn-secondary clear-button">
        </form>
        @endif


        <!-- 編集ボタン -->
        <form class="edit-form" action="{{route('edit')}}" method="get">
            @csrf
            <input type="submit" value="           編集           " class="btn btn-success edit-button">
            <input type="hidden" name="id" value="{{$task -> id}}">
            @foreach($excutions as $excution)
            @if($excution ->excution == $task -> deadline)
            <input type="hidden" name="excution" value="{{$excution -> excution}}">
            @endif
            @endforeach
        </form>



        <!-- 削除ボタン -->
        <form class="delete-form" action="{{route('delete')}}" method="get">
            <button type="submit" class="delete-button">
                <img src="https://img.icons8.com/emoji/48/000000/cross-mark-emoji.png" type="submit">
            </button>
            <!-- <input type="submit" value="           削除           " class="btn btn-danger"> -->
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