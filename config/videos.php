<?php
class videos extends mysqli
{
    public $con;

    public function _construct($host, $user, $pass, $db)
    {
        parent ::__construct($host, $user, $pass, $db);
    }

    public function get_videos(){
        $consulta = "SELECT v.id, v.titulo, v.thumbnail, v.archivo, c.categoria, v.lista, v.fecha_insercion, v.orden, v.v_status FROM videos v INNER JOIN rv_categoria c ON v.categoria = c.id";
        $query=$this->query($consulta);
        return $query;
    }
    public function search($texto){
        $consulta = "SELECT * FROM videos WHERE titulo like '%$texto%'";
        $query = $this->query($consulta);
        return $query;
    }
}
?>