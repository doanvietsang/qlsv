<?php 
class DiemThi extends Controller
{
    public function Default(){
        $diemthi = $this->model("DiemThiModel");
        // $sv = $this->model("SinhVienModel");
        // $tensv = $sv->getTenSV();
        $data = $diemthi->getDiemThi();

        $this->view("master_1",[
            "page"=>"diemthi",
            "func_page"=>[
                "addDT"
                ],
            "diemthi"=>$data
        ]);
      
    }
    public function Search($MaGV){
        $giaovien = $this->model("GiaoVienModel");
        $data = $giaovien->getGiaoVienWithMaGV($MaGV);

        $this->view("master_1",[
            "page"=>"giaovien",
            "giaovien"=>$data
        ]);
      
    }
    
    public function add(){
        $diemthi = $this->model("DiemThiModel");
        $kq = $diemthi->addDiemThi($_POST['MaSV'], $_POST['MaMH'], $_POST['DiemThi'],$_POST['LanThi']);
        header('location: http://qlsv.com:81/diemthi');
    }

    public function delete($MaSV, $MaMH){
        $diemthi = $this->model("DiemThiModel");
        $diemthi->deleteDiemThi($MaSV, $MaMH);
        header('location: http://qlsv.com:81/diemthi');
    }

    public function updateView($MaSV=null,$MaMH=null,$DiemThi=null,$LanThi=null){
        $data =[$MaSV,$MaMH,$DiemThi,$LanThi];
        $this->view("master_1",[
            "page"=>"updateDT" ,
            "updateDT"=>$data
        ]);
    }

    public function Update(){
        $diemthi = $this->model("DiemThiModel");
        $kq = $diemthi->updateDiemThi($_POST['DiemThi'], $_POST['LanThi'], $_POST['MaSV'],$_POST['MaMH']);
        header('location: http://qlsv.com:81/diemthi');
        
    }
}
?>