 <?php
// VERIFICAÇÃO DE METODO
if($_SERVER["REQUEST_METHOD"] === "POST"){

    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
    $nota = $_POST["nota"];

    // VERIFICANDO SE OS CAMPOS ESTAO PREENCHIDOS
    if($nome == "" || $idade == "" || $nota == ""){
        echo "Preencha todos os campos corretamente.";

        
    }else{
        // VERIFICANDO A NOTA
        if($nota >= 7){
            echo "Olá $nome, você está aprovado!";
        }
        elseif($nota >= 5 && $nota < 7){
            echo "Olá $nome, você está de recuperação!";
        }
        elseif($nota < 5){
            echo "Olá $nome, você está reprovado!";
        }
        
    }
}

?>