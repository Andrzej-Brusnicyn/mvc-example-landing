<?php require('head.view.php'); ?>
<body>
<header class="bg-light py-3">
    <div class="container d-flex justify-content-between align-items-center">
        <div class="logo">
            <img src="../../assets/img/<?php echo $data['header']->filename; ?>" alt="Logo" width="50">
        </div>
        <div class="contact-info d-flex">
            <p class="mb-0 mr-3">Address: <?php echo $data['header']->adress; ?></p>
            <p class="mb-0 mr-3">Phone: <?php echo $data['header']->phone; ?></p>
            <p class="mb-0">Email: <?php echo $data['header']->email; ?></p>
        </div>
    </div>
</header>