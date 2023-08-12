<?php

include "layout/header.php";
if (isset($_GET['id'])) {
    $teab_data = SelectData('aa_our_services', " WHERE service_id='{$_GET['id']}'");
    $services = $teab_data->fetch_object();
    $title = "> " . $services->title;
} else {
    $title = '';
}
?>

<div class="sub_header text-center p-5 text-white">
    <h1>Our Programs</h1>
    <p>Home > Our Programs <?= $title ?></p>
</div>

<?php

if (isset($_GET['id'])) { ?>
    <div class="container py-5">
        <div class="pt-5">
            <h1 class="service_title pb-5"><?= $services->title ?></h1>           
            <?php echo html_entity_decode($services->full_text) ?>
        </div>
    </div>
<?php } else { ?>
    <div class="container py-5">
        <div class="row py-5">
            <?php
            $teab_data = SelectData('aa_our_services', "");
            while ($service = $teab_data->fetch_object()) { ?>
                <div class="col-md-3 d-flex align-self-stretch mb-4">
                    <div class="service_card">
                        <img src="upload/services/<?= $service->image ?>" alt="" width="100%">

                        <div class="service_content p-4">
                            <h3 class="h3 py-2"><?= $service->title ?></h3>
                            <?php
                            $postcontent = html_entity_decode($service->full_text);
                            $content = strip_tags($postcontent);
                            echo mb_strimwidth($content, 0, 100, " ");
                            ?>
                            <div class="button_bar mt-2">
                                <a href="program.php?id=<?= $service->service_id ?>" class="btn btn-warning btn-sm  ">See Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
<?php } ?>



<?php if (isset($_GET['id'])) {?>

<div class="container py-5">
    <div class="row py-5">

        <!-- facilitator -->
        <div class="col-md-6">
            <div class="card facilitator p-5">
                <h1 class="mb-5">Facilitator</h1>
                <?php
                $team_data = SelectData('our_team', "where tid='{$services->facilitator_id}'");
                while ($our_team = $team_data->fetch_object()) { ?>
                    <a class="text-decoration-none text-dark" href="team.php?id=<?= $our_team->tname ?>">
                        <div class="facilitator_details_card" style="cursor: pointer;">
                            <div class="facilitator_profile_pic"><img src="upload/team/profile1.jpg"></div>
                            <div class="facilitator_profile_text">
                                <h5 class="mt-3"><?= $our_team->tname ?></h5>
                                <p class="body_paragraph"><?= $our_team->dasinaton ?></p>
                            </div>
                        </div>
                    </a>
                <?php } ?>
            </div>
        </div>
        <!-- facilitator -->



        <!-- join_this_course -->
        <div class="col-md-6">
            <div class="card join_this_course p-5">
                <form class="row g-3 needs-validation" novalidate>

                    <h1 class="">Join this course</h1>

                    <div class="col-md-6">
                        <label for="validationCustom01" class="form-label">First name</label>
                        <input type="text" class="form-control" id="validationCustom01" value="" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label for="validationCustom02" class="form-label">Last name</label>
                        <input type="text" class="form-control" id="validationCustom02" value="" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label for="validationCustom01" class="form-label">Email</label>
                        <input type="email" class="form-control" id="validationCustom01" value="" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label for="validationCustom02" class="form-label">Phone/Whatsapp No.</label>
                        <input type="text" class="form-control" id="validationCustom02" value="" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>

                    <div class="col-md-12">
                        <label for="validationCustom02" class="form-label">Your Comment</label>
                        <textarea name="" class="form-control" id="" cols="30" rows="10"></textarea>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>

                    <div class="col-12">
                        <button class="btn btn-warning" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- join_this_course -->
    </div>
</div>
<?php } ?>





<?php include "layout/footer.php"; ?>