<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Editor</title>
</head>
<body>
    <div class="my-5 text-center">
        <p class="h2">Editor Footer</p>
        <a href="/admin/dashboard" class="d-block mt-2">Back</a>
        <a href="/admin/logout" class="d-block mt-2">Logout</a>
        <a href="/" class="d-block mt-2">To the site</a>
        <div class="my-5 text-center">
            <form class="d-flex flex-column align-items-center" action="/admin/footer" method="POST">
                <div class="my-2 form-group">
                    <input type="text" name="copyright" value="<?php echo $data['footer']->copyright; ?>" class="form-control">
                </div>
                <input type="submit" class="my-2 btn btn-primary" value="Save">
            </form>
        </div>
    </div>
</body>
</html>