<div class="container-fluid">
    <h1 class="text-center my-4">Danh Sách Sản Phẩm</h1>

    <!-- Form Tìm kiếm -->
    <form action="index.php?act=list-sanpham" method="POST" class="d-flex justify-content-center mb-4">
        <input type="text" name="keyword" class="form-control w-25 mr-2" placeholder="Nhập tên/id danh mục">
        <select name="id_dm" class="form-control w-25 mr-2">
            <option value="0" selected>Tất cả</option>
            <?php
            foreach ($listdanhmuc as $dm) {
                extract($dm);
                echo "<option value='$id_dm'>$ten_dm > $phan_loai</option>";
            }
            ?>
        </select>
        <button type="submit" name="listok" class="btn btn-primary">Lọc</button>
    </form>

    <!-- Bảng sản phẩm -->
    <div class="card">
        <div class="card-header bg-dark text-white text-uppercase font-weight-bold">
            Danh Sách Sản Phẩm
        </div>
        <div class="card-body">
            <table class="table table-hover table-bordered text-center">
                <thead class="thead-dark">
                    <tr>
                        <th></th>
                        <th>ID</th>
                        <th>Tên Sản Phẩm</th>
                        <th>Hình Ảnh</th>
                        <th>Đơn Giá</th>
                        <th>Ngày Nhập</th>
                        <th>Hành Động</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($listsanpham as $sanpham) :
                        extract($sanpham);
                        $suasp = "index.php?act=sua-sanpham&id_sp=" . $id_sp;
                        $xoasp = "index.php?act=xoa-sanpham&id_sp=" . $id_sp;
                    ?>
                        <tr>
                            <td><input type="checkbox" class="checkItem"></td>
                            <td><?= $id_sp ?></td>
                            <td><?= $ten_sp ?></td>
                            <td><img src="<?= $IMAGES_URL . "/" . $hinh_anh ?>" alt="Ảnh sản phẩm" class="img-thumbnail"
                                    style="width: 50px; height: 50px;"></td>
                            <td><?= number_format($don_gia, 0, ',', '.') ?> VNĐ</td>
                            <td><?= $ngay_nhap ?></td>
                            <td>
                                <a href="<?= $suasp ?>" class="btn btn-warning btn-sm">Sửa</a>
                                <button onclick="delCF('<?= $xoasp ?>')" class="btn btn-danger btn-sm">Xóa</button>
                            </td>
                        </tr>
                    <?php endforeach;
                    ?>
                </tbody>
            </table>
        </div>
        <div class="card-footer text-center">
            <button type="button" class="btn btn-primary btn-sm mr-2" id="select-all">Chọn tất cả</button>
            <button type="button" class="btn btn-secondary btn-sm mr-2" id="deselect-all">Bỏ chọn tất cả</button>
            <a href="index.php/?act=them-sanpham" class="btn btn-success btn-sm">Thêm Sản Phẩm</a>
        </div>
    </div>
</div>

<!-- JavaScript -->
<script>
    // JavaScript cho nút chọn tất cả và bỏ chọn
    document.getElementById('select-all').addEventListener('click', function() {
        document.querySelectorAll('input[type="checkbox"]').forEach(checkbox => checkbox.checked = true);
    });

    document.getElementById('deselect-all').addEventListener('click', function() {
        document.querySelectorAll('input[type="checkbox"]').forEach(checkbox => checkbox.checked = false);
    });
</script>