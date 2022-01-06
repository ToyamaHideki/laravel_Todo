<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
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

      <button class="btn btn-success" type="submit">Search</button>
    </form>
    <!-- 日付で検索　検索結果から　sub　に表示 -->
  </div>
</nav>