@extends("layout")

@section("content")
@include("menu")
<div class="main">

    <div class="SubContent">
        <div class="newProject">
            <h3 class="sub_h3">DAY</h3>
            <!-- モーダル遷移を行う -->
            <a href="#" class="js-modal-open btn btn-success btn btn-success P_button" 
                                            data-target="modal01">新規プロジェクトの作成</a>
        </div>

        <!-- プロジェクトの表示 -->
        @include("project")

    </div>


    <div class="MainContent">
        <div class="newProject">
            <h1 class="sub_h3">Task</h1>
            <!-- モーダル遷移を行う -->
            <a href="#" class="js-modal-open btn btn-success btn btn-success P_button" 
                                                data-target="modal02">新規タスクの作成</a>
        </div>

        <form action="{{route('update')}}" method="get" >
                {{ csrf_field() }}
        @foreach($tasks as $task)
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
                                        <input type="text" name="name" value="{{$task -> name}}"placeholder="タスク名を記入" maxlength="50"  size="50"　required>
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
                                    <select class="select"  name="yy" >
                                        @for ($i = 2022; $i <= 2030; $i++)
                                            <option value= "{{ $i }}" >{{ $i }}年</option>
                                        @endfor
                                    </select>
                            
                            
                                    <!-- 月 -->
                                    <select class="select" name="mm" >
                                        @for ($i = 1; $i <= 12; $i++)
                                            <option value= "{{ $i }}" >{{ $i }}月</option>
                                        @endfor
                                    </select>
                            
                                    <!-- 日 -->
                                    <select class="select" name="dd">
                                        @for ($i = 1; $i <= 31; $i++)
                                            <option value= "{{ $i }}" >{{ $i }}日</option>
                                        @endfor
                                    </select>
                                </td>
                            </tr>

                            <tr>
                                <th colspan="3">タスク詳細(任意)</th>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    <textarea name="detail" cols="65" rows="3">
                                        {{$task -> detail}}
                                    </textarea>
                                </td>
                            </tr>

                            <tr colspan="3">
                                <td>
                                    <input class="btn btn-secondary" type="submit" value="決定">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <input type="hidden" name ="id" value="{{$task -> id}}">
                    <input type="hidden" name="status" value="{{$task -> status}}">
                </form>
            @endforeach
            </div>
        </div>

        
    </div>



</div>
@include("modal")

@endsection("content")