<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

get_header();
?>
	<style>
		* {
  margin: 0;
  box-sizing: border-box;
}
.site-title a {
	display: none;
}

#site-navigation img {
	max-width: 100px;
	padding-right: 2%;
}

#site-navigation {
	display: block;
}

#site-navigation a {
	color: white;
	font-size: 1rem;
}

#menu-hovedemenu a:hover {
	color: #05cab6;
}
.main-navigation .sub-menu {
	background-color: #33344B;
}

.site-title {
	background-image: url(http://mariasattrup.dk/kea/unesco/wp-content/uploads/2022/04/cropped-logohvid.webp);
	aspect-ratio: 354/208;
	position: fixed;
	image-size:
}
@font-face {
	font-family: lato;
	src: url("<?php echo get_stylesheet_directory_uri() ?>/lato-bold-webfont.woff2");
}
.site-header {
	background-color: #577e20;

}

a {
	font-family: lato;
	color: white;
}
		h1 {
  font-size: 3rem;
  font-family: lato;
}

h2 {
  font-size: 1.2rem;
  line-height: 1.25;
  margin-bottom: 2;
  font-family: lato;
}


h3 {
  font-size: 1.0rem;
  line-height: 1.25;
  margin-bottom: 1rem;
  font-family: lato;
}


p {
  font-size: 1.1rem;
  font-family: lato;
}
		  img {
           vertical-align: middle;
		  
  width:100%;
  max-width: 600px;


        }
		main{
			  max-width: 1000px;
  margin-inline: auto;
  padding-inline: 2rem;
  margin-block: 3rem;
		}
		


</style>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

 <article class="single">
   <h2></h2>
        <div class="emg">
            <img class="image" src="" alt="">
        </div>

        <section>
            
            <h3></h3>
            <p class="overskrift"></p>
            <h3>Beskrivelse</h3>
            <p class="beskrivelse"></p>
            <h3>Skole</h3>
            <p class="skole"></p>
            <div class="cont">
               <a class="knap" href="http://www.mariasattrup.dk/kea/unesco/projekter">Tilbage</a>
            </div>
        </section>

    </article>

	
		</main><!-- #main -->
		 <script>
 
console.log("scriptStart");
        const dburl = "http://mariasattrup.dk/kea/unesco/wp-json/wp/v2/projekt/"+<?php echo get_the_ID() ?>;
        let projekt;
     

        let projekter;

        document.addEventListener("DOMContentLoaded", loadJson);

        async function loadJson() {
            console.log("loadJson");
            const jsonData = await fetch(dburl);
            projekt = await jsonData.json();

           
            visProjekt(projekt);
            console.log(projekt);
        }

        function visProjekt() {
            console.log("visProjekt");
            document.querySelector("h2").textContent = projekt.title.rendered;
            // console.log(projekt.navn);
            document.querySelector(".overskrift").innerHTML = projekt.overskrift;
            document.querySelector(".image").src = projekt.billede.guid;
            document.querySelector(".beskrivelse").textContent = projekt.beskrivelse;
            document.querySelector(".skole").textContent = projekt.skole;
        }


    </script>
	</div><!-- #primary -->

<?php
get_footer();
