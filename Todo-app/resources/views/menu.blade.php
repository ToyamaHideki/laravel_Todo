<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <form action="{{route('showtask')}}"  method="get" class="d-flex">
      <input type="text" placeholder="2022-01-01" name="excution">
      <button class="btn btn-success" type="submit">Search</button>
    </form>
    <a href="#" class="js-modal-open btn btn-success btn btn-success " data-target="modal01">新規プロジェクトの作成</a>
    <a href="#" class="js-modal-open btn btn-success btn btn-success " data-target="modal02">新規タスクの作成</a>
    <!-- 日付で検索　検索結果から　sub　に表示 -->
  </div>
</nav>