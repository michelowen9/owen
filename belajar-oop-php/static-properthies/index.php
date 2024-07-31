<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Static propherthies</title>
</head>
<body>
    <?php 
    class ParentClass 
    {
    public static $judul ="hy, saya properti static dari ".__CLASS__;
    public function display()
    {
        echo self::$judul;
    }
}
    class childclass extends ParentClass{
        public static $judul ="hai".__Class__;
        public function display()
        {
            echo parent::$judul;
        }
    }

    
    $obj = new ParentClass;
    $obj2 = new Childclass;

?>
<h1><?php echo $obj->display();?>testing</h1>

    
</body>
</html>