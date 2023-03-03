<?php
require ('dbconnect.php');
echo ('Создаем продукт');
try {
    $sql = 'INSERT INTO products (name, description, price)  VALUES (:name, :description, :price)';
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(':name', $_POST['name']);
    $stmt->bindValue(':description', $_POST['description']);
    $stmt->bindValue(':price', $_POST['price']);
    echo ($stmt->queryString);
    $stmt->execute();
} catch (PDOexception $error) {
    $msg = "Ошибка добавления товара: " . $error->getMessage();
}

header('Location: /index.php?page=catalog');
exit( );