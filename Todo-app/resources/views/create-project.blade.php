@php
$date = now();
@endphp

    <form action="{{route('newproject')}}" method="post">
        @csrf
        <br>
        <input class="project-text" type="date" name="excution" value="">
        <input class="btn btn-success P_button" type="submit" value="   新規プロジェクト作成    ">
    </form>
    <form action="{{route('search')}}" method="get">
    <br>
        <input class="project-text" type="month" name="excution" >
        <input class="btn btn-success P_button" type="submit" value="   既存プロジェクト検索    ">
    </form>
</div>