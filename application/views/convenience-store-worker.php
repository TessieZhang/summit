<?php
/**
 * Created by PhpStorm.
 * User: zhangzhaoying
 * Date: 21/09/2016
 * Time: 3:26 AM
 */
?>
<!-- loading header -->
<?php $this->load->view('header'); ?>
    <script type="text/javascript">
        $(document).ready(function () {
            $("#myBtn").click(function () {

                var occupation = document.getElementById("title").textContent;
                xmlhttpConnect();
                xmlhttp.open("GET", "<?php echo site_url('/search_controller/searchNumOfClaims'); ?>?occupation=" + occupation, true);
                xmlhttp.send();
                xmlhttp.onreadystatechange = function () {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                        var json = xmlhttp.responseText;
                        chartGraph(json);
                    }
                };
                $("#myModal").modal();
            });
        });
    </script>

    <div class="section section-breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 id="title">Convenience store worker</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="row">
                <!-- Image Column -->
                <div class="col-sm-6">
                    <div class="portfolio-item">
                        <div class="portfolio-image">
                            <a href="#"><img src="img/worker.png" alt="Project Name"></a>
                        </div>
                    </div>
                </div>
                <!-- End Image Column -->
                <!-- Project Info Column -->
                <div class="portfolio-item-description col-sm-6" style="text-align:justify;">
                    <h3>Convenience Store Worker Description</h3>
                    <p>
                        Convenience stores are unique commercial properties in that they are usually open 24-hours, are
                        largely a cash-based business, can be operated by one clerk, and are conveniently located for quick
                        in and out shopping. The nature of this business makes it very convenient for customers.
                        Unfortunately, this business style also makes it an attractive target for robbers and other
                        criminals. Since 1976, the convenience store industry has made major strides toward preventing and
                        deterring robberies.
                    </p>
                    <p>
                        The number of robberies at convenience stores has increased across the country. Nowadays, The
                        evolution of gas stations to 24 hour convenience stores has also spawned different security needs.
                        Because there is a greater crime risk from dusk until dawn, convenience store owners need to be
                        mindful as they develop a plan for security and staf ng levels throughout the day.
                    </p>
                    <ul class="no-list-style">

                        <!--li class="portfolio-visit-btn"><a href="http://localhost/project/prevent-injury.php" class="btn">Visit More Jobs</a></li-->
                        <button type="button" class="btn btn-default btn-lg" id="myBtn">Statistic</button>
                        <button type="button" class="btn btn-default btn-lg" id="myBtn1-convenience">Wage</button>
                        <button type="button" class="btn btn-default btn-lg" id="myBtn2">self-evaluation</button>
                    </ul>
                </div>

                <!-- End Project Info Column -->
            </div>
            <div class="section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 faq-wrapper">
                            <div class="panel-group" id="accordion2">
                                <h3>General Information</h3>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2"
                                           href="#collapse11">
                                            <b>Access control: </b>a way to limit the number of people who should not be on
                                            the property. The property and store are designed for convenience to customers,
                                            but do not make it too convenient for criminals.

                                        </a>
                                    </div>
                                    <div id="collapse11" class="accordion-body collapse in">
                                        <div class="accordion-inner">
                                            <div class="answer">Notice:</div>
                                            <ul>
                                                <li>
                                                    Limit the number of entrances and exits to the store and the parking
                                                    lot.
                                                </li>
                                                <li>
                                                    Close off some parking lot entrances and doors at night.
                                                </li>
                                                <li>
                                                    Consider installing gates, locks or turnstiles, if necessary.
                                                </li>
                                                <li>
                                                    Switch to the prepaid method at night if your store includes a petrol
                                                    station
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2"
                                           href="#collapse12">
                                            <b>Surveillance:</b> the use of physical features, such as electrical and
                                            mechanical devices, to maximize visibility.

                                        </a>
                                    </div>
                                    <div id="collapse12" class="accordion-body collapse">
                                        <div class="accordion-inner">
                                            <div class="answer">Notice:</div>
                                            <ul>
                                                <li>
                                                    Use effective lighting both on the lot and in the store.
                                                </li>
                                                <li>
                                                    Remove signs from windows to provide clear lines of visibility to the
                                                    cashier.
                                                </li>
                                                <li>
                                                    Move displays that block visibility to the cashier from the outside.
                                                </li>
                                                <li>
                                                    Be alert to your surroundings and report any problems.
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <h3>How To Deal With Hazards When Robbery?</h3>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2"
                                           href="#collapse21">
                                            Robbery deterrence measures
                                        </a>
                                    </div>
                                    <div id="collapse21" class="accordion-body collapse">
                                        <div class="accordion-inner">
                                            <div class="answer">Notice:</div>
                                            <p>First things first, under any circumstances, do not confront the robber. Even
                                                if you think you can overpower them, you could be putting yourself in
                                                danger.</p>
                                            <div class="answer">The Most Common Injuries:</div>
                                            <ul>
                                                <li><a href="<?php echo site_url('Welcome/newPage/cut'); ?>">Cuts and Scrapes</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2"
                                           href="#collapse22">
                                            Avoid violence during a robbery
                                        </a>
                                    </div>

                                    <div id="collapse22" class="accordion-body collapse">
                                        <div class="accordion-inner">
                                            <div class="answer">Notice:</div>
                                            <p>Don't panic to use panic buttons, if the Panic Button is pushed too soon, you
                                                could be triggering a hostage situation if the police show up during the
                                                robbery. Also, if the robber sees you going for the button, that could put
                                                yourself in danger.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2"
                                           href="#collapse23">
                                            What to do after a robbery
                                        </a>
                                    </div>

                                    <div id="collapse23" class="accordion-body collapse">
                                        <div class="accordion-inner">
                                            <div class="answer">Notice:</div>
                                            <p>If you have a panic button in the store, after the robbery is the time to
                                                press it to alert authorities. You’ll also want to look at the height strips
                                                as the robber leaves the store for the incident report. Take down notes
                                                about the incident and description of the criminal.</p>
                                            <div class="answer">The Most Common Injuries:</div>
                                            <ul>
                                                <li><a href="<?php echo site_url('Welcome/newPage/cut'); ?>">Cuts and Scrapes</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <h3>Other potentially dangerous situations</h3>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2"
                                           href="#collapse24">
                                            <b>Cash management system:</b> Minimize cash available at your store can reduce
                                            the risk of robbery. The program will address deterrents
                                        </a>
                                    </div>

                                    <div id="collapse24" class="accordion-body collapse">
                                        <div class="accordion-inner">
                                            <div class="answer">Notice:</div>
                                            <ul>
                                                <li>
                                                    Using a drop safe
                                                </li>
                                                <li>
                                                    Posting signs stating that the amount of cash on hand is limited
                                                </li>
                                                <li>
                                                    Keeping cash in registers low
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2"
                                           href="#collapse25">
                                            <b>Visibility:</b> Criminals seek out locations where they can't be easily
                                            noticed by bystanders outside the store, or by employees entering the store.
                                            People outside the store, including police, should be able to see into the
                                            store, and employees should be able to see their surroundings.

                                        </a>
                                    </div>

                                    <div id="collapse25" class="accordion-body collapse">
                                        <div class="accordion-inner">
                                            <div class="answer">Notice:</div>
                                            <ul>
                                                <li>
                                                    Keep windows clear of signs and merchandise
                                                </li>
                                                <li>
                                                    Keep shelving units low so there are no hiding places within the store
                                                </li>
                                                <li>
                                                    Keeping cash in registers low
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2"
                                           href="#collapse26">
                                            <b>Escape Routes</b>

                                        </a>
                                    </div>

                                    <div id="collapse26" class="accordion-body collapse">
                                        <div class="accordion-inner">
                                            <div class="answer">Notice:</div>
                                            <ul>
                                                <li>
                                                    Criminals want to blend into the surroundings after committing crimes. Make blending in more difficult by fencing the property and limiting the number of entrances and exits and making exit routes visible to others.

                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Related Projects -->
            <h3>Related Injury</h3>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="portfolio-item">
                        <div class="portfolio-image">
                            <a href="#"><img src="img/fall.png" alt="Project Name"></a>
                        </div>
                        <div class="portfolio-info-fade">
                            <ul>
                                <li class="portfolio-project-name">Fall Injury</li>
                                <li class="read-more"><a href="<?php echo site_url('Welcome/newPage/fall'); ?>" class="btn">Read more</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="portfolio-item">
                        <div class="portfolio-image">
                            <a href="#"><img src="img/cut.png" alt="Project Name"></a>
                        </div>
                        <div class="portfolio-info-fade">
                            <ul>
                                <li class="portfolio-project-name">Cuts and Scrapes</li>
                                <li class="read-more"><a href="<?php echo site_url('Welcome/newPage/cut'); ?>" class="btn">Read
                                        more</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Related Projects -->
        </div>
    </div>

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <button type=”button” class=”close” id="close" data-trigger="hover"><span>&times;</span></button>
        <div class="modal-content" style="height:450px; width:510px;" id="statistic">
        </div>
    </div>
