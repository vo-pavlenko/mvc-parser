<?php include ROOT.'/view/layouts/header.php'; ?>

    <div class="container">
        <div class="text text-center mb-5">
            <h1>Мы поможем вам найти товары на других сайтах</h1>
            <p class="blockquote-footer">Введите ключевое слово для поиска и выберите количество товара для отображения</p>
        </div>
        <form action="search" method="post">
            <div class="form-row">
                <div class="col">
                    <input type="text" class="form-control" name="query" placeholder="Поиск">
                </div>
                <div class="col">
                    <select id="inputState" class="form-control" name="max_amount">
                        <?php for($i = 1; $i <= 24; $i++): ?>
                            <option><?= $i; ?></option>
                        <?php endfor; ?>
                    </select>
                </div>

                <button type="submit" name="submit" class="btn btn-primary">Поиск</button>
            </div>
        </form>
    </div>

<?php include ROOT.'/view/layouts/footer.php';
