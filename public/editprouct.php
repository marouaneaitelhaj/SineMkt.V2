<!--Css Link  put after title  -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">


<form action="http://localhost/OOP-PHP/public/addProduct/" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="inputEmail">Product Name</label>
        <input type="text" class="form-control" name="productName" id="inputEmail" placeholder="Si mohamed">
    </div>
    <div class="form-group">
        <label for="inputEmail">Pricing</label>
        <input type="text" class="form-control" name="productPrice" id="inputEmail" placeholder="Si mohamed">
    </div>
    <div class="form-group">
        <label for="inputEmail">Product Category</label>
        <input type="text" class="form-control" name="productCategory" id="inputEmail" placeholder="Si mohamed">
    </div>
    <div class="form-group">
        <label for="inputEmail">Products Pictures</label>
        <input type="file" class="form-control" name="productPic" id="inputEmail" placeholder="Si mohamed">
    </div>
    <button type="submit" name="btn" class="btn btn-primary">Add</button>
</form>
<!--Script Link  put befor end of </body> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>