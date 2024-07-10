<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dropdown با انتخاب چندگانه</title>
    <!-- لینک به کتابخانه‌های Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container mt-4">
        <form method="POST" action="">
            @csrf
            <select class="form-select" multiple aria-label="multiple select example">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>

            <button type="submit" class="btn btn-primary">ثبت</button>
        </form>
    </div>

    <!-- اسکریپت لازم برای فعال کردن Dropdown با استفاده از کتابخانه Bootstrap -->
    <script>
        $(document).ready(function() {
            $('#options').selectpicker();
        });
    </script>
</body>
</html>