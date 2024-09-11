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
        <p class="h2">Editor Cards</p>
        <a href="/admin/dashboard" class="d-block mt-2">Back</a>
        <a href="/admin/logout" class="d-block mt-2">Logout</a>
        <a href="/" class="d-block mt-2">To the site</a>
        <div class="my-5 text-center">
            <form class="d-flex flex-column align-items-center" action="/admin/cards" method="POST" enctype="multipart/form-data">
                <div class="my-2 form-group">
                    <input type="text" name="title" placeholder="Title" class="form-control" value="<?php echo $data['editCard'] ? $data['editCard']->title : ''; ?>">
                </div>
                <div class="my-2 form-group">
                    <textarea name="description" placeholder="Description" class="form-control"><?php echo $data['editCard'] ? $data['editCard']->description : ''; ?></textarea>
                </div>
                <div class="my-2 form-group">
                    <input type="file" name="image" class="form-control">
                    <?php if ($data['editCard']) { ?>
                        <input type="hidden" name="existing_filename" value="<?php echo $data['editCard']->filename; ?>">
                    <?php } ?>
                </div>
                <?php if ($data['editCard']) { ?>
                    <input type="hidden" name="id" value="<?php echo $data['editCard']->id; ?>">
                    <input type="submit" name="update" class="my-2 btn btn-primary" value="Save changes">
                <?php } else { ?>
                    <input type="submit" name="add" class="my-2 btn btn-primary" value="Add">
                <?php } ?>
            </form>
        </div>
        <div class="my-5 text-center">
            <h3 class="mb-4">Existing cards</h3>
            <?php foreach ($data['cards'] as $item) { ?>
                <div class="card mb-4" style="width: 18rem; display: inline-block; margin: 10px;">
                    <img src="../../assets/img/<?php echo $item->filename; ?>" class="card-img-top" alt="Product">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $item->title; ?></h5>
                        <p class="card-text"><?php echo $item->description; ?></p>
                        <form action="/admin/cards" method="POST" style="display:inline;">
                            <input type="hidden" name="id" value="<?php echo $item->id; ?>">
                            <input type="submit" name="delete" class="btn btn-danger" value="Delete">
                        </form>
                        <form action="/admin/cards" method="GET" style="display:inline;">
                            <input type="hidden" name="edit" value="<?php echo $item->id; ?>">
                            <input type="submit" class="btn btn-warning" value="Edit">
                        </form>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</body>
</html>