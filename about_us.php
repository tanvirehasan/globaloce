<?php 
    include "layout/header.php";
    $data = SelectData('about_us', ""); 
    $row = $data->fetch_object();  
?>

<div class="sub_header text-center p-5 text-white">
    <h1><?=$row->about_title?></h1>
    <p>Home > <?=$row->about_title?></p>
</div>

<div class="container"> 
    <div class="py-5">
        <?=html_entity_decode($row->about_text)?>              
    </div>
</div>





<?php include "layout/footer.php"; ?>