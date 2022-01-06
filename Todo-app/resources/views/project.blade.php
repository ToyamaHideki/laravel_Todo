<!-- 要素がある分だけ表示する -->
<!-- Controllerから送られてくる値　task_id と作成日 -->
<div>
@for($i =0 ; $i < 10 ; $i++)
<div class="project_Day">
    <div class="pday_div">
        <h4 class = "pday_h4">ココに作成日</h4>
        <form action="コントローラーに接続" method="get" class="pdayform">
            <input type="hidden" value="task_id">
            <input class="P_button" type="submit" value="詳細">
        </form>
    </div>
</div>
@endfor
</div>