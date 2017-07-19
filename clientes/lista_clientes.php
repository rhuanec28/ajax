<?php
	$path = "_conectaBanco.php";
	include_once($path);

    $sql = "SELECT c.*,
            se.nome nomesetor,
            cb.nome colabnome, cb.prenome, cb.sobrenome
            FROM ven_cli c
            LEFT JOIN pro_set se ON (se.id = c.id_set)
            LEFT JOIN cfg_cb cb ON (cb.id = c.id_cb)
            WHERE c.status = 1
            ORDER BY c.razao_social
            "
        ;

    $query = mysqli_query($conexao, $sql);

	$clientes=array();

    if (mysqli_num_rows($query)<1) {
		echo "";
	} else {
		$i=0;
		while($cli = mysqli_fetch_object($query)) {
            $clientes[$i] = $cli;
			$i++;
        }
    }

    $json = json_encode($clientes);
    echo $json;

?>