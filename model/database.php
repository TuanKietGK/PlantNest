
<?php
  class database{
    public $conn = null;
		public $host = 'localhost';
		public $user = 'root';
		public $pass = '';
		public $name = 'polido';

		public function __construct()
		{
			$this->conn = new mysqli(
				$this->host,
				$this->user,
				$this->pass,
				$this->name
			);
		}

      function qwe(){
        $b=array("id_sp"=>array(),"tensp"=>array(),"anh"=>array(),"gia"=>array(),"id_danhmuc"=>array(),"daban"=>array(),"anh0"=>array());
        if(isset($_GET['danhmuc'])){
        $s=$_GET['danhmuc'];
        $sql="SELECT * FROM sanpham,danhmuc WHERE sanpham.id_danhmuc=danhmuc.id_danhmuc and danhmuc.danhmuc=$s ";
        $re=$this->conn->query($sql);
        $i=0;
        if($re){
        while($row=$re->fetch_assoc()){
          $b['id_sp'][$i]=$row['id_sp'];
          $b['tensp'][$i]=$row['tensp'];
          $b['anh'][$i]=$row['anh'];
          $b['gia'][$i]=$row['gia'];
          $b['id_danhmuc'][$i]=$row['id_danhmuc'];
          $b['daban'][$i]=$row['daban'];
          $b['anh0'][$i]=$row['anh0'];
          $i++;
        };};}
        return $b;
    
      }


    function ads(){
        $d = (count($this->qwe(),1)-7)/7;
        return $d;
      }

      function lienquan(){
        $b=array("id_sp"=>array(),"tensp"=>array(),"anh"=>array(),"gia"=>array(),"id_danhmuc"=>array(),"daban"=>array(),"anh0"=>array());
        if(isset($_GET['dm'])&&isset($_GET['ct'])){
        $s=$_GET['dm'];
        $c=$_GET['ct'];
        $sql="SELECT * FROM sanpham WHERE id_danhmuc=$s and id_sp <> $c ";
        $re=$this->conn->query($sql);
        $i=0;
        if($re){
        while($row=$re->fetch_assoc()){
          $b['id_sp'][$i]=$row['id_sp'];
          $b['tensp'][$i]=$row['tensp'];
          $b['anh'][$i]=$row['anh'];
          $b['gia'][$i]=$row['gia'];
          $b['id_danhmuc'][$i]=$row['id_danhmuc'];
          $b['daban'][$i]=$row['daban'];
          $b['anh0'][$i]=$row['anh0'];
          $i++;
        };};}
        return $b;
    
      } 

      function dlk(){
        $d = (count($this->lienquan(),1)-7)/7;
        return $d;
      }
 
  
      function zxc(){
        $b=array("id_sp"=>array(),"tensp"=>array(),"anh"=>array(),"gia"=>array(),"id_danhmuc"=>array(),"daban"=>array(),"anh0"=>array());
        if(isset($_GET['search'])){
          $s=$_GET['search'];
           $sql="SELECT * FROM sanpham,danhmuc WHERE sanpham.id_danhmuc=danhmuc.id_danhmuc and (tensp like'%$s%' OR gia like'%$s%' OR danhmuc like'%$s%')";
           $re=$this->conn->query($sql);
           $i=0;
           if($re){
           while($row=$re->fetch_assoc()){
            $b['id_sp'][$i]=$row['id_sp'];
            $b['tensp'][$i]=$row['tensp'];
            $b['anh'][$i]=$row['anh'];
            $b['gia'][$i]=$row['gia'];
            $b['id_danhmuc'][$i]=$row['id_danhmuc'];
            $b['daban'][$i]=$row['daban'];
            $b['anh0'][$i]=$row['anh0'];
             $i++;
           };};
           };
           return $b;
      }
      function fgh(){
        $d = (count($this->zxc(),1)-7)/7;
        return $d;
      }
      
      function chitiet(){
        $b=array();
        if(isset($_GET['ct'])){
          $s=$_GET['ct'];
        $sql="SELECT * FROM sanpham WHERE id_sp=$s";
        $re=$this->conn->query($sql);
        if($re){
        while($row=$re->fetch_assoc()){
          $b['id_sp']=$row['id_sp'];
          $b['tensp']=$row['tensp'];
          $b['anh']=$row['anh'];
          $b['gia']=$row['gia'];
          $b['daban']=$row['daban'];
        };};}
        return $b;
      }
          
      function kichco(){
        $b=array();
        if(isset($_GET['ct'])){
          $s=$_GET['ct'];
        $sql="SELECT id_kichco,kichco from sanpham sp, kichco k WHERE sp.id_danhmuc=k.id_danhmuc and sp.id_sp=$s";
        $re=$this->conn->query($sql);
        if($re){
        while($row=$re->fetch_assoc()){
          $b[]=$row;
        };};}
        return $b;
      }

      function mausac(){
        $b=array();
        if(isset($_GET['ct'])){
          $s=$_GET['ct'];
        $sql="SELECT id_mausac,mausac from sanpham sp,mausac m WHERE sp.id_sp=m.id_sp and sp.id_sp=$s";
        $re=$this->conn->query($sql);
        if($re){
        while($row=$re->fetch_assoc()){
          $b[]=$row;
        };};}
        return $b;
      }

      function anhmau(){
        $b=array("anh"=>array(),"mausac"=>array());
        if(isset($_GET['mausac'])){
        $s=$_GET['mausac'];
        $sql="SELECT anh,mausac from mausac WHERE id_mausac=$s";
        $re=$this->conn->query($sql);
        if($re){
        while($row=$re->fetch_assoc()){
          $b['anh']=$row['anh'];
          $b['mausac']=$row['mausac'];
        };};}
        return $b;
      }

      function kichco2(){
        $b=array("kichco"=>array());
        if(isset($_GET['kichco'])){
        $s=$_GET['kichco'];
        $sql="SELECT kichco from kichco WHERE id_kichco=$s";
        $re=$this->conn->query($sql);
        if($re){
        while($row=$re->fetch_assoc()){
          $b['kichco']=$row['kichco'];
        };};}
        return $b;
      }


      function soluong(){
          if(isset($_GET['mausac'])&&isset($_GET['kichco'])){
            $b=array("soluong"=>"","id_sl"=>"");
            $m=$_GET['mausac'];
            $k=$_GET['kichco'];
            $sql="SELECT soluong,id_sl FROM soluong WHERE id_mausac=$m and id_kichco=$k";
            $re=$this->conn->query($sql);
            if($re){
            while($row=$re->fetch_assoc()){
              $b['soluong']=$row['soluong'];
              $b['id_sl']=$row['id_sl'];
            }}
          }
          else{
          $b=array("soluong"=>0);
          if(isset($_GET['ct'])){
          $s=$_GET['ct'];
          $sql="SELECT soluong FROM sanpham sp,soluong sl WHERE sp.id_sp=sl.id_sp and sp.id_sp=$s";
          $re=$this->conn->query($sql);
          if($re){
          while($row=$re->fetch_assoc()){
            $b['soluong']+=$row['soluong'];
          }}
        }}

        return $b;
      }
     
      function all(){
        $b=array("id_sp"=>array(),"tensp"=>array(),"anh"=>array(),"gia"=>array(),"id_danhmuc"=>array(),"daban"=>array(),"anh0"=>array());
        $sql="SELECT * FROM sanpham";
        $re=$this->conn->query($sql);
        $i=0;
        if($re){
        while($row=$re->fetch_assoc()){
          $b['id_sp'][$i]=$row['id_sp'];
          $b['tensp'][$i]=$row['tensp'];
          $b['anh'][$i]=$row['anh'];
          $b['gia'][$i]=$row['gia'];
          $b['id_danhmuc'][$i]=$row['id_danhmuc'];
          $b['daban'][$i]=$row['daban'];
          $b['anh0'][$i]=$row['anh0'];
          $i++;
        };}
        return $b;
      }
      function dall(){
        $d = (count($this->all(),1)-7)/7;
        return $d;
      }

      function huongdan(){
        $b=array();
        if(isset($_GET['ct'])){
          $s=$_GET['ct'];
        $sql="SELECT anh1,anh2 from sanpham sp, huongdan h WHERE sp.id_danhmuc=h.id_danhmuc and sp.id_sp=$s";
        $re=$this->conn->query($sql);
        if($re){
        while($row=$re->fetch_assoc()){
          $b[]=$row;
        };};}
        return $b;
      }

      function anhct(){
        $b=array();
        if(isset($_GET['ct'])){
          $s=$_GET['ct'];
        $sql="SELECT anh1,anh2,anh3 from sanpham sp, chitiet c WHERE sp.id_sp=c.id_sp and sp.id_sp=$s";
        $re=$this->conn->query($sql);
        if($re){
        while($row=$re->fetch_assoc()){
          $b[]=$row;
        };};}
        return $b;
      }

      function banchay(){
        $b=array("id_sp"=>array(),"tensp"=>array(),"anh"=>array(),"gia"=>array(),"id_danhmuc"=>array(),"daban"=>array(),"anh0"=>array());
        $sql="SELECT id_sp,tensp,anh,gia,id_danhmuc,daban,anh0 FROM sanpham ORDER BY daban DESC LIMIT 8 ";
        $re=$this->conn->query($sql);
        $i=0;
        if($re){
        while($row=$re->fetch_assoc()){
          $b['id_sp'][$i]=$row['id_sp'];
          $b['tensp'][$i]=$row['tensp'];
          $b['anh'][$i]=$row['anh'];
          $b['gia'][$i]=$row['gia'];
          $b['id_danhmuc'][$i]=$row['id_danhmuc'];
          $b['daban'][$i]=$row['daban'];
          $b['anh0'][$i]=$row['anh0'];
          $i++;
        };}
        return $b;
      }
 
      function moive(){
        $b=array("id_sp"=>array(),"tensp"=>array(),"anh"=>array(),"gia"=>array(),"id_danhmuc"=>array(),"daban"=>array(),"anh0"=>array());
        $sql="SELECT id_sp,tensp,anh,gia,id_danhmuc,daban,anh0 FROM sanpham ORDER BY id_sp DESC LIMIT 8 ";
        $re=$this->conn->query($sql);
        $i=0;
        if($re){
        while($row=$re->fetch_assoc()){
          $b['id_sp'][$i]=$row['id_sp'];
          $b['tensp'][$i]=$row['tensp'];
          $b['anh'][$i]=$row['anh'];
          $b['gia'][$i]=$row['gia'];
          $b['id_danhmuc'][$i]=$row['id_danhmuc'];
          $b['daban'][$i]=$row['daban'];
          $b['anh0'][$i]=$row['anh0'];
          $i++;
        };}
        return $b;
      }
      function slmax(){
        $b=0;
        $sql="SELECT max(id_sl) FROM soluong";
        $re=$this->conn->query($sql);
        if($re){
          while($row=$re->fetch_assoc()){
            $b=$row['max(id_sl)'];
          }
        }
        return $b;
      }
      function adsp(){
        $b=array();
        if(isset($_GET['searchsp'])){
        $s=$_GET['searchsp'];
        $sql="SELECT * FROM sanpham left join danhmuc on sanpham.id_danhmuc=danhmuc.id_danhmuc where tensp like'%$s%' OR gia like'%$s%' OR danhmuc like'%$s%'";}
        else{
        $sql="SELECT * FROM sanpham left join danhmuc on sanpham.id_danhmuc=danhmuc.id_danhmuc";}
        $re=$this->conn->query($sql);
        if($re){
        while($row=$re->fetch_assoc()){
          $b[]=$row;
        };}
        return $b;}

        function upsp(){
          if(isset($_SESSION['get'])){
            $g=$_SESSION['get'];
          if(isset($_POST['tensp'])){
            $tensp=$_POST['tensp'];
            $sql="UPDATE sanpham set tensp='$tensp' where id_sp=$g";
            $this->conn->query($sql);
         }
         if(isset($_POST['danhmuc'])){
            $danhmuc=$_POST['danhmuc'];
            $sql="UPDATE sanpham set id_danhmuc=(select id_danhmuc from danhmuc where danhmuc='$danhmuc') where id_sp=$g";
            $this->conn->query($sql);
         }
         if(isset($_POST['anh'])){
            $anh=$_POST['anh'];
            $sql="UPDATE sanpham set anh='$anh' where id_sp=$g";
            $this->conn->query($sql);
         }
         if(isset($_POST['anh0'])){
            $anh0=$_POST['anh0'];
            $sql="UPDATE sanpham set anh0='$anh0' where id_sp=$g";
            $this->conn->query($sql);
         }
         if(isset($_POST['gia'])){
            $gia=$_POST['gia'];
            $sql="UPDATE sanpham set gia=$gia where id_sp=$g";
            $this->conn->query($sql);
         }
         if(isset($_POST['daban'])){
            $daban=$_POST['daban'];
            $sql="UPDATE sanpham set daban=$daban where id_sp=$g";
            $this->conn->query($sql);
         }}
        }

        function themsp(){
           $tensp=$_POST['tensp'];
           $danhmuc=$_POST['danhmuc'];
           $anh=$_POST['anh'];
           $anh0=$_POST['anh0'];
           $gia=$_POST['gia'];
           $daban=$_POST['daban'];
           $sql1="INSERT INTO sanpham(id_danhmuc) SELECT id_danhmuc from danhmuc WHERE danhmuc='$danhmuc'";
           $this->conn->query($sql1);
           $lastid=$this->conn->insert_id;
           $sql="UPDATE sanpham set tensp='$tensp',anh='$anh',gia=$gia,daban=$daban,anh0='$anh0' WHERE id_sp=$lastid";
           $this->conn->query($sql);
        }
        
        function xoasp(){
          if(isset($_GET['xoa'])){
            $s=$_GET['xoa'];
            $sql3="DELETE from soluong WHERE id_sp=$s";
            $this->conn->query($sql3);
            $sql2="DELETE from mausac WHERE id_sp=$s";
            $this->conn->query($sql2);
            $sql1="DELETE from chitiet WHERE id_sp=$s";
            $this->conn->query($sql1);
            $sql="DELETE from sanpham WHERE id_sp=$s";
            $this->conn->query($sql);
          }
        }

        function addm(){
          $b=array();
          $sql="SELECT * FROM danhmuc ";
          $re=$this->conn->query($sql);
          if($re){
          while($row=$re->fetch_assoc()){
            $b[]=$row;
          };}
        return $b; }

        function updm(){
          if(isset($_SESSION['get'])){
            $g=$_SESSION['get'];
          if(isset($_POST['tendm'])){
            $tendm=$_POST['tendm'];
            $sql="UPDATE danhmuc set danhmuc='$tendm' where id_danhmuc=$g";
            $this->conn->query($sql);
         }}
        }

        function xoadm(){
          if(isset($_GET['xoa'])){
            $s=$_GET['xoa'];
            $sql6="DELETE from huongdan WHERE id_danhmuc=$s";
            $this->conn->query($sql6);
            $sql5="DELETE from soluong WHERE id_sp=(SELECT id_sp from sanpham where id_danhmuc=$s)";
            $this->conn->query($sql5);
            $sql4="DELETE from mausac WHERE id_sp=(SELECT id_sp from sanpham where id_danhmuc=$s)";
            $this->conn->query($sql4);
            $sql3="DELETE from chitiet WHERE id_sp=(SELECT id_sp from sanpham WHERE id_danhmuc=$s)";
            $this->conn->query($sql3);
            $sql2="DELETE from sanpham WHERE id_danhmuc=$s";
            $this->conn->query($sql2);
            $sql1="DELETE from kichco WHERE id_danhmuc=$s";
            $this->conn->query($sql1);
            $sql="DELETE from danhmuc WHERE id_danhmuc=$s";
            $this->conn->query($sql);
          }
        }

        function themdm(){
          $tendm=$_POST['tendm'];
          $sql="INSERT INTO danhmuc(danhmuc) VALUES('$tendm')";
          $this->conn->query($sql);
       }

       function adkc(){
        $b=array();
        if(isset($_GET['searchkc'])){
          $s=$_GET['searchkc'];
          $sql="SELECT * FROM kichco k left join danhmuc d on k.id_danhmuc=d.id_danhmuc where k.kichco like '%$s%' or d.danhmuc like '%$s%' ";
        }
        else{
        $sql="SELECT * FROM kichco k left join danhmuc d on k.id_danhmuc=d.id_danhmuc";}
        $re=$this->conn->query($sql);
        if($re){
        while($row=$re->fetch_assoc()){
          $b[]=$row;
        };}
      return $b; }

      function upkc(){
        if(isset($_SESSION['get'])){
          $g=$_SESSION['get'];
        if(isset($_POST['tenkc'])){
          $tenkc=$_POST['tenkc'];
          $sql="UPDATE kichco set kichco='$tenkc' where id_kichco=$g";
          $this->conn->query($sql);
       }
       if(isset($_POST['danhmuc'])){
        $danhmuc=$_POST['danhmuc'];
        $sql="UPDATE kichco set id_danhmuc=(select id_danhmuc from danhmuc where danhmuc='$danhmuc') where id_kichco=$g";
        $this->conn->query($sql);
     }}
      }
      function xoakc(){
        if(isset($_GET['xoa'])){
          $s=$_GET['xoa'];
          $sql1="DELETE from soluong WHERE id_kichco=$s";
          $this->conn->query($sql1);
          $sql="DELETE from kichco WHERE id_kichco=$s";
          $this->conn->query($sql);
        }
      }
      
      function themkc(){
        $tenkc=$_POST['tenkc'];
        $danhmuc=$_POST['danhmuc'];
        $sql1="INSERT INTO kichco(id_danhmuc) SELECT id_danhmuc from danhmuc WHERE danhmuc='$danhmuc'";
        $this->conn->query($sql1);
        $lastid=$this->conn->insert_id;
        $sql="UPDATE kichco set kichco='$tenkc' WHERE id_kichco=$lastid";
        $this->conn->query($sql);
     }

     function adms(){
      $b=array();
      if(isset($_GET['searchms'])){
        $s=$_GET['searchms'];
        $sql="SELECT m.id_mausac,m.mausac,m.anh,m.id_sp,s.tensp,s.id_sp FROM mausac m left join sanpham s on m.id_sp=s.id_sp where m.mausac like '%$s%' or s.tensp like '%$s%' ";
      }
      else{
      $sql="SELECT m.id_mausac,m.mausac,m.anh,m.id_sp,s.tensp,s.id_sp FROM mausac m left join sanpham s on m.id_sp=s.id_sp";}
      $re=$this->conn->query($sql);
      if($re){
      while($row=$re->fetch_assoc()){
        $b[]=$row;
      };}
    return $b; }

    function upms(){
      if(isset($_SESSION['get'])){
        $g=$_SESSION['get'];
      if(isset($_POST['tenms'])){
        $tenms=$_POST['tenms'];
        $sql="UPDATE mausac set mausac='$tenms' where id_mausac=$g";
        $this->conn->query($sql);
     }
     if(isset($_POST['sanpham'])){
      $sanpham=$_POST['sanpham'];
      $sql="UPDATE mausac set id_sp=(select id_sp from sanpham where tensp='$sanpham') where id_mausac=$g";
      $this->conn->query($sql);
   }
     if(isset($_POST['anh'])){
      $anh=$_POST['anh'];
      $sql="UPDATE mausac set anh='$anh' where id_mausac=$g";
      $this->conn->query($sql);
   }
  }}

  function xoams(){
    if(isset($_GET['xoa'])){
      $s=$_GET['xoa'];
      $sql1="DELETE from soluong WHERE id_mausac=$s";
      $this->conn->query($sql1);
      $sql="DELETE from mausac WHERE id_mausac=$s";
      $this->conn->query($sql);
    }
  }

  function themms(){
    $tenms=$_POST['tenms'];
    $sanpham=$_POST['sanpham'];
    $anh=$_POST['anh'];
    $sql1="INSERT INTO mausac(id_sp) SELECT id_sp from sanpham WHERE tensp='$sanpham'";
    $this->conn->query($sql1);
    $lastid=$this->conn->insert_id;
    $sql="UPDATE mausac set mausac='$tenms',anh='$anh' WHERE id_mausac=$lastid";
    $this->conn->query($sql);
 }

   
 function adsl(){
  $b=array();
  if(isset($_GET['searchsl'])){
    $s=$_GET['searchsl'];
    $sql="SELECT sl.id_sl,sp.tensp,ms.mausac,sl.soluong,kc.kichco,sl.id_mausac,sl.id_sp,sl.id_kichco from mausac ms 
    right join soluong sl on sl.id_mausac=ms.id_mausac 
    left join kichco kc on kc.id_kichco=sl.id_kichco 
    left join sanpham sp on sp.id_sp=sl.id_sp 
    where ms.mausac like '%$s%' or sp.tensp like '%$s%' or kc.kichco like '%$s%' or sl.soluong like '%$s%'";}
  else{
  $sql="SELECT sl.id_sl,sp.tensp,ms.mausac,sl.soluong,kc.kichco,sl.id_mausac,sl.id_sp,sl.id_kichco from mausac ms 
  right join soluong sl on sl.id_mausac=ms.id_mausac 
  left join kichco kc on kc.id_kichco=sl.id_kichco 
  left join sanpham sp on sp.id_sp=sl.id_sp";}
  $re=$this->conn->query($sql);
  if($re){
  while($row=$re->fetch_assoc()){
    $b[]=$row;
  };}
return $b; }

function upsl(){
  if(isset($_SESSION['get'])){
    $g=$_SESSION['get'];
if(isset($_POST['soluong'])){
  $soluong=$_POST['soluong'];
  $sql="UPDATE soluong set soluong=$soluong where id_sl=$g";
  $this->conn->query($sql);
}}}

function xoasl(){
  if(isset($_GET['xoa'])){
    $s=$_GET['xoa'];
    $sql="DELETE from soluong WHERE id_sl=$s";
    $this->conn->query($sql);
  }
}
 
function themsl(){
  if(isset($_SESSION['sp'])){
  $s=$_SESSION['sp'];
  $mausac=$_POST['mausac'];
  $kichco=$_POST['kichco'];
  $soluong=$_POST['soluong'];
  $sql1="INSERT INTO soluong(soluong) VALUES($soluong)";
  $this->conn->query($sql1);
  $lastid=$this->conn->insert_id;
  $sql="UPDATE soluong set id_sp=(select id_sp from sanpham where tensp='$s'),
  id_mausac=(select id_mausac from mausac where mausac='$mausac' and id_sp=(select id_sp from sanpham where tensp='$s')),
  id_kichco=(select id_kichco from kichco where kichco='$kichco' and id_danhmuc=(SELECT s.id_danhmuc FROM sanpham s left join danhmuc d on s.id_danhmuc=d.id_danhmuc WHERE s.tensp='$s')) where id_sl=$lastid";
  $this->conn->query($sql);
}}

function adct(){
  $b=array();
  if(isset($_GET['searchct'])){
    $s=$_GET['searchct'];
    $sql="SELECT c.anh1,c.anh2,c.anh3,c.id_sp,s.tensp,c.id_chitiet FROM chitiet c left join sanpham s on c.id_sp=s.id_sp where s.tensp like '%$s%' ";
  }
  else{
  $sql="SELECT c.anh1,c.anh2,c.anh3,c.id_sp,s.tensp,c.id_chitiet FROM chitiet c left join sanpham s on c.id_sp=s.id_sp";}
  $re=$this->conn->query($sql);
  if($re){
  while($row=$re->fetch_assoc()){
    $b[]=$row;
  };}
return $b; }

function upct(){
  if(isset($_SESSION['get'])){
    $g=$_SESSION['get'];
  if(isset($_POST['anh1'])){
    $anh1=$_POST['anh1'];
    $sql="UPDATE chitiet set anh1='$anh1' where id_chitiet=$g";
    $this->conn->query($sql);
 }
 if(isset($_POST['sanpham'])){
  $sanpham=$_POST['sanpham'];
  $sql="UPDATE chitiet set id_sp=(select id_sp from sanpham where tensp='$sanpham') where id_chitiet=$g";
  $this->conn->query($sql);
}
if(isset($_POST['anh2'])){
  $anh2=$_POST['anh2'];
  $sql="UPDATE chitiet set anh2='$anh2' where id_chitiet=$g";
  $this->conn->query($sql);
}
if(isset($_POST['anh3'])){
  $anh3=$_POST['anh3'];
  $sql="UPDATE chitiet set anh3='$anh3' where id_chitiet=$g";
  $this->conn->query($sql);
}
}}

function xoact(){
  if(isset($_GET['xoa'])){
    $s=$_GET['xoa'];
    $sql="DELETE from chitiet WHERE id_chitiet=$s";
    $this->conn->query($sql);
  }
}

function themct(){
  $sanpham=$_POST['sanpham'];
  $anh1=$_POST['anh1'];
  $anh2=$_POST['anh2'];
  $anh3=$_POST['anh3'];
  $sql1="INSERT INTO chitiet(id_sp) SELECT id_sp from sanpham WHERE tensp='$sanpham'";
  $this->conn->query($sql1);
  $lastid=$this->conn->insert_id;
  $sql="UPDATE chitiet set anh1='$anh1',anh2='$anh2',anh3='$anh3' WHERE id_chitiet=$lastid";
  $this->conn->query($sql);
}

function adhd(){
  $b=array();
  if(isset($_GET['searchhd'])){
    $s=$_GET['searchhd'];
    $sql="SELECT * FROM huongdan h left join danhmuc d on h.id_danhmuc=d.id_danhmuc where d.danhmuc like '%$s%' ";
  }
  else{
  $sql="SELECT * FROM huongdan h left join danhmuc d on h.id_danhmuc=d.id_danhmuc";}
  $re=$this->conn->query($sql);
  if($re){
  while($row=$re->fetch_assoc()){
    $b[]=$row;
  };}
return $b; }

function uphd(){
  if(isset($_SESSION['get'])){
    $g=$_SESSION['get'];
  if(isset($_POST['anh1'])){
    $anh1=$_POST['anh1'];
    $sql="UPDATE huongdan set anh1='$anh1' where id_huongdan=$g";
    $this->conn->query($sql);
 }
 if(isset($_POST['danhmuc'])){
  $danhmuc=$_POST['danhmuc'];
  $sql="UPDATE huongdan set id_danhmuc=(select id_danhmuc from danhmuc where danhmuc='$danhmuc') where id_huongdan=$g";
  $this->conn->query($sql);
}
if(isset($_POST['anh2'])){
  $anh2=$_POST['anh2'];
  $sql="UPDATE huongdan set anh2='$anh2' where id_huongdan=$g";
  $this->conn->query($sql);
}
}}

function xoahd(){
  if(isset($_GET['xoa'])){
    $s=$_GET['xoa'];
    $sql="DELETE from huongdan WHERE id_huongdan=$s";
    $this->conn->query($sql);
  }
}

function themhd(){
  $danhmuc=$_POST['danhmuc'];
  $anh1=$_POST['anh1'];
  $anh2=$_POST['anh2'];
  $sql1="INSERT INTO huongdan(id_danhmuc) SELECT id_danhmuc from danhmuc WHERE danhmuc='$danhmuc'";
  $this->conn->query($sql1);
  $lastid=$this->conn->insert_id;
  $sql="UPDATE huongdan set anh1='$anh1',anh2='$anh2' WHERE id_huongdan=$lastid";
  $this->conn->query($sql);
}

function adkh(){
  $b=array();
  if(isset($_GET['searchkh'])){
  $s=$_GET['searchkh'];
  $sql="SELECT * FROM khachhang where tenkh like'%$s%' OR diachi like'%$s%'";}
  else{
  $sql="SELECT * FROM khachhang";}
  $re=$this->conn->query($sql);
  if($re){
  while($row=$re->fetch_assoc()){
    $b[]=$row;
  };}
  return $b;}

  function themkh(){
    $tenkh=$_POST['tenkh'];
    $email=$_POST['email'];
    $diachi=$_POST['diachi'];
    $sdt=$_POST['sdt'];
    $sql="INSERT INTO khachhang(tenkh,sdt,email,diachi) VALUES('$tenkh',$sdt,'$email','$diachi')";
    $this->conn->query($sql);
  }

  function upkh(){
    if(isset($_SESSION['get'])){
      $g=$_SESSION['get'];
    if(isset($_POST['tenkh'])){
      $tenkh=$_POST['tenkh'];
      $sql="UPDATE khachhang set tenkh='$tenkh' where id_kh=$g";
      $this->conn->query($sql);
   }
   if(isset($_POST['email'])){
    $email=$_POST['email'];
    $sql="UPDATE khachhang set email='$email' where id_kh=$g";
    $this->conn->query($sql);
 }
 if(isset($_POST['sdt'])){
  $sdt=$_POST['sdt'];
  $sql="UPDATE khachhang set sdt=$sdt where id_kh=$g";
  $this->conn->query($sql);
}
if(isset($_POST['diachi'])){
  $diachi=$_POST['diachi'];
  $sql="UPDATE khachhang set diachi='$diachi' where id_kh=$g";
  $this->conn->query($sql);
}
  }}

  function xoakh(){
    if(isset($_GET['xoa'])){
      $s=$_GET['xoa'];
      $sql2="DELETE from ctdonhang WHERE id_donhang=(SELECT id_donhang from donhang where id_kh=$s)";
      $this->conn->query($sql2);
      $sql1="DELETE from donhang WHERE id_kh=$s";
      $this->conn->query($sql1);
      $sql="DELETE from khachhang WHERE id_kh=$s";
      $this->conn->query($sql);
    }
  }

  function addh(){
    $b=array();
    if(isset($_GET['searchkh'])){
    $s=$_GET['searchkh'];
    $sql="SELECT * FROM donhang d left join tinhtrangdh t on d.id_tinhtrang=t.id_tinhtrang where d.id_kh like %$s% OR d.tongtien like %$s% OR t.tinhtrang like '%$s%' OR d.ngaydat like '%$s%'";}
    else{
    $sql="SELECT * FROM donhang d left join tinhtrangdh t on d.id_tinhtrang=t.id_tinhtrang";}
    $re=$this->conn->query($sql);
    if($re){
    while($row=$re->fetch_assoc()){
      $b[]=$row;
    };}
    return $b;}

    function idkh(){
      $b=array();
      $i=0;
      $sql="SELECT id_kh FROM khachhang";
      $re=$this->conn->query($sql);
      if($re){
      while($row=$re->fetch_assoc()){
        $b[0][$i]=$row['id_kh'];
        $i++;
      };}
      return $b;}

      function updh(){
        if(isset($_SESSION['get'])){
          $g=$_SESSION['get'];
        if(isset($_POST['idkh'])){
          $idkh=$_POST['idkh'];
          $sql="UPDATE donhang set id_kh=$idkh where id_donhang=$g";
          $this->conn->query($sql);
       }
       if(isset($_POST['tongtien'])){
        $tongtien=$_POST['tongtien'];
        $sql="UPDATE donhang set tongtien=$tongtien where id_donhang=$g";
        $this->conn->query($sql);
     }
     if(isset($_POST['ngaydat'])){
      $ngaydat=$_POST['ngaydat'];
      $sql="UPDATE donhang set ngaydat='$ngaydat' where id_donhang=$g";
      $this->conn->query($sql);
   }
   if(isset($_POST['tinhtrang'])){
    $tinhtrang=$_POST['tinhtrang'];
    $sql="UPDATE donhang set id_tinhtrang=(select id_tinhtrang from tinhtrangdh where tinhtrang='$tinhtrang') where id_donhang=$g";
    $this->conn->query($sql);
  }
      }}

      function xoadh(){
        if(isset($_GET['xoa'])){
          $s=$_GET['xoa'];
          $sql1="DELETE from ctdonhang WHERE id_donhang=$s";
          $this->conn->query($sql1);
          $sql="DELETE from donhang WHERE id_donhang=$s";
          $this->conn->query($sql);
        }
      }

      function themdh(){
        $idkh=$_POST['idkh'];
        $tongtien=$_POST['tongtien'];
        $ngaydat=$_POST['ngaydat'];
        $tinhtrang=$_POST['tinhtrang'];
        $sql1="INSERT INTO donhang(id_tinhtrang) SELECT id_tinhtrang from tinhtrangdh WHERE tinhtrang='$tinhtrang'";
        $this->conn->query($sql1);
        $lastid=$this->conn->insert_id;
        $sql="UPDATE donhang set id_kh=$idkh,ngaydat='$ngaydat',tongtien=$tongtien WHERE id_donhang=$lastid";
        $this->conn->query($sql);
      }

      function adtr(){
        $b=array();
        $sql="SELECT * FROM tinhtrangdh";
        $re=$this->conn->query($sql);
        if($re){
        while($row=$re->fetch_assoc()){
          $b[]=$row;
        };}
        return $b;}

        function uptr(){
          if(isset($_SESSION['get'])){
            $g=$_SESSION['get'];
          if(isset($_POST['tinhtrang'])){
            $tinhtrang=$_POST['tinhtrang'];
            $sql="UPDATE tinhtrangdh set tinhtrang='$tinhtrang' where id_tinhtrang=$g";
            $this->conn->query($sql);
         }}
        }

        function xoatr(){
          if(isset($_GET['xoa'])){
            $s=$_GET['xoa'];
            $sql="DELETE from tinhtrangdh WHERE id_tinhtrang=$s";
            $this->conn->query($sql);
          }
        }

        function themtr(){
          $tinhtrang=$_POST['tinhtrang'];
          $sql="INSERT INTO tinhtrangdh(tinhtrang) VALUES('$tinhtrang')";
          $this->conn->query($sql);
       }

       function adbn(){
        $b=array();
        $sql="SELECT * FROM banner";
        $re=$this->conn->query($sql);
        if($re){
        while($row=$re->fetch_assoc()){
          $b[]=$row;
        };}
        return $b;}
 
        function upbn(){
          if(isset($_SESSION['get'])){
            $g=$_SESSION['get'];
          if(isset($_POST['banner'])){
            $banner=$_POST['banner'];
            $sql="UPDATE banner set banner='$banner' where id_banner=$g";
            $this->conn->query($sql);
         }}
        }

        function xoabn(){
          if(isset($_GET['xoa'])){
            $s=$_GET['xoa'];
            $sql="DELETE from banner WHERE id_banner=$s";
            $this->conn->query($sql);
          }
        }

        function thembn(){
          $banner=$_POST['banner'];
          $sql="INSERT INTO banner(banner) VALUES('$banner')";
          $this->conn->query($sql);
       }

       function checkuser(){
        if(isset($_POST['user'])){
        $s=$_POST['user'];
        $b=null;
        $sql="SELECT username FROM taikhoan where username='$s'";
        $re=$this->conn->query($sql);
        $row=$re->fetch_assoc();
        if($row!=null){
          $b="Tên đăng nhập đã tồn tại";
        }
        return $b;}}

        function dangky(){
          $user=$_POST['user'];
          $email=$_POST['email'];
          $pass=$_POST['pass'];
          $sql="INSERT INTO taikhoan(username,email,pass) VALUES('$user','$email','$pass')";
          $this->conn->query($sql);
        }

        function dangnhap(){
          if(isset($_POST['user'])&&isset($_POST['pass'])){
          $s=$_POST['user'];
          $p=$_POST['pass'];
          $sql="SELECT username,pass FROM taikhoan where username='$s' and pass='$p'";
          $re=$this->conn->query($sql);
          $row=$re->fetch_assoc();
          return $row;}}

          function adtk(){
            $b=array();
            if(isset($_GET['searchtk'])){
            $s=$_GET['searchtk'];
            $sql="SELECT * FROM taikhoan where username like'%$s%' OR email like'%$s%'";}
            else{
            $sql="SELECT * FROM taikhoan";}
            $re=$this->conn->query($sql);
            if($re){
            while($row=$re->fetch_assoc()){
              $b[]=$row;
            };}
            return $b;}
        
            function uptk(){
              if(isset($_SESSION['get'])){
                $g=$_SESSION['get'];
              if(isset($_POST['user'])){
                $user=$_POST['user'];
                $sql="UPDATE taikhoan set username='$user' where id_user=$g";
                $this->conn->query($sql);
             }
             if(isset($_POST['email'])){
              $email=$_POST['email'];
              $sql="UPDATE taikhoan set email='$email' where id_user=$g";
              $this->conn->query($sql);
           }
           if(isset($_POST['pass'])){
            $pass=$_POST['pass'];
            $sql="UPDATE taikhoan set pass='$pass' where id_user=$g";
            $this->conn->query($sql);
         }}}

         function xoatk(){
          if(isset($_GET['xoa'])){
            $s=$_GET['xoa'];
            $sql="DELETE from taikhoan WHERE id_user=$s";
            $this->conn->query($sql);
          }
        }

        function themtk(){
          $user=$_POST['user'];
          $email=$_POST['email'];
          $pass=$_POST['pass'];
          $sql="INSERT INTO taikhoan(username,email,pass) VALUES('$user','$email','$pass')";
          $this->conn->query($sql);
        }

        function adctdh(){
          $b=array();
          if(isset($_GET['searchctdh'])){
            $s=$_GET['searchctdh'];
            $sql="SELECT sp.tensp,ms.mausac,kc.kichco,ct.soluong,ct.id_donhang,ct.tonggia,ct.id_ctdh,ct.id_sl 
            from ctdonhang ct left join soluong sl on ct.id_sl=sl.id_sl 
            left join mausac ms on sl.id_mausac=ms.id_mausac 
            left join kichco kc on kc.id_kichco=sl.id_kichco 
            left join sanpham sp on sp.id_sp=sl.id_sp
            where ms.mausac like '%$s%' or sp.tensp like '%$s%' or kc.kichco like '%$s%' or ct.soluong like '%$s%' or ct.tonggia like '%$s%'";}
          else{
          $sql="SELECT sp.tensp,ms.mausac,kc.kichco,ct.soluong,ct.id_donhang,ct.tonggia,ct.id_ctdh,ct.id_sl 
          from ctdonhang ct left join soluong sl on ct.id_sl=sl.id_sl 
          left join mausac ms on sl.id_mausac=ms.id_mausac 
          left join kichco kc on kc.id_kichco=sl.id_kichco 
          left join sanpham sp on sp.id_sp=sl.id_sp";}
          $re=$this->conn->query($sql);
          if($re){
          while($row=$re->fetch_assoc()){
            $b[]=$row;
          };}
        return $b; }

        function adus(){
          $row=null;
          if(isset($_POST['user'])&&isset($_POST['pass'])){
            $u=$_POST['user'];
            $p=$_POST['pass'];
            $sql="SELECT * FROM admin WHERE username='$u' and password='$p'";
            $re=$this->conn->query($sql);
            if($re){
              $row=$re->fetch_assoc();
            }}
          return $row;
        }

        
        function adad(){
          $b=array();
          if(isset($_GET['searchad'])){
          $s=$_GET['searchad'];
          $sql="SELECT * FROM admin where username like'%$s%' OR password like'%$s%'";}
          else{
          $sql="SELECT * FROM admin";}
          $re=$this->conn->query($sql);
          if($re){
          while($row=$re->fetch_assoc()){
            $b[]=$row;
          };}
          return $b;}

          function upad(){
            if(isset($_SESSION['get'])){
              $g=$_SESSION['get'];
            if(isset($_POST['user'])){
              $user=$_POST['user'];
              $sql="UPDATE admin set username='$user' where id_ad=$g";
              $this->conn->query($sql);
           }
            if(isset($_POST['pass'])){
             $pass=$_POST['pass'];
             $sql="UPDATE admin set password='$pass' where id_ad=$g";
             $this->conn->query($sql);
           }}}

           function xoaad(){
            if(isset($_GET['xoa'])){
              $s=$_GET['xoa'];
              $sql="DELETE from admin WHERE id_ad=$s";
              $this->conn->query($sql);
            }
          }

          function themad(){
            $user=$_POST['user'];
            $pass=$_POST['pass'];
            $sql="INSERT INTO admin(username,password) VALUES('$user','$pass')";
            $this->conn->query($sql);
          }
    }
  ?>