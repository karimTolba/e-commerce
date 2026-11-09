<!DOCTYPE html>
<html>
<head>
    <title>Product Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <h1>Product Form</h1>
    <form id="loginForm" action="submit_product.php" method="POST" enctype="multipart/form-data">  
    <div class="form-group d-flex flex-column gap-3">
        <label for="exampleInputProduct_title">product title</label>
        <input type="text" class="form-control" name="product_title" id="exampleInputProduct_title" placeholder="Enter product title">
    </div>
      <div class="form-group d-flex flex-column gap-3">
        <label for="exampleInputProduct_price">product price</label>
        <input type="text" class="form-control" name="product_price" id="exampleInputProduct_price" placeholder="Enter product price">
    </div>
      <div class="form-group d-flex flex-column gap-3">
        <label for="exampleInputProduct_description">product description</label>
        <textarea class="form-control" name="product_description" id="exampleInputProduct_description" placeholder="Enter product description"></textarea>
    </div>
    <div class="form-group d-flex flex-column gap-3">
        <label for="exampleInputProduct_image">product image</label>
        <input type="file" class="form-control" name="product_image" id="exampleInputProduct_image" placeholder="Enter product image URL">
    </div>
    <div class="form-group d-flex flex-column gap-3">
        <label for="exampleInputProduct_stock">product stock</label>
        <input type="text" class="form-control" name="product_stock" id="exampleInputProduct_stock" placeholder="Enter product stock">
    </div>
    <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>

    <script>

        const form = document.getElementById('loginForm');
        const exampleInputProduct_title = document.getElementById('exampleInputProduct_title');
        const exampleInputProduct_price = document.getElementById('exampleInputProduct_price');
        const exampleInputProduct_description = document.getElementById('exampleInputProduct_description');
        const exampleInputProduct_stock = document.getElementById('exampleInputProduct_stock');
        const exampleInputProduct_image = document.getElementById('exampleInputProduct_image');
       

        window.onload = () => {
            exampleInputProduct_title.focus();
        };

        form.addEventListener('submit', function(event) {
            // 1. إزالة الفراغات من أطراف النصوص للتأكد أن المستخدم لم يدخل مسافات فقط
            const titleValue = exampleInputProduct_title.value.trim();
            const priceValue = exampleInputProduct_price.value.trim();
            const descriptionValue = exampleInputProduct_description.value.trim();
            const stockValue = exampleInputProduct_stock.value.trim();
            const imageValue = exampleInputProduct_image.value.trim();

            // 2. التحقق ما إذا كانت الحقول فارغة
            if (titleValue === "" || priceValue === "" || descriptionValue === "" || stockValue === "" || imageValue === "") {
            // 3. إيقاف إرسال النموذج ومنع تحديث الصفحة
                event.preventDefault(); 
            
            // 4. عرض رسالة الخطأ للمستخدم
                alert("عذراً، يجب ملء جميع الحقول المطلوبة!");
            } 
        });
      
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js"></script> 
</body>
</html>