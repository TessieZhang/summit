<?php
/**
 * Created by PhpStorm.
 * User: zhangzhaoying
 * Date: 21/09/2016
 * Time: 3:41 AM
 */
?>
<!-- loading header -->
<?php $this->load->view('header'); ?>
<script type="text/javascript">
    $('li#right').addClass('active');
</script>
<div class="section section-breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Part-Time Employee Rights</h1>
            </div>
        </div>
    </div>
</div>

<div class="section">
        <div class="row service-wrapper-row">
            <div class="col-sm-4">
                <div class="service-image">
                    <img src="img/rights-1.png" alt="Service Name">
                </div>
            </div>
            <div class="col-sm-8">
                <h3>Part-Time Legal Rights</h3>
                <div class="answer">A part-time employee:</div>
                <ul>
                    <li>works, on average, less than 38 hours per week (in particular, international student can only work 20 hours per week during study period).</li>
                    <li>usually works regular hours each week.</li>
                    <li>is entitled to the same benefits as a full-time employee, but on a pro rata basis.</li>
                    <li>is a permanent employee or on a fixed-term contract.</li>
                    <li><a href="<?php echo ('https://www.fairwork.gov.au'); ?>">See more details.</a></li>
                </ul>
            </div>
        </div>
        <div class="row service-wrapper-row">
            <div class="col-sm-4">
                <div class="service-image">
                    <img src="img/rights-2.png" alt="Service Name">
                </div>
            </div>
            <div class="col-sm-8">
                <h3>How part-time is different to full-time or casual</h3>
                <p>
                    Full-time employees work longer hours. On average, they work 38 hours per week.
                    Casual employees usually work irregular hours but they don’t get paid sick leave or annual leave.
                    Part-time employees get the same minimum entitlements (such as sick leave and holiday leave) as a full-time employee, based on how many hours they work each week.
                </p>
            </div>
        </div>
        <div class="row service-wrapper-row">
            <div class="col-sm-4">
                <div class="service-image">
                    <img src="img/rights-3.png" alt="Service Name">
                </div>
            </div>
            <div class="col-sm-8">
                <h3>Part-time Worker Consultation</h3>
                <p>
                    A safe workplace is more easily achieved when employers and employees talk to each other about potential problems and work together to find solution. Employees can be consulted in a variety of ways, including by setting up a health and safety committee or by holding regular meetings.
                    <a href="<?php echo ('http://www.worksafe.vic.gov.au/safety-and-prevention/health-and-safety-topics/consultation'); ?>">See more details.</a>
                </p>
            </div>
        </div>
        <div class="row service-wrapper-row">
            <div class="col-sm-4">
                <div class="service-image">
                    <img src="img/rights-4.png" alt="Service Name">
                </div>
            </div>
            <div class="col-sm-8">
                <h3>Part-time hours of work agreements</h3>
                <p>
                    Many awards, enterprise agreements and other registered agreements have record-keeping arrangements for part-time employees about their hours of work.
                    Find information about hours of work arrangements for part-time employees in your award by selecting from the list below.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- loading footer -->
<?php $this->load->view('footer'); ?>
