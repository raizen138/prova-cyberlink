<?php

/* Aqui hariamos la conexion a la base de datos */
//$idConexion = mysql_connect($host, $usuario, $password);
//$bdTest = mysql_select_db($bd);
/*if (!$idConexion || !$bdTest)
{
	//throw new OperacionesBDException(mysql_error());  
    echo "<br>Error de conexion:<br>";	
    echo (mysql_error());
	die(mysql_error());
}*/

if($_POST['uname']!='' && $_POST['psw']!=''){

    $q = "SELECT * FROM sec_users WHERE username = ".$_POST['uname']." AND password = ".$_POST['psw'];

    /* Realizamos la consulta en la base de datos a ver si existe el usuario */
    /*$idquery=mysql_query($q, $idConexion);
    if (!$idquery)
    {
        //throw new OperacionesBDException(mysql_error());
        echo "<br>Error en la consulta: $stringConsulta<br>";
        echo (mysql_error());
        die(mysql_error());
    }
    $resultado=Array();
    while($fila= mysql_fetch_assoc($idquery))
    {
        $resultado[]=$fila;
    }*/

    //if(count($resultado) > 0){

        //$result['user'] = $_POST['uname'];
        //$result['exist'] = 1;

    //}else{

        $qinsert = "INSERT INTO sec_users VALUES ()";

        /* Realizamos el insert del usuario nuevo en la BBDD */
        /*$idquery=mysql_query($stringModificacion, $this->idConexion);
		if (!$idquery)
		{
			//throw new OperacionesBDException(mysql_error());
            echo "<br>Error en la modificacion: $stringConsulta<br>";
			
			echo (mysql_error());
			die(mysql_error());
		}*/

        $result['exist'] = 0;
    //}

    

    return $result;

}

?>