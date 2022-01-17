@php
$date = now();
@endphp

    <form action="{{route('newproject')}}" method="get">
        <small class="p-small"> 0000-00-00 の形で記入</small>
        <input class="project-text" type="date" name="excution" value="DOMString">
        <input class="btn btn-success P_button" type="submit" value="   新規プロジェクト作成    ">
    </form>
    <form action="{{route('search')}}" method="get">
        <small class="p-small"> 0000-00-00 の形で記入</small>
        <input class="project-text" type="month" name="excution" >
        <input class="btn btn-success P_button" type="submit" value="   既存プロジェクト検索    ">
    </form>
</div>