<?php require "./app/view/Layout/header.php"; ?>

<main role="main" class="main-content">
    <h2>Cập nhật thông Mặt Hàng</h2>
    <div class="container-fluid">
        <form method="POST" action="http://localhost/M2_ThiKetThucModule/?url=PhoneController/edit/<?php echo $phone->id; ?>">
            <div class="form-group">
                <label>Tên Điện Thoại :</label>
                <input type="name" name="name" value="<?php echo $phone->phone_name; ?>" class="form-control" />
            </div>
            <div class="form-group">
                <label>Loại Hàng :</label>
                <select name="type" class="form-control">
                    <option value="<?php echo $phone->type?>"><?php echo $phone->type?></option>
                    <option value="Điện Thoại">Điện Thoại</option>
                    <option value="Máy Tính Bảng">Máy Tính Bảng</option>
                    <option value="Laptop">Laptop</option>
                </select>   
            </div>
            <div class="form-group">
                <label>Giá</label>
                <textarea name="price" class="form-control"><?php echo $phone->price; ?></textarea>
            </div>
            <div class="form-group">
                <label>Số Lượng :</label>
                <textarea name="quantity" class="form-control"><?php echo $phone->quantity; ?></textarea>
            </div>
            <div class="form-group">
                <label>Ngày Tạo :</label>
                <textarea name="date" class="form-control"><?php echo $phone->date; ?></textarea>
            </div>
            <div class="form-group">
                <label>Mô Tả :</label>
                <textarea name="description" class="form-control"><?php echo $phone->description; ?></textarea>
            </div>
            <div class="form-group">
                <input type="submit" value="Update" class="btn btn-outline-warning" />
                <a href="index.php" class="btn btn-outline-primary">Cancel</a>
            </div>
        </form>
        <?php require "./app/view/Layout/footer.php"; ?>