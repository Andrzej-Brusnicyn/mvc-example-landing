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
        <p class="h2">Editor About Us</p>
        <a href="/admin/dashboard" class="d-block mt-2">Back</a>
        <a href="/admin/logout" class="d-block mt-2">Logout</a>
        <a href="/" class="d-block mt-2">To the site</a>
        <div class="my-5 text-center">
            <form class="d-flex flex-column align-items-center" action="" method="POST" enctype="multipart/form-data">
                <div class="my-2 form-group">
                    <input type="text" name="title" value="<?php echo $data['about']->title; ?>">
                </div>
                <div class="my-2 form-group">
                    <textarea name="description" class="form-control"><?php echo $data['about']->description; ?></textarea>
                </div>
                <input type="file" name="image">
                <input type="hidden" name="existing_filename" value="<?php echo $data['about']->filename; ?>">
                <input type="submit" name="save" class="my-2 btn btn-primary" value="Save">
                <img src="../../assets/img/<?php echo $data['about']->filename; ?>" alt="">
            </form>
        </div>
    </div>
</body>
</html>