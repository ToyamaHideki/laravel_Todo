

<form action="{{route('newtask')}}" method="post" class="create-task-form">
    @csrf

    <div class="task-detail-form">
        <textarea name="detail"  cols="60" rows="7" placeholder="心理状態や、コンディション等記入"></textarea>
    </div>

    <label>ジャンル(必須) : </label>
    <select name="genru">
        @foreach($genrus as $genru)
        
        <option value={{$genru -> genru_id}}>{{$genru -> genru}}:{{$genru ->genru_name}}</option>
        @endforeach
    </select>

    <br>
    <label>タスク名(必須) : </label>
    <input type="text" name="name" placeholder="タスク名を記入" maxlength="26" size="37" required>
    <br>


    <label>回数 : </label>
    <input type="text" name="count" maxlength="3" size="3" >
    <label>セット回数 : </label>
    <input type="text" name="setcount" maxlength="2" size="2" >
   


    @php
    $date = now();
    @endphp
    <label>プロジェクト実行日 : </label>
    <input class="project-text" type="date" name="excution" value={{$date}}>
    <br>

    <input type="submit" value="新規タスクの作成" class="btn btn-success">

 
</form>
