<!DOCTYpE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/weight-style.css') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>



    <title>筋トレの美学 - 体重管理 -</title>
</head>

<body>

    <div class="main">


        <div class="SubContent">
            <div class="sidemenu">
                <div class="link">
                    <a href="{{route('home')}}"><img src="{{asset('image/アイコン.jpeg')}}" alt="" width="110px"></a>
                    <a href="{{route('weight')}}"><img src="{{asset('image/体重管理.jpeg')}}" alt="" width="110px"></a>
                </div>
                
                    <h3>目標体重</h3>
                    <h4>{{$ideal -> ideal}} kg </h4>
              

                <br>

                <h3>- 最新状況 -</h3>

                <label class="newlabel">・摂取カロリー</label>
                @if($real -> calorie != NULL)
                <label class="takelabel">{{$real -> calorie}} kcal</label> <br>
                @else
                <br> <label class="takelabel">本日の登録はありません</label> <br>
                @endif
                <label class="newlabel">・摂取蛋白質</label>
                @if($real -> protain != NULL)
                <label class="takelabel">{{$real -> protain}} g </label><br>
                @else
                <br> <label class="takelabel">本日の登録はありません</label> <br>
                @endif
                <label class="newlabel">・体重</label>
                @if($real -> real != NULL)
                <label class="reallabel">{{$real -> real}} kg</label>
                @else
                <br> <label class="takelabel">本日の登録はありません</label> <br>
                @endif

                <br><br>
                <ul>
                
                    <li>
                        <label class="inputlabel">- 体重測定値(kg) -</label>
                        <form action="{{route('real')}}" method="post">
                            @csrf
                            <input type="text" name="real" class="form-control" style="padding:0;">
                            <input type="date" name="date" id="today" class="form-control" style="padding:0;">
                            <input type="submit" value="登録" class="btn btn-outline-primary" style="padding:0 93px 0 93px;">
                            <!-- Equivalent to... -->
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        </form>
                    </li>
                    <br>

                    <li>
                        <label class="inputlabel">- 摂取カロリー (kcal) -</label>
                        <form action="{{route('calorie')}}" method="post">
                            @csrf
                            <input type="text" name="calorie" class="form-control" style="padding:0;">
                            <input type="date" name="date" class="form-control" style="padding:0;">
                            <input type="submit" value="登録" class="btn btn-outline-primary" style="padding:0 93px 0 93px;">

                            <!-- Equivalent to... -->
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        </form>
                    </li>

                    <br>

                    <li>
                        <label class="inputlabel"> - 摂取タンパク質 (g) -</label>
                        <form action="{{route('protein')}}" method="post">
                            @csrf
                            <input type="text" name="protein" class="form-control" style="padding:0;">
                            <input type="date" name="date" class="form-control" style="padding:0;">
                            <input type="submit" value="登録" class="btn btn-outline-primary" style="padding:0 93px 0 93px;">
                            <!-- Equivalent to... -->
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        </form>
                    </li>
                    <br>
                    <li>
                        <label class="ideallabel"> - 目標体重の更新(kg) - </label>
                        <form action="{{route('ideal')}}" method="post">
                            @csrf
                            <input type="text" class="form-control" name="ideal" style="padding:0;">
                            <input type="hidden" name="id" value=1>
                            <input type="submit" value="更新" class="btn btn-outline-primary" style="padding:0 93px 0 93px;">

                            <!-- Equivalent to... -->
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        </form>
                    </li>
                </ul>
            </div>

        </div>


        <!-- グラフ表示エリア -->
        <div class="mainContent">
            <div class="weightContent">
                <div class="chartWraper" style="position: relative; overflow-x: scroll; height:390px;">
                    <div class="chartContainer" style="height:300px;">
                        <canvas id="chart" style="position: absolute; left: 0; top: 0;"></canvas>
                    </div>
                </div>
            </div>

            <div class="weightContent">
                <div class="chartWraper" style="position: relative; overflow-x: scroll; height:400px;">
                    <div class="chartContainer" style="height:400px;">
                        <canvas id="canvas"></canvas>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script>
        var xAxisLabelMinWidth = 25; // データ当たりの幅を設定
        // 体重のデータ
        var data = @json($weight);
        var width = data.length * xAxisLabelMinWidth; // グラフ全体の幅を計算
        document.getElementById('chart').style.width = width + "px"; //　グラフの幅を設定
        document.getElementById('chart').style.height = "370px"; //htmlと同じ高さを設定
        var ctx = document.getElementById('chart').getContext('2d');
        var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: @json($date),
                    datasets: [{
                        label: '体重 (kg)',
                        data: data,
                        borderColor: "rgba(255,0,0,1)",
                        backgroundColor: "rgba(0,0,0,0)"
                    }],
                },
                options: {
                    responsive: false, //trueにすると画面の幅に合わせて作図してしまう
                    title: {
                        display: true,
                        text: '体重管理表'
                    },
                    scales: {
                        yAxes: [{
                            id: "y2",
                            position: "left",

                            ticks: {
                                stepSize: 1,
                                max: 72,
                                min: 62,
                            }
                        }],

                    }
                }
            }

        );
    </script>



    <script type="text/javascript">
        //今日の日時を表示
        window.onload = function() {
            //今日の日時を表示
            var date = new Date()
            var year = date.getFullYear()
            var month = date.getMonth() + 1
            var day = date.getDate()

            var toTwoDigits = function(num, digit) {
                num += ''
                if (num.length < digit) {
                    num = '0' + num
                }
                return num
            }

            var yyyy = toTwoDigits(year, 4)
            var mm = toTwoDigits(month, 2)
            var dd = toTwoDigits(day, 2)
            var ymd = yyyy + "-" + mm + "-" + dd;

            document.getElementById("today").value = ymd;
        }
    </script>



    <!---------------------------------- 試作 ------------------------------------------------------------------>
    <script>
        var xAxisLabelMinWidth = 30; // データ当たりの幅を設定
        window.onload = function() {
            ctx = document.getElementById("canvas").getContext("2d");
            document.getElementById('canvas').style.width = width + "px"; //　グラフの幅を設定
            document.getElementById('canvas').style.height = "380px"; //htmlと同じ高さを設定
            window.myBar = new Chart(ctx, {
                type: 'bar',
                data: barChartData,
                options: complexChartOption
            });
        };

        var barChartData = {
            labels: @json($date),
            datasets: [{
                    type: 'line',
                    label: '摂取カロリー kcal/日',
                    data: @json($calorie),
                    borderColor: "rgba(254,97,132,0.8)",
                    pointBackgroundColor: "rgba(254,97,132,0.8)",
                    fill: false,
                    yAxisID: "y-axis-1", // 追加
                },
                {
                    type: 'bar',
                    label: '摂取タンパク質量 g/日',
                    data: @json($protain),
                    borderColor: "rgba(54,164,235,0.8)",
                    backgroundColor: "rgba(54,164,235,0.5)",
                    yAxisID: "y-axis-2",
                },
            ],
        };


        var complexChartOption = {
            responsive: false,
            title: {
                display: true,
                text: 'カロリー & 蛋白質管理表'
            },
            scales: {
                yAxes: [{
                    id: "y-axis-1",
                    type: "linear",
                    position: "left",
                    ticks: {
                        stepSize: 100,
                        min: 0,
                        max: 3000,

                    },
                }, {
                    id: "y-axis-2",
                    type: "linear",
                    position: "right",
                    ticks: {
                        stepSize: 10,
                        min: 20,
                        max: 150,

                    },
                    gridLines: {
                        drawOnChartArea: false,
                    },
                }],
            }
        };
    </script>


</body>

</html>