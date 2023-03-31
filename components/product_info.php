<section class="item">
    <?
    $id = $_GET['product_id'];
    $result = $conn->query("SELECT * FROM products WHERE id=".$id);
    $item = $result->fetch() ?>
    <div class="container">
        <h1 class="item-title"><?= $item['name'] ?></h1>
        <img src="<?= $item['image_url'] ?>" width="510" height="392" alt="<?= $item['name'] ?>">
        <p class="price"><del><?= $item['price']*1.1 ?></del> <?= $item['price'] ?></p>
        <p><?= $item['description'] ?></p>
        <?php if ($_SESSION['is_admin']) { ?>
            <!-- Элементы для вызова модальных окон, могут быть любые -->
            <a href="#">Открыть окно 1</a>
            <a href="#">Открыть окно 2</a>
            <!-- Несколько модальных окон -->
            <div class="modal" data-modal="1">
                <!--   Svg иконка для закрытия окна  -->
                <svg class="modal__cross" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M23.954 21.03l-9.184-9.095 9.092-9.174-2.832-2.807-9.09 9.179-9.176-9.088-2.81 2.81 9.186 9.105-9.095 9.184 2.81 2.81 9.112-9.192 9.18 9.1z"/></svg>
                <p class="modal__title">Заголовок окна 1</p>
            </div>
            <div class="modal" data-modal="2">
                <!--   Svg иконка для закрытия окна  -->
                <svg class="modal__cross" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M23.954 21.03l-9.184-9.095 9.092-9.174-2.832-2.807-9.09 9.179-9.176-9.088-2.81 2.81 9.186 9.105-9.095 9.184 2.81 2.81 9.112-9.192 9.18 9.1z"/></svg>
                <p class="modal__title">Заголовок окна 2</p>
            </div>
            <!-- Подложка под модальным окном -->
            <div class="overlay" id="overlay-modal"></div>
        <?php } ?>


    </div>
</section>
<script src="../script.js">

</script>