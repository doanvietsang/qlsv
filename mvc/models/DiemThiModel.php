<?php 
class DiemThiModel extends MySQLDB
{
    public function getDiemThi(){
        $getData = $this->conn->prepare("SELECT sinhvien.MaSV, TenSV, MaMH, DiemThi, LanThi 
        from sinhvien join DiemThi on sinhvien.MaSV = DiemThi.MaSV");
        
        if(!$getData->execute()) return;
        return $getData->fetchAll( );
    }

    public function diemthiWithDiemThi($DiemThi){
        $getData = $this->conn->prepare("SELECT sinhvien.MaSV, TenSV, MaMH, DiemThi, LanThi 
        from sinhvien join DiemThi on sinhvien.MaSV = DiemThi.MaSV WHERE DiemThi = ?");
       if(!$getData->execute([$DiemThi])) return;
       return json_encode($getData->fetch());
    }

    public function addDiemThi($MaSV, $MaMH, $DiemThi,$LanThi){
        $getData = $this->conn->prepare("INSERT INTO DiemThi(MaSV,MaMH,DiemThi,LanThi) VALUES (?,?,?,?)");
        $data = [$MaSV, $MaMH, $DiemThi,$LanThi];
        $stmt = $getData->execute($data );
        // $num = $getData->rowCount();
        // return json_encode($stmt);
        
    }
    
    public function deleteDiemThi($MaSV, $MaMH){
        $getData = $this->conn->prepare("DELETE FROM DiemThi WHERE MaSV = ? and MaMH = ?");
        $data = [$MaSV, $MaMH];
        $getData->execute($data);
        
        
    }

    public function updateDiemThi($DiemThi,$LanThi,$MaSV,$MaMH){
        $getData = $this->conn->prepare("UPDATE DIEMTHI SET DiemThi=?, LanThi=? WHERE MaSV=? ANd MaMH = ?");
        $data = [$DiemThi,$LanThi,$MaSV,$MaMH];
        $getData->execute($data);
    }

    
    
}
?>