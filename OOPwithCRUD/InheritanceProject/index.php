<?php
    //session_start();
?>
<!doctype html>
<html>
    <head>
        <title>Simple Registration Project</title>
        <style>
         body
            {font-family:verdana}.phpcoding{width:900px; margin: 0 auto;background:#f1f1f1}.headeroption, .footeroption{background:#2B81D7;color:#fff;text-align:center;padding:20px;}.headeroption h2, .footeroption h2{margin:0}.maincontent{min-height:400px;padding:20px;border:8px solid #2B81D7;margin:10px}
        </style>
    </head>

    <body>
        <?php 
            //include_once'registration.php';
            //include_once'congratulation.php';
            //include_once'inheritance.php';
           // include_once'result.php';
        ?>
        <div class="phpcoding">
            <section class="headeroption">
                <h2><?php echo "Simple Registration Project"; ?></h2>
            </section> 

            <section class="maincontent">    
                <form action="registration.php" method="post">
                    <h2>Enter your registration role : </h2>
                      <input type="radio" id="customer" name="radio" value="customer">
                      <label for="customer">Customer</label><br>
                      <input type="radio" id="admin" name="radio" value="admin">
                      <label for="admin">Admin</label><br>
                      <input type="radio" id="administrator" name="radio" value="administrator">
                      <label for="administrator">Administrator</label>
                        <br><br>
                        <input type="submit" value="Cancel">
                        <input type="submit" value="Submit" name="submit">                   
                </form>
    
                <?php
                global $userFirstName, $userLastName, $userId, $userRole, $userPhone, $userEmail;

                    if(isset($_POST['submit'])){
                     global $userRole;
                    $userRole = $_POST['radio'];

                        if(empty($userRole)){
                            echo "<span style='color:red;'>Enter a valid number<span>";
                        }
                        elseif(!empty($userRole)){
                            global $userRole;
                            //echo "you choose {$userRole}";
                            if(isset($userRole)){
                                if($_POST['registration']){
                                    global $userFirstName, $userLastName, $userId, $userRole, $userPhone, $userEmail;
                                    $userFirstName = $_POST['fname'];
                                    $userLastName = $_POST['lname'];
                                    $userId = $_POST['id'];
                                    $userPhone = $_POST['number'];
                                    $userEmail = $_POST['email'];
                                
                                    if(empty($userFirstName) or empty($userLastName) or empty($userId) or empty($userPhone) or empty($userEmail)){
                                        echo "<span style='color:red;'>Enter all field data<span>";
                                    }
                                    else{
                                        echo "User name {$userFirstName}{$userLastName}";
    
                                    }
                                }
                            }
                        }
                                
                    

                        // if($_POST['registration']){
                        //     $userFirstName = $_POST['fname'];
                        //     $userLastName = $_POST['lname'];
                        //     $userId = $_POST['id'];
                        //     $userPhone = $_POST['number'];
                        //     $userEmail = $_POST['email'];
                        
                        //     if(empty($userFirstName) or empty($userLastName) or empty($userId) or empty($userPhone) or empty($userEmail)){
                        //         echo "<span style='color:red;'>Enter all field data<span>";
                        //     }
                        // }
                        // $newUser = new Customer($userFirstName, $userLastName, $userId, $userRole, $userPhone, $userEmail);
                        // $newUser->role($fname, $lname, $id, $role, $phone, $email);

                        // $newUser = new Admin($userFirstName, $userLastName, $userId, $userRole, $userPhone, $userEmail);
                        // $newUser->role($fname, $lname, $id, $role, $phone, $email);

                        // $newUser = new Administrator($userFirstName, $userLastName, $userId, $userRole, $userPhone, $userEmail);
                        // $newUser->role($fname, $lname, $id, $role, $phone, $email);

                    }
                   // global $userFirstName, $userLastName, $userId, $userRole, $userPhone, $userEmail;
                        class Customer{

                            public function __construct($fname, $lname, $id, $role, $phone, $email)
                            {
                                global $userFirstName, $userLastName, $userId, $userRole, $userPhone, $userEmail;
                                $this->userFirstName = $fname;
                                $this->userLastName = $lname;
                                $this->userId = $id;
                                $this->userRole = $role;
                                $this->phone = $phone;
                                $this->email = $email;
                            }

                            public function role($fname, $lname, $id, $role, $phone, $email)
                            {
                                echo "Customer Name is : " .$fname . $lname . "<br>";
                                echo "Customer Id is : " . $id . "<br>";
                                echo "Customer Phone Number : " . $phone . "<br>";
                                echo "Customer Email Address : " . $email . "<br>";

                            }

                        }
                        class Admin extends Customer{
                            public function role($fname, $lname, $id, $role, $phone, $email)
                            {
                                echo "Admin Name is : " .$fname . $lname . "<br>";
                                echo "Admin Id is : " . $id . "<br>";
                                echo "Admin Phone Number : " . $phone . "<br>";
                                echo "Admin Email Address : " . $email . "<br>";

                            }
                        }

                        class Administrator extends Customer{
                            public function role($fname, $lname, $id, $role, $phone, $email)
                            {
                                echo "Administrator Name is : " .$fname . $lname . "<br>";
                                echo "Administrator Id is : " . $id . "<br>";
                                echo "Administrator Phone Number : " . $phone . "<br>";
                                echo "Administrator Email Address : " . $email . "<br>";
                            }
                        }
                        
                ?>            

            </section>
                <section class="footeroption">
                <h2><?php echo "Presented by Md. Rajib Hossain"; ?></h2>
            </section>
        </div>
        <?php
            // remove all session variables
            //session_unset();

            // destroy the session
            //session_destroy();
        ?>
    </body>
</html>