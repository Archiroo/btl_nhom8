<?php
include('header.php');
?>
<main>
    <div class="dash-cards">
        <div class="card-single">
            <div class="card-body">
                <span class="fas fa-user-friends"></span>
                <div>

                    <h5>Nhân viên</h5>
                    <h4></h4>
                    <a href="./employee.php">
                        Xem tất cả
                    </a>
                </div>
            </div>
        </div>
        <div class="card-single">
            <div class="card-body">
                <span class="fas fa-folder"></span>
                <div>

                    <h5>Thực đơn</h5>
                    <h4></h4>
                    <a href="./thucdon.php">
                        Xem tất cả
                    </a>
                </div>
            </div>
        </div>
        <div class="card-single">
            <div class="card-body">
                <span class="fas fa-truck"></span>
                <div>
                    <h5>Nhà vận chuyển
                    </h5>

                    <h4></h4>
                    <a href="./nvc.php">
                        Xem tất cả
                    </a>
                </div>
            </div>
        </div>
        <div class="card-single">
            <div class="card-body">
                <span class="fas fa-shipping-fast"></span>
                <div>

                    <h5>Nhà cung cấp</h5>
                    <h4></h4>
                    <a href="./ncc.php">
                        Xem tất cả
                    </a>
                </div>
            </div>
        </div>
    </div>
    <section class="recent">
        <div class="activity-grid">
            <div class="activity-card">
                <h3>Hóa đơn ngày hôm nay</h3>
                <div></div>
                <div class="table-responsive">
                    <table>
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Khách hàng</th>
                                <th>Số điện thoại</th>
                                <th>Món ăn</th>
                                <th>Giá tiền</th>
                                <th>Ngày hóa đơn</th>
                                <th>Nhân viên bán</th>
                                <th>Trạng thái</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
                        <td>1</td>
                        <td>Nguyễn Văn Tân</td>
                        <td>0123333333</td>
                        <td>Pizza hải sản</td>
                        <td>129.000</td>
                        <td>6/1/2022</td>
                        <td>Nguyễn Minh Đức</td>
                        <td class="hoanthanh">Hoàn thành</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Hồ Hồng Quân</td>
                        <td>0124444444</td>
                        <td>Pizza hải sản</td>
                        <td>129.000</td>
                        <td>6/1/2022</td>
                        <td>Nguyễn Minh Đức</td>
                        <td class="hoanthanh">Hoàn thành</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Vương</td>
                        <td>0125555555</td>
                        <td>Pizza hải sản</td>
                        <td>129.000</td>
                        <td>6/1/2022</td>
                        <td>Nguyễn Minh Đức</td>
                        <td class="huy">Hủy</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Long</td>
                        <td>0126666666</td>
                        <td>Pizza hải sản</td>
                        <td>129.000</td>
                        <td>6/1/2022</td>
                        <td>Nguyễn Minh Đức</td>
                        <td class="hoanthanh">Hoàn thành</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Trang</td>
                        <td>0127777777</td>
                        <td>Pizza hải sản</td>
                        <td>129.000</td>
                        <td>6/1/2022</td>
                        <td>Nguyễn Minh Đức</td>
                        <td class="huy">Hủy</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Tuấn Anh</td>
                        <td>0128888888</td>
                        <td>Pizza hải sản</td>
                        <td>129.000</td>
                        <td>6/1/2022</td>
                        <td>Nguyễn Minh Đức</td>
                        <td class="hoanthanh">Hoàn thành</td>
                    </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</main>