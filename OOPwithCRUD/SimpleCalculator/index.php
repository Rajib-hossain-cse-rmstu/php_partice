
<!doctype html>
<html>
<head>
 <title>Simple Calculator</title>
 <style>
  body
    {font-family:verdana}.phpcoding{width:900px; margin: 0 auto;background:#f1f1f1}.headeroption, .footeroption{background:#2B81D7;color:#fff;text-align:center;padding:20px;}.headeroption h2, .footeroption h2{margin:0}.maincontent{min-height:400px;padding:20px;border:8px solid #2B81D7;margin:10px}
 </style>
</head>
<body>
<?php include_once'equation.php'?>
<div class="phpcoding">
 <section class="headeroption">
  <h2><?php echo "Simple Calculator"; ?></h2>
 </section> 
 <section class="maincontent">
 
 <form action="" method="post">
        <table>
            <tr>
                <td>Enter Value of First Number : </td>
                <td><input type="number" name="num1" id="num1" placeholder="Enter 1st Number"></td>
            </tr>
            <tr>
                <td>Enter Value of Second Number : </td>
                <td><input type="number" name="num2" id="num2" placeholder="Enter 2nd Number"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Cancel"></td>
                <td><input type="submit" value="Submit" name="calculator"></td>
            </tr>
        </table>
    </form>
 
   <?php
   global $numOne, $numTwo;
    if(isset($_POST['calculator'])){
       $numOne = $_POST['num1'];
       $numTwo = $_POST['num2'];

        if(empty($numOne) or empty($numTwo)){
            echo "<span style='color:red;'>Enter a valid number<span>";
        }

        $cal = new Equation($numOne, $numTwo);
        //$cal->Subtraction();
        $cal->Summation($numOne, $numTwo);
        $cal->Subtraction($numOne, $numTwo);
        $cal->Multiplication($numOne, $numTwo);
        $cal->Divission($numOne, $numTwo);
    }
   ?>
   
     
   
  </section>
 <section class="footeroption">
  <h2><?php echo "Presented by Md. Rajib Hossain"; ?></h2>
 </section>
</div>
</body>
</html>