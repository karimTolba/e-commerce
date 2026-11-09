<?php

include 'db_connection.php';

$sql = "SELECT * FROM products";

$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>متجر المنتجات الذكية</title>
    <!-- ربط مكتبة الأيقونات Font Awesome -->
    <link rel="stylesheet" href="https://cloudflare.com">
    <style>
        /* إعدادات الخطوط والتنسيق العام */
        @import url('https://googleapis.com');
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Cairo', sans-serif;
        }

        body {
            background-color: #f4f7f6;
            color: #333;
        }

        /* الهيدر وشريط التنقل */
        header {
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
            padding: 15px 20px;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
            color: #2ecc71;
        }

        .cart-icon {
            font-size: 20px;
            position: relative;
            cursor: pointer;
        }

        .cart-count {
            position: absolute;
            top: -10px;
            right: -10px;
            background-color: #e74c3c;
            color: white;
            font-size: 12px;
            padding: 2px 6px;
            border-radius: 50%;
        }

        /* عنوان الصفحة الرئيسي */
        .hero {
            text-align: center;
            padding: 40px 20px;
            background: linear-gradient(135deg, #2ecc71, #27ae60);
            color: white;
        }

        .hero h1 {
            font-size: 32px;
            margin-bottom: 10px;
        }

        /* شبكة عرض المنتجات */
        .products-container {
            max-width: 1200px;
            margin: 40px auto;
            padding: 0 20px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
        }

        /* كارت المنتج */
        .product-card {
            background-color: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            display: flex;
            flex-direction: column;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.1);
        }

        .product-image {
            width: 100%;
            height: 250px;
            background-color: #eaeded;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        /* صورة بديلة مؤقتة بالأيقونات - يمكنك استبدالها برابط صورتك <img src="..."> */
        .product-image i {
            font-size: 80px;
            color: #bdc3c7;
        }

        .badge {
            position: absolute;
            top: 15px;
            right: 15px;
            background-color: #e74c3c;
            color: white;
            padding: 4px 10px;
            font-size: 12px;
            border-radius: 5px;
            font-weight: bold;
        }

        .product-info {
            padding: 20px;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }

        .product-title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
            color: #2c3e50;
        }

        .product-description {
            font-size: 14px;
            color: #7f8c8d;
            margin-bottom: 15px;
            line-height: 1.6;
        }

        .product-price-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: auto;
            padding-top: 15px;
            border-top: 1px solid #f2f2f2;
        }

        .price {
            font-size: 20px;
            font-weight: bold;
            color: #2ecc71;
        }

        .old-price {
            font-size: 14px;
            color: #95a5a6;
            text-decoration: line-through;
            margin-right: 8px;
        }

        .btn-add-cart {
            background-color: #2ecc71;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            transition: background 0.2s;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .btn-add-cart:hover {
            background-color: #27ae60;
        }

        /* الفوتر */
        footer {
            text-align: center;
            padding: 20px;
            background-color: #2c3e50;
            color: white;
            margin-top: 40px;
            font-size: 14px;
        }
    </style>
</head>
<body>

    <!-- الهيدر -->
    <header>
        <div class="nav-container">
            <div class="logo">متجري الإلكتروني</div>
            <div class="cart-icon">
                <i class="fas fa-shopping-cart"></i>
                <span class="cart-count" id="cart-counter">0</span>
            </div>
        </div>
    </header>

    <!-- البانر الرئيسي -->
    <section class="hero">
        <h1>أحدث المنتجات الحصرية لعام 2026</h1>
        <p>تصفح تشكيلتنا المميزة واحصل على عروض لا تفوت</p>
    </section>

    <!-- المنتجات -->
    <main class="products-container">
        <?php 
        
          if ($result->num_rows > 0){

              while($row = $result->fetch_assoc()) {
          
          
        ?>
        <!-- منتج 1 -->
        <div class="product-card">
            <div class="product-image">
              <img src="images/<?php echo $row['image']; ?>" alt="<?php echo $row['title']; ?>" style="width: 100%; height: 100%; object-fit: cover;">
                <div class="badge">جديد</div>
            </div>
            <div class="product-info">
                <div class="product-title"><?php echo $row['title']; ?></div>
                <p class="product-description"><?php echo $row['description']; ?></p>
                <div class="stock-status stock-available">
                  <i class="fas fa-check-circle"></i> متبقي <?php echo $row['stock']; ?> كيلو في المخزن
                </div>

                <div class="product-price-row">
                    <div>
                        <span class="price"><?php echo $row['price']; ?>$</span>
                    </div>
                    <button class="btn-add-cart" onclick="addToCart()"><i class="fas fa-plus"></i> أضف للسلة</button>
                </div>
            </div>
        </div>

        <?php
        
          
              }
          } else {
              echo "<p>لا توجد منتجات متاحة حالياً.</p>";
          }
        
        
        ?>

    </main>

    <!-- الفوتر -->
    <footer>
        <p>&copy; 2026 جميع الحقوق محفوظة لمتجري الإلكتروني.</p>
    </footer>

    <!-- سكربت بسيط لزيادة العداد عند الضغط -->
    <script>
        let count = 0;
        function addToCart() {
            count++;
            document.getElementById('cart-counter').innerText = count;
            alert('تم إضافة المنتج إلى سلة المشتريات بنجاح!');
        }
    </script>
</body>
</html>
