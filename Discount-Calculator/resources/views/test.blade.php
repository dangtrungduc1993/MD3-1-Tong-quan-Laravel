<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
<h1>Đăng nhập</h1>
<form action="aaaaaa" method="POST">
    @csrf
    <p>
        <input type="text" name="description" placeholder="Description">
    </p>
    <p>
        <input type="number" name="price" placeholder="Price">
    </p>
    <p>
        <input type="number" name="discount" placeholder="Discount percent">
    </p>
    <p>
        <button type="submit">Calculate Discount</button>
    </p>
</form>
</body>
</html>
