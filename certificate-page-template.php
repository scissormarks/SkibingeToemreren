<?php
    /**
    * Template Name: Certificate page template
    */
?>
<head>
	<meta charset="utf-8">
	<!--Adjusts the viewport so the page works on different devices-->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

	<title>
		<?php wp_title(''); ?>
	</title>

	<?php wp_head(); ?>

</head>

<?php get_header(); ?>

<!--Page content-->
<div class="content">
	<section class="wrapper">
		<div class="contentcontainer wrapper">	
			<div class="contenttextcontainer paper">
			<div class="pagecontent"></div>
				<div class="entry-content">
					<h2><?php the_title();?>	</h2>
					<p><?php the_post();?>		</p>
			        <p><?php the_content();?>	</p>
				</div>
			</div>
		</div>
	</section>
	<section class="wrapper">

		<div class="contentcontainer wrapper">

			<div class="certificatecontainer wrapper">
				
				<div class="certificate wrapper" id="byggaranti">
					<div class="certificatetextcontainer paper flavortext">
						<h3>Byggaranti</h3>
						<p>Når du vælger en håndværker med Byg Garanti, er du dækket med op til 150.000 kr. i tilfælde af sjusk, fejl og mangler ved dit byggeprojekt.</p>
						<a class="learnmore" href="/wpSkibingeToemreren/certifikater/#byggaranti">
							<i class="fa fa-arrow-right" aria-hidden="true"></i> Læs mere hos...
						</a>
					</div>
					
					<div class="certificatelogocontainer wrapper">
						<a href="http://www.monier.dk/" class="wrapper" style="background-image: url(<?php echo get_template_directory_uri() . '/img/logos/byg_garanti_rgb.png'; ?>");">
							
						</a>
					</div>
				</div>

				<div class="certificate wrapper" id="monier">
					<div class="certificatetextcontainer paper flavortext">
						<h3>Monier Tagpartner</h3>
						<p>Vi udfører også opgaver som Monier Tagpartner, og er med i et netværk af Monier Tagpartnere, der er specialuddannede på Moniers tagskoler.</p>
						<p>Vi udfører dokumenteret egenkontrol på alle tagprojekter, hvilket er din garanti for den bedste service, kvalitet og de korrekte tekniske løsninger.</p>
						<a class="learnmore" href="/wpSkibingeToemreren/certifikater/#monier">
							<i class="fa fa-arrow-right" aria-hidden="true"></i> Læs mere...
						</a>
					</div>
					
					<div class="certificatelogocontainer wrapper">
						<a href="http://www.monier.dk/" class="wrapper" style="background-image: url(<?php echo get_template_directory_uri() . '/img/logos/tagpartner.png'; ?>");">
							
						</a>
					</div>
				</div>

				<div class="certificate wrapper" id="energi">
					<div class="certificatetextcontainer paper flavortext">
						<h2>Energivelederen</h2>
						<p>Hos Skibinge Tømreren er vi uddannet energivejleder ved Teknologisk Institut. Vi kan være behjælpelige i forbindelse med energibesparelser i boliger og virksomheder.</p>
						<h4>Spar penge med en energivejleder</h4>
						<p>Som energivejleder kan vi rådgive i grønne løsninger og i, hvordan bygningen kan energioptimeres, så der på sigt er mange penge at spare på vand-, varme- og energiregningen.</p>
						<p>Vi kan også udføre en præcis beregning af energiforbruget i en ejendom i forbindelse med et byggeprojekt, eller hvis du går med tanker om renovering. Dermed opnår du en helt præcis angivelse af både fordele og ulemper ved forskellige metoder, hvilket sikrer dig den mest optimale løsning.</p>
						<p>Når vi har udført beregningen, tager vi en snak med dig om, hvad der vil gavne dig bedst på sigt – både håndværksmæssigt og økonomisk. Som uddannet energivejleder er det nemlig ikke blot vores eget byggetekniske område, vi kan kigge på. Vi vurderer boligen i sin helhed og kan se på alt fra efterisolering og nye vinduer og døre nye vinduer og døre</a> til investering i en mere energivenlig varmeløsning.​</p>
						<h4>Energivejleder til hele Sjælland</h4>
						<p>Vi har gennem tiden udført mange beregninger som energivejleder i områderne omkring Næstved og Præstø og resten af Sjælland, og er derfor vant til at give vores vurdering af alle typer ejendomme.</p>
						<p>Ønsker du også at spare på energien, er du mere end velkommen til at kontakte Skibinge Tømreren på telefon <a class="custom7" href="tel:21476901" target="_blank" rel="noopener">21 47 69 01</a> – din professionelle energivejleder.</p>

						<a class="learnmore" href="/wpSkibingeToemreren/certifikater/#energi">
							<i class="fa fa-arrow-right" aria-hidden="true"></i> Læs mere...
						</a>
					</div>
					<div class="certificatelogocontainer wrapper">
						<a href="http://www.monier.dk/" class="wrapper" style="background-image: url(<?php echo get_template_directory_uri() . '/img/logos/energivejlederen.png'; ?>");">
							
						</a>
					</div>
				</div>

			</div>
		</div>
	</section>
</div>


<?php get_footer(); ?>