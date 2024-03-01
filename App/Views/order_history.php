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

                    <!--Go to Register form-->
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="register-in-container">
                            <div class="intro">
                                <!-- <h4 class="box-title">Đơn hàng đã đặt</h4> -->
                                <div class="card-body">
                                            <div class="table-responsive">
                                                <br>
                                                    <h4>Đơn hàng đang xử lý</h4>
                                                <br>
                                                <table class="table table-bordered table-md">
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Thông tin</th>
                                                        <th>Tổng hóa đơn</th>
                                                        <th>Trạng thái</th>
                                                        <th>Hành động</th>
                                                    </tr>
                                                   
                                                        <?php foreach ($order as $key => $od) : ?>
                                                            <tr>
                                                            <?php if ($od['stage'] !== 5 && $od['stage'] !== 6) : ?>
                                                                <td><input type="checkbox" value="<?=$od['id']?>"></td>
                                                                <td>
                                                                    Tên: <b><?=$od['customer_name']?></b><br>
                                                                    ====================<br>
                                                                    SĐT: <?=$od['customer_phone']?><br>
                                                                    Email: <?=$od['customer_email']?><br>
                                                                    Địa chỉ: <?=$od['customer_address']?><br>
                                                                </td>
                                                                <td><b><?=number_format($od['total'] + $od['ship'])?> vnđ</b></td>
                                                                <td>
                                                                    <?php if ($od['stage'] == 1 ) : ?>
                                                                            <a href="#" class="btn btn-warning" >Chờ duyệt</a>
                                                                        <?php if ($od['stage'] == 1 ) : ?>
                                                                            <a href="<?=BASE_PATH?>cancel&id=<?=$od['id']?>" class="btn btn-danger" >Hủy đơn</a>
                                                                        <?php endif ?>
                                                                    <?php elseif($od['stage'] == 2 ) :?>
                                                                        <a href="#" class="btn btn-info" >Đã nhận đơn</a>
                                                                    <?php elseif($od['stage'] == 3 ) :?>
                                                                        <a href="#" class="btn btn-info" >Đang xử lý</a>
                                                                    <?php elseif($od['stage'] == 4 ) :?>
                                                                        <a href="#" class="btn btn-info" >Đang giao</a>
                                                                    <?php elseif($od['stage'] == 5 ) :?>
                                                                        <a href="#" class="btn btn-success" >Giao thành công</a>
                                                                    <?php elseif($od['stage'] == 6 ) :?>
                                                                        <a href="#" class="btn btn-danger" >Đã hủy</a>
                                                                    <?php endif ?>
                                                                </td>
                                                                <td>
                                                                    <a href="<?=BASE_PATH?>order_detail_user&id=<?=$od['id']?>" class="btn btn-info">Chi tiết</a>
                                                                    <!-- <a href="#" class="btn btn-danger">Xóa</a> -->
                                                                </td>
                                                             <?php endif ?>
                                                            </tr>
                                                        <?php endforeach ?>
                                                    
                                                </table>
                                                <br>
                                                    <h4>Đơn hàng đã giao</h4>
                                                <br>
                                                <table class="table table-bordered table-md">
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Thông tin</th>
                                                        <th>Tổng hóa đơn</th>
                                                        <th>Trạng thái</th>
                                                        <th>Hành động</th>
                                                    </tr>
                                                            <?php foreach ($order as $key => $od) : ?>
                                                                <tr>
                                                                    <?php if ($od['stage'] == 5 || $od['stage'] == 6) : ?>
                                                                        <td><input type="checkbox" value="<?=$od['id']?>"></td>
                                                                        <td>
                                                                            Tên: <b><?=$od['customer_name']?></b><br>
                                                                            ====================<br>
                                                                            SĐT: <?=$od['customer_phone']?><br>
                                                                            Email: <?=$od['customer_email']?><br>
                                                                            Địa chỉ: <?=$od['customer_address']?><br>
                                                                        </td>
                                                                        <td><b><?=number_format($od['total'] + $od['ship'])?> vnđ</b></td>
                                                                        <td>
                                                                            <?php if ($od['stage'] == 1 ) : ?>
                                                                                    <a href="#" class="btn btn-warning" >Chờ duyệt</a>
                                                                                <?php if ($od['stage'] == 1 ) : ?>
                                                                                    <a href="<?=BASE_PATH?>cancel&id=<?=$od['id']?>" class="btn btn-danger" >Hủy đơn</a>
                                                                                <?php endif ?>
                                                                            <?php elseif($od['stage'] == 2 ) :?>
                                                                                <a href="#" class="btn btn-info" >Đã nhận đơn</a>
                                                                            <?php elseif($od['stage'] == 3 ) :?>
                                                                                <a href="#" class="btn btn-info" >Đang xử lý</a>
                                                                            <?php elseif($od['stage'] == 4 ) :?>
                                                                                <a href="#" class="btn btn-info" >Đang giao</a>
                                                                            <?php elseif($od['stage'] == 5 ) :?>
                                                                                <a href="#" class="btn btn-success" >Giao thành công</a>
                                                                            <?php elseif($od['stage'] == 6 ) :?>
                                                                                <a href="#" class="btn btn-danger" >Dẫ hủy</a>
                                                                            <?php endif ?>
                                                                        </td>
                                                                        <td>
                                                                            <a href="<?=BASE_PATH?>order_detail_user&id=<?=$od['id']?>" class="btn btn-info">Chi tiết</a>
                                                                            <!-- <a href="#" class="btn btn-danger">Xóa</a> -->
                                                                        </td>
                                                                    <?php endif ?>
                                                                </tr>
                                                            <?php endforeach ?>
                                                </table>
                                            </div>
                                        </div>
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