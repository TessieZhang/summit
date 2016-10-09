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
                            <img src="img/worker.png" alt="Project Name">
                        </div>
                    </div>
                </div>
                <!-- End Image Column -->
                <!-- Project Info Column -->
                <div class="portfolio-item-description col-sm-6" style="text-align:justify;">
                    <h3>Convenience Store Worker</h3>
                    <p style="text-align: justify">
                        Convenience stores are unique commercial properties in that they are usually open 24-hours, are
                        largely a cash-based business, can be operated by one clerk, and are conveniently located for quick
                        in and out shopping. The nature of this business makes it very convenient for customers.
                        Unfortunately, this business style also makes it an attractive target for robbers and other
                        criminals. Since 1976, the convenience store industry has made major strides toward preventing and
                        deterring robberies.
                    </p>
                    <p style="text-align: justify">
                        The number of robberies at convenience stores has increased across the country. Nowadays, The
                        evolution of gas stations to 24 hour convenience stores has also spawned different security needs.
                        Because there is a greater crime risk from dusk until dawn, convenience store owners need to be
                        mindful as they develop a plan for security and staf ng levels throughout the day.
                    </p>
                    <ul class="no-list-style">

                        <!--li class="portfolio-visit-btn"><a href="http://localhost/project/prevent-injury.php" class="btn">Visit More Jobs</a></li-->
                        <button type="button" class="btn btn-default btn-lg" id="myBtn">Statistics</button>
                        <button type="button" class="btn btn-default btn-lg" id="myBtn1-convenience">Wages</button>
                        <button type="button" class="btn btn-default btn-lg" id="myBtn2">Self-evaluation</button>
                    </ul>
                </div>

                <!-- End Project Info Column -->
            </div>
            <div class="section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 faq-wrapper">
                            <div class="panel-group" id="accordion2">
                                <h3>Common Situation</h3>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2"
                                           href="#collapse11">
                                            Overexertion and musculoskeletal injuries
                                        </a>
                                    </div>
                                    <div id="collapse11" class="accordion-body collapse in">
                                        <div class="accordion-inner">
                                            <div class="answer">Notice:</div>
                                            <ul>
                                                <li>
                                                    Sometimes the signs and symptoms come on suddenly as in the case of a pulled muscle or sudden back pain. Sometimes they are cumulative and develop gradually over time. MSIs are so common that almost every job has some risk, and most people ignore the symptoms, hoping they’ll just go away, until they turn into serious, even permanent, problems.
                                                </li>
                                                <li>
                                                    Workers need to be shown proper techniques for lifting and carrying. Do short on-the-job training sessions to demonstrate how to lift and carry items that are relevant to your store. Get staff to participate! The following tips can be used in your training sessions, including lifting, carrying, unloading, and coordinated lifting, etc.
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2"
                                           href="#collapse12">
                                            Fractures and bruises

                                        </a>
                                    </div>
                                    <div id="collapse12" class="accordion-body collapse">
                                        <div class="accordion-inner">
                                            <div class="answer">Notice:</div>
                                            <ul>
                                                <li>
                                                    Fractures and bruises are very common injuries in the retail sector and most often happen as a result of tripping, slipping and falling on the floor. Getting hit by falling or moving objects is also a significant cause of broken bones and bruises.
                                                </li>
                                                <li>
                                                    Often taking some “common-sense” steps to avoid situations where people are likely to trip, slip and fall, making sure that the work area is kept tidy, and that stored items and displays are secure, can prevent these injuries.
                                                </li>
                                                <li>
                                                    A short information session with staff is a useful way to create awareness. Consider, for example, taking staff for a quick tour of the store and asking them to point out anything that might be a tripping or slipping hazard. The following tips can be used to help tailor your training.
                                                </li>
                                            </ul>
                                            <div class="answer">The Most Common Injuries:</div>
                                            <ul>
                                                <li><a href="<?php echo site_url('Welcome/newPage/fall'); ?>">Fall</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2"
                                           href="#collapse22">
                                            Repetitive strain injuries
                                        </a>
                                    </div>
                                    <div id="collapse22" class="accordion-body collapse">
                                        <div class="accordion-inner">
                                            <div class="answer">Notice:</div>
                                            <ul>
                                                <li>
                                                    Break up repetitive work by varying the tasks.
                                                </li>
                                                <li>
                                                    Slow down the pace of work so that the body can recover between movements.
                                                </li>
                                                <li>
                                                    Introduce repetitive tasks gradually so that workers have a chance to develop enough muscle strength to protect themselves.
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2"
                                           href="#collapse23">
                                            Cuts
                                        </a>
                                    </div>
                                    <div id="collapse23" class="accordion-body collapse">
                                        <div class="accordion-inner">
                                            <div class="answer">Notice:</div>
                                            <ul>
                                                <li>Every year, many workers in the retail industry experience cuts and lacerations ranging from minor scrapes to serious wounds requiring emergency medical attention and time off work. Very often, these injuries happen while workers are using cutting tools like box cutters and knives. Spend 10 or 15 minutes with staff to demonstrate proper techniques for opening boxes, crates, or any other tasks requiring the use of cutting tools.
                                                </li>
                                            </ul>
                                                <div class="answer">The Most Common Injuries:</div>
                                            <ul>
                                                <li><a href="<?php echo site_url('Welcome/newPage/cut'); ?>">Cuts and Scrapes</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <h3>High-risk Situation</h3>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2"
                                           href="#collapse21">
                                            Cash Handling
                                        </a>
                                    </div>
                                    <div id="collapse21" class="accordion-body collapse">
                                        <div class="accordion-inner">
                                            <div class="answer">Notice:</div>
                                            <ul>
                                                <li>
                                                    Keep the cash register fund to a minimum.
                                                </li>
                                                <li>
                                                    Use a drop safe with a time lock on it. Don’t hide money in a drawer or under the counter.
                                                </li>
                                                <li>
                                                    Encourage credit or debit card payments.
                                                </li>
                                                <li>
                                                    Vary the time of day that the cash register is emptied.
                                                </li>
                                                <li>
                                                    Only operate one register late at night through early morning. Open the unused register drawer and tip it for display.
                                                </li>
                                                <li>
                                                    Store extra lottery tickets and tobacco products in the time lock safe when they are not needed.
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2"
                                           href="#collapse32">
                                            Visibility and Store Layout
                                        </a>
                                    </div>

                                    <div id="collapse32" class="accordion-body collapse">
                                        <div class="accordion-inner">
                                            <div class="answer">Notice:</div>
                                            <ul>
                                                <li>
                                                    Put the cash register where it can be seen by people inside and outside the store.
                                                </li>
                                                <li>
                                                    Don’t put the cash register near the exit or entrance.
                                                </li>
                                                <li>
                                                    Keep shelves low for good visibility inside the store.
                                                </li>
                                                <li>
                                                    Keep the shelves tidy.
                                                </li>
                                                <li>
                                                    Install mirrors so that all areas of the store can be seen from the sales counter.
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2"
                                           href="#collapse33">
                                            Limit Access Routes and Hiding Places
                                        </a>
                                    </div>

                                    <div id="collapse33" class="accordion-body collapse">
                                        <div class="accordion-inner">
                                            <div class="answer">Notice:</div>
                                            <ul>
                                                <li>
                                                    Keep back and side doors locked to minimize escape routes and keep people from entering the store unnoticed.
                                                </li>
                                                <li>
                                                    At night, remove large signs and displays that could provide hiding places.
                                                </li>
                                                <li>
                                                    Do not use the back entrances to let people in.
                                                </li>
                                                <li>
                                                    Do not leave by exiting into poorly lit, unobserved areas.
                                                </li>
                                            </ul>
                                            </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2"
                                           href="#collapse24">
                                            Surveillance
                                        </a>
                                    </div>

                                    <div id="collapse24" class="accordion-body collapse">
                                        <div class="accordion-inner">
                                            <div class="answer">Notice:</div>
                                            <ul>
                                                <li>
                                                    Use surveillance monitoring equipment.
                                                </li>
                                                <li>
                                                    Put up a sign advertising the fact that the premises are monitored by video surveillance.
                                                </li>
                                                <li>
                                                    Use CCTV monitors and cameras. These should be visible to customers.
                                                </li>
                                                <li>
                                                    Install a “panic button” at the sales counter.
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2"
                                           href="#collapse25">
                                            If There is a Robbery
                                        </a>
                                    </div>

                                    <div id="collapse25" class="accordion-body collapse">
                                        <div class="accordion-inner">
                                            <div class="answer">Notice:</div>
                                            <ul>
                                                <li>
                                                    Obey the robber’s orders - Let the robber know you intend to cooperate. Hand over cash and merchandise and do exactly as the robber says. If you are not sure what the robber is telling you, ask. Don't argue
                                                </li>
                                                <li>
                                                    Tell the robber about any possible surprises — Tell the robber before reaching for anything or moving in any way. Tell the robber if another person is in the back room so the robber will not be startled.
                                                </li>
                                                <li>
                                                    Stay calm - Handle the entire situation as if you were making a sale to a customer. Try to pay attention to what the robber is wearing, and what he or she looks like. Try to note the robber’s height on the height marker as soon as he or she leaves.
                                                </li>
                                                <li>
                                                    Don’t try to stop the robber — Trying to fight with a robber is foolish. Even if you don’t see a weapon, always assume the robber has one.
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div><div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2"
                                           href="#collapse26">
                                            After the robber leaves
                                        </a>
                                    </div>

                                    <div id="collapse26" class="accordion-body collapse">
                                        <div class="accordion-inner">
                                            <div class="answer">Notice:</div>
                                            <ul>
                                                <li>
                                                    Don’t chase or follow the robber — This will only invite violence, and it may confuse the police as to who is involved with the robbery.
                                                </li>
                                                <li>
                                                    Write down information immediately — As soon as the robber has left, make notes about their appearance, mannerisms, and specific features, as well as the time and the direction they took when they left. If possible, get a description of their vehicle and write down the license plate number, but never leave the safety of the premises or follow a vehicle to do so!
                                                </li>
                                                <li>
                                                    Call the police — Dial 0-0-0 as soon as it is safe to do so. Don’t hang up until they tell you to.
                                                </li>
                                                <li>
                                                    Lock the doors and protect the crime scene. Discontinue business until the police are finished. Don’t touch any evidence.
                                                </li>
                                                <li>
                                                    Call your employer as soon as possible and write a report describing the robbery and include all the information you can.
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
            <h3>Treatment of Related Injury</h3>
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
        <div class="modal-dialog" style="width: 550px">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <div style="height:400px; width:500px;" id="statistic">
                    </div>
                </div>
                <div class="modal-footer text-muted ">
                    <div class="row">
                        <a href="<?php echo site_url('Welcome/newPage/statistics'); ?>" class="btn btn-default" >
                            More Statistic Details
                        </a>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="modal fade" id="salaryModal" role="dialog">
        <div class="modal-dialog" style="width: 550px">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <div style="height:400px; width:500px;" id="statistic1">
                    </div>
                </div>
                <div class="modal-footer text-muted ">
                    <div class="row">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
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
                <div class="row" style="padding: 10px 15px;">

    <span id="answer1I" style="float: left; text-align:justify;"><b>Incorrect!</b> The correct answer is <b>3</b>. <br/> The risk of crowd related injuries are high during sales and discount seasons. Proper crowd management and pre-planning ensures reduced risk. It is best to plan in advance for special sale days or promotional events. Hire trained staff, install barricades, post visible signs, and prepare an emergency action plan. Announce the entrance process and other safety measures to the public, and spread sale items all over the store to avoid concentrating the crowd in one place.
		</span>
                        <span id="answer1C" style="float: left; text-align:justify;"><b>Correct!</b> <br/>The risk of crowd related injuries are high during sales and discount seasons. Proper crowd management and pre-planning ensures reduced risk. It is best to plan in advance for special sale days or promotional events. Hire trained staff, install barricades, post visible signs, and prepare an emergency action plan. Announce the entrance process and other safety measures to the public, and spread sale items all over the store to avoid concentrating the crowd in one place.
		</span>
                    <span id="answer1K" style="float: left; text-align:justify;">The correct answer is <b>3</b>. <br/> The risk of crowd related injuries are high during sales and discount seasons. Proper crowd management and pre-planning ensures reduced risk. It is best to plan in advance for special sale days or promotional events. Hire trained staff, install barricades, post visible signs, and prepare an emergency action plan. Announce the entrance process and other safety measures to the public, and spread sale items all over the store to avoid concentrating the crowd in one place.
		</span>

                </div>
                <div class="row">
                    <button type="button" class="btn btn-default btn-next">Next</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
                <div class="row" style="padding: 10px 15px;">

    <span id="answer2I" style="float: left; text-align:justify;"><b>Incorrect!</b> The correct answer is <b>2</b>. <br/> Along with the responsibility to follow safe work practices, workers are also entitled to several rights ensuring their safety. Retail workers have the right to receive training in safe work practices. They also have the right to supervision to minimize risk and the right to take part in matters related to health and safety.
	</span>
                        <span id="answer2C" style="float: left; text-align:justify;"><b>Correct!</b> <br/> Along with the responsibility to follow safe work practices, workers are also entitled to several rights ensuring their safety. Retail workers have the right to receive training in safe work practices. They also have the right to supervision to minimize risk and the right to take part in matters related to health and safety.
	</span>
                    <span id="answer2K" style="float: left; text-align:justify;">The correct answer is <b>3</b>. <br/> Along with the responsibility to follow safe work practices, workers are also entitled to several rights ensuring their safety. Retail workers have the right to receive training in safe work practices. They also have the right to supervision to minimize risk and the right to take part in matters related to health and safety.
	</span>

                </div>
                <div class="row">
                    <button type="button" class="btn btn-default btn-prev">Back</button>
                    <button type="button" class="btn btn-default btn-next">Next</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
                    What thing you should <b>NOT</b> do if you are facing robbery in your store?</h3>
            </div>
            <div class="modal-body">
                <div id="Q1">

                    <div class="quiz" id="quiz3" data-toggle="buttons">
                        <p id="correctAnswer3" style="display: none;">2</p>
                        <label class="element-animation1 btn btn-lg btn-primary btn-block"><span class="btn-label"><i
                                    class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio"
                                                                                                 name="q_answer"
                                                                                                 value="1">1 Obey the robber’s order    </label>
                        <label class="element-animation2 btn btn-lg btn-primary btn-block"><span class="btn-label"><i
                                    class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio"
                                                                                                 name="q_answer"
                                                                                                 value="2">2 Try to Stop the robber

                        </label>
                        <label class="element-animation3 btn btn-lg btn-primary btn-block"><span class="btn-label"><i
                                    class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio"
                                                                                                 name="q_answer"
                                                                                                 value="3">3 Tell the robber about any possible surprises
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
                <div class="row" style="padding: 10px 15px;">

    <span id="answer3I" style="float: left; text-align:justify;"><b>Incorrect!</b> The correct answer is <b>2</b>. <br/>Don't try to stop the robber, handle the entire situation as if you were making a sale to a customer. Try to pay attention to what the robber is wearing, and what he or she looks like. Try to note the robber’s height on the height marker as soon as he or she leaves</span>
                        <span id="answer3C" style="float: left; text-align:justify;"><b>Correct!</b> <br/>Don't try to stop the robber, handle the entire situation as if you were making a sale to a customer. Try to pay attention to what the robber is wearing, and what he or she looks like. Try to note the robber’s height on the height marker as soon as he or she leaves</span>

                    <span id="answer3K" style="float: left; text-align:justify;">The correct answer is <b>2</b>. <br/>Don't try to stop the robber, handle the entire situation as if you were making a sale to a customer. Try to pay attention to what the robber is wearing, and what he or she looks like. Try to note the robber’s height on the height marker as soon as he or she leaves</span>
                </div>
                <div class="row">
                    <button type="button" class="btn btn-default btn-prev">Back</button>
                    <button type="button" class="btn btn-default btn-next">Next</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
                                                                                                 value="4">3
                            I don't know</label>
                    </div>
                </div>
            </div>
            <div class="modal-footer text-muted ">
                <div class="row" style="padding: 10px 15px;">

    <span id="answer4I" style="float: left; text-align:justify;"><b>Incorrect!</b> The correct answer is <b>1</b>. <br/> A worker has a legal right to refuse to work if he/she believes that the working conditions are unsafe. It is essential to bring the hazardous situation to the employer’s notice immediately.	</span>
                        <span id="answer4C" style="float: left; text-align:justify;"><b>Correct!</b>  A worker has a legal right to refuse to work if he/she believes that the working conditions are unsafe. It is essential to bring the hazardous situation to the employer’s notice immediately.	</span>
                    <span id="answer4K" style="float: left; text-align:justify;">The correct answer is <b>1</b>. <br/> A worker has a legal right to refuse to work if he/she believes that the working conditions are unsafe. It is essential to bring the hazardous situation to the employer’s notice immediately.	</span>

                </div>
                <div class="row">
                    <button type="button" class="btn btn-default btn-prev">Back</button>
                    <button type="button" class="btn btn-default btn-next">Next</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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

                    <div class="quiz" id="quiz5" data-toggle="buttons">
                        <p id="correctAnswer5" style="display: none;">1</p>
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
                                                                                                 value="4">3
                            I don't know</label>
                    </div>
                </div>
            </div>
            <div class="modal-footer text-muted ">
                <div class="row" style="padding: 10px 15px;">

                        <span id="answer5I" style="float: left; text-align:justify;"><b>Incorrect!</b> The correct answer is <b>1</b>. <br/>It is necessary that all employer should be provide the prevention program to their employee because workplace violence has emerged as an important occupational safety and health issue in many industries, particular including the retail trade. Robbery prevention program will help you to dealing with those hazards if that happen.</span>
                        <span id="answer5C" style="float: left; text-align:justify;"><b>Correct!</b> <br/>It is necessary that all employer should be provide the prevention program to their employee because workplace violence has emerged as an important occupational safety and health issue in many industries, particular including the retail trade. Robbery prevention program will help you to dealing with those hazards if that happen.</span>
                        <span id="answer5K" style="float: left; text-align:justify;">The correct answer is <b>1</b>. <br/>It is necessary that all employer should be provide the prevention program to their employee because workplace violence has emerged as an important occupational safety and health issue in many industries, particular including the retail trade. Robbery prevention program will help you to dealing with those hazards if that happen.</span>

                </div>
                <div class="row">
                    <button type="button" class="btn btn-default btn-prev">Back</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- loading footer -->
<?php $this->load->view('footer'); ?>