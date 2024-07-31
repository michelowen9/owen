<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar constructor</title>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
</head>
<body>
    <h1> Belajar constructor</h1>

    <?php
    class user {
        //properti global
        public $id, $name, $age, $addres;
        
        //melakukan konstruksi
        public function __construct( $id = null, $name = null, $age = null, $addres = null)
        {
            $this->id=$id;
            $this->name=$name;
            $this->age=$age;
            $this->addres=$addres;
        }
    }

    class students{
        public $id, $nama, $nilai_pbo, $nilai_web, $nilai_pkk, $class;

        public function __construct($datastudents = []) { 
            $this->id            = $datastudents['id']?? null;
            $this->nama          = $datastudents['nama']?? null;
            $this->nilai_pbo     = $datastudents['nilai_pbo']?? null;
            $this->nilai_web     = $datastudents['nilai_web']?? null;
            $this->nilai_pkk     = $datastudents['nilai_pkk']?? null;
            $this->class         = $datastudents['class']?? null;
        }
    
    }

    $datastudents = [
        [
            'id' =>1,
            'nama' => 'yawo',
            'nilai_pbo' =>69, 
            'nilai_web' =>80, 
            'nilai_pkk' =>85,
            'class' => 'XI-RPL'
        ],
        [
            'id' =>2,
            'nama' => 'iciwi',
            'nilai_pbo' =>69, 
            'nilai_web' =>69, 
            'nilai_pkk' =>96,
            'class' => 'XI-RPL'
        ],
        [
            'id' =>3,
            'nama' => 'jong',
            'nilai_pbo' =>80, 
            'nilai_web' =>50, 
            'nilai_pkk' =>70,
            'class' => 'XI-RPL'
        ],
        [
            'id' =>4,
            'nama' => 'kumar',
            'nilai_pbo' =>65, 
            'nilai_web' =>35, 
            'nilai_pkk' =>70,
            'class' => 'XI-RPL'
        ],
        [
            'id' =>5,
            'nama' => 'epos',
            'nilai_pbo' =>25, 
            'nilai_web' =>75, 
            'nilai_pkk' =>60,
             'class' => 'XI-RPL'
        ],
        [
            'id' => 6,
            'nama' => 'en',
            'nilai_pbo' =>90, 
            'nilai_web' =>80, 
            'nilai_pkk' =>60,
            'class' => 'XII-RPL'
        ],
        [
           'id' => 7,
            'nama' => 'een',
            'nilai_pbo' =>35, 
            'nilai_web' =>70, 
            'nilai_pkk' =>100,
            'class' => 'XII-RPL'
        ],
        [
            'id' => 8,
            'nama' => 'lanciu',
            'nilai_pbo' =>90, 
            'nilai_web' =>60, 
            'nilai_pkk' =>70,
            'class' => 'XII-RPL'
        ],
        [
            'id' => 9,
            'nama' => 'acoy',
            'nilai_pbo' =>100, 
            'nilai_web' =>100, 
            'nilai_pkk' =>90,
            'class' => 'XII-RPL'
        ],
        [
            'id' => 10,
            'nama' => 'oy',
            'nilai_pbo' =>93, 
            'nilai_web' =>86, 
            'nilai_pkk' =>82,
            'class' => 'XII-RPL'
        ],
    ];

    $liststudents = [];
    
    foreach ($datastudents as $datastudent){
       $liststudents[] = new students($datastudent);
    }

    $dataSiswaKelasXIIRpl = [];
    $dataSiswaKelasXIRpl = [];

    foreach ($liststudents as $student) {

        if ($student->class == 'XII-RPL') {
            $dataSiswaKelasXIIRpl[] = $student;
        } else {
            $dataSiswaKelasXIRpl[] = $student;
        }

        $idstudents = $student->id;
        $rata = intval(round($student->nilai_web + $student->nilai_pbo + $student->nilai_pkk) / 3);

        if ($rata > 90) {
            $grade = 'A';
        } elseif ($rata > 86) {
            $grade = 'B+';
        } elseif ($rata > 80) {
            $grade = 'B';
        } elseif ($rata > 76) {
            $grade = 'C+';
        } elseif ($rata > 70) {
            $grade = 'C';
        } elseif ($rata > 60) {
            $grade = 'D';
        } else {
            $grade = 'Remed';
        }
        

        ?>
       
        <p> ID :<?php echo $student->id ?> </p>
        <p> NAMA :<?php echo $student->nama ?> </p>
        <p> NILAI_PBO :<?php echo $student->nilai_pbo ?> </p>
        <p> NILAI_WEB :<?php echo $student->nilai_web ?> </p>
        <p> NILAI_PKK :<?php echo $student->nilai_pkk ?> </p>
        <p> Rata      :<?php echo $rata ?> </p>
        <p> Grade      :<?php echo $grade ?> </p>
        <p> CLASS     :<?php echo $student->class ?> </p>
        <hr>
        <?php
        
    }

    echo "<H3>JUMLAH KELAS 12 RPL</H3>"; 
    echo  count($dataSiswaKelasXIIRpl);

    echo "<H3>JUMLAH KELAS 11 RPL</H3>"; 
    echo  count($dataSiswaKelasXIRpl);
?>
    
</body>
</html>