</div>

<div class="modal fade" id="salaryModal" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <button type=”button” class=”close” id="close1" data-trigger="hover"><span>&times;</span></button>
        <div class="modal-content" style="height:450px; width:510px;" id="statistic1">
        </div>
    </div>
</div>


<div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 style="line-height: 150%; text-align:justify;"><span class="label label-warning" id="qid">1</span>
                    How can manage crowds to <b>prevent accidental injuries</b> in convenience store?</h3>
            </div>
            <div class="modal-body">
                <div id="Q1">
                    <div class="col-xs-3 col-xs-offset-5">
                        <div id="loadbar1" style="display: none;">
                            <div class="blockG" id="rotateG_01"></div>
                            <div class="blockG" id="rotateG_02"></div>
                            <div class="blockG" id="rotateG_03"></div>
                            <div class="blockG" id="rotateG_04"></div>
                            <div class="blockG" id="rotateG_05"></div>
                            <div class="blockG" id="rotateG_06"></div>
                            <div class="blockG" id="rotateG_07"></div>
                            <div class="blockG" id="rotateG_08"></div>
                        </div>
                    </div>
                    <div class="quiz" id="quiz1" data-toggle="buttons">
                        <p id="correctAnswer1" style="display: none;">3</p>
                        <label class="element-animation1 btn btn-lg btn-primary btn-block"><span class="btn-label"><i
                                    class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio"
                                                                                                 name="q_answer"
                                                                                                 value="1">1 Discuss entrance processes with employees </label>
                        <label class="element-animation2 btn btn-lg btn-primary btn-block"><span class="btn-label"><i
                                    class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio"
                                                                                                 name="q_answer"
                                                                                                 value="2">2 Keep sale items in one section to restrict the crowd to a single area</label>

                        <label class="element-animation3 btn btn-lg btn-primary btn-block"><span class="btn-label"><i
                                    class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio"
                                                                                                 name="q_answer"
                                                                                                 value="3">3
                            Hire trained staff, post signs, and prepare an emergency action plan
                        </label>
                        <label class="element-animation4 btn btn-lg btn-primary btn-block"><span class="btn-label"><i
                                    class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio"
                                                                                                 name="q_answer"
                                                                                                 value="4">4
                            I don't know</label>
                    </div>
                </div>
            </div>
            <div class="modal-footer text-muted ">
                <div class="row">
                    <div class="col-md-10">

    <span id="answer1I" style="float: left; text-align:justify;"><b>Incorrect!</b> Explanation: The risk of crowd related injuries are high during sales and discount seasons. Proper crowd management and pre-planning ensures reduced risk. It is best to plan in advance for special sale days or promotional events. Hire trained staff, install barricades, post visible signs, and prepare an emergency action plan. Announce the entrance process and other safety measures to the public, and spread sale items all over the store to avoid concentrating the crowd in one place.
		</span>
                        <span id="answer1C" style="float: left; text-align:justify;"><b>Correct!</b> Explanation: The risk of crowd related injuries are high during sales and discount seasons. Proper crowd management and pre-planning ensures reduced risk. It is best to plan in advance for special sale days or promotional events. Hire trained staff, install barricades, post visible signs, and prepare an emergency action plan. Announce the entrance process and other safety measures to the public, and spread sale items all over the store to avoid concentrating the crowd in one place.
		</span>

                    </div>
                    <div class="col-md-2">
                        <button type="button" class="btn btn-default btn-lg" id="myBtn3">Next</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 style="line-height: 150%; text-align:justify;"><span class="label label-warning" id="qid">2</span>
                    Which of the following is <b>NOT</b> a right held by convenience store worker?</h3>
            </div>
            <div class="modal-body">
                <div id="Q1">
                    <div class="col-xs-3 col-xs-offset-5">
                        <div id="loadbar2" style="display: none;">
                            <div class="blockG" id="rotateG_01"></div>
                            <div class="blockG" id="rotateG_02"></div>
                            <div class="blockG" id="rotateG_03"></div>
                            <div class="blockG" id="rotateG_04"></div>
                            <div class="blockG" id="rotateG_05"></div>
                            <div class="blockG" id="rotateG_06"></div>
                            <div class="blockG" id="rotateG_07"></div>
                            <div class="blockG" id="rotateG_08"></div>
                        </div>
                    </div>
                    <div class="quiz" id="quiz2" data-toggle="buttons">
                        <p id="correctAnswer2" style="display: none;">2</p>
                        <label class="element-animation1 btn btn-lg btn-primary btn-block"><span class="btn-label"><i
                                    class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio"
                                                                                                 name="q_answer"
                                                                                                 value="1">1 The right to receive proper training to identify job-related hazards
                        </label>
                        <label class="element-animation2 btn btn-lg btn-primary btn-block"><span class="btn-label"><i
                                    class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio"
                                                                                                 name="q_answer"
                                                                                                 value="2">2 The right to paid leave
                            yourself </label>

                        <label class="element-animation3 btn btn-lg btn-primary btn-block"><span class="btn-label"><i
                                    class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio"
                                                                                                 name="q_answer"
                                                                                                 value="3">3
                            The right to take part in matters related to health and safety either on an individual level or through a committee</label>
                        <label class="element-animation4 btn btn-lg btn-primary btn-block"><span class="btn-label"><i
                                    class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio"
                                                                                                 name="q_answer"
                                                                                                 value="4">4
                            I don't know</label>
                    </div>
                </div>
            </div>
            <div class="modal-footer text-muted ">
                <div class="row">
                    <div class="col-md-10">

    <span id="answer2I" style="float: left; text-align:justify;"><b>Incorrect!</b> Explanation: Along with the responsibility to follow safe work practices, workers are also entitled to several rights ensuring their safety. Retail workers have the right to receive training in safe work practices. They also have the right to supervision to minimize risk and the right to take part in matters related to health and safety.
	</span>
                        <span id="answer2C" style="float: left; text-align:justify;"><b>Correct!</b> Explanation: Along with the responsibility to follow safe work practices, workers are also entitled to several rights ensuring their safety. Retail workers have the right to receive training in safe work practices. They also have the right to supervision to minimize risk and the right to take part in matters related to health and safety.
	</span>

                    </div>
                    <div class="col-md-2">
                        <button type="button" class="btn btn-default btn-lg" id="myBtn4">Next</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="myModal3" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 style="line-height: 150%; text-align:justify;"><span class="label label-warning" id="qid">3</span>
                    Which one is a normal procedure to <b>reduce</b> the risk of injury from manual tasks?</h3>
            </div>
            <div class="modal-body">
                <div id="Q1">
                    <div class="col-xs-3 col-xs-offset-5">
                        <div id="loadbar3" style="display: none;">
                            <div class="blockG" id="rotateG_01"></div>
                            <div class="blockG" id="rotateG_02"></div>
                            <div class="blockG" id="rotateG_03"></div>
                            <div class="blockG" id="rotateG_04"></div>
                            <div class="blockG" id="rotateG_05"></div>
                            <div class="blockG" id="rotateG_06"></div>
                            <div class="blockG" id="rotateG_07"></div>
                            <div class="blockG" id="rotateG_08"></div>
                        </div>
                    </div>
                    <div class="quiz" id="quiz3" data-toggle="buttons">
                        <p id="correctAnswer3" style="display: none;">3</p>
                        <label class="element-animation1 btn btn-lg btn-primary btn-block"><span class="btn-label"><i
                                    class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio"
                                                                                                 name="q_answer"
                                                                                                 value="1">1 1. Hazard identification, 2. Risk assessment, 3.risk control and 4. follow up and review         </label>
                        <label class="element-animation2 btn btn-lg btn-primary btn-block"><span class="btn-label"><i
                                    class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio"
                                                                                                 name="q_answer"
                                                                                                 value="2">2 1. Hazard identification, 2. risk control, 3. risk assessment, and 4. follows up and review
                        </label>
                        <label class="element-animation3 btn btn-lg btn-primary btn-block"><span class="btn-label"><i
                                    class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio"
                                                                                                 name="q_answer"
                                                                                                 value="3">3 1. Hazard identification, 2. follow up and review, 3. risk assessment, and 4. risk control
                        </label>

                        <label class="element-animation4 btn btn-lg btn-primary btn-block"><span class="btn-label"><i
                                    class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio"
                                                                                                 name="q_answer"
                                                                                                 value="4">4
                            I don't know</label>
                    </div>
                </div>
            </div>
            <div class="modal-footer text-muted ">
                <div class="row">
                    <div class="col-md-10">

    <span id="answer3I" style="float: left; text-align:justify;"><b>Incorrect!</b> Explanation: There are three steps process to reduce the risk of injury from manual tasks follow up the review at the end. As an employee, you need to identify hazardous manual task at first. Secondly, assess the risks arising from the identified hazardous manual tasks, and lastly you should able to decide on the use of appropriate control measures.
