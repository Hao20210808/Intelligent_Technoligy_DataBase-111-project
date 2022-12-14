<?php
	//載入 db.php 檔案，讓我們可以透過它連接資料庫
	require_once 'MysqlConnect.php';

?>
<!DOCTYPE html>
<html lang="zh-TW">
	<head>
		<title>刪除資料</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<!-- 給行動裝置或平板顯示用，根據裝置寬度而定，初始放大比例 1 -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"/>
	</head>

	<body>
		<!-- div 類別為 container-fluid 代表是滿版的區塊 -->
		<div class="container-fluid">
			<!-- 建立第一個 row 空間，裡面準備放格線系統 -->
			<div class="row">
				<div class="col-xs-12">
					<h2 class="text-center">DELETE 刪除</h2>
					刪除 user 資料表 id 為 1 的資料
					<pre>DELETE FROM `user` WHERE `id` = 1;</pre>
					使用php執行的寫法
					<pre>//載入 db.php 檔案，讓我們可以透過它連接資料庫
						require_once 'db.php';

						//將查詢語法當成字串，記錄在$sql變數中
						$sql = "DELETE FROM `user` WHERE `id` = 1;";

						//用 mysqli_query 方法取執行請求（也就是sql語法），請求後的結果存在 $query 變數中
						$result = mysqli_query($link, $sql);

						if (mysqli_affected_rows($link) > 0)
						{
						  echo "刪除成功";
						}
						elseif (mysqli_affected_rows($link) == 0)
						{
						  echo "無資料刪除";
						}
						else
						{
						  echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);
						}
					</pre>
					<h3>執行結果</h3>
					<div class="well well-sm">
						<?php
						//將查詢語法當成字串，記錄在$sql變數中
						$sql = "DELETE FROM `user` WHERE `id` = 1;";

						//用 mysqli_query 方法取執行請求（也就是sql語法），請求後的結果存在 $query 變數中
            $result = mysqli_query($link, $sql);

            if (mysqli_affected_rows($link) > 0)
            {
              echo "刪除成功";
            }
            elseif (mysqli_affected_rows($link) == 0)
            {
              echo "無資料刪除";
            }
            else
            {
              echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);
            }
            ?>
					</div>

				</div>
			</div>
		</div>
		<?php
		mysqli_close($link);
		?>
	</body>
</html>
