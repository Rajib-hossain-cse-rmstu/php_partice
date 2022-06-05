

<!doctype html>
<html>
    <head>

    </head>
    <body>

        <?php
            global $userFirstName, $userLastName, $userId, $userRole, $userPhone, $userEmail;

            if(isset($_POST['submit'])){
                global $userRole;
            $userRole = $_POST['radio'];

                if(empty($userRole)){
                    echo "<span style='color:red;'>Enter a valid number<span>";
                }

            }

            if(isset($_POST['registation'])){
                global $userFirstName, $userLastName, $userId, $userRole, $userPhone, $userEmail;
                $userFirstName = $_POST['fname'];
                $userLastName = $_POST['lname'];
                $userId = $_POST['id'];
                $userPhone = $_POST['number'];
                $userEmail = $_POST['email'];
            
                if(empty($userFirstName) or empty($userLastName) or empty($userId) or empty($userPhone) or empty($userEmail)){
                    echo "<span style='color:red;'>Enter all field data<span>";
                }

            }
        
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

                $obj = new Customer("Md. Rajib", "Hossain", "2015-12-12", "Admin", "01521471117", "rajibhossain.cse@gmail.com");
                
        ?>            

    </body>
</html>