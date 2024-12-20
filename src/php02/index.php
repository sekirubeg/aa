<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WorldClock</title>
    <link rel="stylesheet" href="./css/cd.css">
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <a href="/php02/index.php" class="header__logo">World
                Clock</a>
        </div>
    </header>
    <main>
        <div class="index__content">
            <div class="index__header">
                <h2>日本と世界の時間を比較</h2>
            </div>
            <form action="" class="search-form">
                <div class="search-item"></div>
                    <select name="kuni" id="">
                        <option value="シドニー">シドニー</option>
                        <option value="上海">上海</option>
                        <option value="モスクワ">モスクワ</option>
                        <option value="ロンドン">ロンドン</option>
                        <option value="ヨハネスブルグ">ヨハネスブルグ</option>
                        <option value="ニューヨーク">ニューヨーク</option>
                    </select>
                </div>
                <div class="search-submit">
                    <input type="submit" value="検索">
                </div>
            </form>
            </div>
        </div>
    </main>
</body>
</html>