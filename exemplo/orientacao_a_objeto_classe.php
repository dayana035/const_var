<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classes</title>
</head>
<body>
    <?php 
    //defininco uma classe
    class Carro {
//objetos  atributos
    public $marca; 
    public $modelo; 
    public $ano; 
    public $cor;
    public $velocidade = 0;  

//metodos
public function acelerar(){
    $this -> velocidade >=10;
    echo "O carro acelerou. A velocidade e igual: " . $this->velocidade . "Km/h";

}

//segundo metodo
public function frear(){
    if($this->velocidade >=10){
        $this->velocidade <=10;
    }
    echo "O carro acelerou. A velocidade e igual: " . $this->velocidade . "Km/h";
}


    }
    
    ?>
</body>
</html>