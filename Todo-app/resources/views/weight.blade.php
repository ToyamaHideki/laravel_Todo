<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/weight-style.css') }}">
    <link rel="stylesheet" href="chart.js">

    <title>体重管理</title>
</head>

<body>

    <div class="main">


        <div class="SubContent">
            <div class="sidemenu">
                <div class="link">
                    <a href="{{route('home')}}"><img src="{{asset('image/アイコン.jpeg')}}" alt="" width="110px"></a>
                    <a href="{{route('weight')}}"><img src="{{asset('image/体重管理.jpeg')}}" alt="" width="110px"></a>
                </div>
                <ul>
                    <li>理想体重</li>
                    <li>{{$ideal -> ideal}}kg </li>
                    <li>BMI</li>
                    <li>DBから体重 *1.75*1.75</li>

                    <li>
                        <label> 理想体重の更新 </label>
                        <form action="{{route('ideal')}}" method="post">
                            @csrf
                            <input type="text" name="ideal">
                            <input type="hidden" name="id" value="1">
                            <input type="submit" value="更新">

                            <!-- Equivalent to... -->
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        </form>
                    </li>

                    <li>
                        <label>体重</label>
                        <form action="{{route('real')}}" method="post">
                            @csrf
                            <input type="text" name="real">
                            <input type="date" name="date" id="today">
                            <input type="submit" value="登録">
                            <!-- Equivalent to... -->
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        </form>
                    </li>

                    <li>
                        <label>摂取カロリー kcal/日</label>
                        <form action="{{route('calorie')}}" method="post">
                            @csrf
                            <input type="text" name="calorie">
                            <input type="date" name="date" id="">
                            <input type="submit" value="登録">
                            <!-- Equivalent to... -->
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        </form>
                    </li>

                    <li>
                        <label>摂取タンパク質 g/日</label>
                        <form action="{{route('protein')}}" method="post">
                            @csrf
                            <input type="text" name="protein">
                            <input type="date" name="date" id="">
                            <input type="submit" value="登録">
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
                <label>体重管理グラフ</label>
                <div class="chartWrapper" style="position: relative; overflow-x: scroll; height:420px;">
                    <div class="chartContainer" style="height:300px;">
                        <canvas id="chart" style="position: absolute; left: 0; top: 0;"></canvas>
                    </div>
                </div>
            </div>

            <!-- <div class="weightContent">
                <label>摂取カロリー、摂取蛋白質量</label>
                <div class="chartWrapper" style="position: relative; overflow-x: scroll; height:330px;">
                    <div class="chartContainer" style="height:300px;">
                        <canvas id="myLineChart"></canvas>
                    </div>
                </div>
            </div> -->

            <div class="weightContent">
                <label>摂取カロリー、摂取蛋白質量</label>
                <div class="chartWrapper" style="position: relative; overflow-x: scroll; height:420px;">
                    <div class="chartContainer" style="height:400px;">
                        <canvas id="canvas"></canvas>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script>
        var xAxisLabelMinWidth = 30; // データ当たりの幅を設定
        // 体重のデータ
        var data = @json($weight);
        var width = data.length * xAxisLabelMinWidth; // グラフ全体の幅を計算
        document.getElementById('chart').style.width = width + "px"; //　グラフの幅を設定
        document.getElementById('chart').style.height = "400px"; //htmlと同じ高さを設定
        var ctx = document.getElementById('chart').getContext('2d');
        var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: @json($date),
                    type: 'bar',
                    datasets: [{
                        label: '体重 (kg)',
                        data: data,
                        borderColor: "rgba(255,0,0,1)",
                        backgroundColor: "rgba(0,0,0,0)"
                    }],
                },
                options: {
                    responsive: false, //trueにすると画面の幅に合わせて作図してしまう
                    scales: {
                        yAxes: [{
                            id: "y2",
                            position: "left",

                            ticks: {
                                max: 80,
                                min:55,
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
            document.getElementById('canvas').style.height = "400px"; //htmlと同じ高さを設定
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
            scales: {
                yAxes: [{
                    id: "y-axis-1",
                    type: "linear",
                    position: "left",
                    ticks: {
                        min: 0,
                        max: 4000,

                    },
                }, {
                    id: "y-axis-2",
                    type: "linear",
                    position: "right",
                    ticks: {
                        min: 0,
                        max: 250,

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