<?php
class Scanner {

    private $content;

    public function setContent($data) {

        $this->content = "barcode " . $data . "</br     >";
    }
    public function printContent() {
        
        echo $this->content;
    }
} 

$data = ['samsung </br>', 'oddo </br>', 'poco </br>'];
$jumlahData = count($data);

for ($i=0 ; $i<$jumlahData; $i++){
    $scanner[$i] = new Scanner();
    $scanner[$i]->setContent($data[$i]);
    $scanner[$i]->printContent();

}

// $cd = new Scanner();
// $cd->setContent("apple ");
// echo    $cd->printContent();

// $scanner2 = new Scanner();
// $cd->setContent("samsnug");
// echo    $cd->printContent();

?>