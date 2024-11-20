<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <!-- thêm mới -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-9 mx-auto">
                <div class="card">
                    <div class="card-header bg-dark text-white text-uppercase font-weight-bold">
                        THÊM MỚI DANH MỤC
                    </div>
                    <form class="p-4" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên danh mục</label>
                            <input type="text" class="form-control" name="ten_loai" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Phân loại</label>
                            <select name="phan_loai" class="form-control">
                                <option value="0"> --Phân loại-- </option>
                                <option value="Áo">Áo</option>
                                <option value="Quần">Quần</option>
                            </select>
                        </div>
                        <button type="submit" name="btn_submit" class="btn btn-outline-dark">Thêm mới</button>
                        <button type="reset" class="btn btn-outline-dark">Nhập lại</button>
                        <a href="<?= $ADMIN_URL ?>/?act=danh-muc"><button type="button"
                                class="btn btn-outline-dark">Danh
                                sách</button></a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>