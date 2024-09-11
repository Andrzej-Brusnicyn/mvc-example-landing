<section class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <img src="../../assets/img/<?php echo $data['about']->filename; ?>" class="img-fluid" alt="About Us">
            </div>
            <div class="col-md-6">
                <h2><?php echo $data['about']->title; ?></h2>
                <p><?php echo $data['about']->description; ?></p>
            </div>
        </div>
    </div>
</section>

