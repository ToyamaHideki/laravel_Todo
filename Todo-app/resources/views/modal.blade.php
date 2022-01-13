<!-- モーダル関連 -->
        <!--ーーーーーーーーーーーーーーーーーーーーー 新規プロジェクト作成(完了) ーーーーーーーーーーーーーーーーーーーーーーーーーー-->
        <div id="modal01" class="modal js-modal">
        <div class="modal-bg js-modal-close">
        </div>
            <div class="modal-content">



                <form class="d-flex" action="{{route('newproject')}}" method="get">
                {{ csrf_field() }}
                <table class="newproject_table" >
          
                    <tr>
                        <td> 
                            <!-- 年 -->
                            <select class="select_p"  style="font-size:150%" name="yy" size="3" placeholder="2022">
                                <option value="2022" selected >2022年</option>
                                @for ($i = 2023; $i <= 2030; $i++)
                                <option value= {{ $i }} >{{ $i }}年</option>
                                @endfor
                            </select>
                        </td>
                    
                        <td>    
                            <!-- 月 -->
                            <select class="select_p" style="font-size:150%" name="mm" size="3" placeholder="">
                                <option value="1" selected >1月</option>
                                @for ($i = 2; $i <= 12; $i++)
                                <option value= {{ $i }} >{{ $i }}月</option>
                                @endfor
                            </select>
                        </td>
                    
                        <td>
                            <!-- 日 -->
                            <select class="select_p"  style="font-size:150%" name="dd" size="3" placeholder="">
                                <option value="1" selected >1日</option>
                                @for ($i = 2; $i <= 31; $i++)
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

                <form action="{{route('newtask')}}" method="get" >
                {{ csrf_field() }}

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
                                          <!-- 表示を逆順にできたらよいなぁ -->
                                          @foreach($genrus as $genru)
                                            <option value={{$genru -> genru_id}}>{{$genru ->genru_name}}</option>                  
                                           @endforeach
                                            <!-- for文で回してジャンルを表示 -->
                                        </select>
                                    </td>
                                    <td colspan="2">       
                                        <input type="text" name="name" placeholder="タスク名を記入" maxlength="50"  size="50"　required>
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
                                    <select class="select"  name="yy" placeholder="2022">
                                        @for ($i = 2022; $i <= 2050; $i++)
                                            <option value= {{ $i }} >{{ $i }}年</option>
                                        @endfor
                                    </select>
                            
                            
                                    <!-- 月 -->
                                    <select class="select" name="mm" placeholder="2022">
                                        @for ($i = 1; $i <= 12; $i++)
                                            <option value= {{ $i }} >{{ $i }}月</option>
                                        @endfor
                                    </select>
                            
                                    <!-- 日 -->
                                    <select class="select" name="dd" placeholder="2022">
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
                                    <textarea name="detail" id="" cols="65" rows="3"></textarea>
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