<?php
//direct.php
//i am cool and based

// 18 jan 2022: i have schirztopenia
$conn = new mysqli("localhost","root","","testrants");

if (isset($_GET['name'])){
    $username = $_GET['name'];
    if (isset($_GET['context'])){
        $context = $_GET['context'];
        if (isset($_GET['url'])){
            $url = $_GET['url'];
        }
        else{
            $url = "none";
        }        
        $ins = $conn->prepare('INSERT INTO testrants(name,context,url) VALUES (?,?,?)');
        $ins->bind_param("sss",$username,$context,$url);
        $ins->execute();
    }
    else{
        echo "CONTEXT REQUIRED";
    }
} 
else{
    echo "USERNAME REQUIRED";
}

?>