<?php 

    include "layout/header.php";
    $teab_data = SelectData('aa_our_services', " WHERE service_id='{$_GET['id']}'");
    $service = $teab_data->fetch_object();
 ?>


<div class="sub_header text-center p-5 text-white">
    <h1>Our Programs</h1>
    <p>Home > Our Programs > <?=$service->title?></p>
</div>

<div class="container py-5">  
    <div class="pt-5">
            <h1><?=$service->title?></h1>
            <?=html_entity_decode($service->full_text)?>
    </div>
</div>





<?php include "layout/footer.php"; ?>