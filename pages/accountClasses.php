
<?php 





/**
* This class chick the validation of inputed data
*/
class FormValidation
{
  
  function __construct()
  {
    # code...
   
  }


  function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
  }

  function checkName(){

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
          $nameErr = "Name is required";
        } else {
          $name = $this->test_input($_POST["name"]);
          // check if name only contains letters and whitespace
          if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
              $nameErr = "Only letters and white space allowed";
            }else{
              $nameErr = "";
            }
        }
      }else{
        $nameErr="";
      }

      return $nameErr;
  }

  function checkLastname(){

    $lastnameErr="";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
          $lastname = $this->test_input($_POST["Lastname"]);
          // check if name only contains letters and whitespace
          if (!preg_match("/^[a-zA-Z-' ]*$/",$lastname)) {
              $lastnameErr = "Only letters and white space allowed";
          }

    }else{
        $lastnameErr="";
    }

    return $lastnameErr;
  }


  function checkEmail(){

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        if (empty($_POST["email"])) {
          $emailErr = "Email is required";
        }else {
          $email = $this-> test_input($_POST["email"]);
          // check if e-mail address is well-formed
          if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
          }else {
            $emailErr="";
          }
        }
    }else{
        $emailErr="";
    }

    return $emailErr;
  }



  function checkPasword(){

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["pswd"])) {
          $passErr = "Password is required";
        } else {
          $password = $this->test_input($_POST["pswd"]);
          // check if name only contains letters and whitespace
          if (!preg_match("/....../",$password)) {
              $passErr = "Password at least 6 characters";
            }else{
              $passErr = "";
            }
        }
      }else{
        $passErr="";
      }

      return $passErr;
  }


}



/**
* This class insert the data input of new customer into database
*/
class DataBase
{
  
  function __construct()
  {
    # code...

  }



  function connect(){

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "lightcompany";

    // Create connection
    $conn = new mysqli($servername, $username, $password,$dbname);

    // Check connection
    if ($conn->connect_error) {
      $_SESSION["connection"]=$conn->connect_error;
  
    }else {
      $_SESSION["connection"]="connected";
    }

    return $conn;
  }


  function disconnect(){
    $conn = $this->connect();
    $conn->close();
    $_SESSION["connection"]="disconnected";
  }


  function insertCustomer(){
    $checkInput=new FormValidation();

    $firstname=$checkInput->test_input($_POST["name"]);
    $lastname=$checkInput->test_input($_POST["Lastname"]);
    $email=$checkInput->test_input($_POST["email"]);
    $password=$checkInput->test_input($_POST["pswd"]);

    
    // prepare and bind
    $conn=$this->connect();
    $stmt = $conn->prepare("INSERT INTO customers (name, lastname, email,password) VALUES (?, ?, ?,?)");
    $stmt->bind_param("ssss", $firstname, $lastname, $email,$password);
    $stmt->execute();

    $stmt->close();
  }

}


/**
* The loginClass
*
class ClassName extends AnotherClass
{
  
  function __construct()
  {
    # code...
  }

  function emailExist($inputName){

    //$checkInput=new FormValidation();
    $email=$checkInput->test_input($_POST[$inputName]);


  }


}**/


/**
* Main Class
*/
class CreateAccount
{
  
  
  function __construct()
  {

    $checkInput=new FormValidation();
    $db= new DataBase();
    

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        
        $nameError= $checkInput->checkName();
        $lastNameError=$checkInput->checkLastname();
        $emailError= $checkInput->checkEmail();
        $passwordError=$checkInput->checkPasword();
        

        if ($nameError=="" and $lastNameError=="" and $emailError=="" and $passwordError==""){
        
          $db->insertCustomer();
          $db->disconnect();
        
          $_SESSION["account"]="your acount was created successfull.";
          
        }else{
          $_SESSION["account"]="Invalid input";
        }
      
    }
  }
}



?>