<?php
  include("pizzas.php");
    /*
     * Defina uma função que receba o id inteiro e retorne a
     * pizza quem tem como id este que foi dado
     */
    function pizzaPorId($id){
      global $pizzas;
    foreach ($pizzas as $pizza){
            if ($pizza["id"] == $id) {
              return $pizza;
              // echo $pizza["id"];
            }
          }
          return false;
        }
    /**
     * Defina uma função que retorne um array com as pizzas
     * de destaque. Dica: $vetor[] = 3 adiciona o número 3
     * na última posição de $vetor
     */
    function pizzasComDestaque($pizzas){
        $destaques =[];
        foreach ($pizzas as $pizza){
          if ($pizza["destaque"] === true){
            $destaques[] = $pizza;
          }
        }
        return $destaques;
      }

     /**
     * Defina uma função que retorne um array com as pizzas
     * de destaque. Dica: $vetor[] = 3 adiciona o número 3
     * na última posição de $vetor
     */
    function pizzasSemDestaque($pizzas){
      $no_destaques =[];
      foreach ($pizzas as $pizza){
        if ($pizza["destaque"] === false){
          $no_destaques[] = $pizza;
        }
      }
      return $no_destaques;
    }

    /**
     * Defina uma função que retorne a pizza mais cara do menu
     * Essa função não recebe nenhum parâmetro.
     * Ela acessar a variável $pizzas utilizando o global
     */
    function pizzaMaisCara(){
      global $pizzas;
      $valor =[];
      foreach ($pizzas as $pizza){
      $valor[]=$pizza["preco"];
      }
      foreach ($pizzas as $pizza) {
      if($pizza["preco"] == max($valor)){
          return $pizza;
          }
        }
      }

    /**
     * Defina uma função que retorne a pizza mais barata do menu
     * Essa função não recebe nenhum parâmetro.
     * Ela acessar a variável $pizzas utilizando o global
     */
    function pizzaMaisBarata(){
      global $pizzas;
      $valor =[];
      foreach ($pizzas as $pizza){
      $valor[] = $pizza["preco"];}
      foreach ($pizzas as $pizza){
        if ($pizza["preco"] == min($valor)){
          return $pizza;}
        }
      }

    /**
     * Defina uma função que recebe o trecho de nome de uma pizza
     * e retorna um array contendo todas as pizzas que contenham
     * o trecho
     */
     function buscaPizza($trecho){
        global $pizzas;
        $resultado = [];
        foreach ($pizzas as $pizza){
            if (stripos ($pizza['nome'], $trecho) !== false){
                $resultado[] = $pizza;
            }
        }
        return $resultado;
    }

     /**
     * Defina uma função que impima as informações de uma pizza
     */
    function pizzaPrint($pizza){
      global $pizzas;
      foreach ($pizzas as $item => $info){
        echo "<br>";
        foreach ($info as $caracter => $valores) {
            if($caracter == "ingredientes") {
              for ($i=0; $i < sizeof($valores); $i++) {
                echo $valores[$i]." ";}
            } else {
              echo $valores." ";
            }
            }
          }
        }
?>
