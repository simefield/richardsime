<!--
// 	nice little hide & show script to make form appear as multiple pages
//	courtesy of:
//	http://www.devx.com/webdev/Article/10483/1954?pf=true
-->
<script language="JavaScript" type="text/javascript">
//<![CDATA[
var currentLayer = 'page1';
function showLayer(lyr) {
   hideLayer(currentLayer);
   document.getElementById(lyr)
      .style.display = 'block';
   currentLayer = lyr;
}

function hideLayer(lyr) {
   document.getElementById(lyr).
      style.display = 'none';
}

function showValues(form) {
   var values = '';
   var len = form.length - 1; 
   //Leave off Submit Button
   for(i=0; i<len; i++) {
      if (form[i].id.indexOf("C") != -1 || 
         form[i].id.indexOf("B") != -1)
         //Skip Continue and Back Buttons
         continue;
         values += form[i].id;
         values += ': ';
         values += form[i].value;
         values += '\n';
      }
//      alert(values);
   }
//]]>
</script>

<div id="cvmenu">
	<ul>
		<li><a href="#" onmouseover="showLayer('page1')">Me</a></li>
		<li><a href="#" onmouseover="showLayer('page2')">Achievement</a></li>
		<li><a href="#" onmouseover="showLayer('page3')">Referees</a></li>
		<li><a href="#" onmouseover="showLayer('page4')">Contact</a></li>
	</ul>
</div>
<!-- end cvmenu -->
<div class="page" id="page1" style="display: block;">
	<p>Prior to 2007 I spent over five years as Multimedia Designer / Developer
		at <a href="http://www.energyintellect.com/">Energy Intellect Limited</a>.
		The primary purpose of this role was to provide creative and developmental
		expertise in the areas of software development, web, presentations, and marketing.</p>
	<p>Leaving this role in February 2007 to stay at home with my 4-year old son,
		I continued web development in a freelance capacity. Working closely with graphic
		designers I developed a number of sites for the <a href="http://www.volunteer.org.nz/">Global
		Volunteer Network</a>, and an osCommerce-driven site for <a href="http://www.factory2u.co.nz/">Factory
		2U Limited</a>.</p>
	<p>I am proficient in the following technologies: InDesign, Illustrator, Photoshop,
		Flash &amp; Actionscript, Premiere, 3D modelling &amp; animation, (X)HTML and
		CSS. And also possess some experience with PHP and Eclipse.</p>
	<p>Specialising in CSS and XHTML design implementation, my skills bridge the
		gap between graphic design and programming. And while I'm always interested
		in learning more of both of these, I'm particularly passionate about good design.
		With this in mind I'm now seeking a full-time position working alongside top graphic
		artists turning their designs into visually faithful realisations. My eye for
		detail and development skillset enables me to produce accessible, valid, cross-browser,
		cross-platform, CSS-based sites with relative ease.</p>
	<p class="quote">&#8220;&#8230;it is WICKED. Watched it over and over. Heaps
		of other people checked it out while I was there and they starting clapping
		and hooharing after it was	finished yelling for more.&#8221;</p>
	<p class="quotee">Scott Brooks &#8211; Art Director</p>
	<p class="quote">&#8220;Your's kicked *&yen;!# you &not;&oslash;#&ccedil;&sect;&#960;*!&#8221;</p>
	<p class="quotee">Taylor &#8211; Student Peer</p>
	<p class="hide">If you care to wind back the clock you'll see I graduated from
		Victoria University with a BSc in Psychology. This set me up for a patchy career
		in&#8230; delivery: mail (cycle-courier), juice, pizza, and drunk folk (Dial-a-Driver).
		This was followed by a stint presenting for Saturn TV's ONTV. Weave in some
		cartooning and	sign-painting and top it off with a &#8216;real&#8217; job at
		Te Papa (The Museum of New Zealand) and you'll've woven the beautiful patchwork
		quilt that is my career.</p>
