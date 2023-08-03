<?php  
    include "layout/header.php"; 
    if (isset($_POST['add_service'])) {
        $fulltext=htmlspecialchars($_POST['full_text']);
        InsertData('aa_our_services', "title,Icon,full_text", "'{$_POST['title']}', '{$_POST['Icon']}','$fulltext'");
    }

    if (isset($_POST['update_service'])) {
        $fulltext=htmlspecialchars($_POST['full_text']);
        UpdateData('aa_our_services', "title='{$_POST['title']}', Icon='{$_POST['Icon']}', full_text='$fulltext' WHERE service_id='{$_GET['service_id']}'");
        Reconect('services.php');
    }

    if (isset($_GET['delete_id'])) {
        mysqli_query($conn, "DELETE FROM aa_our_services WHERE service_id='{$_GET['delete_id']}'");
        Reconect('services.php');
    }
?>


<div class="row">
    <div class="col-10"><h3 class="bg-white p-3 text-uppercase text-primary"><i class="fas fa-users"></i> OUR SERVICES</h3></div>
    <div class="col-2"><h3 class="bg-white text-center p-3 text-uppercase text-info"><button onclick="popup()" class="btn p-0 text-primary"> New <i class="fas fa-plus"></i></button></h3></div>
</div>


<div class="card p-5 mb-2">
    <form method="POST" action="" enctype="multipart/form-data">
    <?php
        if (isset($_GET['service_id'])) {
                $teab_data = SelectData('aa_our_services', "WHERE service_id='{$_GET['service_id']}' ");
                while ($service = $teab_data->fetch_object()) {           
            ?>
            <label for="categoryname" class=" form-label" style="font-weight:700;">Service Name</label>
            <input  type="text" class="form-control mb-4 " name="title" value="<?=$service->title?>"  require>
            <label for="categoryname" class=" form-label" style="font-weight:700;">Service Icon</label>
            <input  type="text" class="form-control mb-4 " name="Icon" value="<?=$service->Icon?>" require>
            <label for="categoryname" class="form-label pb-2" style="font-weight:700;">Text & Link</label>
            <textarea class="form-control" id="summernote" name="full_text" require> <?=html_entity_decode($service->full_text)?> </textarea>
            <div class="float-right my-3">
                <button type="submit" name="update_service" class="btn btn-primary"> Update</button>
            </div>

        <?PHP } }else{?>
            <div class="newservices">
                <label for="categoryname" class=" form-label" style="font-weight:700;">Service Name</label>
                <input  type="text" class="form-control mb-4 " name="title" require>
                <label for="categoryname" class=" form-label" style="font-weight:700;">Service Icon</label>
                <input  type="text" class="form-control mb-4 " name="Icon" require>
                <label for="categoryname" class="form-label pb-2" style="font-weight:700;">Text & Link</label>
                <textarea class="form-control" id="summernote" name="full_text" require></textarea>
                <div class="float-right my-3"><button type="submit" name="add_service" class="btn btn-primary"> Submit</button></div>
            </div>          
        <?php } ?>
    </form>
</div>


<div class="card">
 <div class="card-body">
     <div class="row align-items-center m-l-0">
         <div class="col-sm-6">
         </div>
     </div>
     <div class="table-responsive">
         <table id="data_table" class="table table-bordered table-striped mb-0">
             <thead>
                 <tr>
                     <th>SL</th>
                     <th>Name</th>
                     <th>icon</th>
                     <th>Action</th>
                 </tr>
             </thead>
             <tbody>

        <?php 
            $i=1;
            $teab_data = SelectData('aa_our_services', "");
            while ($service = $teab_data->fetch_object()) {?>

                 <tr>
                    <td><?=$i++?></td>
                        <td><?=$service->title?></td>
                        <td><i class="<?=$service->Icon?>"></i></td>
                    <td>
                        <a href="services.php?service_id=<?=$service->service_id?>" class="btn btn-warning btn-sm text-white">Edit</a>                     
                        <a href="services.php?delete_id=<?=$service->service_id?>" onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm text-white">Delete</a>                          
                    </td>
                </tr> 

            <?php } ?>
            
             </tbody>
         </table>
     </div>
 </div>
</div>

<script>
    function popup(){
       $(".newservices").toggle();        
    }
</script>

<?php include "layout/footer.php"; ?>
