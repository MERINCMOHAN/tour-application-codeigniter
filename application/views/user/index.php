<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>


<div class="page-head"> 
    <div class="container">
        <div class="row">
            <div class="page-head-content">
                <h1 class="page-title">Home New account / Sign in </h1>               
            </div>
        </div>
    </div>
</div>
<!-- End page header -->


<!-- register-area -->
<div class="register-area" style="background-color: rgb(249, 249, 249);">
    <div class="container">
        
        <?php if ($this->session->flashdata('Success')) { ?>
            <h4 id="message"><label><?php echo $this->session->flashdata('Success'); ?></label></h4>
            <hr>
        <?php } ?>
        <?php if ($this->session->flashdata('Error')) { ?>
            <h4 id="message" style="color: red;"><label><?php echo $this->session->flashdata('Error'); ?></label></h4>
            <hr>
        <?php } ?>
        <div class="col-md-6">
            <div class="box-for overflow">
                <div class="col-md-12 col-xs-12 register-blocks">
                    <h2>New account : </h2> 
                    <form action="<?= base_url() ?>index.php/users/userRegistration" method="post" name="frmRegister" id="frmRegister">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" id="name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" name="email" id="email">
                            <span class="error" id="Error" style="display:none;">Please Enter Unique Email Address</span>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" id="password">
                        </div>
                        <div class="form-group">
                            <label for="password">Confirm Password</label>
                            <input type="password" class="form-control" name="cpassword" id="cpassword">
                        </div>
                        <div class="text-center">
                            <button type="submit" id="btnRegister" class="btn btn-default">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="box-for overflow">                         
                <div class="col-md-12 col-xs-12 login-blocks">
                    <h2>Login : </h2> 
                    <form action="<?= base_url() ?>index.php/users/authentication" method="post" name="frmLogin" id="frmLogin">
                        <div class="form-group">
                            <label for="lgnemail">Email</label>
                            <input type="text" class="form-control" name="lgnemail">
                        </div>
                        <div class="form-group">
                            <label for="lgnpassowrd">Password</label>
                            <input type="password" class="form-control" name="lgnpassowrd">
                        </div>
                        <div class="text-center">
                            <button type="submit" name="btnlogin" class="btn btn-default"> Log in</button>
                        </div>
                    </form>
                    <br>

                    <h2>Social login :  </h2> 

                    <p>
                        <a class="login-social" href="#"><i class="fa fa-facebook"></i>&nbsp;Facebook</a> 
                        <a class="login-social" href="#"><i class="fa fa-google-plus"></i>&nbsp;Gmail</a> 
                        <a class="login-social" href="#"><i class="fa fa-twitter"></i>&nbsp;Twitter</a>  
                    </p> 
                </div>

            </div>
        </div>

    </div><script type="text/javascript">
    $(document).ready(function () {
        //Employye Form Jquery Validation
        
        $("#frmRegister").validate({
            rules: {
                name: {
                    required: true,
//                    lettersonly: true
                },
                email: {
                    required: true,
                    email: true
                },
                password: {
                    required: true,
                    minlength: 5
                },
                cpassword: {
                    required: true,
                    equalTo: "#password"
                }
            },
            messages: {
                name: {
                    required: "Please enter your name",
//                    lettersonly: "Please enter valid characters"
                },
                email: {
                    required: "Please enter your email",
                    email: "Please enter a valid email address"
                },
                password: {
                    required: "Please provide a password ",
                    minlength: "Please Enter at least 5 characters long"
                },
                cpassword: {
                    required: "Please provide a confirm password ",
                    equalTo: "Please provide same password"
                }
                
                
            },
            errorPlacement: function (error, element) {
                    error.insertAfter(element);
            },
            submitHandler: function (form) {
               // Event.preventDefault();
              // alert();
                var email = $('#email').val();
                //alert(email);
                    $.ajax({
                        url: '<?= base_url() ?>index.php/users/checkEmailExist/',
                        type: 'post',
                        data: {email: email},
                        success: function (response) {
                            if (response == 1) {
                                alert('Enter Unique Email Address');
                            }else{
                                form.submit();
                            }
                        },
                        error: function (jqXHR, status, message) {
                            alert('A jQuery error has occurred. Status: ' + status + ' & Message: ' + message + 'XHR : ' + jqXHR.status + 'text status :' + jqXHR.statusText);
                            console.log(jqXHR);
                        }
                    });
                
            }
        });
        
//        $("#frmRegister").submit({
//        alert();
//        });
//        
         $("#frmLogin").validate({
            rules: {
                lgnemail: {
                    required: true,
                    email: true
                },
                lgnpassowrd: {
                    required: true,
                    minlength: 5
                }
            },
            messages: {
                lgnemail: {
                    required: "Please enter your Email",
                    email: "Please enter valid Email"
                },
                lgnpassowrd: {
                    required: "Please provide a password ",
                    minlength: "Please Enter at least 5 characters long"
                }
            },
            errorPlacement: function (error, element) {
                    error.insertAfter(element);
            },
            submitHandler: function (form) {
                form.submit();
            }
        });
    });
    
    function checkEmail(){
    var email = $('#email').val();
                alert(email);
                    $.ajax({
                        url: '<?= base_url() ?>index.php/Users/checkEmailExist/',
                        type: 'post',
                        data: {email: email},
                        success: function (response) {
                            if (response == 1) {
                                $('#Error').show();
                                $('#email').focus();
                            }else{
                               
                            }
                        },
                        error: function (jqXHR, status, message) {
                            alert('A jQuery error has occurred. Status: ' + status + ' & Message: ' + message + 'XHR : ' + jqXHR.status + 'text status :' + jqXHR.statusText);
                            console.log(jqXHR);
                        }
                    });
    }
</script>
</div>      