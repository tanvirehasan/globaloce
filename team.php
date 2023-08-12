<?php
include "layout/header.php";
if (isset($_GET['id'])) {
    $team_data = SelectData('our_team', " WHERE tname='{$_GET['id']}'");
    $our_team = $team_data->fetch_object();
    $title = "> " . $our_team->tname;
} else {
    $title = '';
}
?>

<div class="sub_header text-center p-5 text-white">
    <h1>Profile</h1>
    <p>Home > profile<?= $title ?></p>
</div>

<div class="container">
    <div class="py-5">

        <?php echo html_entity_decode($our_team->profile_text) ?>

    </div>
</div>





<?php include "layout/footer.php"; ?>