<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>class-objek</title>
</head>
<body>
    <h1>belajar class objek</h1>
    <?php
    // pengertian class-> blue print atau cetakan
    class user
    {
        // deklarasi properti global
        public $id;
        public $user_name;
        public $email;
        public $nilai;
    }
    // melakukan intansiasi / inisialisasi
    // melakukan transform dari sebuah class ke sebuah objek
    $user = new user();

    // melakukan pemberian nilai
    $user ->id = 1;
    $user ->user_name = 'stev';
    $user ->email = 'stev12@gmail.com';
    $user ->nilai = 100;


    $user ->id2 = 2;
    $user ->user_name2 = 'marcel';
    $user ->email2 = 'marcel@gmail.com';
    $user ->nilai2 = 100;

    ?>
    <h2> data user </h2>
    <p>id : <?php echo $user->id ?></P>
    <p>nama : <?php echo $user->user_name ?></P>
    <p>email : <?php echo $user->email ?></P>
    <p>nilai : <?php echo $user->nilai ?></P>

    <h3> data user 2 </h3>
    <p>id : <?php echo $user->id2 ?></P>
    <p>nama : <?php echo $user->user_name2 ?></P>
    <p>email : <?php echo $user->email2 ?></P>
    <p>nilai : <?php echo $user->nilai2 ?></P>
    
    <?php
    class post
    {
        // deklarasi properti global
        public $id;
        public $title;
        public $user_id;
        public $description;
    }
        // melakukan transform dari sebuah class ke sebuah objek
    $post = new post();

    // melakukan pemberian nilai
    $post ->id = 1;
    $post ->title = 'arab';
    $post ->user_name = 'marcel';
    $post ->description = 'ganteng';

    $post ->id2 = 2;
    $post ->title2 = 'uss';
    $post ->user_name2 = 'marcel';
    $post ->description2 = 'cakep';

    

    ?>
    <h1> data post1 </h1>
    <p>id : <?php echo $post->id ?></P>
    <p>title : <?php echo $post->title ?></P>
    <p>user_id : <?php echo $post->user_name ?></P>
    <p>description : <?php echo $post->description ?></P>
   
    <h2> data post 2 </h2>
    <p>id : <?php echo $post->id2 ?></P>
    <p>title : <?php echo $post->title2 ?></P>
    <p>user_id : <?php echo $post->user_name2 ?></P>
    <p>description : <?php echo $post->description2 ?></P>
</body>
</html>