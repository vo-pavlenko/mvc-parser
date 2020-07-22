<?php include ROOT.'/view/layouts/header.php'; ?>

<div class="container">
    <?php if (!empty($historyArr)): ?>
        <div class="text text-center mb-5">
            <h1>Детальная история поиска</h1>
        </div>
        <?php foreach ($historyArr as $historyItem): ?>
            <div class="text text-center mb-5">
                <h5>Запрос: <?=$historyItem['query']?></h5>
                <h5>Количество: <?=$historyItem['max_amount']?></h5>
            </div>
            <div class="row row-cols-1 row-cols-md-3">
                <?php foreach ($historyItem['products'] as $product): ?>
                    <div class="col mb-4">
                        <div class="card h-100">
                            <img src="<?=$product->img_url_product; ?>" class="card-img-top" alt="<?=$product->name_product; ?>">
                            <div class="card-body">
                                <h5 class="card-title"><?=$product->name_product; ?></h5>
                            </div>
                            <a href="<?=$product->url_product; ?>" class="btn btn-secondary">На сайт</a>
                            <div class="card-footer">
                                <small class="text-muted">Price: <?=$product->price_product; ?> RUB</small>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <div class="text text-center mb-5">
            <h1>Вы еще ничего не искали</h1>
        </div>
    <?php endif; ?>

</div>

<?php include ROOT.'/view/layouts/footer.php';
