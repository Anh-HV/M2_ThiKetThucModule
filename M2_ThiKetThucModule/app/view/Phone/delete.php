<?php require "./app/view/Layout/header.php"; ?>
<main role="main" class="main-content">
    <h1>Xóa Mặt Hàng</h1>
    <h4>Bạn chắc chắn muỗn xóa <?php echo "Sản Phẩm : " . $phone->phone_name; ?>?</h4>
    <div class="container-fluid">
        <form action="http://localhost/M2_ThiKetThucModule/?url=PhoneController/delete/<?php echo $phone->id; ?>" method="POST">
            <input type="hidden" name="id" value="<?php echo $phone->id; ?>" />
            <div class="form-group">
                <input type="submit" value="Delete" class="btn btn-outline-danger" />
                <a class="btn btn-outline-primary" href="http://localhost/M2_ThiKetThucModule/?url=PhoneController">Cancel</a>
        </form>
        <?php require "./app/view/Layout/footer.php"; ?>