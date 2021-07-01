<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Điền thông tin </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/diemthi/add" method="POST">
                    <div class="form-group">
                        <label for="MaMH">Mã môn học</label>
                        <input type="text" class="form-control" id="MaMH" name="MaMH">
                    </div>
                    <div class="form-group">
                        <label for="MaSV">Mã sinh viên</label>
                        <input type="text" class="form-control" id="MaSV" name="MaSV">
                    </div>
                    <div class="form-group">
                        <label for="LanThi">Lần thi</label>
                        <input type="text" class="form-control" id="LanThi" name="LanThi">
                    </div>
                    <div class="form-group">
                        <label for="DiemThi">Điểm thi</label>
                        <input type="text" class="form-control" id="DiemThi" name="DiemThi">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                        <button type="submit" class="btn btn-primary" >Lưu thông tin</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>