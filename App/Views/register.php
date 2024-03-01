<?php 
    require_once "header.php";
    extract($data);
    // var_dump($product);
?>

<!--Hero Section-->
<div class="hero-section hero-background">
        <h1 class="page-title">Organic Fruits</h1>
    </div>

    <!--Navigation section-->
    <div class="container">
        <nav class="biolife-nav">
            <ul>
                <li class="nav-item"><a href="index-2.html" class="permal-link">Home</a></li>
                <li class="nav-item"><span class="current-page">Authentication</span></li>
            </ul>
        </nav>
    </div>

<div class="page-contain login-page">

        <!-- Main content -->
        <div id="main-content" class="main-content">
            <div class="container">

                <div class="row">

                    <!--Form Sign In-->
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="signin-container">
                            <form action="<?=BASE_PATH?>register_add" name="frm-login" method="post">
                                <p class="form-row">
                                    <label for="fid-name">Họ và tên:<span class="requite">*</span></label>
                                    <input type="text" id="fid-name" name="name" value="" class="txt-input">
                                </p>
                                <p class="form-row">
                                    <label for="fid-email">Email:<span class="requite">*</span></label>
                                    <input type="email" id="fid-email" name="email" value="" class="txt-input">
                                </p>
                                <p class="form-row">
                                    <label for="fid-pass">Mật khẩu:<span class="requite">*</span></label>
                                    <input type="password" id="fid-pass" name="password" value="" class="txt-input">
                                </p>
                                <p class="form-row">
                                    <label for="fid-pass">Nhập lại mật khẩu:<span class="requite">*</span></label>
                                    <input type="password" id="fid-pass" name="re_pass" value="" class="txt-input">
                                </p>
                                <p class="form-row">
                                    <label for="fid-address">Địa chỉ<span class="requite">*</span></label>
                                    <input type="text" id="fid-address" name="address" value="" class="txt-input">
                                </p>
                                <p class="form-row">
                                    <label for="fid-phone">SĐT: <span class="requite">*</span></label>
                                    <input type="text" id="fid-phone" name="phone" value="" class="txt-input">
                                </p>

                                <p class="form-row wrap-btn">
                                    <button class="btn btn-submit btn-bold" type="submit">Đăng ký</button>
                                    <a href="#" class="link-to-help">Forgot your password</a>
                                </p>
                            </form>
                        </div>
                    </div>

                    <!--Go to Register form-->
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="register-in-container">
                            <div class="intro">
                                <h4 class="box-title">New Customer?</h4>
                                <p class="sub-title">Create an account with us and you’ll be able to:</p>
                                <ul class="lis">
                                    <li>Check out faster</li>
                                    <li>Save multiple shipping anddesses</li>
                                    <li>Access your order history</li>
                                    <li>Track new orders</li>
                                    <li>Save items to your Wishlist</li>
                                </ul>
                                <a href="#" class="btn btn-bold">Create an account</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>



<?php 
    require_once "footer.php"
?>