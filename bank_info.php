<?php
include "layout/header.php";
$data = SelectData('about_us', "");
$row = $data->fetch_object();
?>

<div class="sub_header text-center p-5 text-white">
    <h1>Our Banking Details</h1>
    <p>Home > About> Our Banking Details</p>
</div>

<div class="container">
    <div class="py-5">

        <b class="h5 mb-3">Our Banking Details</b>
        <p class="h6 mb-3 pt-2">Global Center of Excellence, LLC</p>
        <p class="h6 mb-3">24-22, 2nd Floor, 89th Street, <br> East Elmhurst, New York - 11369, USA</p>
        <p class="h6 mb-3">
            Account Number: 4434971316 <br>
            Routing Number: 0260-13673<br>
            Fedwire ABA for Wires: 031101266<br>
            SWIFT: NRTHUS33XXX
        </p>

        <img src="upload/basic/bank.png" width="35%" class="pb-3">
        <p class="text-white mb-3 footer-text">DOS ID : 6886942 <br>
            Employer Identification Number (EIN): 93-2089330<br>
            This company has been formed under Section 203 of the Limited Liability Company Law of the State of New York.
        </p>

    </div>
</div>





<?php include "layout/footer.php"; ?>