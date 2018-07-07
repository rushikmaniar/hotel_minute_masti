
<!DOCTYPE html>
<html lang="en">
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Hotel Minute Masti! | </title>

    <!-- Bootstrap -->
    <link href="<?= base_url(); ?>assets/backendwork/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?= base_url(); ?>assets/backendwork/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?= base_url(); ?>assets/backendwork/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?= base_url(); ?>assets/backendwork/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?= base_url(); ?>assets/backendwork/build/css/custom.min.css" rel="stylesheet">

</head>

<body class="login">
<div>
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>

    <div class="login_wrapper">
        <div class="animate form login_form">
            <section class="login_content">
                <form id="LoginForm" action="" method="post">
                    <h1>Login Form</h1>
                    <div>
                        <input name="LoginFormEmail" type="text" class="form-control" placeholder="Username"  />
                        <input name="Form" type="hidden" class="form-control"  value="LoginForm" />
                    </div>
                    <div>
                        <input name="LoginFormPassword" type="password" class="form-control" placeholder="Password"  />
                    </div>
                    <div>
                        <button type="submit" class="btn btn-default submit">Log in</button>
                        <a class="reset_pass" href="#">Lost your password?</a>
                    </div>

                    <div class="clearfix"></div>

                    <div class="separator">
                        <p class="change_link">New to site?
                            <a href="#signup" class="to_register"> Create Account </a>
                        </p>

                        <div class="clearfix"></div>
                        <br />

                        <div>
                            <h1><i class="fa fa-paw"></i> Hotel Minute Masti!</h1>
                            <p>©2018 All Rights Reserved. Hotel Minute Masti! is a Meet's Website. Privacy and Terms</p>
                        </div>
                    </div>
                </form>
            </section>
        </div>

        <div id="register" class="animate form registration_form">
            <section class="login_content">

                <form name="SignupForm" id="SignupForm" action="" method="post"class="form-horizontal form-label-left">
                    <h1>Create Account</h1>
                    <div class="item form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input name="Form" type="hidden" value="SignForm">
                            <input name="SignupFormFirstName" type="text" class="form-control" placeholder="FirstName" />
                        </div>
                    </div>
                    <div>
                        <input name="SignupFormLastName" type="text" class="form-control" placeholder="LastName" />
                    </div>
                    <div>
                        <input name="SignupFormEmail" type="email" class="form-control" placeholder="Email" />
                    </div>
                    <div>
                        <input name="SignupFormPassword" type="password" class="form-control" placeholder="Password" />
                    </div>

                    <div>
                        <button type="submit" class="btn btn-default submit">Submit</button>
                    </div>

                    <div class="clearfix"></div>

                    <div class="separator">
                        <p class="change_link">Already a member ?
                            <a href="#signin" class="to_register"> Log in </a>
                        </p>

                        <div class="clearfix"></div>
                        <br />

                        <div>
                            <h1><i class="fa fa-paw"></i> Hotel Minute Masti!</h1>
                            <p>©2018 All Rights Reserved. Hotel Minute Masti! is a Meet's Website. Privacy and Terms</p>
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </div>
</div>
</body>
<script type="text/javascript" src="<?= base_url()?>assets/backendwork/plugins/jquery/jquery.min.js"></script>
<script type="text/javascript" src="<?= base_url()?>assets/backendwork/plugins/jquery-validation/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?= base_url()?>assets/backendwork/plugins/jquery-validation/js/additional-methods.js"></script>


<script type="text/javascript">

    //login validate
    $("#LoginForm").validate({
        rules:
            {
                'LoginFormEmail': {
                    required: true,
                    email:true
                },
                'LoginFormPassword': {
                    required: true
                }
            },
        messages:
            {
                'LoginFormEmail': {
                    required: "This Field is Required",
                    email: "Enter Valid Email"
                },
                'LoginFormPassword': {
                    required: "This Field is Required"
                }
            }
    });

    //signup validate
    $("#SignupForm").validate({

        highlight: function(element) {
            $(element).parent().parent('div').addClass('bad');
        },
        unhighlight: function(element) {
            $(element).parent().parent('div').removeClass('bad');
        },
        errorPlacement: function (e, a) {
            jQuery(a).parent().parent().append(e)
        },
        errorclass:'alert',
        rules:
            {
                'SignupFormFirstName': {
                    required: true
                },
                'SignupFormLastName': {
                    required: true
                },
                'SignupFormEmail': {
                    required: true,
                    email:true
                },
                'SignupFormPassword': {
                    required: true
                }
            },
        messages:
            {
                'SignupFormFirstName': {
                    required: "<div class='alert'>This Field is Required</div>"
                },
                'SignupFormLastName': {
                    required: "<div class='alert'>This Field is Required</div>"
                },
                'SignupFormEmail': {
                    required: "This Field is Required",
                    email: "Enter Valid Email"
                },
                'SignupFormPassword': {
                    required: "This Field is Required"
                }
            }
    });


</script>
</html>
