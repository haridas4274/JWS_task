<?php include "config.php"; ?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <title>Blue::bus</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://reconbus.com/images/favicon.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600&amp;display=swap"
        rel="stylesheet">
    <link type="text/css" href="https://reconbus.com/css/style.css" rel="stylesheet">
    <link type="text/css" href="https://reconbus.com/css/jquery.ui.theme.css" rel="stylesheet">
    <link type="text/css" href="https://reconbus.com/css/jquery.ui.core.css" rel="stylesheet">
    <link type="text/css" href="https://reconbus.com/css/jquery.ui.datepicker.css" rel="stylesheet">
    <link type="text/css" href="https://reconbus.com/css/coachget.css" rel="stylesheet">
    <link rel="stylesheet" href="https://reconbus.com/css/jquery-ui.css">
    <link type="text/css" href="https://reconbus.com/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://reconbus.com/css/jquery.dataTables.css">
    <link href="https://reconbus.com/css/material_icon.css" rel="stylesheet">
    <script src="https://reconbus.com/js/jquery-1.11.3.min.js"></script>

    <script src="https://reconbus.com/js/jquery-ui.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!--<script src="js/jquery-1.8.3.js"></script>-->
    <script src="https://reconbus.com/js/jquery.validate.js"></script>
    <!-- Code Ends Here -->
    <link rel="stylesheet" type="text/css" href="https://reconbus.com/css/index.css">
    <link href="https://reconbus.com/css/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://reconbus.com/css/owl.carousel.min.css">
    <script src="https://reconbus.com/js/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://reconbus.com/css/slick.min.css">
    <script src="https://reconbus.com/js/slick.min.js"></script>
    <link rel="stylesheet" href="https://reconbus.com/css/slick-theme.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body topmargin="0" leftmargin="0" rightmargin="0" bgcolor="#CCCCCC" data-aos-easing="ease" data-aos-duration="400"
    data-aos-delay="0" class="homepage">
    <div id="header" class="">

        <div class="logohead cf">
            <div class="XXXBMargin">
                <a href="javascript:void(0);" class="menu-toggle"><span class="lines"></span></a>
                <a class="loma" href="https://reconbus.com/index.php"><img src="https://reconbus.com/images/recon.png"
                        alt="logo"></a>
                <a class="loma1" href="https://reconbus.com/index.php"><img alt="logo"
                        src="https://reconbus.com/images/recon.png"></a>
            </div>
            <div id="menutop">
                <ul id="nav">
                    <li class="account hms meehm"><a href="#">Recon Support<i class="fa fa-angle-down"></i></a>
                        <ul class="child dropdown_menu-5">
                            <!--<li class="dropdown_item-1"><a href="https://reconbus.com/write_to_us.php">Write to us</a></li>-->
                            <li class="dropdown_item-2"><a href="https://reconbus.com/write_to_us.php">Call us at</a>
                            </li>
                        </ul>
                    </li>

                    <li class="account hms meehm"><a href="#">Manage Booking<i class="fa fa-angle-down"></i></a>
                        <ul class="child dropdown_menu-5">
                            <li class="dropdown_item-1"><a href="https://reconbus.com/index.php">Home</a></li>
                            <li class="dropdown_item-2"><a
                                    href="https://reconbus.com/printticket.php">Print/Download</a></li>
                            <li style="display:none;"><a href="https://reconbus.com/email_sms.php">Email/SMS</a></li>
                            <li class="dropdown_item-3"><a
                                    href="https://reconbus.com/cancel_ticket.php">Cancellation</a></li>


                        </ul>
                    </li>
                    <li class="account hms">
                        <i class="fa fa-user pfle" aria-hidden="true"></i>
                        <a class="logim" href="#" style="margin: -11px 0 0;">


                        </a><a class="log1im" href="#">
                            <img src="https://reconbus.com/images/login-img1.png"
                                style=" width: 30px; margin-left: -15px">
                            <i class="fa fa-angle-down" style="color:#fff;"></i> </a>

                        <ul class="child signss dropdown_menu-5">
                            <li class="signin bo-lef dropdown_item-1"><button type="button" class="not-btn"
                                    data-toggle="modal" data-target="#signinup">User Sign In</button></li>
                            <li class="signin bo-lef" style="display:none;"><button type="button" class="not-btn"
                                    onclick="agentLogin();">Agent Sign In</button></li>

                        </ul>
                    </li>
                </ul>
            </div>

            <div class="mobileHide topmenuRight">
                <ul id="tcktmenu" class="topmenu">
                    <li><a href="https://reconbus.com/index.php">Home</a></li>
                    <li><a href="https://reconbus.com/printticket.php">Print/Download</a></li>
                    <li><a href="https://reconbus.com/email_sms.php">Email/SMS</a></li>
                    <li><a href="https://reconbus.com/cancel_ticket.php">Cancellation</a></li>


                </ul>
            </div>
        </div>
        <!-- header end here -->

    </div>
    <div class="modal fade" id="signinup" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <div class="modal-main-body">
                    <div class="modal-header">
                        <img src="https://reconbus.com/images/recon.png">
                        <h5 class="modal-title" id="exampleModalLongTitle">SIGN IN / SIGN UP</h5>

                    </div>
                    <div class="modal-body overflow-hidden">
                        <div class="signin-signup-container row">
                            <div class="col-sm-6">
                                <form name="frm_search" id="signin_form" action="" method="POST">
                                    <input type="text" name="txt_email" id="login_email"
                                        class="textbox_login fadeIn second" placeholder="Enter email id Or Mobile No">
                                    <span style="display:none;" class="errormsg">Please enter your Email </span>
                                    <input type="password" name="txt_pwd" id="txt_pwd"
                                        class="textbox_login fadeIn third" placeholder="Enter password">
                                    <span class="pwdmsg">Please enter your Password </span>
                                    <input type="submit" name="signin_button" id="loginSubmit" value="Submit"
                                        style="display: block;margin: 20px auto;">
                                </form>
                                <a href="forgot.php">Forgot Password?</a>
                                <a href="javascript:void(0);" class="signup-button">SIGN UP</a>
                            </div>
                            <div class="col-sm-6">
                                <form name="frm_search" id="frm_search" action="register_form.php" method="post">
                                    <input type="text" name="fname" id="fname" class="textbox_login fadeIn second"
                                        placeholder="Enter First name">
                                    <span class="fname errorup">Please enter your First name</span>
                                    <input type="text" name="lname" id="lname" class="textbox_login fadeIn second"
                                        placeholder="Enter Last Name">
                                    <span class="lname errorup">Please enter your Last name</span>
                                    <input type="text" name="email" id="email" class="textbox_login fadeIn second"
                                        placeholder="Enter E-mail">
                                    <span class="email_id errorup">Please enter your Last name</span>
                                    <input type="password" name="password" id="txtpwd1"
                                        class="textbox_login fadeIn third" placeholder="Enter Password">
                                    <span class="txtpwd1 errorup">Please enter your Password</span>
                                    <input type="text" name="mobile" id="txtmobile" class="textbox_login fadeIn third"
                                        placeholder="Enter Mobile Number">
                                    <span class="txtmobile errorup">Please enter your Password</span>
                                    <input type="submit" name="Submit" id="signup_submit" value="Register"
                                        style="display: block;margin: 20px auto;">
                                </form>

                                <a href="javascript:void(0);" class="signin-button">SIGN IN</a>
                            </div>
                        </div>
                        <div class="modal-footer">

                        </div>

                    </div>
                </div>
                <div class="login-form-img">
                    <p>Welcome To Reconbus</p>
                    <img src="https://reconbus.com/images/slider/banner_1636549545.jpeg" id="icon" alt="User Icon">
                </div>

            </div>
        </div>
    </div>

    <script>
    function agentLogin() {
        window.open("https://reconbus.com/agent", '_blank');
    }
    //login
    $("#loginSubmit").click(function() {
        var email = $("#login_email").val();
        var pass = $("#txt_pwd").val();
        if (email == '') {
            $(".errormsg").show();
            // alert("Please Enter Email Address");//
            return false;
        }

        // var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
        // if (reg.test(email) == false && email!='') 	{
        //     alert("Invalid Email Address");	
        //     $("#email").val('');	
        //     return false;	
        // }	
        if (pass == '') {
            $(".pwdmsg").show();
            //alert("Please Enter Password");//
            return false;
        }
        $("#signin_form").submit();
    });
    //signup
    $("#signup_submit").click(function() {
        var f_name = $("#fname").val();
        var l_name = $("#lname").val();
        var pass = $("#txtpwd1").val();
        if (f_name == '') {
            $(".fname").show();
            // alert("Please Enter Your Name");//    
            return false;
        }
        if (l_name == '') {
            $(".lname").show();
            // alert("Please Enter Your Last Name"); //
            return false;
        }
        var email = $("#email").val();
        if (email == '') {
            $(".email_id").show();
            //alert("Please Enter Email Address");//
            return false;
        }
        var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
        if (reg.test(email) == false && email != '') {
            alert("Invalid Email Address");
            $("#email").val('');
            return false;
        }
        if (pass == '') {
            $(".txtpwd1").show();
            // alert("Please Enter Password");	//
            return false;
        }
        var mobile = $("#txtmobile").val();
        if (mobile.length != 10 || mobile.length == 0) {

            $(".txtmobile").show();
            //alert("please Enter Valid Mobile Number");//
            return false;
        }
        if (mobile == '') {
            $(".txtmobile").show();
            // alert("please Enter Mobile Number");//
            return false;
        }
        $("#register").submit();
    });
    </script>
    <script>
    $(".menu-toggle").on('click', function() {
        $('.topmenuRight').toggleClass('open');
        $(this).toggleClass("menu-toggle--open");
    });

    $(function() {
        $('.signup-button').click(function() {
            $('.signin-signup-container').addClass('active');
        });
        $('.signin-button').click(function() {
            $('.signin-signup-container').removeClass('active');
        });
    });
    </script>
    <script>
    var table = $('table');

    $('#bus_type_header, #depature_header, #arrival_header, #duration_header')
        .wrapInner('<span title="sort this column"/>')
        .each(function() {

            var th = $(this),
                thIndex = th.index(),
                inverse = false;

            th.click(function() {

                table.find('td').filter(function() {

                    return $(this).index() === thIndex;

                }).sortElements(function(a, b) {

                    return $.text([a]) > $.text([b]) ?
                        inverse ? -1 : 1 :
                        inverse ? 1 : -1;

                }, function() {

                    // parentNode is the element we want to move
                    return this.parentNode;

                });

                inverse = !inverse;

            });

        });
    </script>

    <div id="container" class="cf">
        <div class="wrap1">
            <script type="text/javascript" src="js/typeahead.min.js"></script>
            <script type="text/javascript">
            $(function() {
                $("#datepicker").datepicker({
                    minDate: 0,
                    dateFormat: 'dd-mm-yy'
                });
                $("#datepicker1").datepicker({
                    defaultDate: "+1w",
                    dateFormat: 'dd-mm-yy',
                    beforeShow: function() {
                        $(this).datepicker('option', 'minDate', $('#datepicker').val());
                        if ($('#datepicker').val() === '') $(this).datepicker('option', 'minDate',
                            0);
                    }
                });
            });
            </script>
            <script type="text/javascript">
            function dat_val() {
                if (document.getElementById('tag').value != "") {
                    document.getElementById('dat').style.display = 'block';
                    document.getElementById('datepicker').focus();
                    return false;
                }
            }

            function validate() {
                if (document.getElementById('originid').value == "") {
                    alert("please enter the source value");
                    document.getElementById('originid').focus();
                    return false;
                }
                if (document.getElementById('destinationid').value == "") {
                    alert("please enter the Destination value");
                    document.getElementById('destinationid').focus();
                    return false;
                }
                if ((document.getElementById('originid').value != "") && (document.getElementById('destinationid')
                        .value != "") && (document.getElementById('datepicker').value == "")) {
                    document.getElementById('datepicker').focus();
                    return false;
                }
                var date = document.getElementById('datepicker').value;
                var date1 = document.getElementById('datepicker1').value;
                if (document.getElementById('datepicker1').value != "") {
                    if (date >= date1) {
                        alert('Please select Return date greater than Journey date');
                        document.getElementById('datepicker1').value = "";
                        document.getElementById('datepicker1').focus();
                        return false;
                    }
                }
            }
            </script>
            <script type="text/javascript">
            function showreturn(val) {
                if (val == 2) {
                    document.getElementById('returnshow').style.display = "block";
                } else {
                    document.getElementById('returnshow').style.display = "none";
                }
            }
            </script>
            <style>
            .tt-hint {
                display: none
            }

            .twitter-typeahead {
                display: inherit !important
            }

            input[type="text"],
            input[type="email"],
            textarea,
            input[type="tel"] {
                width: 100%;
                padding: 20px;
                border-radius: 20px;
                margin-top: 10px;
                border: 2px solid #555;
            }

            input[type="submit"] {
                border: 2px solid #32A3E1;
                background: #32A3E1;
                padding: 10px 70px;
                margin: 20px 0px;
                color: #fff;
                border-radius: 8px;
            }
            </style>
<?php include ('Main.php'); ?>

