

    

        <div class="form-class">
        <form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <?php
        					while ($row = mysqli_fetch_array($data['query'])){

                            
        ?>
        <label for="inputEmail">Product Name</label>
        <input type="text" class="form-control" value="<?php echo $row['productName'];?>" name="productName" id="inputEmail" placeholder="Si mohamed">
    </div>
    <div class="form-group">
        <label for="inputEmail">Pricing</label>
        <input type="number" value="<?php echo $row['productPrice'];?>" class="form-control" name="productPrice" id="inputEmail" placeholder="Si mohamed">
    </div>
    <div class="form-group">
        <label for="inputEmail">Product Category</label>
        <input type="text" class="form-control" value="<?php echo $row['productCategory'];?>" name="productCategory" id="inputEmail" placeholder="Si mohamed">
    </div>
    <div class="form-group">
        <label for="inputEmail">Products Pictures</label>
        <input type="file" class="form-control" value="<?php echo $row['productPic'];?>" name="productPic" id="inputEmail" placeholder="Si mohamed">
    </div>
    <button type="submit" name="btn" class="btn btn-primary">Edit</button>
</form>
    </div>
    <?php
    }
    ?>
    <!--Script Link  put befor end of </body> -->
    <footer id="footer" class="footer">
		<div class="container">
			<div class="hm-footer-copyright text-center">
				<div class="footer-social">
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-instagram"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-pinterest"></i></a>
					<a href="#"><i class="fa fa-behance"></i></a>
				</div>
				<p>
					&copy;copyright. designed and developed by <a href="https://www.themesine.com/">themesine</a>
				</p>
				<!--/p-->
			</div>
			<!--/.text-center-->
		</div>
		<!--/.container-->

		<div id="scroll-Top">
			<div class="return-to-top">
				<i class="fa fa-angle-up " id="scroll-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="Back to Top" aria-hidden="true"></i>
			</div>

		</div>
		<!--/.scroll-Top-->

	</footer>