<?php 
	require_once('products.php');
	session_start();
	//session_destroy();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>danh sách sản phẩm</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<section class="container">
		<h2 class="text-center">DANH SÁCH SẢN PHẨM</h2>
		<table class="table">
			<thead>
				<tr>
					<th>Mã SP</th>
					<th>Tên SP</th>
					<th>Số lượng</th>
					<th>Đơn giá</th>
					<th>Hình ảnh</th>
					<th>Hành động</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($products as $prod) {
					?>
					<tr>
						<td><?php echo $prod['masp']; ?></td>
						<td><?php echo $prod['tensp']; ?></td>
						<td><?php echo $prod['soluong']; ?></td>
						<td><?php echo number_format($prod['dongia']); ?></td>
						<td><img src="<?php echo $prod['hinhanh']; ?>" width="100px" height="100px"></td>
						<td><a href="addtocart.php?ma=<?php echo $prod['masp']; ?>" class="btn btn-primary">Add to cart</a></td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</section>
</body>
</html>