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
		h1 {
  font-size: 3rem;
}

h2 {
  font-size: 1.2rem;
  line-height: 1.25;
  margin-bottom: 2;
}

h3 {
  font-size: 1.0rem;
  line-height: 1.25;
  margin-bottom: 1rem;
}


p {
  font-size: 1.1rem;
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
		
	#projekt-oversigt {
		display: grid;
        grid-template-columns: 1fr 1fr 1fr;
		gap: 1rem;
	}

</style>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

 <article class="grid">
        <div class="emg">
            <img class="image" src="" alt="">
        </div>

        <section>
            <h2></h2>
            <h3>Overskrift</h3>
            <p class="overskrift"></p>
            <h3>Beskrivelse</h3>
            <p class="beskrivelse"></p>
            <h3>Skole</h3>
            <p class="skole"></p>
            <div class="cont">
               <a class="knap" href="http://www.mariasattrup.dk/kea/unesco/projekter">TILBAGE</a>
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
