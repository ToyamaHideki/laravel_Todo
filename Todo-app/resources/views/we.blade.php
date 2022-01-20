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
                <div class="menu-var"></div>
                <ul>
                    <li>理想体重</li>
                    <li> DB から(ideal-weight) kg </li>
                    <li>BMI</li>
                    <li>DBから体重 *1.75*1.75</li>

                    <li>
                        <form action="" method="get">
                            <input type="text" name="ideal-weight" >
                            <input type="submit" value="更新">
                        </form>
                    </li>

                    <li>
                        <label>体重</label>
                        <form action="" method ="get">
                            <input type="text" name ="weight" >
                            <input type="submit" value="登録">
                        </form>
                    </li>

                    <li>
                        <label>摂取カロリー</label>
                        <form action="" method ="get">
                            <input type="text" name ="weight" >
                            <input type="submit" value="登録">
                        </form>
                    </li>

                    <li>
                        <label>摂取タンパク質</label>
                        <form action="" method ="get">
                            <input type="text" name ="weight" >
                            <input type="submit" value="登録">
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

            <div class="weightContent">
            <label>摂取カロリー、摂取蛋白質量</label>
                <div class="chartWrapper" style="position: relative; overflow-x: scroll; height:330px;">
                    <div class="chartContainer" style="height:300px;">
                        <canvas id="myLineChart"></canvas>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script>
        var xAxisLabelMinWidth = 40; // データ当たりの幅を設定
        var data = [60,60.6,60.6,60.7,60.8,60,60,60,60,61,61,61,61,61,62,62,62,62,62,62,61,61,61,61,61,62,62,62,62,63,63,63,63,63,63,63,64,64,64,64,64,64,64,64,64,64,65,65,65,65,65,65,64,64,64
        ];
        var width = data.length * xAxisLabelMinWidth; // グラフ全体の幅を計算
        document.getElementById('chart').style.width = width + "px"; //　グラフの幅を設定
        document.getElementById('chart').style.height = "400px"; //htmlと同じ高さを設定
        var myChart = new Chart(document.getElementById('chart').getContext('2d'), {
                type: 'line',
                data: {
                    labels: ['2020/01/01', '2020/01/01', '2020/01/01', '2020/01/01', '2020/01/01', '2020/01/01', '2020/01/01', '2020/01/01', '2020/01/01', '2020/01/01', '2020/01/01', '2020/01/01', '2020/01/01', '2020/01/01', '2020/01/01', '2020/01/01', '2020/01/01', '2020/01/01', '2020/01/01', '2020/01/01', '2020/01/01', '2020/01/01', '2020/01/01', '2020/01/01', '2020/01/01', '2020/01/01', '2020/01/01', '2020/01/01','2020/01/01', '2020/01/01', '2020/01/01', '2020/01/01', '2020/01/01', '2020/01/01', '2020/01/01', '2020/01/01', '2020/01/01', '2020/01/01', '2020/01/01', '2020/01/01', '2020/01/01', '2020/01/01', '2020/01/01', '2020/01/01', '2020/01/01', '2020/01/01', '2020/01/01','2020/01/01', '2020/01/01', '2020/01/01', '2020/01/01', '2020/01/01', '2020/01/01', '2020/01/01', '2020/01/01', '2020/01/01', '2020/01/01', '2020/01/01', '2020/01/01', '2020/01/01', '2020/01/01', '2020/01/01', '2020/01/01', '2020/01/01', '2020/01/01', '2020/01/01',],
                    datasets: [{
                        label: '体重',
                        data: data,
                        borderColor: "rgba(255,0,0,1)",
                        backgroundColor: "rgba(0,0,0,0)"
                    }],
                },
                options: {
                    responsive: false, //trueにすると画面の幅に合わせて作図してしまう
                }
            }

        );

        var width = data.length * xAxisLabelMinWidth; // グラフ全体の幅を計算
        document.getElementById('myLineChart').style.width = width + "px"; //　グラフの幅を設定
        document.getElementById('myLineChart').style.height = "300px"; //htmlと同じ高さを設定
        var ctx = document.getElementById("myLineChart");
        var myLineChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['8月1日', '8月2日', '8月3日', '8月4日', '8月5日', '8月6日', '8月7日','8月1日', '8月2日', '8月3日', '8月4日', '8月5日', '8月6日', '8月7日','8月1日', '8月2日', '8月3日', '8月4日', '8月5日', '8月6日', '8月7日','8月1日', '8月2日', '8月3日', '8月4日', '8月5日', '8月6日', '8月7日'],
                datasets: [{
                        label: '摂取カロリー kcal/日',
                        data: [1750,1900,2000,1890,1700],
                        borderColor: "rgba(255,0,0,1)",
                        backgroundColor: "rgba(0,0,0,0)"
                    },
                    {
                        label: '摂取蛋白質量 g/日',
                        data: [25, 27, 27, 25, 26, 27, 25, 21,24,33,15,26],
                        borderColor: "rgba(0,0,255,1)",
                        backgroundColor: "rgba(0,0,0,0)"
                    }
                ],
            },
            options: {
                responsive: false,
                title: {
                    display: true,
                },
                scales: {
                    yAxes: [{
                        ticks: {
                            suggestedMax: 40,
                            suggestedMin: 0,
                            stepSize: 10,
                           
                        }
                    }]
                },
            }
        });
    </script>


</body>

</html>