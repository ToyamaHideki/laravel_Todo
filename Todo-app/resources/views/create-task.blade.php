

<form action="{{route('newtask')}}" method="get" class="create-task-form">
    {{ csrf_field() }}

    <div class="task-detail-form">
        <textarea name="detail"  cols="60" rows="7" placeholder="心理状態や、コンディション等記入"></textarea>
    </div>

    <label>ジャンル(必須) : </label>
    <select name="genru">
        <!-- 表示を逆順にできたらよいなぁ -->
        @foreach($genrus as $genru)
        <option value={{$genru -> genru_id}}>{{$genru ->genru_name}}</option>
        @endforeach
        <!-- for文で回してジャンルを表示 -->
    </select>

    <label>タスク名(必須) : </label>
    <input type="text" name="name" placeholder="タスク名を記入" maxlength="50" size="30" required>
    <br>

    <label>回数 : </label>
    <input type="text" name="count" maxlength="3" size="3" >
    <label>セット回数 : </label>
    <input type="text" name="setcount" maxlength="2" size="2" >
    <br>


    @php
    $date = now();
    @endphp
    <label>プロジェクト実行日 : </label>
    <input class="project-text" type="date" name="excution" value={{$date}}>
    <small class="p-small"> ※0000-00-00 の形で記入</small>

    <input type="submit" value="新規タスクの作成" class="btn btn-success">

 
</form>
