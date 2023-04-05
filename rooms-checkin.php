<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rooms</title>
    <link rel="stylesheet" href="css/styles.css">

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;500&family=Montserrat:wght@300;400;500&display=swap" rel="stylesheet">

    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <!-- AES 256 ENCRYPTION-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.9-1/crypto-js.js"></script>

    <!-- QRCode.JS -->
  <script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>

</head>
<body>
    <main class="d-flex flex-nowrap">
        <div class="d-flex flex-column full-height sidebar">
            <h3>Welcome!</h3>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="index.html" class="nav-link" aria-current="page">
                Home
                </a>
            </li>

            <li>
                <a href="checkin.html" class="nav-link active">
                Check-In
                </a>
            </li>
            <li>
                <a href="checkout.html" class="nav-link">
                Check-Out
                </a>
            </li>
            <li>
                <a href="otherser.html" class="nav-link">
                Other Services
                </a>
            </li>
            <li>
                <a href="index.html" class="nav-link">
                Exit
                </a>
            </li>
            </ul>
            <hr>
            
        </div>
      
        <section class="rooms">
            <div class="page-content">
                <div>
                    <div class="headers rounded-top-3">
                        <h1>AVAILABLE ROOMS</h1>
                    </div>

                    <div class="room-container rounded-bottom-3" style="padding: 2%;">
                        <div class="card mb-3 mx-auto" id="room401" style="max-width: 100%;">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="images/room1.jpg" class="img-fluid rounded-start rounded" alt="room401">
                                    </div>
                        
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h4 class="card-title">Room 401</h4>
                                            <h5>Best Available Rate with Breakfast</h5>
                                            <div class="row">
                                                <div class="col">
                                                    <var>PHP 99,999.00</var>
                                                    <h6>For (x) Night, (x) Guest</h6>
                                                </div>
                                                <div class="col d-grid gap-2 d-md-flex justify-content-md-end">
                                                    <button type="button" class="btn btn-primary" onclick="roomOne()" data-bs-toggle="modal" data-bs-target="#roomModal" data-bs-roomnum="401">Select Offer</button>
                                                </div>
                                            </div>
                        
                                            <div>
                                                <div class="d-grid">
                                                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample1" aria-expanded="false" aria-controls="multiCollapseExample2">
                                                        Details
                                                    </button>
                                                </div>
                                                
                                                <div class="collapse multi-collapse" id="multiCollapseExample1">
                                                    <div class="card card-body">
                                                        <p> Amenities
                                                            <hr>
                                                            <ul>
                                                            <li>Living room</li>
                                                            <li>Powder room</li>
                                                            <li>Bathroom amenities by Roberto Cavalli</li>
                                                            <li>Spacious bathroom with bath tub</li>
                                                            <li>Intelligent toilet bowl</li>
                                                            <li>Hairdryer</li>
                                                            <li>Feather bed components</li>
                                                            <li>100% cotton bed linens</li> 
                                                            <li>Boca Terry luxury microfiber satin bathrobes</li>
                                                            <li>Walk-in closet</li>
                                                            <li>Automated private bar</li>
                                                            <li>In-room safety deposit box</li>
                                                            <li>Weighing scale</li>
                                                            <li>Coffee and tea making facilities</li>
                                                            <li>DigiValet service</li>
                                                            <li>Welcome and turndown amenities</li>
                                                            </ul>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                            <div class="card mb-3 mx-auto" id="room402" style="max-width: 100%;">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="images/room2.jpg" class="img-fluid rounded-start rounded" alt="room402">
                                    </div>
                                    <div class="col-md-8 order-2">
                                        <div class="card-body">
                                            <h4 class="card-title">Room 402</h4>
                                            <h5>Best Available Rate with Breakfast</h5>
                                            <div class="row">
                                                <div class="col">
                                                    <var>PHP 29,999.00</var>
                                                    <h6>For (x) Night, (x) Guest</h6>
                                                </div>
                        
                                                <div class="col d-grid gap-2 d-md-flex justify-content-md-end">
                                                    <button type="button" name="roomNum" class="btn btn-primary" onclick="roomTwo()" data-bs-toggle="modal" data-bs-target="#roomModal">Select Offer</button>
                                                </div>
                                            </div>
                        
                                            <div>
                                                <div class="d-grid">
                                                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">
                                                        Details
                                                    </button>
                                                </div>
                                                <div class="collapse multi-collapse" id="multiCollapseExample2">
                                                    <div class="card card-body">
                                                        <p> Amenities
                                                            <hr>
                                                            <ul>
                                                                <li>Toiletries (e.g. Shampoo, lotion, etc.)</li>
                                                                <li>Personal care (combs, shaving cream, razor, shower cap, hair dryer)</li>
                                                                <li>Coffee Kit (maker, coffee and creamer)</li>
                                                                <li>Tissue box</li>
                                                                <li>Bathrobes and slippers</li>
                                                            </ul>
                                                        </p>
                                                    </div>
                                                </div>
                                                
                                                <div class="collapse" id="collapseExample">
                                                    <div class="card card-body">
                                                        
                                                    </div>
                                                </div>
                                            </div>
                        
                                            
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        

                            <div class="row">
                                <div class="col d-grid confirm-btn">
                                    <a href="checkin.html">
                                        <button class="btn btn-primary roomsbtn" type="submit" style="margin: 0;">Cancel</button>
                                    </a>
                                </div>

                                
                            </div>
                        

                    </div>

                    
                </div>

                
            </div>
        </sections>
    </main>

    <!-- room modal -->
    <div class="modal fade" id="roomModal">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
              <h1>CONFIRM BOOKING</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
    
            
            
            <!-- Modal body -->
            <div class="modal-body">
              <div class="room-container rounded-bottom-3" style="padding: 2%;">
                <form  class="needs-validation" method="post" novalidate>
                    <div class="row">
                        <!-- guest info -->
                        <div class="info-box">
                            <div class="header rounded-top-3">
                                <h3>Guest Information</h3>
                            </div>

                            <div class="col" style="padding: 0 3%";>
                                <div class="mb-3 mt-3 col">
                                    <label for="fnameWithValidation" class="form-label col-form-label-lg h3">First Name:</label>
                                    <input type="text" class="form-control" id="fnameWithValidation" name="fname" placeholder="First name" aria-label="First name" required>
                                </div>
                                
                                
                                <div class="mb-3 mt-3 col">
                                    <label for="lnameWithValidation" class="form-label col-form-label-lg h3">Last Name:</label>
                                    <input type="text" class="form-control" id="lnameWithValidation" name="lname"placeholder="Last name" aria-label="Last name" required>
                                </div>
    
                                <div class="mb-3 mt-3 col">
                                    <label for="emailWithValidation" class="form-label col-form-label-lg h3">Email:</label>
                                    <input type="email" class="form-control eqr-input" id="emailWithValidation" name="email" placeholder="Enter email" required>
                                </div>
                    
                                <div class="mb-3 mt-3 col">
                                    <label for="contactWithValidation" class="form-label col-form-label-lg h3">Contact Number:</label>
                                    <input type="tel" class="form-control" id="contactWithValidation" name="phonenum" placeholder="Contact Number" required>
                                </div>
                            </div>
                        </div>
                        

                        <!-- room info -->
                        <div class="info-box">
                            <div class="header rounded-top-3">
                                <h3>Room Information</h3>
                            </div>

                            <div class="col" style="padding: 0 3%";>
                                <div class="mb-3 mt-3 col">
                                    <label for="roomnumWithValidation" class="form-label col-form-label-lg h3">Room Number:</label>
                                    <input type="number" class="form-control" id="roomnumWithValidation" name="roomNum" required>
                                </div>
    
                                <div class="mb-3 mt-3 col">
                                    <label class="form-label col-form-label-lg h3" for="cinWithValidation">Check-In:</label>
                                    <input type="date" class="form-control" id="cinWithValidation" name="cin" required>
                                </div>
                
                                <div class="mb-3 mt-3 col">
                                    <label class="form-label col-form-label-lg h3" for="coutWithValidation">Check-Out:</label>
                                    <input type="date" class="form-control" id="coutWithValidation" name="cout" required>
                                </div>

                                 
                            </div>
                        </div>

                       
                    </div>
                    <!-- EQR CODE -->
                    <div class="eqr-container text-center">
                        <div class="header rounded-top-3">
                            <h3>EQR Code</h3>
                        </div>
                        
                        <button class="btn btn-primary" type="button" onclick="generateQRCode(); enableSave()">
                            Show EQR Code
                        </button>
                        
                        <div id="eqrcode-container">
                            <div id="eqrcode" class="eqrcode"> </div>
                        </div>
                    </div>
                    

                    <div class="d-grid gap-3 d-md-flex justify-content-md-end">
                        <button class="btn btn-primary" id="save-btn" name="Save" type="submit" disabled>Save</button>
                    </div>

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
                    
                </form>

                



                
              </div>
            </div>
    
            <!-- Modal footer -->
            <div class="modal-footer">
            </div>
      
          </div>
        </div>
    </div>

    <!-- modal for submitted form -->
    <div class="modal fade" id="thankyouModal" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Status</h4>
                </div>

                <div class="modal-body">
                    <p>Check-In Success! Please Proceed to the counter for payment</p>                     
                </div>    
            </div>
        </div>
    </div>

    

    <script>
        function hrefFunction() {
            window.location.href = "confirm-checkin.html";
        }

        function roomOne() {
            document.getElementById("roomnumWithValidation").value = 401;
        }

        function roomTwo() {
            document.getElementById("roomnumWithValidation").value = 402;
        }

        document.getElementById("cinWithValidation").value = new Date().toISOString().slice(0, 10);

        // disable past dates
        var date = new Date();
            
        var month = date.getMonth() + 1;
        var day = date.getDate();
        if(month < 10)
            month = '0' + month;
        if(day < 10)
            day = '0' + day;
        
        var year = date.getUTCFullYear();
        var minDate = year + "-" + month + "-" + day;
        document.getElementById("coutWithValidation").setAttribute('min', minDate)

        //AES 256 ENCRYPTED QR CODE GENERATOR
        var container = document.querySelector(".container");
        var generateBtn = document.querySelector(".generate-btn");
        var qrInput = document.querySelector(".eqr-input");
        var qrImg = document.querySelector(".qr-image");

        //aes encryption
        function aesEncrypt (data) {
        const key = '92emHlyrvC2JYxeIg1AQNqGaxP0AclN='
        const iv = '@NcRfUjXn2r5u8x/'
        const cipher = CryptoJS.AES.encrypt(data, CryptoJS.enc.Utf8.parse(key), {
            iv: CryptoJS.enc.Utf8.parse(iv),
            padding: CryptoJS.pad.Pkcs7,
            mode: CryptoJS.mode.CBC
        })

        return cipher.toString()
        }

        //eqr code using qrcodejs
        function generateQRCode() {
            var message = document.getElementById("emailWithValidation").value;
            if (message == "") {
                alert("Do not leave empty fields.");
            } else{
                var cipher = aesEncrypt(message);
            if (cipher) {
                let qrcodeContainer = document.getElementById("eqrcode");
                qrcodeContainer.innerHTML = "";
                new QRCode(qrcodeContainer, {
                text: cipher,
                width: 300,
                height: 300,
                colorLight: "#FFF2E6",
                colorDark: "#502419"
                });
                document.getElementById("eqrcode-container").style.display = "block";
            } 
            }
            
        }
        console.log(qrInput);

        //enable save after generating the eqr code

        function enableSave() {
            var emailInput = document.getElementById("emailWithValidation").value;
            if(emailInput == ""){
                alert("Do not leave empty fields.");
                
            } else {
                var checkIfDisabled = document.getElementById("save-btn");
                checkIfDisabled.disabled = false;
            }
            
        }

        //validate forms
        (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
            });
        }, false);
        })();
    </script>


    

    
</body>

</html>