</span>
                        <span id="answer3C" style="float: left; text-align:justify;"><b>Correct!</b> Explanation: There are three steps process to reduce the risk of injury from manual tasks follow up the review at the end. As an employee, you need to identify hazardous manual task at first. Secondly, assess the risks arising from the identified hazardous manual tasks, and lastly you should able to decide on the use of appropriate control measures.
</span>

                    </div>
                    <div class="col-md-2">
                        <button type="button" class="btn btn-default btn-lg" id="myBtn5">Next</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="myModal4" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 style="line-height: 150%; text-align:justify;"><span class="label label-warning" id="qid">4</span>
                    Can you refuse to work if you find conditions dangerous and unsafe in the retail establishment where you work?</h3>
            </div>
            <div class="modal-body">
                <div id="Q1">
                    <div class="col-xs-3 col-xs-offset-5">
                        <div id="loadbar4" style="display: none;">
                            <div class="blockG" id="rotateG_01"></div>
                            <div class="blockG" id="rotateG_02"></div>
                            <div class="blockG" id="rotateG_03"></div>
                            <div class="blockG" id="rotateG_04"></div>
                            <div class="blockG" id="rotateG_05"></div>
                            <div class="blockG" id="rotateG_06"></div>
                            <div class="blockG" id="rotateG_07"></div>
                            <div class="blockG" id="rotateG_08"></div>
                        </div>
                    </div>
                    <div class="quiz" id="quiz4" data-toggle="buttons">
                        <p id="correctAnswer4" style="display: none;">1</p>
                        <label class="element-animation1 btn btn-lg btn-primary btn-block"><span class="btn-label"><i
                                    class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio"
                                                                                                 name="q_answer"
                                                                                                 value="1">1 True
                        </label>
                        <label class="element-animation2 btn btn-lg btn-primary btn-block"><span class="btn-label"><i
                                    class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio"
                                                                                                 name="q_answer"
                                                                                                 value="2">2 False
                        </label>

                        <label class="element-animation3 btn btn-lg btn-primary btn-block"><span class="btn-label"><i
                                    class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio"
                                                                                                 name="q_answer"
                                                                                                 value="3">3
                            I don't know</label>
                    </div>
                </div>
            </div>
            <div class="modal-footer text-muted ">
                <div class="row">
                    <div class="col-md-10">

    <span id="answer4I" style="float: left; text-align:justify;"><b>Incorrect!</b> Explanation: A worker has a legal right to refuse to work if he/she believes that the working conditions are unsafe. It is essential to bring the hazardous situation to the employer’s notice immediately.	</span>
                        <span id="answer4C" style="float: left; text-align:justify;"><b>Correct!</b> Explanation: A worker has a legal right to refuse to work if he/she believes that the working conditions are unsafe. It is essential to bring the hazardous situation to the employer’s notice immediately.	</span>

                    </div>
                    <div class="col-md-2">
                        <button type="button" class="btn btn-default btn-lg" id="myBtn6">Next</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="myModal5" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 style="line-height: 150%; text-align:justify;"><span class="label label-warning" id="qid">5</span>
                    Is it <b>necessary</b> that an employer should be provides the Robbery Prevention Program to their employee before they start to work?</h3>
            </div>
            <div class="modal-body">
                <div id="Q1">
                    <div class="col-xs-3 col-xs-offset-5">
                        <div id="loadbar5" style="display: none;">
                            <div class="blockG" id="rotateG_01"></div>
                            <div class="blockG" id="rotateG_02"></div>
                            <div class="blockG" id="rotateG_03"></div>
                            <div class="blockG" id="rotateG_04"></div>
                            <div class="blockG" id="rotateG_05"></div>
                            <div class="blockG" id="rotateG_06"></div>
                            <div class="blockG" id="rotateG_07"></div>
                            <div class="blockG" id="rotateG_08"></div>
                        </div>
                    </div>
                    <div class="quiz" id="quiz5" data-toggle="buttons">
                        <p id="correctAnswer5" style="display: none;">2</p>
                        <label class="element-animation1 btn btn-lg btn-primary btn-block"><span class="btn-label"><i
                                    class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio"
                                                                                                 name="q_answer"
                                                                                                 value="1">1 True
                        </label>
                        <label class="element-animation2 btn btn-lg btn-primary btn-block"><span class="btn-label"><i
                                    class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio"
                                                                                                 name="q_answer"
                                                                                                 value="2">2 False
                        </label>

                        <label class="element-animation3 btn btn-lg btn-primary btn-block"><span class="btn-label"><i
                                    class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio"
                                                                                                 name="q_answer"
                                                                                                 value="3">3
                            I don't know</label>
                    </div>
                </div>
            </div>
            <div class="modal-footer text-muted ">
                <div class="row">
                    <div class="col-md-10">

                        <span id="answer5I" style="float: left; text-align:justify;"><b>Incorrect!</b> Explanation: It is necessary that all employer should be provide the prevention program to their employee because workplace violence has emerged as an important occupational safety and health issue in many industries, particular including the retail trade. Robbery prevention program will help you to dealing with those hazards if that happen.</span>
                        <span id="answer5C" style="float: left; text-align:justify;"><b>Correct!</b> Explanation: It is necessary that all employer should be provide the prevention program to their employee because workplace violence has emerged as an important occupational safety and health issue in many industries, particular including the retail trade. Robbery prevention program will help you to dealing with those hazards if that happen.</span>

                    </div>
                    <div class="col-md-2">
                        <button type="button" class="btn btn-default btn-lg" id="finish">Finish</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- loading footer -->
<?php $this->load->view('footer'); ?>