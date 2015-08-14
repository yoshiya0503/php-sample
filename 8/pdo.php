<?php
/**
 * pdo 
 * @package pdo.php
 * @author Yoshiya Ito <ito@curations.jp>
 */

$host = "mysql:host=localhost;dbname=php_sample";
$user = "root";
$password = "root";

$db = new PDO($host, $user, $password);
$statement = $db->prepare("insert into books (authorid, title, ISBN, pub_year)".
    "values (:authorid, :title, :ISBN, :pub_year)");

$statement->execute([
    'authorid' => 4,
    'title' => 'hoge',
    'ISBN' => "123-123",
    'pub_year' => 1951
]);

try {
    $db->beginTransaction();
    $db->exec("insert into books (title, authorid) values ('new', 0);");
    $db->exec("insert into books (title, authorid) values ('new');");
    $db->commit();
} catch (Exception $error) {
    $db->rollback();
    echo "ロールバックしました";
}

?>
