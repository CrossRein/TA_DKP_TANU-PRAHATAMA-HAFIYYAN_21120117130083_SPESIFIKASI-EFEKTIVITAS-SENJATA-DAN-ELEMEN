<!DOCTYPE html>
<html>
	<head>
		<style>
		body {
		background-image: url("pale.jpg");
		}
		a {
		color: black;
		}
		</style>
		<title>Spesifikasi efektivitas senjata dan elemen(Credit)</title>
	</head>
	
	<body>
	
    <?php
     
    class Credits {
     
        protected $stack;
        protected $limit;
     
        
        public function __construct($limit)
        {
            $this->stack = array();
            $this->limit = $limit;
        }
     
        public function push($data){
            if (count($this->stack) >= $this->limit) {
                throw new Exception("Stack penuh.");
            } else {
                array_push($this->stack, $data);
            }
        }
     
        public function pop(){
            if (empty($this->stack)) {
                throw new Exception("Stack kosong.");
            } else {
                array_pop($this->stack);
            }
        }
     
        public function display(){
            echo "<pre>";
            print_r($this->stack);
            echo "</pre>";
        }
     
    }
    $credit = new Credits(9);
    $credit->push("Terimakasih Kepada =");
    $credit->push("Tuhan Yang Maha Esa.");
    $credit->push("Keluarga.");
    $credit->push("Asisten & Penannggung Jawab Praktkum DKP 2018 & 2023.");
    $credit->push("Dosen Pengampu Praktikum DKP 2018 & 2023.");
    $credit->push("Teman(Terlebih keluarga Tekkom,Terutama angkatan 2017) Saudara & Kerabat.");
    $credit->push("Realita Hidup, Simulation apps and games, Natural Healing Training & etc.");
    $credit->push("Program ini dibuat untuk memenuhi Tugas Akhir Praktikum DKP 2018 dan 2023. Atas nama : Tanu Prahatama Hafiyyan, 21120117130083");
    $credit->push("Discord:Eternal#0091.");
	$credit->pop();
    $credit->display();

    ?>
    
		<br>
		<a href="index.php">Menu Utama</a>
	</body>
</html>