<!-- jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

<?php
    if(isset($_POST['Save'])) {
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $email = $_POST["email"];
        $phonenum = $_POST["phonenum"];
        $roomNum = $_POST["roomNum"];
        $cin = date('Y-m-d', strtotime($_POST['cin']));
        $cout = date('Y-m-d', strtotime($_POST['cout']));




        if(empty($fname) || empty($lname) || empty($email) || empty($phonenum) || empty($roomNum) || empty($cin) || empty($cout)) {
            echo "<script type='text/javascript'> alert('Please fill out the required fields.')</script>";
        }

        else {
            $con=mysqli_connect("localhost","root","","hotel_kiosk");
            $check="SELECT * FROM roombook WHERE email = '$_POST[email]'";
            $rs = mysqli_query($con, $check);
            $data = mysqli_fetch_array($rs, MYSQLI_NUM);
            if($data[0] > 1) {
                echo "<script type='text/javascript'> alert('User Already in Exists')</script>";
            }

            else
            {
                $query = "INSERT INTO roombook (fname, lname, email, phonenum, roomNum, cin, cout) VALUES ('$fname','$lname', '$email','$phonenum', '$roomNum','$cin', '$cout')";

                if (mysqli_query($con, $query))
                {
                    echo "<script>
                            $(window).load(function(){
                                $('#thankyouModal').modal('show');
                            });
                        </script>";
                    
                }
                else
                {
                    echo "<script type='text/javascript'> alert('Error adding user in database')</script>";
                    
                }
            }
        }

    }

?>

