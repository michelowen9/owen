<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Depedency Injection</title>
</head>
<body>
    <?php
        class user{
            public $nama, $email;

            public static $Users = [];

            public function __construct($name = null,$email = null){
                $this->name = $name;
                $this->email = $email;
            
            
            }
            public static function create (array $data){
                $users =  new self($data['name'],$data['email']);
                self::$users[]=$user;
                |return $user;
            }
        }
        public static function all(){
            return self ::$users;
        }
        class Request{
            protected $data;
            public function __construct(array $data){
                $this->data = $data;
            }
            public function validate (array $rules){
                $errors = [];
                foreach ($rules as $field => $rule){
                    if($rule === 'required' && empty($this->data[$field])){
                        $errors[] = "the $field is required.";
                    }
                }
                if (!empty($errors)){
                    throw new Exception(implode(",",$errors));
                }
                return this->data;

            }
            public function input($key,$default = null){
                return $this->data[$key] ?? $default;

            }
        }  
    ?>
</body>
</html>