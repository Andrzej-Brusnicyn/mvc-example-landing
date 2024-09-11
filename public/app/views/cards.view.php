<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center mb-5"><?php echo $data['cardsSection']->title; ?></h2>
            </div>
        </div>
        <div class="row">
            <?php foreach($data['cards'] as $item):?>
            <div class="col-md-3 mb-4">
                <div class="card h-100">
                    <img src="../../assets/img/<?php echo $item->filename; ?>" class="card-img-top" alt="Product">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $item->title; ?></h5>
                        <p class="card-text"><?php echo $item->description; ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach ?>
        </div>
    </div>
</section>