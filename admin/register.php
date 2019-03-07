<?php
include_once "../config.php";
class UserToRegister{
    public $firstName;
    public $lastName;
    public $password;
    public $email;

    public function __construct($firstName, $lastName, $password, $email)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->password = md5($password);
    }
}

$user = new UserToRegister($_POST["first_name"],$_POST["last_name"], $_POST["password"], $_POST["email"]);

//var_dump($user);

$userFileName=substr($user->email, 0, strpos($user->email, '@')).".json";
$path = ROOT_DIR."/admin/data/users/";

if (file_exists($path.$userFileName)) {

    $host  = $_SERVER['HTTP_HOST'];
    $extra = 'messages/userAlreadyExists.php';
    header("Location: http://$host/$extra");
    exit;
}
else{
    echo $path.$userFileName;
    $file = fopen($path.$userFileName, 'w');

    $userJSON = json_encode($user);

    fwrite($file, $userJSON);
    fclose($file);

    $host  = $_SERVER["HTTP_HOST"];
    $extra = 'succesfulRegistration.php';
    //header("Location: http://$host$uri/messages/$extra");
    exit;
}