<?php require "./app/view/Layout/header.php"; ?>

<main role="main" class="main-content">
<h2>Danh sách Điện Thoại :</h2>
        <div class="container-fluid">
            <div class="row justify-content-center">
<table class="table table-hover table-bordered ">
    <thead>
    <tr >  
        <th>STT</th>
        <th>Tên Hàng</th>
        <th>Loại Hàng</th>
        <th>Giá Thành</th>
        <th>Số Lượng</th>
        <th>Ngày Tạo</th>
        <th>Mô Tả</th>   
        <th colspan="2">
        </th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($phones as $key => $phone): ?>
    <tr>
        <td><?php echo ++$key ?></td>
        <td><?php echo $phone->phone_name ?></td>
        <td><?php echo $phone->type ?></td>
        <td><?php echo $phone->price ?></td>
        <td><?php echo $phone->quantity ?></td>  
        <td><?php echo $phone->date?></td>
        <td><?php echo $phone->description ?></td>
        <td> <a href="http://localhost/M2_ThiKetThucModule/?url=PhoneController/delete/<?php echo $phone->id;?>" class="btn btn-outline-danger btn-lg">Delete</a></td>
        <td> <a href="http://localhost/M2_ThiKetThucModule/?url=PhoneController/edit/<?php echo $phone->id; ?>" class="btn btn-outline-warning btn-lg">Update</a></td>
    <?php endforeach; ?>
    </tbody>
    <?php require "./app/view/Layout/footer.php"; ?>
</table>
