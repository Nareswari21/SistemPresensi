<body>
    <!-- Login Register area Start-->
    <div class="login-content">
        <!-- Login -->
        <div class="nk-block toggled" id="l-login">
            <div class="nk-form">
                <h2>Login</h2>
                <form class="user" action="<?php echo $action ?>" method="post">
                    <div class="input-group">
                        <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-support"></i></span>
                        <div class="nk-int-st">
                            <input type="text" class="form-control" name="username" placeholder="Username"required="required">
                        </div>
                    </div>
                    <div class="input-group mg-t-15">
                        <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-edit"></i></span>
                        <div class="nk-int-st">
                            <input type="password" class="form-control" name="password" placeholder="Password"required="required">
                        </div>
                    </div>
                    <!-- <div class="fm-checkbox">
                        <label><input type="checkbox" class="i-checks"> <i></i> Keep me signed in</label>
                    </div> -->
                    <button style="background-color: #00c292;" type="submit" name="login" class="mg-t-15 btn btn-light" >Login</button>
                </form>
                <a href="<?php echo base_url(). 'auth/deskripsi'; ?>" data-ma-action="nk-login-switch" data-ma-block="#l-login" class="btn btn-login btn-success btn-float"><i class="notika-icon notika-right-arrow right-arrow-ant"></i></a>
            </div>

            <div class="nk-navigation nk-lg-ic">
                <a href="<?php echo base_url(). 'auth/deskripsi'; ?>" data-ma-action="nk-login-switch" data-ma-block="#l-register"><i class="notika-icon notika-plus-symbol"></i> <span>Deskripsi</span></a>
            </div>
        </div>
    </div>
