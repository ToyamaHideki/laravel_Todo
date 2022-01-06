

  <div id="popup1" class="overlay">
    <div class="popup">
      <h2>プロジェクト新規作成</h2>
  <!-- &times;は特殊文字で✖を表示 -->
      <a class="close" href="#">&times;</a>
      <div class="content">


        <!-- ここに日付を挿入 -->
        <form action="#" name="form1">
            <!-- actionを　controllerに飛ばして　DBに登録 -->
          <table>
          
            <tr>
                <form class="d-flex">
                    <!-- 年 -->
                     <select id="yy" placeholder="2022">
                    @for ($i = 2022; $i <= 2050; $i++)
                        <option value= {{ $i }} >{{ $i }}年</option>
                    @endfor
                     </select>
            
            
                     <!-- 月 -->
                     <select id="mm" placeholder="2022">
                    @for ($i = 1; $i <= 12; $i++)
                        <option value= {{ $i }} >{{ $i }}月</option>
                    @endfor
                     </select>
            
                     <!-- 日 -->
                     <select id="dd" placeholder="2022">
                    @for ($i = 1; $i <= 31; $i++)
                        <option value= {{ $i }} >{{ $i }}日</option>
                    @endfor
                     </select>
            
            
                  <button class="btn btn-outline-success" type="submit">新規作成</button>
                </form>
            <tr>
            </table>