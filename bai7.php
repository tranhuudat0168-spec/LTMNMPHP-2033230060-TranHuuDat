<?php
interface Downloadable
{
    public function download();
}
class Book
{
    public $title;
    public $author;
    public $price;

    public function showInfo()
    {
        echo "Ten sach: " . $this->title . "<br>";
        echo "Tac gia: " . $this->author . "<br>";
        echo "Gia: " . $this->price . " đồng<br>";
    }
}
class Ebook extends Book implements Downloadable
{
    public $fileSize;

    public function download()
    {
        echo "Đang tai Ebook...<br>";
    }

    public function showInfo()
    {
        parent::showInfo();
        echo "Kich thuoc file: " . $this->fileSize . " MB<br>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
<form method="post">
    Tên sach:
    <input type="text" name="title"><br><br>

    Tac gia:
    <input type="text" name="author"><br><br>

    Gia:
    <input type="number" name="price"><br><br>

    Kích thước file:
    <input type="number" name="fileSize"><br><br>

    <input type="submit" value="Hiển thị">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ebook = new Ebook();
    $ebook->title = $_POST["title"];
    $ebook->author = $_POST["author"];
    $ebook->price = $_POST["price"];
    $ebook->fileSize = $_POST["fileSize"];

    echo "<hr>";

    $ebook->showInfo();

    $ebook->download();
}

?>

</body>
</html>