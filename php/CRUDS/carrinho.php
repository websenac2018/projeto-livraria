<?php
require_once 'conexao.php';
if(!isset($_SESSION)){
    session_start();
}
if(isset($_POST["quantity"]) && $_POST['quantity'] != 0 && !is_null($_POST['quantity'])){
    $quant = $_POST["quantity"];
}
else{
    $quant = 1;
}
# Verifica se existe a sessão de carrinho, caso não exista é criada
if(!isset($_SESSION['carrinho'])) {
    $_SESSION['carrinho'] = array();
}
if(isset($_GET['id'])){
  $_POST['id_produto'] = $_GET['id'];
  # Array que joga pros itens reservados no banco
  $carrinho_info = array('id' => $_POST['id_produto'], 'qtd' => intval($_POST['quantity']));
}
if(isset($_GET['acao'])) {
    # Adiciona o produto
    if($_GET['acao'] == 'add') {
        $id = intval($_POST['id_produto']);
        if(!isset($_SESSION['carrinho'][$id])) {
            # Caso o produto não exista no carrinho, bote ele no carrinho
            $_SESSION['carrinho'][$id] = $quant;
            # Se o usuário estiver logado, mandar pro banco o item reservado.
            if (isset($_SESION['user_id'])){
            $user_id = $_SESSION['user_id'];
            $sql = 'INSERT INTO itens_reservados values ($user_id, $id, $quant)';
            $resultado = mysqli_query($conexao, $sql);
            }
        } else {
          # Caso o produto esteja no carrinho, aumente a quantidade dele.
            $_SESSION['carrinho'][$id] += $quant;
            # Se o usuário estiver logado, somar com a quantidade da reserva no banco.
            if (isset($_SESION['user_id'])){
            $sql = 'update itens_reservados set quantidade = quantidade + $quant where produto_id = $id';
            $resultado = mysqli_query($conexao, $sql);
            $sql = 'update produto set quantidade = quantidade - $quant where id = $id';
            $resultado = mysqli_query($conexao, $sql);
            }
        }
        header("Location: testeCarrinho.php");
        die();
    }
    # Remove o produto
    if($_GET['acao'] == 'del') {
        $id = intval($_GET['id']);
        # Se o item existir no carrinho
        if(isset($_SESSION['carrinho'][$id])) {
          # Retire o item do carrinho
            unset($_SESSION['carrinho'][$id]);
            # Se o usuário estiver logado, retire da reserva, e aumente o estoque.
            if (isset($_SESSION['user_id'])){
            $conexao = getConnection();
            $quant_total = $_SESSION['carrinho']['$id'];
            $sql = 'update produto set quantidade = quantidade + $quant_total where id = $id';
            $resultado = mysqli_query($conexao, $sql);
            $sql = 'DELETE FROM itens_reservados where produto_id = $id';
            $resultado = mysqli_query($conexao, $sql);
          }
        }
        header("Location: testeCarrinho.php");
        die();
    }
    # Altera quantidade
    if($_GET['acao'] == 'atu') {
        if(is_array($carrinho_info)) {
                $id = intval($carrinho_info['id']);
                $qtd = intval($carrinho_info['qtd']);
                if(!empty($qtd) || $qtd != 0) {
                    $_SESSION['carrinho'][$id] = $qtd;
                    # Se o usuário estiver logado, mandar pro banco o item reservado.
                    if (isset($_SESSION['user_id'])){
                    $sql = 'update itens_reservados set quantidade = $qtd where produto_id = $id';
                    $resultado = mysqli_query($conexao, $sql);
                    $sql = 'update produto set quantidade = quantidade - $qtd where id = $id';
                    $resultado = mysqli_query($conexao, $sql);
                    }
                } else {
                    unset($_SESSION['carrinho'][$id]);
            }
        }
        header('location: testeCarrinho.php');
        die();
    }
}
