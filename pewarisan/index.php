<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class orang tua{
        public $judul;

        public function __construct()
        {
           $this->judul = 'ini class-'. __CLASS__;
        }
        public function display()
        {
            return $this->judul;
        }
    }
        class anak extends orangtua
        {}
    ?>
    <h1> <?php echo (new orangtua)->display() ?> </h1> 

    
</body>
</html>