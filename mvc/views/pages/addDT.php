<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Điền thông tin giáo viên</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/GiaoVien/add" method="POST">
                    <div class="form-group">
                        <label for="MaMonHoc">Mã Môn Học</label>
                        <select class="form-control" id="MaMonHoc">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="MaSV">Mã Sinh Viên</label>
                        <select class="form-control" id="MaSV">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Lần thi</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="GioiTinh" id="Nam" value="Nam">
                            <label class="form-check-label" for="Nam">
                                Nam
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="GioiTinh" id="Nu" checked value="Nu">
                            <label class="form-check-label" for="Nu">
                                Nữ
                            </label>
                        </div>

                    </div>
                    <div class="form-group">
                        <label for="Quequan">Điểm thi</label>
                        <input type="text" class="form-control" id="Quequan" name="QueQuan">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                        <button type="submit" class="btn btn-primary">Lưu thông tin</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>