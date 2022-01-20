<?php
function request($table)
{
    $sql = $conn->prepare("SELECT `Valeur`,`Date` FROM ? ORDER BY `Date`");
    $sql->bind_param("s",$table);
    $sql->execute();
    $result = $sql->get_result();

    foreach($result as $data){
        $time[] = $data['Date'];
        $Value[] = $data['Valeur'];
    }
}
?>