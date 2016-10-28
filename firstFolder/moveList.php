<?php 
	header("Content-Type: text/html; charset=utf-8");
	include("connMysql.php");
	$seldb = @mysql_select_db("movies");
	if (!$seldb) die("資料庫選擇失敗！");
	$sql_query = "SELECT * FROM `movieTZ`";
	$result = mysql_query($sql_query);
	$total_records = mysql_num_rows($result);
?>

<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Move Search</title>
</head>

<body>
	<h1 align="center">此週電影列表</h1>

	<table border="1" align="center">
		<tr>
			<th>電影名稱</th>
			<th>日期</th>
			<th>星期</th>
			<th>時段</th>
		</tr>

		<?php
	while($row_result=mysql_fetch_assoc($result)){
		echo "<tr>";
		echo "<td>".$row_result["mName"]."</td>";
		echo "<td>".$row_result["mDate"]."</td>";
		echo "<td>".$row_result["mWeek"]."</td>";
		echo "<td>".$row_result["mTime"]."</td>";
	}
?>

			<div style="text-align:center;">

				<div style="margin:0 auto; width:150px;"><input type="button" id "reback" value="回上一頁" 　class="btn-md" onclick="self.location.href='https://lab0001-livevil404.c9users.io/firstFolder'"></a>
				</div>

			</div>
</body>

</html>
