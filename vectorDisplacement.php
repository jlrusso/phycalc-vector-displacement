<!DOCTYPE html>
<html>
<head>
	<title>PhyCalc | 2D Displacement</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
	<link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
	<link rel="stylesheet" href="vectorDisplacement.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

	<?php
		include_once "navSearch.php";
	?>

	<section id="main-content">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 text-center">
					<h2 class="animated bounceInDown section-heading">2D Displacement</h2>
					<div class="pages-nav animated bounceInDown" id="top-pager">
						<ul class="pager">
							<li><a href="displacement.html" class="prev-page-btn"><span class="glyphicon glyphicon-chevron-left"></span>Previous: Displacement</a></li>
							<li><a href="velocity.html" class="next-page-btn">Next: Velocity<span class="glyphicon glyphicon-chevron-right"></span></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row animated fadeInRight">
				<div class="col-md-8">
					<div class="panel panel-default">
						<div class="panel-heading">
							<div class="panel-title trig-and-side">
								<div class="solve-for-selection">
									<form>
										<span class="badge">1</span>
										<span><b>Solve:&nbsp;</b></span>
										<label class="radio-btn">
										 	<input type="radio" class="solve-btns" name="radio-one" id="solve-theta-radio-btn">
										    <span class="checkmark">&Theta;</span> |
										    <span id="deg-symbol">&deg;</span>
										</label>
										<label class="radio-btn">
										    <input type="radio" class="solve-btns" name="radio-one" id="solve-d1-radio-btn">
										    <span class="checkmark">d1</span> |
										</label>
										<label class="radio-btn">
										    <input type="radio" class="solve-btns" name="radio-one" id="solve-d2-radio-btn">
										    <span class="checkmark">d2</span> |
										</label>
										<label class="radio-btn">
										    <input type="radio" class="solve-btns" name="radio-one" id="solve-dnet-radio-btn">
										    <span class="checkmark">net-displacement</span>
										</label>
									</form>
								</div>
								<div class="trig-selection">
									<form>
										<span class="badge">2</span>
										<span><b>Trig:&nbsp;</b></span>
										<label class="radio-btn">
										 	<input type="radio" class="trig-function" name="radio-two" id="sin-radio-btn">
										    <span class="checkmark">sin</span> |
										</label>
										<label class="radio-btn">
										    <input type="radio" class="trig-function" name="radio-two" id="cos-radio-btn">
										    <span class="checkmark">cos</span> |
										</label>
										<label class="radio-btn">
										    <input type="radio" class="trig-function" name="radio-two" id="tan-radio-btn">
										    <span class="checkmark">tan</span> |
										</label>
										<label class="radio-btn">
										    <input type="radio" class="inverse-trig-function" name="radio-two" id="arcSin-radio-btn">
										    <span class="checkmark">sin<sup>-1</sup></span> |
										</label>
										<label class="radio-btn">
										    <input type="radio" class="inverse-trig-function" name="radio-two" id="arcCos-radio-btn">
										    <span class="checkmark">cos<sup>-1</sup></span> |
										</label>
										<label class="radio-btn">
										    <input type="radio" class="inverse-trig-function" name="radio-two" id="arcTan-radio-btn">
										    <span class="checkmark">tan<sup>-1</sup></span>
										</label>
									</form>
								</div>
								<div class="unit-selection">
									<form>
										<span class="badge">3</span>
										<span><b>Unit:&nbsp;</b></span>
										<label class="radio-btn">
										 	<input type="radio" class="units" name="radio-three" units="m" id="meter-radio-btn"/>
										    <span class="checkmark">meters</span> |
										</label>
										<label class="radio-btn">
										    <input type="radio" class="units" name="radio-three" units="mi" id="mile-radio-btn"/>
										    <span class="checkmark">miles</span> |
										</label>
										<label class="radio-btn">
										    <input type="radio" class="units" name="radio-three" units="ft" id="feet-radio-btn"/>
										    <span class="checkmark">feet</span> |
										</label>
										<label class="radio-btn">
										    <input type="radio" class="units" name="radio-three" units="km" id="kilometer-radio-btn"/>
										    <span class="checkmark">kilometers</span>
										</label>
										<label class="radio-btn">
										    <input type="radio" class="units" name="radio-three" units="km" id="degrees-radio-btn"/>
										    <span class="checkmark">deg (&deg;)</span>
										</label>
									</form>
								</div>
							</div>
						</div>
						<div class="panel-body" id="main-panel">
							<div class="row">
								<div class="col-md-4">
									<h4 class="text-center"><span class="badge">4</span>&nbsp;<strong>Values</strong></h4>
									<form class="form-group">
									<input class="form-control part-one-input-field" type="number" id="angle-field" placeholder="&Theta; (degrees mode)">
									<span id="theta-symbol">&theta;</span>
									<input class="form-control part-one-input-field" type="number" id="vector-one" placeholder="(d1)">
									<input class="form-control part-one-input-field" type="number" id="vector-two" placeholder="(d2)">
									<input class="form-control part-one-input-field" type="number" id="net-displacement" placeholder="d-net">
									<input class="form-control part-one-input-field" type="number" id="sig-figs-field" placeholder="# of sigfigs (optional)">
									<div class="form-divider"></div>
									<div class="calc-and-clear">
										<button type="button" id="calculate-btn"><b>Calculate</b></button>
										<button type="button" id="clear-btn"><b>Clear</b></button>
									</div>
									</form>
								</div>
								<div class="col-md-8 text-center">
									<h4 id="equation-heading"><strong>Equation</strong></h4>
									<div id="slide-arrow-container">
										<div class="slide-arrow-btn" id="prev-slide-btn"><span class="glyphicon glyphicon-chevron-left"></span></div>
										<div class="slide-arrow-btn" id="next-slide-btn"><span class="glyphicon glyphicon-chevron-right"></span></div>
									</div>
									<div id="outer-image-container">
										<div id="inner-image-container">
											<img src="../img/newSinEquation.png" class="img-responsive slide" alt="Sin Equation"/>
											<img src="../img/newCosEquation.png" class="img-responsive slide" alt="Cos Equation"/>
											<img src="../img/newTanEquation.png" class="img-responsive slide" alt="Tan Equation"/>
											<img src="../img/newInvSinEquation.png" class="img-responsive slide" alt="Inv Sin Equation"/>
											<img src="../img/newInvCosEquation.png" class="img-responsive slide" alt="Inv Cos Equation"/>
											<img src="../img/newInvTanEquation.png" class="img-responsive slide" alt="Inv Tan Equation"/>
										</div>
										<div id="slide-bar-indicators">
											<div class="slide-bar"></div>
											<div class="slide-bar"></div>
											<div class="slide-bar"></div>
											<div class="slide-bar"></div>
											<div class="slide-bar"></div>
											<div class="slide-bar"></div>
										</div>
									</div>
									<div id="solo-image">
										<img src="../img/newTrigTriangle.png" class="img-responsive" alt="Trig Triangle"/>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="panel panel-default">
						<div class="panel-heading">
							<div class="panel-title text-center"><h4 id="background-heading"><b>Background:</b></h4></div>
						</div>
						<div class="panel-body module-section">
							<div class="module-box">
								<div class="module top-corners-rounded">
									<div class="module-front" id="first-front">Vectors</div>
									<div class="module-back" id="first-back">
										Have both direction and magnitude; the size or length of the vector
									</div>
								</div>
							</div>
							<div class="module-box">
								<div class="module">
									<div class="module-front">Vector Identity</div>
									<div class="module-back">
										Represented with an arrow pointing right above the letter symbol
									</div>
								</div>
							</div>
							<div class="module-box">
								<div class="module">
									<div class="module-front">Vector Addition</div>
									<div class="module-back">
										Used for calculating an object's net displacement in 2D
									</div>
								</div>
							</div>
							<div class="module-box">
								<div class="module">
									<div class="module-front" id="last-front">Pythagorean Theorem</div>
									<div class="module-back" id="last-back">
										Right triangles: the c^2 is equal to the sum of a^2 &amp; b^2
									</div>
								</div>
							</div>
							<div class="module-img">
								<img src="../img/pythagoreanTriangle.png" class="img-responsive" alt="Pythagorean Triangle">
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="panel panel-default" id="third-panel">
				<div class="panel-body" id="third-panel-body">
					<div class="row animated fadeInLeft" id="third-pics-row">
						<div class="col-sm-4 third-page-pics">
							<img src="../img/baseballhit.jpg" alt="Baseball Hit" class="img-responsive">
							<div class="img-caption">
								<p>The average launch angle — the angle at which the ball flies after being hit — was 11.5 degrees in 2016. <a href="https://www.washingtonpost.com/graphics/sports/mlb-launch-angles-story/?utm_term=.1f99bf4dba82" target="_blank"/> (Source)</a></p>
							</div>
						</div>
						<div class="col-sm-4 third-page-pics">
							<img src="../img/skiJump.jpeg" alt="Ski Jump" class="img-responsive">
							<div class="img-caption">
								<p>Anders Fannemel set a ski jump world record after soaring 251.5 metres in the first round of the World Cup. <a href="http://www.telegraph.co.uk/sport/othersports/skiing/11415244/Ski-jump-watch-Anders-Fannemel-set-the-new-world-record.html" target="_blank"/> (Source)</a></p>
							</div>
						</div>
						<div class="col-sm-4 third-page-pics">
							<img src="../img/javelinThrow.jpg" alt="Javelin Throw" class="img-responsive">
							<div class="img-caption">
								<p>In 1984, east Germany's Uwe Hohn threw a Javelin 104.80 meters, almost beyond the available space. <a href="https://www.iaaf.org/disciplines/throws/javelin-throw" target="_blank"/> (Source)</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>



			<div class="line-divider"></div>

			<div class="row">
				<div class="text-center" id="practice-btns-container">
					<button type="button" class="practice-btn" data-toggle="modal" data-target="#my-modal-one">Example 1</button>
					<button type="button" class="practice-btn" data-toggle="modal" data-target="#my-modal-two">Example 2</button>
					<button type="button" class="practice-btn" data-toggle="modal" data-target="#my-modal-three">Example 3</button>
				</div>
			</div>


			<div class="modal fade example-modal" id="my-modal-one" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="text-center">Vector Displacement</h4>
						</div>
						<div class="modal-body">
							<button class="accordion first-accordion"><strong>Problem</strong></button>
							<div class="modal-panel">
								<div class="modal-text">
									<p>
									Tom went camping with his family and decided to leave the campsite and wonder off using only his compass for navigating. He started by heading 30 degrees north of east (north east) and walked a total of 200 meters before deciding to turn back. How far east did he travel?
									</p>
								</div>
							</div>
							<button class="accordion"><strong>Illustration</strong></button>
							<div class="modal-panel">
									<img src="../img/vector-accordion-pic.png" alt="Vector Image"/>
							</div>
							<button class="accordion"><strong>Given Variables</strong></button>
							<div class="modal-panel">
								<p>
									<ul>
										<li><b>Tom's Motion</b> : two-dimensional and angles are used</li>
										<li><b>sin(&Theta;) = (O / H), cos(&Theta;) = (A / H), tan(&Theta;) = (O / A)</b></li>
										<li><b>Displacement</b> : 200 meters northeast</li>
									</ul>
								</p>
							</div>
							<button class="accordion last-accordion"><strong>Solution:</strong></button>
							<div class="modal-panel">
								<p>
									<ul>
										<li><b>Displacement</b> : 200 meters = Hypotenuse = H</li>
										<li><b>North of East</b> : means he traveled at an angle of 30&deg; NE </li>
										<li><b>Trig Used</b> : cos(30&deg;) gives us the east vector over the hypotenuse displacement</li>
										<li><b>Plug in Values</b> : cos(30&deg;) = A / (200)</li>
										<li><b>Solve for Unknown Variable</b> : cos(30&deg;) * 200 = A</li>
										<li><b>Solution</b> : east vector is 173 meters</li>
									</ul>
								</p>
							</div>
						</div>
						<div class="modal-footer text-center">
							<button type="button" class="btn glyphicon glyphicon-remove" data-dismiss="modal"></button>
						</div>
					</div>
				</div>
			</div>





				<div class="modal fade example-modal" id="my-modal-two" role="dialog">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="text-center">Net Displacement</h4>
							</div>
							<div class="modal-body">
								<button class="accordion first-accordion"><strong>Problem</strong></button>
									<div class="modal-panel">
										<p>
											Jim wondered off from the campsite like Tom, but instead he walked 115 meters due east and then 75 meters due north. What is his displacement from the starting point?
										</p>
									</div>
									<button class="accordion"><strong>Illustration</strong></button>
									<div class="modal-panel">
										<img src="img/vectorDisplacementAccordionImg2.png" alt="Vector Image"/>
									</div>
									<button class="accordion"><strong>Given Variables</strong></button>
									<div class="modal-panel">
										<p>
											<ul>
												<li><b>Right Triangle</b> : we can use pythagorean theorem to find side lengths</li>
												<li><b>Pythagorean Theorem</b> : a<sup>2</sup> + b<sup>2</sup> = c<sup>2</sup></li>
												<li><b>Given Sides</b> : d<sub>1</sub> = 115 m, d<sub>2</sub> = 75 m</li>
												<li><b>Unknown Variable</b> : hypotenuse / net displacement</li>
											</ul>
										</p>
									</div>
									<button class="accordion last-accordion"><strong>Solution</strong></button>
									<div class="modal-panel">
										<p>
											<ol>
												<li><b>Side opposite to angle</b> : 75 (north)</li>
												<li><b>Side adjacent to angle</b> : 115 (east)</li>
												<li><b>Equation</b> : a<sup>2</sup> + b<sup>2</sup> = c<sup>2</sup></li>
												<li><b>Assign Known Variables</b> : b to a side</b> : a = 75, b = 115</li>
												<li><b>Unknown Variable</b> : c , net displacement</li>
												<li><b>Plug in Values</b> : (75)<sup>2</sup> + (115)<sup>2</sup> = 18850</li>
												<li><b>Solve for C</b> : c<sup>2</sup> = 18850, therefore c = 137.29</li>
												<li><b>Net Displacement</b> : 137.29 meters</li>
											</ol>
										</p>
									</div>
							</div>
							<div class="modal-footer text-center">
								<button type="button" class="btn glyphicon glyphicon-remove" data-dismiss="modal"></button>
							</div>
						</div>
					</div>
				</div>





				<div class="modal fade example-modal" id="my-modal-three" role="dialog">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="text-center">Angle Displacement</h4>
							</div>
							<div class="modal-body">
								<button class="accordion first-accordion"><strong>Problem</strong></button>
									<div class="modal-panel">
										<p>
											Fred ran 30 yards east with the football towards the sideline and then made a sharp cut north towards the endzone, running 40 more yards to get a touchdown. What would the angle be if he ran directly from the starting point to point at which he entered the endzone?
										</p>
									</div>
									<button class="accordion"><strong>Illustration</strong></button>
									<div class="modal-panel">
										<img src="img/vectorDisplacementAccordionImg3.png" alt="Vector Image"/>
									</div>
									<button class="accordion"><strong>Given Variables</strong></button>
									<div class="modal-panel">
										<p>
											<ul>
												<li><b>First Vector</b> : 30 meters east</li>
												<li><b>Second Vector</b> : 40 meters north</li>
											</ul>
										</p>
									</div>
									<button class="accordion last-accordion"><strong>Solution</strong></button>
									<div class="modal-panel">
										<p>
											<ol>
												<li><b>Equation</b> : Use inverse trig functions to find &Delta; from side lengths</li>
												<li><b>First Vector to Trig Side</b> : 30 meters east = adjacent side</li>
												<li><b>Second Vector to Trig Side</b> : 40 meters north = opposite side</li>
												<li><b>Trig Function</b> : use tan<sup>-1</sup>(O / A) = &Delta;</li>
												<li><b>Plug in Values</b> : tan<sup>-1</sup>(30 / 40) = (&Delta;)</li>
												<li><b>Solution</b> : tan<sup>-1</sup>(40/30) = 53.13&deg;</li>
											</ol>
										</p>
									</div>
							</div>
							<div class="modal-footer text-center">
								<button type="button" class="btn glyphicon glyphicon-remove" data-dismiss="modal"></button>
							</div>
						</div>
					</div>
				</div>


				<div id="conversion-outer">
					<div id="conversion-container">
						<div id="conversion-heading">Unit Conversions</div>
						<div class="input-option-input">
							<input type="number" id="unit-input-field" max="999" placeholder="(input)"/>
							<select name="unitConversions" id="unit-converter">
								<option value="mmToM" id="millimetersToCentimeters" selected>mm to cm</option>
								<option value="mToMm" id="centimetersToMillimeters">cm to mm</option>
								<option value="cmToM" id="centimetersToMeters">cm to m</option>
								<option value="mtoCm" id="metersToCentimeters">m to cm</option>
								<option value="mToKm" id="metersTokilometers">m to km</option>
								<option value="kmToM" id="kilometersToMeters">km to m</option>
								<option value="mToMi" id="metersToMiles">m to mi</option>
								<option value="miToM" id="milesToMeters">mi to m</option>
								<option value="mToMi" id="metersToMiles">m to mi</option>
								<option value="kmToMi" id="kilometersToMiles">km to mi</option>
								<option value="miToKm" id="milesToKilometers">mi to km</option>
								<option value="ftToYds" id="feetToYards">ft to yds</option>
								<option value="ydsToFt" id="yardsToFeet">yds to ft</option>
								<option value="ftToM" id="feetToMeters">ft to m</option>
								<option value="mToFt" id="metersToFeet">m to ft</option>
								<option value="inToCm" id="inchesToCentimeters">in to cm</option>
								<option value="cmToIn" id="centimetersToInches">cm to in</option>
								<option value="mgToG" id="milligramsToGrams">mg to g</option>
								<option value="gToMg" id="gramsToMilligrams">g to mg</option>
								<option value="gToKg" id="gramsToKilograms">g to kg</option>
								<option value="kgToG" id="kilogramsToGrams">kg to g</option>
								<option value="lbsToKg" id="poundsToKilograms">lbs to kg</option>
								<option value="kgToLbs" id="kilogramsToPounds">kg to lbs</option>
								<option value="km2Tom2" id="kilometerSquaredToSquareMeters">km² to m²</option>
								<option value="m2ToKm2" id="squareMetersToKilometersSquared">m² to km²</option>-->
							</select>
							<input type="text" id="unit-output-field" placeholder="(output)" disabled="disabled">
						</div>
					</div>
				</div>


			<ul class="pager text-center" id="bottom-pager">
				<li><a href="displacement.html" class="prev-page-btn"><span class="glyphicon glyphicon-chevron-left"></span>Previous: Displacement</a></li>
				<li><a href="velocity.html" class="next-page-btn">Next: Velocity<span class="glyphicon glyphicon-chevron-right"></span></a></li>
			</ul>

	</section>

	<!-- Calculator Modal -->
			<div class="modal fade" id="calculator-modal" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="text-center">Calculator</h4>
						</div>
							<div class="modal-body">
								<div class="calculator-whole">
					        <input type="text" id="input-field">
					        <div class="row">
					            <div class="col-half">
					                <div id="radians-container">
					                    <button type="button" id="radians-btn">Radians</button>
					                    <span id="radians-indicator"></span>
					                </div>
					            </div>
					            <div class="col-half">
					                <div id="degrees-container">
					                    <button type="button" id="degrees-btn">Degrees</button>
					                    <span id="degrees-indicator"></span>
					                </div>
					            </div>
					        </div>
					        <div class="row">
					            <div class="col-fourth">
					                <button type="button" class="trig-btn">sin</button>
					            </div>
					            <div class="col-fourth">
					                <button type="button" class="trig-btn">cos</button>
					            </div>
					            <div class="col-fourth">
					                <button type="button" class="trig-btn">tan</button>
					            </div>
					            <div class="col-fourth">
					                <button type="button" class="pi-btn reg-btn">&pi;</button>
					            </div>
					        </div>
					        <div class="row">
					            <div class="col-fourth">
					                <button type="button" class="trig-btn">sin<sup>-1</sup></button>
					            </div>
					            <div class="col-fourth">
					                <button type="button" class="trig-btn">cos<sup>-1</sup></button>
					            </div>
					            <div class="col-fourth">
					                <button type="button" class="trig-btn">tan<sup>-1</sup></button>
					            </div>
					            <div class="col-fourth">
					                <button type="button" class="reg-btn">/</button>
					            </div>
					        </div>
					        <div class="row">
					            <div class="col-fourth">
					                <button type="button" class="reg-btn">7</button>
					            </div>
					            <div class="col-fourth">
					                <button type="button" class="reg-btn">8</button>
					            </div>
					            <div class="col-fourth">
					                <button type="button" class="reg-btn">9</button>
					            </div>
					            <div class="col-fourth">
					                <button type="button" class="reg-btn"><b>*</b></button>
					            </div>
					        </div>
					        <div class="row">
					            <div class="col-fourth">
					                <button type="button" class="reg-btn">4</button>
					            </div>
					            <div class="col-fourth">
					                <button type="button" class="reg-btn">5</button>
					            </div>
					            <div class="col-fourth">
					                <button type="button" class="reg-btn">6</button>
					            </div>
					            <div class="col-fourth">
					                <button type="button" class="reg-btn">-</button>
					            </div>
					        </div>
					        <div class="row">
					            <div class="col-fourth">
					                <button type="button" class="reg-btn">1</button>
					            </div>
					            <div class="col-fourth">
					                <button type="button" class="reg-btn">2</button>
					            </div>
					            <div class="col-fourth">
					                <button type="button" class="reg-btn">3</button>
					            </div>
					            <div class="col-fourth">
					                <button type="button" class="reg-btn">+</button>
					            </div>
					        </div>
					        <div class="row">
					            <div class="col-fourth">
					                <button type="button" class="reg-btn">0</button>
					            </div>
					            <div class="col-fourth">
					                <button type="button" class="reg-btn"><b>.</b></button>
					            </div>
					            <div class="col-fourth">
					                <button type="button" id="square-btn">x<sup>2</sup></button>
					            </div>
					            <div class="col-fourth">
					                <button type="button" id="nth-power">x<sup>n</sup></button>
					            </div>
					        </div>
					         <div class="row">
					            <div class="col-fourth">
					                <button type="button" id="square-root-btn">&radic;</button>
					            </div>
					            <div class="col-fourth">
					                <button type="button" class="reg-btn">(</button>
					            </div>
					            <div class="col-fourth">
					                <button type="button" class="reg-btn">)</button>
					            </div>
					            <div class="col-fourth">
					                <button type="button" id="ten-power">EE</button>
					            </div>
					        </div>
					        <div class="row">
					            <div class="col-fourth">
					                <button type="button" id="calculator-calculate-btn">=</button>
					            </div>
					            <div class="col-fourth">
					                <button type="button" id="calculator-clear-btn">Clear</button>
					            </div>
					            <div class="col-fourth">
					                <button type="button" id="delete-btn">Del</button>
					            </div>
					            <div class="col-fourth">
					                <input type="number" id="sig-fig-field" placeholder="SD#"/>
					            </div>
					        </div>
					    </div>
									<div id="calculator-tooltip"></div>
							</div>
						<div class="modal-footer text-center" id="calc-modal-footer">
							<button type="button" class="btn glyphicon glyphicon-remove" data-dismiss="modal"></button>
						</div>
					</div>
				</div>
				<div class="close-modal-btn">
					<span class="btn glyphicon glyphicon-remove"></span>
				</div>
			</div>
			<!-- End of Calculator Modal -->

			<!-- Go back to top -->
			<div id="go-up-container">
				<button type="button" id="go-up-btn"><span class="glyphicon glyphicon-chevron-up"></span></button>
			</div>

  <script type="text/javascript" src="jsCalculator.js"></script>
	<script type="text/javascript" src="vectorDisplacement.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>





</body>
</html>
