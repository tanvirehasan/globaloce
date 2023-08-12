<?php include "layout/header.php"; ?>
<div class="header_slider owl-carousel">
  <?php $i = 1;
  $data = SelectData('a_slider', '');
  while ($row = $data->fetch_object()) { ?>
    <div class="headerbg py-5" style="background:url(upload/slider/<?= $row->image_file ?>); background-repeat: no-repeat; background-size:cover; background-position:center; height: 800px;:">
      <div class="container py-5">
        <div class="row py-5">
          <div class="col-md-5">
            <div class="sidertext">
              <h1 class="text-white pb-3 pt-5 "><?= $row->slider_title ?></h1>
              <p class="text-white py-2"><?= $row->short_text ?></p>
              <a href="<?= $row->btn_url ?>" class="btn border px-3 text-white"><?= $row->btn_text ?></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php } ?>
</div>

<div class="container">
  <div class="row py-5">
    <div class="col-md-4">
      <div class="conbox p-3 rounded d-flex">
        <div class="cardicon">
          <i class="fal fa-users fs-2 pe-3"></i>
        </div>
        <div class="cardtext">
          <h5 class="m-0">Learn From Experts</h5>
          <p class="m-0">Lorem ipsum dolor sit amet consec adipiscing elit, sed do eiusmod</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="conbox bg-primary p-3 rounded text-white d-flex">
        <div class="cardicon">
          <i class="fal fa-shield-check fs-2 pe-3"></i>
        </div>
        <div class="cardtext">
          <h5 class="m-0">Achieve Your Goals</h5>
          <p class="m-0">Lorem ipsum dolor sit amet consec adipiscing elit, sed do eiusmod</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="conbox p-3 rounded d-flex">
        <div class="cardicon">
          <i class="fal fa-clock fs-2 pe-3"></i>
        </div>
        <div class="cardtext">
          <h5 class="m-0">Life Time Access</h5>
          <p class="m-0">Lorem ipsum dolor sit amet consec adipiscing elit, sed do eiusmod</p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- About us  -->
<div class="why py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div><?php echo $postcontent = html_entity_decode(About_Us('about_text')); ?></div>
      </div>

    </div>
  </div>
</div>


<!-- services -->
<div class="container" id="Programs">
  <div class="services">
    <div class="section_title text-center">
      <p class="p-0 m-0">Our Courses</p>
      <h2 class="p-0 m-0">Choose The Best Course For You</h2>
    </div>
    <div class="row py-5">
      <!-- services 1 -->


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
                <a href="program.php?id=<?= $service->service_id ?>" class="btn btn-warning btn-sm">See Details</a>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>

    </div>
  </div>
</div>


<!-- Our-Team 
<div class="our_team my-5 py-5">
  <div class="container">
    <div class="section_title text-center">
      <p class="p-0 m-0">Our Facilitators</p>
      <h2 class="p-0 m-0">Meet Our Team</h2>
    </div>
    <div class="row py-5">

      <div class="col-md-3">
        <div class="team-card">
          <div class="team_icon"><i class="fas fa-phone-alt"></i><i class="fas fa-envelope"></i></div>
          <div class="profile_pic"><a href="team.php?team=Sumi-Akter"><img src="upload/team/profile1.jpg" alt=""> </a> </div>
          <div class="team_info">
            <b>Quazi M. Ahmed</b>
            <p>Facilitator</p>
          </div>
        </div>
      </div>



    </div>
  </div>
</div>
-->


