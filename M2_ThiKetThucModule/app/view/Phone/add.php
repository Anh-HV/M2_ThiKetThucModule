<?php require "./app/view/Layout/header.php"; ?>

?>
<main role="main" class="main-content">
    <div class="container-fluid">
        <div class="row justify-content-center">

            <div class="col-9 col-md-9">
                <?php if (isset($message)) {
                    echo "<h1>" . $message . "</h1>";
                }
                ?>
                <h1>Thêm mới Điện Thoại</h1>
                <div class="row">
                    <div class="col-9">
                    </div>
                    <div class="col-9">
                        <form method="post">
                            <div class="form-group">
                                <label>Tên Điện Thoại :</label>
                                <input type="text" class="form-control" name="name" placeholder="Nhập Tên Điện Thoại" required>
                            </div>
                            <div class="form-group">
                                <label>Loại Hàng:</label>
                                <select name="type" class="form-control">
                                    <option value="Điện Thoại">Điện Thoại</option>
                                    <option value="Máy Tính Bảng">Máy Tính Bảng</option>
                                    <option value="Laptop">Laptop</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Giá Thành:</label>
                                <input type="int" class="form-control" name="price" placeholder="Nhập Giá Thành" required>
                            </div>
                            <div class="form-group">
                                <label>Số Lượng :</label>
                                <input type="int" class="form-control" name="quantity" placeholder="Nhập Số Lượng" required>
                            </div>
                            <div class="form-group">
                                <label>Ngày Tạo :</label>
                                <input type="date" class="form-control" name="date" placeholder="Nhập Ngày Tạo" required>
                            </div>
                            <div class="form-group">
                                <label>Mô Tả :</label>
                                <input type="text" class="form-control" name="description" placeholder="Nhập Mô Tả" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Thêm mới</button>
                            <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
                        </form>
                    </div>
                </div>
            </div>
            <?php require "./app/view/Layout/footer.php"; ?>