<?php 

$email = strip_tags(htmlentities($_POST['email']));
$password = strip_tags(htmlentities($_POST['password']));
$name = strip_tags(htmlentities($_POST['name']));


if(isset($_POST['register'])){
    
    if(strlen($password) >= 8){

        $stmt = $conn->prepare('SELECT email FROM users WHERE email = ?');

        $stmt->execute([$email]);

        if($stmt->rowCount()){


        $message = 'Account already exist, please login!';
        $status = 'alert-danger';
        } 

        else {

            $stmt = $conn->prepare('INSERT INTO users(name, email, password) VALUES(?, ?, ?)');

            if($stmt->execute([$name, $email, password_hash($password, PASSWORD_DEFAULT)])){
                $message = 'Account created successfully, <a href="./login.php">please login</a>!';
             $status = 'alert-success';
            }
            else {

                $message = 'Error occured while trying to create your account';
                $status = 'alert-info';
            }
           
        }

    } else {

        $message = 'Password must be atleast 8 characters';
        $status = 'alert-warning';
    }

}


if(isset($_POST['login'])){
    
    if($email && $password){

        $stmt = $conn->prepare('SELECT email, uid, password FROM users WHERE email = ?');

        $stmt->execute([$email]);
        $user = $stmt->fetch();
        

        if(!$stmt->rowCount()){


        $message = 'Please register a <a href="./register.php">new account</a>!';
        $status = 'alert-danger';
        } 

        else {

            if(password_verify($password, $user->password)){
               
                $_SESSION['auth'] = [
                    'id' => $user->uid
                ];


                $message = 'Loggedin successfully!';
                $status = 'alert-success';

                header('REFRESH: 1, url= '. APP_HOME);

            }else {

                $message = 'Invalid login credentials';
                $status = 'alert-danger';
            }
           
           
        }

    } else {

        $message = 'All fields required';
        $status = 'alert-warning';
    }

}

// else {

//     $message = 'Please enter your details to register a new account!';
//     $status = 'alert-info';
// }