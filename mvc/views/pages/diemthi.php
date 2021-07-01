<div class="content">

  <!-- sang tabel-xóa ở đay -->
  <div class="container-fluid">
    <div class="row">
      <div class="form-group col-md-2">
        <label for="inputState">Lớp</label>
        <select id="inputState" class="form-control">
          <option><a href="#">A</a></option>
          <option><a href="#">B</a></option>
          <option><a href="#">c</a></option>
        </select>
      </div>
      <div class="form-group col-md-2">
        <label for="inputState">Điểm</label>
        <select id="inputState" class="form-control">
          <option><a href="#">Loại a</a></option>
          <option><a href="#">Loại b</a></option>
          <option><a href="#">Loại c</a></option>
        </select>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-primary">
          <!-- bnt add-->
          <div class="btn-toolbar justify-content-between">
            <div>
              <h4 class="card-title ">Simple Table</h4>
              <p class="card-category"> Here is a subtitle for this table</p>
            </div>
            <div>
              <!-- sang-bntadd -->
              <a href="javascript:;" class="btn btn-primary btn-round " data-toggle="modal" data-target="#exampleModal1" data-whatever="@mdo">Thêm mới</a>
            </div>
          </div>

          <!-- end bnt add -->
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th>Mã sinh viên</th>
                <th>Tên sinh viên</th>
                <th>Mã môn học</th>
                <th>Điểm thi</th>
                <th>Lần thi</th>
                <th>
                  <p class="thEnd">chọn</p>
                </th>
              </thead>
              <tbody>
                <?php
                foreach ($data["diemthi"] as $value) {
                ?>

                  <tr>
                    <td>
                      <?php echo $value["MaSV"] ?>
                    </td>
                    <td>
                      <a href="<?php echo sprintf(
                                  "DiemThi/updateView/%s/%s/%s/%s",
                                  $value["MaSV"],
                                  $value["MaMH"],
                                  $value["DiemThi"],
                                  $value["LanThi"]
                                ) ?>">
                        <?php echo $value["TenSV"] ?>
                      </a>
                    </td>
                    <td> <?php echo $value["MaMH"] ?> </td>
                    <td> <?php echo $value["DiemThi"] ?> </td>
                    <td> <?php echo $value["LanThi"] ?> </td>
                    <td class="text-primary">
                      <a href="DiemThi/delete/<?php echo $value["MaSV"] . "/" . $value["MaMH"] ?>" class="btn btn-primary btn-round">Xóa</a>
                    </td>
                  </tr>
                <?php  } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- xóa ở trên tới đay -->

</div>