<?php
function conectar()
{
    if (!($conn =new  mysqli('l6slz5o3eduzatkw.cbetxkdyhwsb.us-east-1.rds.amazonaws.com', '	n877zmeh7sw73tpj','h33j8hd6l66i1woh','lwehqrjlb0w2nsac'))) {
        echo "Error al conectarse";
        exit();
    }
    return $conn;
}
?>