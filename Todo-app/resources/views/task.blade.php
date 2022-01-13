@if($tasks != null)
@foreach($tasks as $task)

@if($task -> deleted_at == NULL)
<div class="project_Day">
    <div class="pday_div">
        <div>

            <table>
                <tbody>
                    <tr>
                        <th colspan="3">
                            <p>ステータス</p>
                        </th>
                        <td colspan="3">
                            @switch($task -> status)
                            @case(0) <p>期限切れ</p> @break
                            @case(1) <p>未完了</p> @break
                            @case(2) <p>完了</p>
                            @endswitch
                        </td>
                    </tr>
                    <tr>
                        <th>ジャンル</th>
                        <!-- for文 -->
                        <td>{{$task -> genru}}</td>

                        <th>タスク</th>
                        <td colspan="3"><p>{{$task -> name}}</p></td>
                    </tr>
                    <tr>
                        <th colspan="3">セット ×　回数</th>
                        <th colspan="3">メモ</th>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <p>   {{$task -> setcount}}    ×   {{$task -> count}}   </p>
                        </td>
                        <td colspan="3" rowspan="3">
                            <textarea name="" id="" cols="60" rows="3" readonly>
                            {{$task -> detail}}
                            </textarea>
                        </td>
                    </tr>
                    <tr>
                        <th>完了期限</th>
                        <td colspan="2">{{date('Y/m/d', strtotime($task ->deadline))}}</td>
                    </tr>
                    <tr>
                        <th>作成日</th>
                        <td colspan="2">{{$task ->created_at}}</td>
                    </tr>
                    <tr>
                        <th>更新日</th>
                        <td colspan="2">{{$task ->updated_at}}</td>


                         <td rowspan="2">
                            <form action="{{route('clear')}}" method="get">
                                <input type="hidden" name="id" value="{{$task -> id}}" > 
                                <input type="hidden" name="status" value= 1 > 
                                @foreach($excutions as $excution)
                                @if($excution ->excution == $task -> deadline)
                                <input type="hidden" name="excution" value="{{$excution -> excution}}">
                                @endif
                                @endforeach
                                <input type="submit" value="      完了      " class="btn btn-secondary">
                            </form>
                        </td>
                        <!-- 更新ボタン -->
                        <td rowspan="2">
                            <form action="" method="get">
                                <input type="submit" value="      更新      " class="btn btn-success">
                            </form>
                        </td>
                        <!-- 削除ボタン -->
                        <td rowspan="2">
                            <form action="{{route('delete')}}" method="get">
                                <input type="submit" value="      削除      " class="btn btn-danger">
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
    </div>
</div>
@endif
@endforeach
@endif