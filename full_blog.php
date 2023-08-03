<?php include "layout/header.php"; ?>

<div class="sub_header text-center p-5 text-white">
    <h1>Blog & Event</h1>
    <p>Home > Blog & Events > Thanks to James McCulloch</p>
</div>

<div class="container py-5">  
    <div class="row">
        <div class="col-md-9">            
            <img class="pb-5" src="upload/blogs/blog1.webp" alt="" width="100%">
            <h1 class="py-3">Thanks to James McCulloch</h1>
            <p>Global Institute for Human Capital Development (GIHCD) is a
            Melbourne, Australia-based organization committed to developing talents across the world. It
            exists to offer global learning events, professional certification, awards, research, and advocacy.
            At Global Institute, we thrive for the word- extraordinary! Our aim is to
            become the pinnacle of standards for the field of Learning and Development. We assess and aid
            facilitators to actualize the highest potential. We help people and organizations quickly learn
            the essential skills that learning experts say are in demand right now. And that is not the end;
            we provide world-class certifications and programs both brewed inhouse or from our partner
            institutes/network that include world-class trainers such as Tony Robbins and so on. (Rahi Bhai
            to give relevant client portfolio)</p>

            <br>

            <p>Global Institute for Human Capital Development (GIHCD) is a
            Melbourne, Australia-based organization committed to developing talents across the world. It
            exists to offer global learning events, professional certification, awards, research, and advocacy.
            At Global Institute, we thrive for the word- extraordinary! Our aim is to
            become the pinnacle of standards for the field of Learning and Development. We assess and aid
            facilitators to actualize the highest potential. We help people and organizations quickly learn
            the essential skills that learning experts say are in demand right now. And that is not the end;
            we provide world-class certifications and programs both brewed inhouse or from our partner
            institutes/network that include world-class trainers such as Tony Robbins and so on. (Rahi Bhai
            to give relevant client portfolio)</p>
        </div>


        <div class="col-md-3">

        <?php 

            for ($a=0; $a<10; $a++) {?>
                <div class="row mb-3">
                    <div class="col-md-5"><img class="m-0 p-0" src="upload/blogs/blog1.webp" alt="" width="100%"></div>
                    <div class="col-md-7"><h6 class="text-muted p-0 m-0">Thanks to James Mc Culloch New Text</h6></div>
                </div>                
            <?php } ?>






        </div>
    </div>
</div>





<?php include "layout/footer.php"; ?>