
        <!--ーーーーーーーーーーーーーーーーーーーーー 新規プロジェクト作成 ーーーーーーーーーーーーーーーーーーーーーーーーーー-->
        <div id="modal01" class="modal js-modal">
        <div class="modal-bg js-modal-close">
        </div>
            <div class="modal-content">



                <form class="d-flex" action={{ route('new.project') }} method="get">
                  <!-- 送る先を後で決めなければならないよ -->



                <table class="newproject_table" >
          
                    <tr>
                        <td> 
                            <!-- 年 -->
                            <select class="select_p"  style="font-size:150%" id="yy" placeholder="2022">
                                @for ($i = 2022; $i <= 2050; $i++)
                                <option value= {{ $i }} >{{ $i }}年</option>
                                @endfor
                            </select>
                        </td>
                    
                        <td>    
                            <!-- 月 -->
                            <select class="select_p" style="font-size:150%" id="mm" placeholder="2022">
                                @for ($i = 1; $i <= 12; $i++)
                                <option value= {{ $i }} >{{ $i }}月</option>
                                @endfor
                            </select>
                        </td>
                    
                        <td>
                            <!-- 日 -->
                            <select class="select_p"  style="font-size:150%" id="dd" placeholder="2022">
                                @for ($i = 1; $i <= 31; $i++)
                                <option value= {{ $i }} >{{ $i }}日</option>
                                @endfor
                            </select>
                        </td>
                    
                        <td>
                           <input class="btn btn-secondary" type="submit" value="決定">
                        </td>
                            <tr>
                        </table>
                    </form>
            <span class="square_btn js-modal-close" href="#"></span>
            
            </div>
        </div>
        <!--ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー-->






        <!--ーーーーーーーーーーーーーーーーーーーーーーーー 新規タスク作成 ーーーーーーーーーーーーーーーーーーーーーーーーーーー-->
        <div id="modal02" class="modal js-modal">
        <div class="modal-bg js-modal-close">
        </div>
            <div class="modal-content">

                <form action="コントローラーに送る" class="newproject_form" method="get" >
                <!-- 送る先を決めないといけないよ -->

                    <table class="newproject_table">
                        <tbody>
                            <tr>
                                <tr>
                                    <th>ジャンル</th>
                                    <th colspan="2">タスク名</th>
                                </tr>
                                <tr>
                                    <td>
                                        <select name="genru">
                                            <option value="id">腕</option>                  
                                            <option value="id">胸筋</option>
                                            <!-- for文で回してジャンルを表示 -->
                                        </select>
                                    </td>
                                    <td colspan="2">       
                                        <input type="text" name="task_name" placeholder="タスク名を記入" maxlength="50"  size="50"　required>
                                    </td>
                                </tr>
                            </tr>
                                
                            <tr>
                                <th>セット数</th>
                                <th>回数</th>
                                <th>完了日</th>
                            </tr>

                            <tr>
                                <td>
                                    <!-- セット数 -->
                                    <select name="setcount">
                                        @for($i=1 ; $i<=20 ; $i++)
                                        <option value={{$i}}>{{$i}}</option>
                                        @endfor
                                    </select>
                                </td>

                                <td>
                                    <!-- 回数 -->
                                    <select name="count">
                                        @for($i=1 ; $i<=50 ; $i++)
                                        <option value={{$i}}>{{$i}}</option>
                                        @endfor
                                    </select>
                                    
                                </td>

                                <td>
                                <!-- 完了日 -->
                                    <!-- 年 -->
                                    <select class="select"  id="yy" placeholder="2022">
                                        @for ($i = 2022; $i <= 2050; $i++)
                                            <option value= {{ $i }} >{{ $i }}年</option>
                                        @endfor
                                    </select>
                            
                            
                                    <!-- 月 -->
                                    <select class="select" id="mm" placeholder="2022">
                                        @for ($i = 1; $i <= 12; $i++)
                                            <option value= {{ $i }} >{{ $i }}月</option>
                                        @endfor
                                    </select>
                            
                                    <!-- 日 -->
                                    <select class="select" id="dd" placeholder="2022">
                                        @for ($i = 1; $i <= 31; $i++)
                                            <option value= {{ $i }} >{{ $i }}日</option>
                                        @endfor
                                    </select>
                                </td>
                            </tr>

                            <tr>
                                <th colspan="3">タスク詳細(任意)</th>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    <textarea name="" id="" cols="100" rows="5"></textarea>
                                </td>
                            </tr>

                            <tr colspan="3">
                                <td>
                                    <input class="btn btn-secondary" type="submit" value="決定">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    
                </form>
                <a href="#"><span class="square_btn js-modal-close"></span></a>
            </div>
        </div>







        <!-- 要素の追加はこいつから -->

        <!-- <div id="modal03" class="modal js-modal">
        <div class="modal-bg js-modal-close">
        </div>
            <div class="modal-content">
            <p>ここにコンテンツ３が入ります。ここにコンテンツ３が入ります。ここにコンテンツ３が入ります。</p>
            <img src="img/soccer.jpg" class="aaa">
            <a href="#" class="js-modal-close">閉じる</a>
            </div>
        </div> -->

        <script>
            // モーダルウィンドウを開く
            $('.js-modal-open').on('click', function(){
            var target = $(this).data('target');
            var modal = document.getElementById(target);
            scrollPosition = $(window).scrollTop();

            $('body').addClass('fixed').css({'top': -scrollPosition});
            $(modal).fadeIn();
            return false;
            });

            // モーダルウィンドウを閉じる
            $('.js-modal-close').on('click', function(){
            $('body').removeClass('fixed');
            window.scrollTo( 0 , scrollPosition );
            $('.js-modal').fadeOut();
            return false;
            });
        </script>
  