</div>
<!-- end experience -->
<div class="page" id="page2">
	<p class="hide">I&#8217;m a multimedia / web developer with more than six years
		industry experience specialising in CSS and XHTML design implementation. My
		skills bridge the gap between graphic design and programming. While I&#8217;m
		always interested in learning more of both of these, I'm particularly passionate
		about good design. With this in mind I&#8217;m now seeking a position working
		alongside top graphic artists turning their designs into visually faithful
		functioning implementations. My eye for detail and development skillset enables
		me to produce accessible, valid, cross-browser, cross-platform, CSS-based sites
		with relative ease.</p>
	<p class="hide">Each design brief poses a new problem requiring a unique solution.
		These varying challenges demand creative responses. Creativity involves a process
		of research and experimentation. It draws on knowledge and experience, and
		sometimes even luck in reaching a clean solution. The client should look at
		the end result and think, ‘how simple’. In the words of R. Buckminster Fuller: &#8220;When
		I’m working on a problem, I never think about beauty. I think only how to solve
		the problem. But when I’ve finished, if the solution isn’t beautiful, I know
		it’s wrong&#8221;.</p>
	<p class="hide">Sports-wise I enjoy cycling, skiing, and surfing amongst other
		things. While my R&amp;R time is most enjoyed reading a Dr. Seuss with my son
		in the hammock, or grappling with amateur physics.</p>
	<p><strong>Diploma of Multimedia</strong><br />
		<i>National College of Design and Technology (&#8217;00-&#8217;01)</i><br />
		Major: 3D Animation.<br />
		Other subjects: 3D Modelling, Director (CD Rom authoring), Flash, Video
		Production, and Web Design.</p>
	<p><strong>Handle the Jandal</strong><br />
		<i>Radio Active, NZ Music Video Awards (&#8217;01)</i><br />
		1<sup>st</sup> Runner-Up, Favourite NZ Music Video as voted by the Handle the
		Jandal audience for the	Naked Apes<i>&#8217;</i> Come On.</p>
	<p><strong>Bachelor of Science</strong><br />
		<i>Victoria University (&#8217;89-&#8217;92)</i><br />
		Major: Psychology.<br />
		Other subjects: Anthropology, Biology, Classical Studies, Philosophy,
		and Mathematics.</p>
	<p class="quote">&#8220;[Richard&#8217;s] strong understanding of visual language,
		shot composition and lighting made for	an excellent music video.&#8221;</p>
	<p class="quotee">Ian Powell &#8211; Video Production Tutor</p>
	<p class="quote">&#8220;An outstanding job of really making the story come to
		life.&#8221;</p>
	<p class="quotee">Andy Karl &#8211; Multimedia Tutor</p>
	<p class="quote">&#8220;OH MY GOODNESS!!!! That is flippin amazing!!!!! I am
		going to send it	to someone now!!!! YOU ROCK!!!&#8221;</p>
	<p class="quotee">Dianna Bluck &#8211; Advertising Professional</p>
	<p class="quote">&#8220;ddaaaaaaaaaoooooohh yeaaah&#8230;&#8221;</p>
	<p class="quotee">Tim Norton &#8211; Colleague</p>
</div>
<!-- end education -->
<div class="page" id="page3">
	<p class="hide"><strong>Andy Karl</strong><br />
		Managing Director<br />
		<a href="http://liquidinteractive.co.nz/">Liquid Interactive</a><br />
		<script language="JavaScript" type="text/javascript">
		//<![CDATA[
		user = "andy";
		site = "liquidinteractive.co.nz";
		document.write('<a href=\"mailto:' + user + '@' + site + '\">');
		document.write(user + '@' + site + '</a>');
		//]]>
	</script>
		<br />
		04.910.1184</p>
	<p><strong>Ian Attwood</strong><br />
		Design Manager / Brand Strategist<br />
		<a href="http://www.brrltd.com/">Brian R Richards Ltd</a><br />
		<script language="JavaScript" type="text/javascript">
		//<![CDATA[
		user = "ian";
		site = "brrltd.com";
		document.write('<a href=\"mailto:' + user + '@' + site + '\">');
		document.write(user + '@' + site + '</a>');
		//]]>
	</script>
		<br />
		021.464.502</p>
		<p><strong>Regan Ryan</strong><br />
		Chief Technology Officer<br />
		<a href="http://www.energyintellect.com/">Energy Intellect Ltd</a><br />
		<script language="JavaScript" type="text/javascript">
		//<![CDATA[
		user = "regan.ryan";
		site = "energyintellect.com";
		document.write('<a href=\"mailto:' + user + '@' + site + '\">');
		document.write(user + '@' + site + '</a>');
		//]]>
	</script>
		<br />
		04.381.5438</p>
</div>
<!-- end referees -->
<div class="page" id="page4">
	<?php require_once ('contact.php'); ?>
</div>
<!-- end contact -->
