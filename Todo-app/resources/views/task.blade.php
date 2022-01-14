@if($tasks != NULL)

<div class="task_Day">
    @foreach($tasks as $task)
    @if($task -> deleted_at == NULL)
    <div class="tday_div">
        <table class="task_table">
            <tbody class="task_tbody">
                <tr class="task_tr" >
                    <th colspan="3" >
                        <p>ジャンル</p>
                    </th>
                     <td colspan="3" class="status_td">
                        @switch($task -> status)
                        @case(0) <h3>未完了</h3> @break
                        @case(1) <h3>完了</h3> @break
                        @case(2) <h3>期限切れ2</h3>
                        @endswitch
                    </td>
                </tr>
                <tr class="task_tr">
                    <th></th>
                      <!-- for文 -->
                    @foreach($genrus as $genru)
                    @if($task -> genru == $genru -> genru_id)
                    <td>{{$genru -> genru_name}}</td>
                    @endif
                    @endforeach
                    <th></th>
                      <td colspan="3" class="">
                        <p>タスク:  {{$task -> name}}</p>
                    </td>
                </tr>
                <tr class="task_tr">
                    <th colspan="3" >セット ×　回数</th>
                     <th colspan="3" >メモ</th>
                 </tr>
                <tr class="task_tr">
                    <td colspan="3" class="">
                        <p> {{$task -> setcount}} × {{$task -> count}} </p>
                    </td>
                    <td colspan="3" class="" rowspan="3">
                        <textarea name="" id="" cols="60" rows="3" readonly>
                        {{$task -> detail}}
                        </textarea>
                    </td>
                </tr>
                <tr class="task_tr">
                    <th>完了</th>
                      @if($task->achivement == NULL)
                    <td colspan="2">未完了</td>
                    @else
                    <td colspan="2">{{$task ->achivement}}</td>
                    @endif
                </tr>
                <tr class="task_tr">
                    <th>作成</th>
                      <td colspan="2">{{$task ->created_at}}</td>
                </tr>
                <tr class="task_tr">
                    <th>更新</th>
                      <td colspan="2">{{$task ->updated_at}}</td>


                    <td rowspan="2">
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
                            <input type="submit" value="          完了           " class="btn btn-secondary">
                        </form>
                        @else
                        <form action="{{route('clear')}}" method="get">
                            <input type="hidden" name="id" value="{{$task -> id}}">
                            <input type="hidden" name="status" value="1">
                            <input type="hidden" name="name" value="{{$task -> name}}">
                            @foreach($excutions as $excution)
                            @if($excution ->excution == $task -> deadline)
                            <input type="hidden" name="excution" value="{{$excution -> excution}}">
                            @endif
                            @endforeach
                            <input type="submit" value="   未完了に戻す   " class="btn btn-secondary">
                        </form>
                        @endif
                    </td>
                    <!-- 更新ボタン -->
                    <td rowspan="2">
                        <form action="{{route('edit')}}" method="get">
                            <input type="submit" value="           編集           " class="btn btn-success">
                            <input type="hidden" name="id" value="{{$task -> id}}">
                            @foreach($excutions as $excution)
                            @if($excution ->excution == $task -> deadline)
                            <input type="hidden" name="excution" value="{{$excution -> excution}}">
                            @endif
                            @endforeach
                        </form>
                    </td>
                    <!-- 削除ボタン -->
                    <td rowspan="2">
                        <form action="{{route('delete')}}" method="get">
                            <input type="submit" value="           削除           " class="btn btn-danger">
                            <input type="hidden" name="id" value="{{$task -> id}}">
                            @foreach($excutions as $excution)
                            @if($excution ->excution == $task -> deadline)
                            <input type="hidden" name="excution" value="{{$excution -> excution}}">
                            @endif
                            @endforeach
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endif
@endforeach
</div>
@endif
