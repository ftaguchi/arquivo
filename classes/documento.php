<?php

namespace documentos;

class Documento
{
    public function cad_pasta($idPasta, $fkDocumento, $fkCaixa, $secretaria, $pastaFuncional, $genitor, $criacao)
    {
        $query = mysqli_prepare($conexao, " INSERT INTO tb_pasta VALUES (?, ?, ?, ?, ?, ?, CURRENT_TIME() )";
        mysqli_stmt_bind_param($query, $idPasta, $kfDocumento, $fkCaixa, $secretaria, $pastaFuncional, $genitor, CURRENT_TIME());
        mysqli_stmt_execute($query);
    }
}
