<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Editor</title>
</head>
<body>
    <div class="my-5 text-center">
        <p class="h2">Editor Header</p>
        <a href="/admin/dashboard" class="d-block mt-2">Back</a>
        <a href="/admin/logout" class="d-block mt-2">Logout</a>
        <a href="/" class="d-block mt-2">To the site</a>
        <div class="my-5 text-center">
            <form class="d-flex flex-column align-items-center" action="/admin/header" method="POST" enctype="multipart/form-data">
                <div class="my-2 form-group">
                    <input type="text" name="adress" value="<?php echo $data['header']->adress; ?>">
                </div>
                <div class="my-2 form-group">
                    <input type="text" name="phone" value="<?php echo $data['header']->phone; ?>">
                </div>
                <div class="my-2 form-group">
                    <input type="text" name="email" value="<?php echo $data['header']->email; ?>">
                </div>
                <input type="file" name="image">
                <input type="hidden" name="existing_filename" value="<?php echo $data['header']->filename; ?>">
                <input type="submit" class="my-2 btn btn-primary" value="Save">
                <img src="../../assets/img/<?php echo $data['header']->filename; ?>" alt="">
            </form>
        </div>
    </div>
</body>
</html>