<?php
/**
 * Created by PhpStorm.
 * User: zhangzhaoying
 * Date: 21/09/2016
 * Time: 3:36 AM
 */
?>
<!-- loading header -->
<?php $this->load->view('header'); ?>
<script type="text/javascript">
    $('li#treatment-after-injury').addClass('active');
</script>

<div class="section section-breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Treatment After Injury</h1>
            </div>
        </div>
    </div>
</div>



<div class="section">
    <div class="container">
        <h2>First Aid</h2>
        <div class="row service-wrapper-row">
            <div class="col-sm-4">
                <div class="service-image">
                    <img src="img/burn.png" alt="Service Name">
                </div>
            </div>
            <div class="col-sm-8">
                <a href="<?php echo site_url('Welcome/newPage/burn'); ?>"><h3>Burns</h3>
                </a>
                <p>
                    A burn is a type of injury to skin, or other tissues, caused by heat, cold, electricity, chemicals, friction, or radiation.[1] Most burns are due to heat from hot liquids, solids, or fire. Females in many areas of the world have a higher risk related to the more frequent use of open cooking fires or unsafe cook stoves.
                    Burns can be caused by flames, ultraviolet (UV) radiation, hot liquids, electricity, lightning and certain chemicals. All burns require immediate first aid treatment. Partial and full thickness burns require urgent medical attention. Full thickness burns often require skin graft surgery.
                    <a href="<?php echo site_url('Welcome/newPage/burn'); ?>">See more details.</a>
                </p>
            </div>
        </div>
        <div class="row service-wrapper-row">
            <div class="col-sm-4">
                <div class="service-image">
                    <img src="img/cut.png" alt="Service Name">
                </div>
            </div>
            <div class="col-sm-8">
                <a href="<?php echo site_url('Welcome/newPage/cut'); ?>"><h3>Cuts and Scrapes</h3>
                </a>
                <p>
                    Minor cuts and scrapes usually don't require a trip to the emergency room.
                    Many cut and scrapes injury usually come from kitchen hands, some minor cuts and scrapes usually don't require a trip to the emergency room. Also, There are many different types of cuts injury, some are bleeding, some are not; Some of the wounds can be caused by an injury, or by an infection, or by chronic illnesses. As a worker, you should know how to treat your wound in the right way.
                    <a href="<?php echo site_url('Welcome/newPage/cut'); ?>">See more details.</a>
                </p>
            </div>
        </div>
        <div class="row service-wrapper-row">
            <div class="col-sm-4">
                <div class="service-image">
                    <img src="img/fall.png" alt="Service Name">
                </div>
            </div>
            <div class="col-sm-8">
                <a href="<?php echo site_url('Welcome/newPage/fall'); ?>"><h3>Fall</h3>
                </a>
                <p>
                    A fall could be occurs in any workplace so you should beware what you should do immediately when something really happens. The common fall is more dangerous than it may seem. While the majority leave behind no more than a few bumps, bruises, or scratches others can be the injury behind a concussion, broken bone, seizure and other unpleasant situations.
                    A fracture is a broken bone. It requires medical attention. If the broken bone is the result of major trauma or injury, call your local emergency number.
                    <a href="<?php echo site_url('Welcome/newPage/fall'); ?>">See more details.</a>
                </p>
            </div>
        </div>
        <div class="row service-wrapper-row">
            <div class="col-sm-4">
                <div class="service-image">
                    <img src="img/chemical-burn.png" alt="Service Name">
                </div>
            </div>
            <div class="col-sm-8">
                <a href="<?php echo site_url('Welcome/newPage/chemical-burn'); ?>"><h3>Chemical Burns</h3>
                </a>
                <p>
                    A chemical burn occurs when your skin or eyes come into contact with an irritant, such as an acid or a base. Bases are described as alkaline. Chemical burns are also known as caustic burns. They may cause a reaction on your skin or within your body. These burns can affect your internal organs if chemicals are swallowed.

                    You should immediately check your mouth for cuts or burns if you swallow a chemical. You should also call a local poison control center or go to the emergency room right away if you swallow a chemical.

                    <a href="<?php echo site_url('Welcome/newPage/chemical-burn'); ?>">See more details.</a>
                </p>
            </div>
        </div>
    </div>
</div>

<div class="section">
    <div class="container">
        <h2>Recovery</h2>
        <div class="row service-wrapper-row">
            <div class="col-sm-4">
                <div class="service-image">
                    <img src="img/recovery.png" alt="Service Name">
                </div>
            </div>
            <div class="col-sm-8">
                <a href="<?php echo site_url('Welcome/newPage/recovery'); ?>"><h3>Recovery</h3>
                </a>
                <p>
                    A work-related injury or illness can have a big impact on your life. Research has shown that getting back to work is important for your health and wellbeing. The earlier you start planning to return to work, the better your chances of getting back sooner.
                    If you have been injured at work, this guide will help you understand what to do and what to expect during your recovery. From when the injury first occurs, there are things you must do to help you recovery as soon as possible. Click here to see more further details.
                    <a href="<?php echo site_url('Welcome/newPage/recovery'); ?>">See more details.</a>
                </p>
            </div>
        </div>
    </div>
</div>

<!-- loading footer -->
<?php $this->load->view('footer'); ?>
