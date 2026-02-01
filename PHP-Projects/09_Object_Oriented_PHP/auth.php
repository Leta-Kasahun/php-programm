<?php
session_start();
trait AuthHelper{
    public function hashPassword($password){
        return password_hash($password,PASSWORD_DEFAULT);
    }
    public function verifyPassword($password,$hashed){
        return password_verify($password,$hashed);
    }
}

class Auth{
    use AuthHelper;
    private $storedHash;
    public function __construct(){
        $this->storedHash=$this->hashPassword("12345");
    }
   public function login($password){
    if(empty($password))throw new Exception("Password is required");
if(!$this->verifyPassword($password, $this->storedHash)) throw new Exception("Invalid Password");

    $_SESSION['user']=true;
   }
}

$message="";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    try{
        $auth=new Auth();
        $password=$_POST['password'];
        $auth->login($password);
        $message="Login successful";
        header("Location:dashboard.php");
        exit;

       
    }
  catch (Exception $e) {
        $message = $e->getMessage();
    }
}

?>
<form method="post">
    <input type="password"name="password"placeholder="Enter password"><br>
    <input type="submit" value="Login">

</form>
<p><?php echo $message;?></p>