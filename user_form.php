<!DOCTYPE html>
<html>
<head>
    <title>User Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <h1>User Form</h1>
    <form id="loginForm" action="submit_user.php" method="POST">
    <div class="form-group d-flex flex-column gap-3">
        <label for="exampleInputName">Name</label>
        <input type="text" class="form-control" name="name" id="exampleInputName" aria-describedby="emailHelp" placeholder="Enter name">
    </div>    
    <div class="form-group d-flex flex-column gap-3">
        <label for="exampleInputEmail">Email address</label>
        <input type="email" class="form-control" name="email" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter email">
    </div>
    <div class="form-group d-flex flex-column gap-3">
        <label for="exampleInputPassword">Password</label>
        <input type="password" class="form-control" name="password" id="exampleInputPassword" placeholder="Password">
    </div>
    <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>

    <script>

        const form = document.getElementById('loginForm');
        const usernameInput = document.getElementById('exampleInputName');
        const emailInput = document.getElementById('exampleInputEmail');
        const passwordInput = document.getElementById('exampleInputPassword');

        window.onload = () => {
            usernameInput.focus();
        };

        form.addEventListener('submit', function(event) {
            // 1. إزالة الفراغات من أطراف النصوص للتأكد أن المستخدم لم يدخل مسافات فقط
            const usernameValue = usernameInput.value.trim();
            const emailValue = emailInput.value.trim();
            const passwordValue = passwordInput.value.trim();

            // 2. التحقق ما إذا كانت الحقول فارغة
            if (usernameValue === "" || emailValue === "" || passwordValue === "") {
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