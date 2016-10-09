<?php
/**
 * Created by PhpStorm.
 * User: zhangzhaoying
 * Date: 21/09/2016
 * Time: 3:33 AM
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
        <!-- Page Title -->
		<div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h1 id="title">Warehouse worker</h1>
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
								<img src="img/warehouse-worker.png" alt="Project Name">
							</div>
						</div>
					</div>
					<!-- End Image Column -->
					<!-- Project Info Column -->
					<div class="portfolio-item-description col-sm-6" style="text-align:justify;">
						<h3>Warehouse Worker</h3>
						<p style="text-align: justify">
							Almost 70% of these injuries are caused by hazardous manual handling and slips, trips and falls. Avoiding proper training is the number one cause of workplace injury. The hazards faced by construction workers are many and varied. To compare the safe situation with other six
							part-time jobs, click the button 'statistic' to see details.
						</p>
						<ul class="no-list-style">

					<!--li class="portfolio-visit-btn"><a href="http://localhost/project/prevent-injury.php" class="btn">Visit More Jobs</a></li-->
					<button type="button" class="btn btn-default btn-lg" id="myBtn">Statistics</button>
					<button type="button" class="btn btn-default btn-lg" id="myBtn1-warehouse">Wages</button>
					<button type="button" class="btn btn-default btn-lg" id="myBtn2">Self-evaluation</button>
				</ul>
					</div>
					<!-- End Project Info Column -->
				</div>
				<div class="section"   >
			<div class="container">
				<div class="row">
					<div class="col-md-12 faq-wrapper">
						<div class="panel-group" id="accordion2">
							<h3>Common Situation</h3>
							<div class="panel panel-default">
								<div class="panel-heading">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse11">
										How to Manual order picking:
									</a>
								</div>
								<div id="collapse11" class="accordion-body collapse in">
									<div class="accordion-inner">
										<ul>
										<li>
										All tasks should be conducted in the 'best working zone' (i.e. between shoulder and mid thigh height). Achieve this by raising, lowering or moving either the worker or the work.
										</li>
										<li>
										Eliminate manual lifting of hardwood pallets.
										</li>
										<li>
										Use mechanical means to lift heavy weights and power-assisted mechanical devices such as four-wheel trolleys and lifters when required.
										</li>
										<li>
										Select appropriate wrapping and stillage to prevent objects falling from containment.
										</li>
										<li>
										Stack heaviest items at the base of the load.
										</li>
										<li>
										Plate freezers or trolley systems should be used wherever possible.
										</li>
										<li>
										If this isn't practicable, freezer frame load/unloading should always do between shoulders and knees, using aids such as height adjustable racking and trolleys, pallet lift tables and vacuum lifters.
										</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse12">
										Prevent Slips, trips and falls:

									</a>
								</div>
								<div id="collapse12" class="accordion-body collapse">
									<div class="accordion-inner">
										<ul>
										<li>
										Ensure that all floors are level throughout work areas and walkways are clearly defined.
										</li>
										<li>
										Ensure good housekeeping (e.g. maintaining clean work areas, removing unnecessary items, ensuring things are put away) is an integral part of your work procedures.
										</li>
										<li>
										Don't stand on pallets.
										</li>
										<li>
										Barriers should be used at loading bays that are not in use.
										</li>
										<li>
										Ensure work procedures stipulate that climbing can’t access shelves and that drivers can't drive away during loading/unloading process.
										</li>
										<li>
										Ensure fences and barriers at finger docks remain in place until truck acts as a barrier to prevent falls.
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
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse13">
										Prevent handling large and awkward items:

									</a>
								</div>
								<div id="collapse13" class="accordion-body collapse">
									<div class="accordion-inner">
										<div class="answer">Redesign or repackage</div>
										<ul>
										<li>
										Ask yourself whether you can handle these item at all.
										</li>
										<li>
										Reduce the package size or restructure the item.
										</li>
										<li>
										Handling of large, bulky, awkward items could be eliminated altogether if you investigate ways to repackage the items to be handled to reduce their weight, or make design changes in your workplace which mean items can be handled by powered mechanical aids.
										</li>
										</ul>
									</div>
									<div class="accordion-inner">
										<div class="answer">Use mechanical aids</div>
										<ul>
										<li>
										The first preference is to eliminate the need for manual handling by using powered mechanical aids such as forklifts or powered pallet movers.
										</li>
										<li>
										Where it is not possible to use powered mechanical aids, consider using other mechanical aids such as trolleys or hand pallet jacks to reduce exposure to manual handling risk. 							
										</li>
										<li>
										Issues such as package design, weight and size, frequency of handling, ease of access to the item to be moved, obstacles along the path of movement, work at height, storage/picking location, item stability, and the distance the item is to be moved will determine the most appropriate aids.
										</li>
										</ul>
									</div>
									<div class="accordion-inner">
										<div class="answer">A guide to Use a team life or other administrative control</div>
										<ul>
										<li>
										Team lifting and other administrative controls are the least preferred option when handling large, bulky or awkward items. 
										</li>
										<li>
										Team lifting and other administrative controls should only be used in circumstances where options for redesign or using mechanical aids have been investigated and are not practicable, although there may be situations where team lifting and/or other administrative controls may be used to supplement other control measures. 
										</li>
										</ul>
									</div>
								</div>
								
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2"
									   href="#collapse29">
										Injuries caused by repetitive work
									</a>
								</div>

								<div id="collapse29" class="accordion-body collapse">
									<div class="accordion-inner">
										</ul>
										<div class="answer">To improve this situation, please:</div>
										<ul>
											<li>
												Provide appropriate mechanical aids and equipment (e.g. food processors, electric can openers) and ensure they are used properly and maintained in accordance with manufacturer specifications.
											</li>
											<li>
												Reduce repetitive movements (e.g. purchase prepared food such as peeled potatoes and sliced cheese).
											</li>
											<li>
												Design food preparation and customer service areas to limit twisting, bending and over-reaching (e.g. position frequently used equipment, food and supplies between shoulder and mid-thigh height, use sliding trays to improve access in display cases).
											</li>
											<li>
												Ensure employees are not exposed to repetitive work (e.g. operating espresso machines) or static positions (e.g. standing at service counter for) long periods (e.g. by using job rotation, work variation, providing sit-stand stools and anti-fatigue mats), or work that requires a significant amount of high force.
											</li>
											<li>
												Train young workers in the selection and use of any mechanical equipment and aids and safe handling methods (e.g. work is done between shoulder and mid-thigh height and with the elbows close to the body, work upright where possible).
											</li>
										</ul>
									</div>
								</div>
							</div>


							<h3>Law and Regulation</h3>
							<div class="panel panel-default">
								<div class="panel-heading">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse21">
										Unpacking shipping containers
									</a>
								</div>
								<div id="collapse21" class="accordion-body collapse">
									<div class="accordion-inner">
										<div class="answer">Hazardous placement of container at site.</div>
										<ul>
											<li>
												Place the container inside the premises. If this is not practicable, place the container away from vehicle traffic, with pedestrian exclusion zones and cones to control traffic.
											</li>
											<li>
												Containers should always be placed in designated safe locations away from overhead powerlines.
											</li>
										</ul>
									</div>
									<div class="accordion-inner">

										</ul>
										<div class="answer">Falls from height</div>
										<ul>
											<li>
												Unpack the container from ground level.
											</li>
											<li>
												Use a finger dock or specifically designed mobile platform truck loading platform) to unpack.
											</li>
										</ul>
									</div>
									<div class="accordion-inner">
										<div class="answer">Falling goods </div>
										<ul>
											<li>
												Secure container doors with a short rope (enough to see if the goods have shifted when the doors are partially opened).
											</li>
											<li>
												Manual handling.
											</li>
											<li>
												Palletizing of goods for storage or onward transportation.
											</li>
										</ul>
									</div>
								</div>
							</div>

							<div class="panel panel-default">
								<div class="panel-heading">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse22">
										Design layout and selection of plant to ensure:
									</a>
								</div>

								<div id="collapse22" class="accordion-body collapse">
									<div class="accordion-inner">
										<li>
										Evaporators are positioned to reduce airflows and limit wind chill and snow formation.
										</li>
										<li>
										There are safe and easy means of access to plant for maintenance staff
										</li>
										<li>
										There are safe and easy means of access to plant for maintenance staff.
										</li>
										<li>
										Interlocked refrigeration fans that stop when people are in area. 
										</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse24">
										Fatigue, heat stress in hot and/or humid conditions.  Diminished concentration can result in injuries if safety measures are forgotten.  
									</a>
								</div>

								<div id="collapse24" class="accordion-body collapse">
									<div class="accordion-inner">
										<li>
										Provide regular rest breaks.
										</li>
										<li>
										Provide shade where practicable.
										</li>
										<li>
										Re-schedule work if extreme weather conditions present risk.
										</li>
										<li>
										Provide appropriate PPE. 
										</li>
										<li>
										Wear clothing appropriate to the weather conditions.
										</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse23">
										Good visibility as a result of the design and the layout of the facility which ensures that:
									</a>
								</div>

								<div id="collapse23" class="accordion-body collapse">
									<div class="accordion-inner">
										<li>
										Adequate lighting has been designed and appropriately positioned in all traffic and work areas.
										</li>
										<li>
										unobstructed and clear walkways and roadways where vehicles and pedestrian traffic have clear uninterrupted visibility along path of travel.
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
									<li class="read-more"><a href="<?php echo site_url('Welcome/newPage/fall'); ?>" class="btn">Read more</a></li>
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
									<li class="read-more"><a href="<?php echo site_url('Welcome/newPage/cut'); ?>" class="btn">Read more</a></li>
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
						How can employers mitigate the risk of <b>musculoskeletal</b> injuries among retail workers?</h3>
				</div>
				<div class="modal-body">
					<div id="Q1">

						<div class="quiz" id="quiz1" data-toggle="buttons">
							<p id="correctAnswer1" style="display: none;">2</p>
							<label class="element-animation1 btn btn-lg btn-primary btn-block"><span class="btn-label"><i
										class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio"
																									 name="q_answer"
																									 value="1">1 By changing job roles frequently </label>
							<label class="element-animation2 btn btn-lg btn-primary btn-block"><span class="btn-label"><i
										class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio"
																									 name="q_answer"
																									 value="2">2 By providing ergonomic solutions in the workplace </label>

							<label class="element-animation3 btn btn-lg btn-primary btn-block"><span class="btn-label"><i
										class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio"
																									 name="q_answer"
																									 value="3">3
								By structuring employee-friendly leave policies</label>
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

    <span id="answer1I" style="float: left; text-align:justify;"><b>Incorrect!</b> The correct answer is <b>2</b>. <br/>Employers can improve ergonomics in the workplace to safeguard employee health. Using mechanical assist devices (like a stocking cart with a tilted container to stock small products) to perform tasks reduces the risk of overexertion, musculoskeletal disorders, and other injuries among workers.

		</span>
							<span id="answer1C" style="float: left; text-align:justify;"><b>Correct!</b> <br/>Employers can improve ergonomics in the workplace to safeguard employee health. Using mechanical assist devices (like a stocking cart with a tilted container to stock small products) to perform tasks reduces the risk of overexertion, musculoskeletal disorders, and other injuries among workers.
		</span>
						<span id="answer1K" style="float: left; text-align:justify;">The correct answer is <b>2</b>. <br/>Employers can improve ergonomics in the workplace to safeguard employee health. Using mechanical assist devices (like a stocking cart with a tilted container to stock small products) to perform tasks reduces the risk of overexertion, musculoskeletal disorders, and other injuries among workers.

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
						The <b>most effective way</b> to prevent back injuries at work is to…</h3>
				</div>
				<div class="modal-body">
					<div id="Q1">

						<div class="quiz" id="quiz2" data-toggle="buttons">
							<p id="correctAnswer2" style="display: none;">3</p>
							<label class="element-animation1 btn btn-lg btn-primary btn-block"><span class="btn-label"><i
										class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio"
																									 name="q_answer"
																									 value="1">1 Prohibit workers from lifting any heavy objects
							</label>
							<label class="element-animation2 btn btn-lg btn-primary btn-block"><span class="btn-label"><i
										class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio"
																									 name="q_answer"
																									 value="2">2 Have a separate staff which lifts loads and objects
								yourself </label>

							<label class="element-animation3 btn btn-lg btn-primary btn-block"><span class="btn-label"><i
										class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio"
																									 name="q_answer"
																									 value="3">3
								Implement an ergonomics program that redesigns tasks and work environment with an eye toward minimizing back hazards</label>
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

    <span id="answer2I" style="float: left; text-align:justify;"><b>Incorrect!</b> The correct answer is <b>3</b>. <br/> Putting into practice an ergonomics program that deals with modifying work tasks and work environment is the most effective way to minimize back hazards.

		</span>
							<span id="answer2C" style="float: left; text-align:justify;"><b>Correct!</b> <br/> Putting into practice an ergonomics program that deals with modifying work tasks and work environment is the most effective way to minimize back hazards.
	</span>
						<span id="answer2K" style="float: left; text-align:justify;">The correct answer is <b>3</b>. <br/> Putting into practice an ergonomics program that deals with modifying work tasks and work environment is the most effective way to minimize back hazards.

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
						Which of the following should you <b>NOT</b> do while lifting objects</h3>
				</div>
				<div class="modal-body">
					<div id="Q1">

						<div class="quiz" id="quiz3" data-toggle="buttons">
							<p id="correctAnswer3" style="display: none;">3</p>
							<label class="element-animation1 btn btn-lg btn-primary btn-block"><span class="btn-label"><i
										class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio"
																									 name="q_answer"
																									 value="1">1 Keep your back straight
							</label>
							<label class="element-animation2 btn btn-lg btn-primary btn-block"><span class="btn-label"><i
										class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio"
																									 name="q_answer"
																									 value="2">2 Bend at the knees
							</label>

							<label class="element-animation3 btn btn-lg btn-primary btn-block"><span class="btn-label"><i
										class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio"
																									 name="q_answer"
																									 value="3">3
								Keep your feet together</label>

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

    <span id="answer3I" style="float: left; text-align:justify;"><b>Incorrect!</b> The correct answer is <b>3</b>. <br/> Plan ahead before lifting an object. Decide in advance where the load will be placed after it has been lifted. The path in between where the load is kept and where it has to be placed should be free from obstacles. - Keep yourself close to the object you wish to lift. - Keep your feet shoulder-width apart. This gives you a solid base to support. - Bend at your knees. - Tighten the stomach muscles. - Lift the load with your leg muscles as you stand up. Leg muscles are stronger than back muscles. - Do not lift an object which is too heavy or has an awkward shape, all alone. Get help.
</span>
							<span id="answer3C" style="float: left; text-align:justify;"><b>Correct!</b> <br/> Plan ahead before lifting an object. Decide in advance where the load will be placed after it has been lifted. The path in between where the load is kept and where it has to be placed should be free from obstacles. - Keep yourself close to the object you wish to lift. - Keep your feet shoulder-width apart. This gives you a solid base to support. - Bend at your knees. - Tighten the stomach muscles. - Lift the load with your leg muscles as you stand up. Leg muscles are stronger than back muscles. - Do not lift an object which is too heavy or has an awkward shape, all alone. Get help.
</span>
						<span id="answer3K" style="float: left; text-align:justify;">The correct answer is <b>3</b>. <br/> Plan ahead before lifting an object. Decide in advance where the load will be placed after it has been lifted. The path in between where the load is kept and where it has to be placed should be free from obstacles. - Keep yourself close to the object you wish to lift. - Keep your feet shoulder-width apart. This gives you a solid base to support. - Bend at your knees. - Tighten the stomach muscles. - Lift the load with your leg muscles as you stand up. Leg muscles are stronger than back muscles. - Do not lift an object which is too heavy or has an awkward shape, all alone. Get help.
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

	<div class="modal fade" id="myModal4" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h3 style="line-height: 150%; text-align:justify;"><span class="label label-warning" id="qid">4</span>
						Which of the following should you <b>NOT</b> do when lowering a load?</h3>
				</div>
				<div class="modal-body">
					<div id="Q1">

						<div class="quiz" id="quiz4" data-toggle="buttons">
							<p id="correctAnswer4" style="display: none;">1</p>
							<label class="element-animation1 btn btn-lg btn-primary btn-block"><span class="btn-label"><i
										class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio"
																									 name="q_answer"
																									 value="1">1 Twist your body
							</label>
							<label class="element-animation2 btn btn-lg btn-primary btn-block"><span class="btn-label"><i
										class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio"
																									 name="q_answer"
																									 value="2">2 Keep the load close to your body
							</label>

							<label class="element-animation3 btn btn-lg btn-primary btn-block"><span class="btn-label"><i
										class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio"
																									 name="q_answer"
																									 value="3">3 Bend your knees
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

    <span id="answer4I" style="float: left; text-align:justify;"><b>Incorrect!</b> The correct answer is <b>1</b>. <br/>To lower a load, you should make use of its edge, bend your knees, keep the load close to their body, and avoid twisting your torso.		</span>
							<span id="answer4C" style="float: left; text-align:justify;"><b>Correct!</b><br/> To lower a load, you should make use of its edge, bend your knees, keep the load close to their body, and avoid twisting your torso.		</span>
						<span id="answer4K" style="float: left; text-align:justify;">The correct answer is <b>1</b>. <br/>To lower a load, you should make use of its edge, bend your knees, keep the load close to their body, and avoid twisting your torso.		</span>


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
						___________ is one of the <b>most common types</b> of health issues observed in retail workers.</h3>
				</div>
				<div class="modal-body">
					<div id="Q1">

						<div class="quiz" id="quiz5" data-toggle="buttons">
							<p id="correctAnswer5" style="display: none;">3</p>
							<label class="element-animation1 btn btn-lg btn-primary btn-block"><span class="btn-label"><i
										class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio"
																									 name="q_answer"
																									 value="1">1 Hair loss and pigmentation
							</label>
							<label class="element-animation2 btn btn-lg btn-primary btn-block"><span class="btn-label"><i
										class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio"
																									 name="q_answer"
																									 value="2">2 Weight gain
							</label>

							<label class="element-animation3 btn btn-lg btn-primary btn-block"><span class="btn-label"><i
										class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio"
																									 name="q_answer"
																									 value="3">3 Musculoskeletal injury
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

							<span id="answer5I" style="float: left; text-align:justify;"><b>Incorrect!</b> The correct answer is <b>3</b>. <br/> PMusculoskeletal injuries include bone, muscle, tendon, and other tissue injuries. Retail workers are at risk of suffering musculoskeletal injuries due to overexertion, lifting heavy objects, awkward positions, applying pressure on one part of the body, and performing the same action quickly and repeatedly (for example, scanning items at checkout).</span>
							<span id="answer5C" style="float: left; text-align:justify;"><b>Correct!</b> <br/> Musculoskeletal injuries include bone, muscle, tendon, and other tissue injuries. Retail workers are at risk of suffering musculoskeletal injuries due to overexertion, lifting heavy objects, awkward positions, applying pressure on one part of the body, and performing the same action quickly and repeatedly (for example, scanning items at checkout).</span>
						<span id="answer5K" style="float: left; text-align:justify;">The correct answer is <b>3</b>. <br/> PMusculoskeletal injuries include bone, muscle, tendon, and other tissue injuries. Retail workers are at risk of suffering musculoskeletal injuries due to overexertion, lifting heavy objects, awkward positions, applying pressure on one part of the body, and performing the same action quickly and repeatedly (for example, scanning items at checkout).</span>


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