<?php 
    require_once "../ASM2/App/Views/backend/header.php";
    require_once "../ASM2/App/Views/backend/sidebar.php";
    
    extract($data);
?>
<div class="main-content">
    <section class="section">
        <div class="section-body">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12">
                                    <div class="card">
                                        <div class="card-header" style="justify-content: space-between;">
                                            <h4>Danh Sách Đơn Hàng</h4>
                                            <a class="btn btn-warning" href="<?=BASE_PATH?>trash_order">Lịch sử đơn hàng</a>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
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
                                                            <?php if ($od['stage'] != 5 && $od['stage'] != 6) : ?>
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
                                                                        <a href="<?=BASE_PATH?>stage&id=<?=$od['id']?>" class="btn btn-warning" >Chờ duyệt</a>
                                                                    <?php elseif($od['stage'] == 2 ) :?>
                                                                        <a href="<?=BASE_PATH?>stage&id=<?=$od['id']?>" class="btn btn-info" >Đã nhận đơn</a>
                                                                    <?php elseif($od['stage'] == 3 ) :?>
                                                                        <a href="<?=BASE_PATH?>stage&id=<?=$od['id']?>" class="btn btn-info" >Đang xử lý</a>
                                                                    <?php elseif($od['stage'] == 4 ) :?>
                                                                        <a href="<?=BASE_PATH?>stage&id=<?=$od['id']?>" class="btn btn-info" >Đang giao</a>
                                                                    <?php elseif($od['stage'] == 5 ) :?>
                                                                        <a href="<?=BASE_PATH?>stage&id=<?=$od['id']?>" class="btn btn-success" >Giao thành công</a>
                                                                    <?php elseif($od['stage'] == 6 ) :?>
                                                                        <a href="#" class="btn btn-danger" >Dẫ hủy</a>
                                                                    <?php endif ?>
                                                                </td>
                                                                <td>
                                                                    <a href="<?=BASE_PATH?>order_detail&id=<?=$od['id']?>" class="btn btn-info">Chi tiết</a>
                                                                    <!-- <a href="#" class="btn btn-danger">Xóa</a> -->
                                                                </td>
                                                                <?php endif ?>
                                                            </tr>
                                                        <?php endforeach ?>
                                                    
                                                </table>
                                            </div>
                                        </div>
                                        <div class="card-footer text-right">
                                            <nav class="d-inline-block">
                                                <ul class="pagination mb-0">
                                                    <li class="page-item disabled">
                                                        <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                                                    </li>
                                                    <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="#">2</a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                    </div>
            </div>
        </div>
    </section>
</div>     
<?php 
    require_once "../ASM2/App/Views/backend/footer.php";
?>