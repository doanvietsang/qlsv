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
        print_r($_POST);
    }
}
?>