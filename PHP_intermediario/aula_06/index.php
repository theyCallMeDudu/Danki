<?php
    /* Funções para strings */

    // substr($variavel, inicio, quantidade_de_letras)
    // usada para recortar uma parte de uma string

    $conteudo = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                 Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                 when an unknown printer took a galley of type and scrambled it to make a type 
                 specimen book. It has survived not only five centuries, but also the leap into 
                 electronic typesetting, remaining essentially unchanged. It was popularised in 
                 the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
                 and more recently with desktop publishing software like Aldus PageMaker including 
                 versions of Lorem Ipsum.";

    echo substr($conteudo, 0, 20);

    echo '<hr>';

    // explode(local_do_corte, $variavel)
    // retorna um array

    $nome = 'Eduardo Coelho e Silva';

    // Aqui queremos cortar de acordo com os espaços a variável $nome
    $nomes = explode(' ', $nome);

    // imprimir arrays
    print_r($nomes);

    echo '<hr>';


    // implode(local_da_juncao, $variavel)
    // faz o inverso do explode
    // retorna uma string

    $nomes = implode(' ', $nomes);
    echo $nomes;

    echo gettype($nomes);

    echo '<hr>';

    // strip_tags($variavel)
    // retira o código HTML

    $conteudo = '<h1>Dudu</h1> Edu';
    echo strip_tags($conteudo);

    echo '<hr>';

    // htmlentities
    // retorna o código HTML na página

    echo htmlentities('<div></div>');
?>