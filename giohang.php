<?php 
	session_start();
	$products=$_SESSION['cart'];
	// echo "<pre>";
	// 	print_r($products);
	// echo "</pre>";
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Giỏ hàng</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<section class="container">
		<h2 class="text-center">GIỎ HÀNG</h2>
		<a href="showproduct.php" class="btn btn-primary">Home >></a>
		<?php
		$i=0;
		foreach ($products as $product) {
			$i++;
		}
		echo "<h4>Đang có ".$i." sản phẩm trong giỏ hàng</h4>";
		?>
		
		<table class="table">
			<thead>
				<tr>
					<th>Mã SP</th>
					<th>Tên SP</th>
					<th>Số lượng</th>
					<th>Đơn giá</th>
					<th>Hình ảnh</th>
					<th>Thành tiền</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$total=0;
				foreach ($products as $product) {
					$total+=$product['dongia']*$product['soluong'];
					?>

					<tr>
						<td><?php echo $product['masp']; ?></td>
						<td><?php echo $product['tensp']; ?></td>
						<td>
							<a href="addtocart.php?ma=<?php echo $product['masp']; ?>" class="btn btn-primary">+</a>
							<?php echo $product['soluong']; ?>
							<a href="xoagiohang.php?ma=<?php echo $product['masp']; ?>" class="btn btn-warning">-</a>
						</td>
						<td><?php echo number_format($product['dongia']); ?></td>
						<td><img src="<?php echo $product['hinhanh']; ?>" width="100px" height="100px"></td>
						<td class="text-right"><?php echo number_format($product['dongia']*$product['soluong']); ?></td>
					</tr>
				<?php }
				?>
				<tr class="text-right">
					<td colspan="5">Tổng tiền</td>
					<td><?php echo number_format($total); ?></td>
				</tr>
			</tbody>
		</table>
	</section>
</body>
</html>