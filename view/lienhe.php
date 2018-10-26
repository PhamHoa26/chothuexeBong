
<div style="text-align: center;">
	<img src="images/sliders/4.jpg" width="70%" style="text-align: center;">
</div>

<div class="panel panel-primary"style="margin-top: 15px" >
		<div class="panel-heading">THÔNG TIN PHẢN HỒI</div>
		<div class="panel-body">
			<form class="form-horizontal" action="?thread=phan-hoi" method="POST">
				<div class="form-group">
					<label class="col-md-3" style="text-align: center;">Chọn nội dung: </label>
					<div class="col-md-9">
						<select class="form-control" name="subject">
							<option>1. Phản hồi về thái độ phục vụ</option>
							<option>2. Phản hồi về chất lượng xe </option>
							<option>3. Phản hồi khác </option>
						</select>
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-3" style="text-align: center;">Nội dung: </label>
					<div class="col-md-9">
						<textarea name="content" required></textarea>
						<script>
							CKEDITOR.replace( 'content' );
						</script>
					</div>
				</div>

				<div class="form-group">
					<div class="col-md-offset-3 col-md-9">
						<button class="btn btn-success" type="submit">Gửi Phản Hồi</button>	
					</div>
				</div>
			</form>
		</div>
	</div>
<div class="panel panel"style="margin-top: 15px" >
	<div class="panel-heading">ĐỊA CHỈ</div>
	<div class="panel-body">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3805.556979621453!2d106.61579481412203!3d17.480905804704136!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314757288672b791%3A0xa2277d73879f6c66!2zMTIwIEzDvSBUaMaw4budbmcgS2nhu4d0LCBQaMaw4budbmcgSOG6o2kgVGjDoG5oLCDEkOG7k25nIEjhu5tpLCBRdeG6o25nIELDrG5oLCBWaWV0bmFt!5e0!3m2!1sen!2s!4v1533116958376" width="100%" height="650" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
</div>