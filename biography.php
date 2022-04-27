<?php
session_start();
// Include functions and connect to the database using PDO MySQL
include 'functions.php';
$pdo = pdo_connect_mysql();

template_header('Biography')?>
<div class="container">
<div class="row">
<div class="col-md main-content">
		<div class="row">
			
            	
		<div class="col-4"><img class ="bioimage img-flow img-fluid rounded" style="object-fit: cover; height: 100%;" src="/images/bio-pics/henryd2.png" /></div>
		<div class="col-4"><img class ="bioimage img-flow img-fluid rounded" style="object-fit: cover; height: 100%;" src="/images/bio-pics/henryd3.png" /></div>
		<div class="col-4"><img class ="bioimage img-flow img-fluid rounded" style="object-fit: cover; height: 100%;" src="/images/bio-pics/henryd4.png" /></div>


		    	<h1>Artist's Statement</h1>
				<p>“I create art that exposes the beauty, humor, and absurdity in the mundane, poking fun at pop culture, technology, the economy, and life in the city.</p>

			    <p>My art takes concepts that people in the modern world face every day and repackages them in an accessible form that can be seen on street corners, cafés, virtual spaces, and gallery walls. I push the boundaries in technique, style, and aesthetics, using pencil sketches, acrylic paint, and digital software. Relentless innovation is fundamental to my practice, pushing me to never stick to any style and produce a new piece every single day.</p>

			    <p>In identifying the things that make us tick, I take that knowledge and present it in a playful and easily digestible way, informing the viewer how I believe a better and more just society can and should look.”</p>



		    	<h1>About the Art</h1>


		        <p>All works of art by Henry are intentionally sold at a low price point to ensure that it they are accessible to everyone, blurring the line between what is considered street art and fine art, the simple and the complex. All pieces are printed using high quality materials at henryd Studio in Philadelphia, PA. Prints are all printed on 13in x 19in paper, unless otherwise requested. Please send an email using the contact form for inquiries about custom sized prints.</p>

		        <p>3D models are produced using a combination of software including Autodesk Maya, Blender, Gravity Sketch, and Adobe Photoshop.</p>


		    	<h1>Past Exhibitions</h1>
		        <ul>
		            <li>Sep 4, 2021 Flamin’ Hot, Bad Candy, 3508 12th St NE, Washington, DC 20017</li>
		            <li>July 10, 2021 Sugar Rush, Bad Candy, 3508 12th St NE, Washington, DC 20017</li>
		            <li>June 19, 2021 Bad Candy Grand Opening, Bad Candy, 3508 12th St NE, Washington, DC 20017</li>
		            <li>May 8, 2021 Wilson’s Garage Show, 3054 Mt Pleasant St NW, Washington, DC 20009</li>
		            <li>Apr 1, 2021  Habitual Art Magazine: Spring 2021, Digital release</li>
		            <li>Mar 21, 2021 The BIZARRE BAZAAR, 6950 Maple St NW, Washington, DC 20012</li>
		            <li>Mar 14, 2021 - Artfest Magazine: Issue 1, Digital release</li>
		            <li>Mar 14-28, 2021 Acts of Resistance Through Absurd Resilience, 6950 Maple St NW, Washington, DC 20012</li>
		            <li>Dec 2020 henryd Guerilla Installation “The Kiss“, Outside of 2423 18th St NW, Washington, DC</li>
		            <li>Dec 2020 henryd and Others Group Show at Dos Gringos, Dos Gringos, Washington DC</li>
		            <li>Oct 16, 2020 - Ongoing henryd x Bay Atlantic University Display, Bay Atlantic University Works, Washington, DC</li>
		            <li>Oct 3, 2020 henryd Sidewalk Pop-Up Show, Mt. Pleasant Triangle, Washington, DC</li>
		            <li>Sep 5, 2020 henryd Private Art Salon, henryd Studio, Washington, DC</li>
		            <li>Jul 18, 2020 Patterson Mansion Live Painting Demo Sponsored by Liquor.com, Patterson Mansion Ampeer Residences, Washington, DC</li>
		            <li>Jun 27, 2020 Parking Lot Popup, 14th and S Street NW, Washington, DC</li>
		            <li>Jun 2020 ArtRaveDC Virtual Art Gallery, Online Exhibition, Washington, DC</li>
		            <li>Apr 2020 Pandemic Response Food Drive Art Drive x Chris Cardi x Sage Warner, Maketto, Washington, DC</li>
		            <li>Mar 14, 2020 piLITICAL pARTy, 6950 Maple St NW, Washington, DC Cancelled due to COVID-19</li>
		            <li>Mar 1, 2020 ArtRaveDC x Dupont Underground, Dupont Underground, Washington, DC</li>
		            <li>Feb 23, 2020 ArtRaveDC x Dupont Underground, Dupont Underground, Washington, DC</li>
		            <li>Feb 16, 2020 ArtRaveDC x Dupont Underground, Dupont Underground, Washington, DC</li>
		            <li>Feb 9, 2020 ArtRaveDC x Dupont Underground, Dupont Underground, Washington, DC</li>
		            <li>Jan 31, 2020 Henry F Dotson ARTSHOW Season 1 Launch, SPACYcLOUd, Washington, DC</li>
		            <li>Nov 2019 Henry F Dotson Teaser Pop-up Exhibition, SPACYcLOUd, Washington, DC</li>
		            <li>Oct 2019 DADA QUEER DADA!, Rhizome, Washington, DC
		        </ul>

	</div>
</div>
</div>
</div>
<?=template_footer()?>