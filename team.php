<?php
include "layout/header.php";
if (isset($_GET['id'])) {
    $team_data = SelectData('our_team', "WHERE tname='{$_GET['id']}'");
    $our_team = $team_data->fetch_object();
    $title = "> " . $our_team->tname;
} else {
    $title = '';
}
?>

<div class="sub_header text-center p-5 text-white">
    <h1>Profile</h1>
    <p><a class="text-white text-decoration-none" href="index.php">Home</a> > <a class="text-white text-decoration-none" href="team.php">Profile</a> <?= $title ?></p>
</div>

<?php if (isset($_GET['id'])) { ?>
    <div class="container">
        <div class="py-5">
            <?php echo html_entity_decode($our_team->profile_text) ?>
        </div>
    </div>
<?php } else { ?>


    <!-- Teams  -->
    <div class="container">
        <div class="row py-5">
            <!-- team  -->
            <?php
            $team_data = SelectData('our_team', "");
            while ($teams = $team_data->fetch_object()) { ?>
                <div class="col-md-3">
                    <div class="team-card">
                        <div class="team_icon"><i class="fas fa-phone-alt"></i><i class="fas fa-envelope"></i></div>
                        <div class="profile_pic"><a href="team.php?id=<?= $teams->tname ?>"><img src="upload/team/<?= $teams->profile_photos ?>" alt=""> </a> </div>
                        <div class="team_info">
                            <b><?= $teams->tname ?></b>
                            <p><?= $teams->dasinaton ?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <!-- team  -->
        </div>
    </div>
    <!-- Teams  -->

<?php }
include "layout/footer.php"; ?>