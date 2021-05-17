<?php 

include 'config.php';

    $sql1 = "select * from akun order by id asc";
    $q1 = mysqli_query($con,$sql1);
    while($r1 = mysqli_fetch_array($q1)){
        $hasil[] = array(
            'id' => $r1['id'],
            'username' => $r1['username'],
            'email' => $r1['email']
        );
    }
    $data['result'] = $hasil;
    echo json_encode($data);
    

?>