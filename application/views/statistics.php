<?php
/**
 * Created by PhpStorm.
 * User: zhangzhaoying
 * Date: 21/09/2016
 * Time: 10:51 AM
 */
?>

<!-- loading header -->
<?php $this->load->view('header'); ?>

<script type="text/javascript">


    window.onload = function () {
        $('li#statistics').addClass('active');
        searchData();
        $("#search").click(function () {
            searchData();
        });
    }

    function searchData() {
        var occupation = document.getElementById("occupation").value;
        xmlhttpConnect();
        xmlhttp.open("GET", "<?php echo site_url('/search_controller/searchData'); ?>?occupation=" + occupation, true);
        xmlhttp.send();
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                var json = xmlhttp.responseText;
                chartGraph(json);
            }
        };


    }


</script>

<div class="section section-breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1>Statistics</h1>
            </div>
        </div>
    </div>
</div>

<div class="section" style="height:550px;">
    <div class="container">
        <div class="row">
            <div style=" padding-top:20px; padding-left:350px;">
                <select class="selectpicker" data-live-search="true" style="margin-top:10px;" id="occupation">
                    <option data-tokens="Kitchen hand">Kitchen hand</option>
                    <option data-tokens="Waiter">Waiter</option>
                    <option data-tokens="Delivery driver">Delivery driver</option>
                    <option data-tokens="Convenience store worker">Convenience store worker</option>
                    <option data-tokens="Warehouse worker">Warehouse worker</option>
                    <option data-tokens="Cleaner">Cleaner</option>
                </select>
                <button class="btn btn-primary" style="margin-left:30px;" id="search">search
                </button>
            </div>
            <br/>
            <br/>
            <div class="col-md-4 col-sm-6">
                <div id="tabs-1">
                    <div id="statistic"></div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div id="tabs-2">
                    <div id="statistic1"></div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div id="tabs-2">
                    <div id="statistic2"></div>
                </div>
            </div>

        </div>
    </div>
</div>
<!------- -->
<div class="section">
    <div class="container">
        <div class="col-sm-12">
            <p>A serious claim is an accepted workers’ compensation claim that involves one or more weeks away from work
                and excludes all fatalities, and all injuries and diseases experienced while travelling to or from work
                or while on a break away from the workplace.
            </p>
        </div>
    </div>
</div>

<!-- loading footer -->
<?php $this->load->view('footer'); ?>
