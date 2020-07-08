<?php 

    $numeroproduto = filter_input(INPUT_POST, 'numeroproduto', FILTER_SANITIZE_NUMBER_INT);
    $nomeproduto   = filter_input(INPUT_POST, 'nomeproduto',   FILTER_SANITIZE_SPECIAL_CHARS);
    $categoria     = filter_input(INPUT_POST, 'categoria',     FILTER_SANITIZE_SPECIAL_CHARS );
    $quantidade    = filter_input(INPUT_POST, 'quantidade',    FILTER_SANITIZE_NUMBER_INT);
    $fornecedor    = filter_input(INPUT_POST, 'fornecedor',    FILTER_SANITIZE_SPECIAL_CHARS);



?>