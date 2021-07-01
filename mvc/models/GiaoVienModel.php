<?php 
class GiaoVienModel extends MySQLDB
{
    public function getGiaoVien(){
        $getData = $this->conn->prepare("select * from GIAOVIEN");
        if(!$getData->execute()) return;
        return json_encode($getData->fetchAll( ));
    }
    public function getGiaoVienWithMaGV($MaGV){
        $getData = $this->conn->prepare("select * from GIAOVIEN where MaGV = ?");
        if(!$getData->execute([$MaGV])) return;
        return json_encode($getData->fetch());
    }
    public function updateGiaoVien($id, $name, $home){
        $getData = $this->conn->prepare("update GIAOVIEN set TenGV=?, QueQuan=? where MaGV=?");
        $data = [$name, $home, $id];
        $stmt = $getData->execute($data);
        $num = $getData->rowCount();
        return json_encode($getData->rowCount());
    }
    
}
?>