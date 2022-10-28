<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="Style.css">
    <title>Log In</title>
</head>
<body>


<?php
session_start();
    if(isset($_REQUEST['signInbtn']) && isset($_REQUEST['userType'])){
        $userType = $_REQUEST['userType'];

        foreach ($userType as $key => $userValue){
            if(($userValue == "admin")){
                
                $adminName ="admin";
                $adminPass ="pass1234";
                $adminName2 = "renmark";
                $adminPass2 = "pogi1234";
                
    
                if(($_REQUEST['Username'] == $adminName && $_REQUEST['Password']==$adminPass)){
                    $_SESSION['Username'] = $adminName;

                    echo '<div class="alert alert-success w-50 p-3 mx-auto mt-3"> 
                    Welcome to the System: '.$adminName.'<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> 
                    </div>';
                }
                elseif(($_REQUEST['Username'] == $adminName2 && $_REQUEST['Password']==$adminPass2)){
                    $_SESSION['Username'] = $adminName2;
                    echo '<div class="alert alert-success w-50 p-3 mx-auto mt-3">
                    Welcome to the System: '.$adminName2.'<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> 
                    </div>'; 
                }
                else{
                    echo '<div class="alert alert-danger w-50 p-3 mx-auto mt-3">
                    Invalid Username / Password <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    </div>';
                }         
            }

            if(($userValue == "ContMan")){
                
                $ManagerName ="pepito";
                $ManagerPass ="manaloto";
                $ManagerName2 = "juan";
                $ManagerPass2 = "delacruz";
                    
                if(($_REQUEST['Username'] == $ManagerName && $_REQUEST['Password']==$ManagerPass)){
                    $_SESSION['Username'] = $ManagerName;
    
                    echo '<div class="alert alert-success w-50 p-3 mx-auto mt-3">
                    Welcome to the System: '.$ManagerName.'<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> 
                    </div>';
                }
                elseif(($_REQUEST['Username'] == $ManagerName2 && $_REQUEST['Password']==$ManagerPass2)){
                    $_SESSION['Username'] = $ManagerName2;
                    
                    echo '<div class="alert alert-success w-50 p-3 mx-auto mt-3">
                    Welcome to the System: '.$ManagerName2.'<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> 
                    </div>'; 
                }
                else{
                    echo '<div class="alert alert-danger w-50 p-3 mx-auto mt-3">
                    Invalid Username / Password <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> 
                    </div>';
                }         
            }

            if(($userValue == "SystemUs")){
                
                $systemUsername ="pedro";
                $systemUserPass ="penduko";
                        
                if(($_REQUEST['Username'] == $systemUsername && $_REQUEST['Password']==$systemUserPass)){
                    $_SESSION['Username'] = $systemUsername;
        
                    echo '<div class="alert alert-success w-50 p-3 mx-auto mt-3">
                    Welcome to the System: '.$systemUsername.'<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> 
                    </div>';
                }
                else{
                    echo '<div class="alert alert-danger w-50 p-3 mx-auto mt-3">
                    Invalid Username / Password <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> 
                    </div>';
                }         
            }
        }
    }

?>

<div class="container">
    <div class="card card-container">
        <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
        <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin" method="POST">
                <div class="form-row align-items-center">
                <div class="col-auto my-1 ">
                    <select class="form-control" id="UType" name ="userType[]">
                        <option value="admin">Admin</option>
                        <option value="ContMan">Content Manager</option>
                        <option value="SystemUs">System User</option>
                    </select>
                </div>
                <br>
                <input type="text" name="Username" id="username" class="form-control" placeholder="User" required autofocus>
                <input type="password" name="Password"  id="password" class="form-control" placeholder="Password" required>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit" name="signInbtn">Sign in</button>
            </form>

    </div>
</div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</body>
</html>