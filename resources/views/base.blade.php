<html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="Generator" content="EditPlus">
    <meta name="Author" content="">
    <meta name="Keywords" content="">
    <meta name="Description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>蝦農人生訂購頁</title>
    <link href="vendor/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="vendor/css/all.css" type="text/css" />
    <!-- Custom styles for this template -->
    <link href="vendor/css/features.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="vendor/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/js/tw-city-selector.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="vendor/js/main.js"></script>
</head>
<body>

@yield('main')

<div class="container px-4 py-5">
    <h2 class="pb-2 border-bottom">蝦農人生</h2>

    <div class="row row-cols-1 row-cols-md-2 align-items-md-center g-5 py-5">
        <div class="d-flex flex-column align-items-start gap-2">
            <h3 class="fw-bold">訂購須知</h3>
            <p class="text-muted">下單前請先詳閱，如能接受再請購買唷～謝謝！</p>
            <li>照片拍攝時會遠拍或拉近特寫，故請勿自行想像尺寸，出貨大小依文案標示為主，照片因不同顯示器顏色會有些許不同，如有任何疑問請與我們詳細溝通後再下訂</li>
            <li>活體出貨皆指定宅配隔日13點前收件，無提供超商取貨，如無法於該時間內收件、開箱確認、入缸需自負死傷風險</li>
            <li>收件後請立即開箱並全程錄影，有任何問題請於收件後一小時內回傳影片，若有活體死亡請勿拆袋並立即聯絡我們(收件時間以貨運司機第一次配送時間為準)</li>
            <li>若活體於運送過程中有死亡，將於下次訂購時補償或抵扣該活體金額</li>
            <li>蝦在運送過程中會有飛色的情形，入缸後顏色會慢慢恢復正常</li>
            <li>購蝦運費皆為$200(含包材)；訂單內不含活體可選超商取貨$60(全家/7-11)或宅配</li>
            <li>購蝦滿$300才出貨(不含運費)</li>
        </div>
        <div class="row row-cols-1 row-cols-sm-2 g-4">
            <div class="d-flex flex-column gap-2">
                <a href="https://www.youtube.com/channel/UCDKUxpKrYPyymag3pOO9Miw" target="_blank">
                    <div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-danger fs-4 rounded-3">
                        <svg class="bi" width="1em" height="1em">
                            <use xlink:href="#collection"></use>
                        </svg>
                    </div>
                    <h4 class="fw-semibold mb-0">YouTube</h4>
                </a>

                <p class="text-muted">分享多年養殖經驗，並用輕鬆易懂的方式聊聊水族知識，讓大家一次養魚／蝦就上手！歡迎訂閱、分享唷～</p>
            </div>

            <div class="d-flex flex-column gap-2">
                <a href="https://www.instagram.com/shrimshare" target="_blank">
                    <div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-warning fs-4 rounded-3">
                        <svg class="bi">
                            <use xlink:href="#shrimp1"></use>
                        </svg>
                    </div>
                    <h4 class="fw-semibold mb-0">IG</h4>
                </a>
                <p class="text-muted">分享蝦兒有趣的事及蝦農日常，歡迎魚友/蝦友追蹤、留言一起交流</p>
            </div>

            <div class="d-flex flex-column gap-2">
                <a href="https://www.facebook.com/profile.php?id=100063867794880" target="_blank">
                    <div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
                        <svg class="bi" width="1em" height="1em">
                            <use xlink:href="#speedometer"></use>
                        </svg>
                    </div>
                    <h4 class="fw-semibold mb-0">Facebook</h4>
                </a>
                <p class="text-muted">分享蝦兒有趣的事及蝦農日常，歡迎魚友/蝦友追蹤、留言一起交流</p>
            </div>

            <div class="d-flex flex-column gap-2">
                <div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-dark fs-4 rounded-3">
                    <svg class="bi" width="1em" height="1em">
                        <use xlink:href="#table"></use>
                    </svg>
                </div>
                <h4 class="fw-semibold mb-0">我要訂購</h4>
                <p class="text-muted">欲訂購蝦可<font color="blue">於此頁截圖</font>至ＩＧ／ＦＢ／ＬＩＮＥ＠私訊</p>
                <a href="https://line.me/ti/p/~@730peinl" target="_blank" class="btn btn-success btn-lg">點我加LINE@730peinl</a>
            </div>
        </div>
    </div>
</div>
</main>

<div id="RightFloatTop-2">
    <div>
        <a href="" class="cartlink">
            <i class="fa-solid fa-cart-shopping"></i>
            <span class="badge badge-danger cart-count">{{ $cartCount }}</span>
        </a>
    </div>
</div>
<div id="RightFloatTop">
    <div>
        <a href="https://line.me/ti/p/~@730peinl" target="_blank">
            <img src="/images/Line_icon.png" class="linelogo">
        </a>
    </div>
</div>


</body>

</html>
