//Thực hiện câu truy vấn trong bảng tin tức
if(isset($_GET["begin"])) {
	$position=$_GET["begin"];
} else {
	$position=0;
}
$display=2;
.... ORDER BY news_id DESC LIMIT $position, $display;



<?php
$display=2;
require("library/config.php");
$sql = "SELECT * FROM news WHERE cate_id='$id'";
$result = mysqli_query($conn, $sql);
$sum_news = mysqli_num_rows($result);
$sum_page=ceil($sum_news / $display);
if($sum_page>1) {
echo "<ul class='pagination'>";
	$current = ($position / $display) + 1;

	if($current!=1) {
		$prev = $position - $display;
		echo "<li><a href='category.php?id=1&begin=$prev'>&#10094; Previous</a></li>";
	}

	for($page=1; $page<=$sum_page; $page++) {
		$begin = ($page-1)*$display;
		if($page==$current) {
 		echo "<li><a class='green' href='category.php?id=1&begin=$begin'>$page</a></li>";
 		} else {
 		echo "<li><a href='category.php?id=1&begin=$begin'>$page</a></li>";
 		}
	}
	if($current!=$sum_page) {
		$next = $position + $display;
		echo "<li><a href='category.php?id=1&begin=$next'>Next &#10095;</a></li>";
	}
echo "</ul>";
}
mysqli_close($conn);