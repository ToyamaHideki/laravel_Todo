<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js" integrity="sha512-TW5s0IT/IppJtu76UbysrBH9Hy/5X41OTAbQuffZFU6lQ1rdcLHzpU5BzVvr/YFykoiMYZVWlr/PX1mDcfM9Qg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.esm.js" integrity="sha512-Jmi+uNSDc8pyBNQbRkhwxqTtRsAzq1p0IK7dSLjaudwIIqoG2giyWRvsh4bbPd2mNSbK1GyEiBUO86RSs428UQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.esm.min.js" integrity="sha512-SaY95UIbYlNfmc6tZOtqEWMyDHpIKJwXCPfDZNvgudlFZiJjMU3XJNrSnkVCL/3b7szsoU3hDXpUz6+TdLY1ag==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.js" integrity="sha512-uLlukEfSLB7gWRBvzpDnLGvzNUluF19IDEdUoyGAtaO0MVSBsQ+g3qhLRL3GTVoEzKpc24rVT6X1Pr5fmsShBg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/helpers.esm.js" integrity="sha512-NrPCPNanqa1FM/aKCsKqZaEKs0X9M0JMVB9bjX8T2f50/LHQD+gHn0CX/ZN+kNkDPfXsQGfic21b/rKknQdC3Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/helpers.esm.min.js" integrity="sha512-urWBnIv+F027G24xDNigjxvIuwnWlWy94W2yx77VkISKLzKSohOKOubMDhtEF6LZcEH7gctmNSpxDqIW/zMmUg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <link rel="stylesheet" href="{{ asset('css/weight-style.css') }}">

    <link rel="stylesheet" href="chart.js">

    <title>体重管理</title>
</head>

<body>

    <header>
        <div class="menu">
            <ul>
                <li>体重管理</li>
            </ul>
        </div>
    </header>
    <div class="main">

        <div class="subContent">

            <div class="sidemenu">
                <div class="menu-var"></div>
                <ul>
                    <li>理想体重</li>
                    <li>DBから表示</li>
                    <li>BMI</li>
                    <li>DBから体重 *1.75*1.75</li>
                </ul>
            </div>

        </div>

        <div class="mainContent">

            <div class="weightContent">
                <label for="">体重管理グラフ</label>
                <canvas class="weight-glaf" id="myChart"></canvas>
            </div>


            <!-- 
        <div class="weightContent2">
        <label for="">体重管理グラフ</label>
        <canvas id="weight" ></canvas>
    </div>
    
    <div class="weightContent3">
        <label for="">摂取カロリー kcal/日</label>
        <canvas id="myChart3"></canvas>
    </div>
    
    <div class="weightContent4">
        <label for="">蛋白質摂取量 g/日</label>
        <canvas id="myChart4"></canvas>
    </div> -->

        </div>
    </div>



    <script>
        var ctx = document.getElementById("myChart").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["赤", "青", "黄色", "緑", "紫", "橙", "あ", "a", "a", "a", "赤", "青", "黄色", "緑", "紫", "橙", "あ", "a", "a", "a", "赤", "青", "黄色", "緑", "紫", "橙", "あ", "a", "a", "a", "赤", "青", "黄色", "緑", "紫", "橙", "あ", "a", "a", "a",

                ],
                datasets: [{
                    label: '得票数',

                    data: [60, 66, 63, 64, 66, 64, 66, 66.6, 66.4, 66.0],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(153, 102, 255, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255,99,132,1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255,99,132,1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255,99,132,1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255,99,132,1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    </script>
    <script>
        var ctx = document.getElementById("myChart3").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["赤", "青", "黄色", "緑", "紫", "橙"],
                datasets: [{
                    label: '得票数',

                    data: [12, 19, 3, 5, 2, 8],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255,99,132,1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 4
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    </script>
    <script>
        var ctx = document.getElementById("myChart4").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["赤", "青", "黄色", "緑", "紫", "橙"],
                datasets: [{
                    label: '得票数',

                    data: [12, 19, 3, 5, 2, 8],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255,99,132,1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 4
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    </script>

    <!-- weight -->
    <script>
        // ここの部分をDBの作成データの日付を合わせる
        var labels = [
            "2020年1月",
            "2020年2月",
            "2020年3月",
            "2020年4月",
            "2020年5月",
            "2020年6月",
        ];
        //平均体重ログ
        var average_weight_log = [
            50.0, //1月のデータ
            51.0, //2月のデータ
            52.0, //3月のデータ
            53.0, //4月のデータ
            54.0, //5月のデータ
            49.0 //6月のデータ
        ];
        //最大体重ログ
        var max_weight_log = [
            52.0, //1月のデータ
            54.0, //2月のデータ
            55.0, //3月のデータ
            51.0, //4月のデータ
            57.0, //5月のデータ
            48.0 //6月のデータ
        ];
        //最小体重ログ
        var min_weight_log = [
            48.0, //1月のデータ
            47.0, //2月のデータ
            45.0, //3月のデータ
            44.0, //4月のデータ
            43.0, //5月のデータ
            49.0 //6月のデータ
        ];

        //グラフを描画
        var ctx = document.getElementById("weight");
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: labels,
                datasets: [{
                        label: '平均体重',
                        data: average_weight_log,
                        borderColor: "rgba(0,0,255,1)",
                        backgroundColor: "rgba(0,0,0,0)"
                    },
                    {
                        label: '最大',
                        data: max_weight_log,
                        borderColor: "rgba(0,255,0,1)",
                        backgroundColor: "rgba(0,0,0,0)"
                    },
                    {
                        label: '最小',
                        data: min_weight_log,
                        borderColor: "rgba(255,0,0,1)",
                        backgroundColor: "rgba(0,0,0,0)"
                    }
                ]
            },
            options: {
                title: {
                    display: true,
                    text: '体重ログ（６ヶ月平均）'
                }
            }
        });
    </script>

</body>

</html>