<style>
    .update{
        margin-top: 120px;
    }
</style>

<div class="modal-content update">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Điền thông tin </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/DiemThi/update" method="POST">
                    <div class="form-group">
                        <label for="MaMH">Mã môn học</label>
                        <input type="text" class="form-control" id="MaMH" name="MaMH" value="<?php echo $data['updateDT'][1] ?>" disabled>
                    </div>
                    <div class="form-group">
                        <label for="MaSV">Mã sinh viên</label>
                        <input type="text" class="form-control" id="MaSV" name="MaSV" value="<?php echo $data['updateDT'][0] ?>" disabled>
                    </div>
                    <div class="form-group">
                        <label for="LanThi">Lần thi</label>
                        <input type="text" class="form-control" id="LanThi" name="LanThi" value="<?php echo $data['updateDT'][3] ?>">
                    </div>
                    <div class="form-group">
                        <label for="DiemThi">Điểm thi</label>
                        <input type="text" class="form-control" id="DiemThi" name="DiemThi" value="<?php echo $data['updateDT'][2] ?>">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                        <button type="submit" class="btn btn-primary" >Lưu Thay Đổi</button>
                    </div>
                </form>
            </div>

        </div>