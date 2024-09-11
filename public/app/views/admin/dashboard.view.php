<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Admin Dashboard</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2 class="text-center">Admin Dashboard</h2>
                <p class="text-center">Hello, <?php echo $_SESSION['login']; ?>!</p>
                <a href="/admin/logout" class="d-block mt-3 text-center">Logout</a>

                <div class="list-group mt-4">
                    <a href="/admin/header" class="list-group-item list-group-item-action">Header</a>
                    <a href="/admin/hero" class="list-group-item list-group-item-action">Hero</a>
                    <a href="/admin/cardsSection" class="list-group-item list-group-item-action">Cards Section</a>
                    <a href="/admin/cards" class="list-group-item list-group-item-action">Cards</a>
                    <a href="/admin/about" class="list-group-item list-group-item-action">About Us</a>
                    <a href="/admin/footer" class="list-group-item list-group-item-action">Footer</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