<!-- ============= Event & News 
<div class="news_events my-5" id="news_events">
  <div class="container">
    <div class="section_title text-center">
      <p class="p-0 m-0"></p>
      <h2 class="p-0 m-0">Event & News</h2>
    </div>
    <div class="row mt-5">

      <div class="col-md-6">
        <div class="card border-0 rounded-0 bg-light">
          <div class="card-body p-0 m-0 ">
            <img class="m-0 p-0" src="upload/blogs/blog1.webp" alt="" width="100%">
            <p class="text-muted p-3 m-0"><i class="fad fa-calendar-alt"></i> June 05, 2022</p>
            <hr class="m-0 mx-2">
          </div>
          <div class="p-4">
            <h4 class="text-muted">Thanks to James McCulloch</h4>
            <div class="athor_cat text-muted  d-flex">
              <p><i class="fas fa-user"></i> Admin</p>
              <p class="ps-3"><i class="fas fa-tag"></i> Soft Skills</p>
            </div>
            <p>Thanks to James McCulloch, Chief Executive, Asia of Inspire Group, New Zealand, for having me as a guest on his show when he was in Bangladesh in 1st week.</p>
            <div class="read_more"><a class="btn btn-info" href="full_blog.php">Read More...</i></a></div>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="row bg-light mb-3">
          <div class="col-md-5">
            <img class="m-0 p-0" src="upload/blogs/blog2.webp" alt="" width="100%">
          </div>
          <div class="col-md-7">
            <div class="athor_cat text-muted py-2  d-flex">
              <p class="py-0 m-0"><i class="fas fa-user"></i> Admin</p>
              <p class="ps-3 p-0 m-0"><i class="fas fa-tag"></i> Soft Skills</p>
            </div>
            <h5 class="text-muted p-0 m-0">Thanks to James McCulloch</h5>
            <p>Thanks to James McCulloch, Chief Executive, Asia of Inspire Group, New Zealand, <a style="color: #8cc242; display: inline-block;" class="nav-link" href="full_blog.php">Read More --<i class="far fa-chevron-right" style="font-size:12px;"></i></a></p>
          </div>
        </div>

        <div class="row bg-light mb-3">
          <div class="col-md-5">
            <img class="m-0 p-0" src="upload/blogs/blog1.webp" alt="" width="100%">
          </div>
          <div class="col-md-7">
            <div class="athor_cat text-muted py-2  d-flex">
              <p class="py-0 m-0"><i class="fas fa-user"></i> Admin</p>
              <p class="ps-3 p-0 m-0"><i class="fas fa-tag"></i> Soft Skills</p>
            </div>
            <h5 class="text-muted p-0 m-0">Thanks to James McCulloch</h5>
            <p>Thanks to James McCulloch, Chief Executive, Asia of Inspire Group, New Zealand, <a style="color: #8cc242; display: inline-block;" class="nav-link" href="full_blog.php">Read More --<i class="far fa-chevron-right" style="font-size:12px;"></i></a></p>
          </div>
        </div>

        <div class="row bg-light mb-3">
          <div class="col-md-5">
            <img class="m-0 p-0" src="upload/blogs/blog2.webp" alt="" width="100%">
          </div>
          <div class="col-md-7">
            <div class="athor_cat text-muted py-2  d-flex">
              <p class="py-0 m-0"><i class="fas fa-user"></i> Admin</p>
              <p class="ps-3 p-0 m-0"><i class="fas fa-tag"></i> Soft Skills</p>
            </div>
            <h5 class="text-muted p-0 m-0">Thanks to James McCulloch</h5>
            <p>Thanks to James McCulloch, Chief Executive, Asia of Inspire Group, New Zealand, <a style="color: #8cc242; display: inline-block;" class="nav-link" href="full_blog.php">Read More --<i class="far fa-chevron-right" style="font-size:12px;"></i></a></p>
          </div>
        </div>

        <div class="row bg-light mb-3">
          <div class="col-md-5">
            <img class="m-0 p-0" src="upload/blogs/blog1.webp" alt="" width="100%">
          </div>
          <div class="col-md-7">
            <div class="athor_cat text-muted py-2  d-flex">
              <p class="py-0 m-0"><i class="fas fa-user"></i> Admin</p>
              <p class="ps-3 p-0 m-0"><i class="fas fa-tag"></i> Soft Skills</p>
            </div>
            <h5 class="text-muted p-0 m-0">Thanks to James McCulloch</h5>
            <p>Thanks to James McCulloch, Chief Executive, Asia of Inspire Group, New Zealand, <a style="color: #8cc242; display: inline-block;" class="nav-link" href="full_blog.php">Read More --<i class="far fa-chevron-right" style="font-size:12px;"></i></a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
================= -->


<!-- ============= Testimonials 
<div class="testimonials my-5 py-5">
  <div class="container">
    <div class="section_title text-center">
      <p class="p-0 m-0">Testimonials</p>
      <h2 class="p-0 m-0">What Our Stakeholders Say</h2>
    </div>
    <div class="row d-flex justify-content-center p-5">
      <div class="col-md-8 ">
        <div class="owl-carousel clients_review">

          <div class="row p-0 m-0 testimonialsbg">
            <div class="col-md-4"><img src="upload/clientsreview/image1.png" alt="" width="100%"> </div>
            <div class="col-md-8 p-3">
              <div class="coments h5 text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. Integer posuere Integer posuere erat a ante.</div>
              <div class="cradit_person text-white">
                <h6 class="p-0 m-0 mt-3">TANVIR HASAN</h6>
                <P>Web Developer, FutureLeaders™</P>
              </div>
            </div>
          </div>

          <div class="row p-0 m-0 testimonialsbg">
            <div class="col-md-4"><img src="upload/clientsreview/image1.png" alt="" width="100%"> </div>
            <div class="col-md-8 p-3 ">
              <div class="coments h5 text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. Integer posuere Integer posuere erat a ante.</div>
              <div class="cradit_person text-white">
                <h6 class="p-0 m-0 mt-3">TANVIR HASAN</h6>
                <P>Web Developer, FutureLeaders™</P>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>

================= -->

<?php include "layout/footer.php"; ?>