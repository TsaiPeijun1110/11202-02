<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0039) -->

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <!--這段要改--開頭 -->
    <title>健康促進網</title>
    <link href="./css/css.css" rel="stylesheet" type="text/css">
    <script src="./js/jquery-1.9.1.min.js"></script>
    <script src="./js/js.js"></script>
</head>
<!--這段要改--結束 -->

<body>
    <div id="alerr"
        style="background:rgba(51,51,51,0.8); color:#FFF; min-height:100px; width:300px; position:fixed; display:none; z-index:9999; overflow:auto;">
        <pre id="ssaa"></pre>
    </div>
    <!-- <iframe name="back" style="display:none;"></iframe>  這段要刪掉-->
    <div id="all">
        <div id="title">

            <!--這段要寫--開頭 -->
            <?= date("m月d日 1"); ?> |
            今日瀏覽:
            <?= $Total->find(['date' => date("Y-m-d")])['total']; ?> |
            累積瀏覽:
            <?= $Total->sum('total'); ?>
            <a href="index.php" style='float:right'>回首頁</a> <!--float 讓連結靠右對齊-->
        </div>
        <!--這段要寫--結束 -->

        <!--這段要寫--開頭 -->
        <div id="title2" title="健康促進網-回首頁">
            <a href="index.php"><img src="./icon/02B01.jpg" alt=""></a>
        </div>
        <!--這段要寫--結束 -->

        <div id="mm">
            <div class="hal" id="lef">
                <a class="blo" href="?do=admin">帳號管理</a>
                <a class="blo" href="?do=po">分類網誌</a>
                <a class="blo" href="?do=news">最新文章管理</a>
                <a class="blo" href="?do=know">講座管理</a>
                <a class="blo" href="?do=que">問卷管理</a>
            </div>
            <div class="hal" id="main">
                <div>

                    <!--這段要寫--開頭 -->
                    <marquee style="width: 80%;display:inline-block">
                        請民眾踴躍投稿電子報，0讓電子報成為大家相互交流、分享的園地！詳見最新文章
                    </marquee>
                    <!--這段要寫--結束 -->


                    <span style="width:18%; display:inline-block;">
                        <!--這段要寫--開頭 -->
                        <?php
                        if (!isset($_SESSION['user'])) {
                            ?>
                            <a href="?do=login">會員登入</a>
                            <?php
                        } else {

                            ?>
                            歡迎,
                            <?= $_SESSION['user']; ?>
                            <button onclick="location.href='./api/logout.php'">登出</button>

                            <?php
                            if ($_SESSION['user'] == 'admin') {
                                ?>
                                <button onclick="location.href='back.php'">管理</button>
                                <?php
                            }
                        }
                        ?>
                        <!--這段要寫--結束 -->

                    </span>
                    <div class="">

                        <!--這段要寫--開頭 -->
                        <?php
                        $do = $_GET['do'] ?? 'main'; //如果 $_GET['do'] 存在且不為空，則使用它的值，否則使用默認值 'main'
                        $file = "./back/{$do}.php"; //根據得到的 $do 值，組成文件路徑
                        if (file_exists($file)) { //檢查文件是否存在，以避免包含不存在的文件
                            include $file; //如果文件存在，則將其包含進來
                        } else { //否則
                            include "./back/main.php"; //如果文件不存在，則默認包含 main.php 文件
                        }
                        ?>
                        <!--這段要寫--結束 -->

                    </div>
                </div>
            </div>`
        </div>
        <div id="bottom">
            本網站建議使用：IE9.0以上版本，1024 x 768 pixels 以上觀賞瀏覽 ， Copyright © 2012健康促進網社群平台 All Right Reserved
            <br>
            服務信箱：health@test.labor.gov.tw<img src="./icon/02B02.jpg" width="45">
        </div> <!-- 照片連結路徑要改成icon-->
    </div>

</body>

</html>