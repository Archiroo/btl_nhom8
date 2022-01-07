<?php
include('header.php');
?>
<main>
    <h1>Thông tin nhân viên</h1>
    <br>
    <br>
    <div class="nhanvien">
        <div class="btn-nhanvien">
            <button><a href="./themnv.php">Thêm nhân viên</a></button>
        </div>
        <br>
        <section class="bang">
            <table class="bangnhanvien">
                <h3>Bảng thông tin nhân viên</h3>
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Họ tên</th>
                        <th>Ngày sinh</th>
                        <th>Số điện thoại</th>
                        <th>Địa chỉ</th>
                        <th>Ngày bắt đầu làm</th>
                        <th>Sửa thông tin</th>
                        <th>Xóa nhân viên</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Nguyễn Minh Đức</td>
                        <td>2/9/2001</td>
                        <td>0392222222</td>
                        <td>Ninh Bình</td>
                        <td>25/9/2021</td>
                        <td>
                            <a href="./suanv.php" class="update-icon">
                                <i class="fas fa-edit"></i>
                            </a>
                        </td>
                        <td>
                            <a href="./xoa.php"class="delete-icon">
                                <i class="fas fa-trash-alt"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Nguyễn Văn Tân</td>
                        <td>1/1/2001</td>
                        <td>0393333333</td>
                        <td>Thái Bình</td>
                        <td>25/9/2021</td>
                        <td>
                            <a href="./suanv.php" class="update-icon">
                                <i class="fas fa-edit"></i>
                            </a>
                        </td>
                        <td>
                            <a href="./xoa.php" class="delete-icon">
                                <i class="fas fa-trash-alt"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Nguyễn Minh Vương</td>
                        <td>8/6/2001</td>
                        <td>0394444444</td>
                        <td>Hà Nội</td>
                        <td>25/9/2021</td>
                        <td>
                            <a href="./suanv.php" class="update-icon">
                                <i class="fas fa-edit"></i>
                            </a>
                        </td>
                        <td>
                            <a href="" class="delete-icon">
                                <i class="fas fa-trash-alt"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Nguyễn Minh Quân</td>
                        <td>20/12/2001</td>
                        <td>0395555555</td>
                        <td>Nghệ An</td>
                        <td>25/9/2021</td>
                        <td>
                            <a href="./suanv.php" class="update-icon">
                                <i class="fas fa-edit"></i>
                            </a>
                        </td>
                        <td>
                            <a href="" class="delete-icon">
                                <i class="fas fa-trash-alt"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Trịnh Hoàng Long</td>
                        <td>29/10/2001</td>
                        <td>0396666666</td>
                        <td>Hà Nội</td>
                        <td>25/9/2021</td>
                        <td>
                            <a href="./suanv.php" class="update-icon">
                                <i class="fas fa-edit"></i>
                            </a>
                        </td>
                        <td>
                            <a href="" class="delete-icon">
                                <i class="fas fa-trash-alt"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </section>
    </div>
</main>
