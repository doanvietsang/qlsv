<?php 
class DiemThiModel extends MySQLDB
{
    public function getDiemThi(){
        $getData = $this->conn->prepare("SELECT sinhvien.MaSV, TenSV, MaMH, DiemThi, LanThi 
        from sinhvien join DiemThi on sinhvien.MaSV = DiemThi.MaSV");
        
        if(!$getData->execute()) return;
        return $getData->fetchAll( );
    }
    public function getGiaoVienWithMaGV($MaGV){
        $getData = $this->conn->prepare("select * from DIEMTHI where MaGV = ?");
        if(!$getData->execute([$MaGV])) return;
        return $getData->fetch();
    }
    public function updateGiaoVien($MaGV, $data = []){
        $getData = $this->conn->prepare("update GIAOVIEN set ");
    }
    
}
?>