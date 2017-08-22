
    <body class="login">
        <div id="content">
            <div class="container-fluid">
                <div class="lock-container">
                    <div class="panel panel-default text-center paper-shadow" data-z="0.5">
                        <h1 class="text-display-1 text-center margin-bottom-none">Sign In</h1>
                        <img src="<?php echo base_url('assets/images/people/110/login.jpg')?>" class="img-circle width-80"/>
                        <?php
                            echo form_open('AuthenticationController/doLogin');
                        ?>
                        <div class="panel-body">
                            <div class="form-group">
                                <div class="form-control-material">
                                    <?php
                                        $data = array(
                                            'name'          => 'username',
                                            'id'            => 'username',
                                            'placeholder'   => 'Enter Username',
                                            'maxlength'     => '14',
                                            'autofocus'     => 'true',
                                            'class'         => 'form-control',
                                            'required' => true
                                        );
                                        echo form_input($data);
                                    ?>
                                    <label for="username">Username</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-control-material">
                                    <?php
                                        $data = array(
                                            'name'          => 'password',
                                            'id'            => 'password',
                                            'placeholder'   => 'Enter Password',
                                            'class'         => 'form-control',
                                            'required' => true
                                        );
                                        echo form_password($data);
                                    ?>
                                    <label for="password">Password</label>
                                </div>
                            </div>
                            <?php echo form_submit('login', 'Login', array('class'=>'btn btn-primary'));?>
                            <a href="#" class="forgot-password">Forgot password?</a>
                            <a href="sign-up.html" class="link-text-color">Create account</a>
                        </div>
                      <?php
                          echo form_close();
                      ?>
                    </div>
                </div>
            </div>
        </div>