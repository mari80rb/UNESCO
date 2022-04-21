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

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

 <article class="grid">
        <div class="emg">
            <img class="image" src="" alt="">
        </div>

        <section>
            <h2>prutfis</h2>
            <h3>Ingredienser</h3>
            <p class="ingredienser"></p>
            <h3>Opskrift</h3>
            <p class="opskrift"></p>
            <h3>Historie</h3>
            <p class="oprindelse"></p>
            <div class="cont">
               <a class="knap" href="http://www.mariasattrup.dk/kea/09_passionssite/wordpress/drinks/">TILBAGE</a>
            </div>
        </section>

    </article>

	
		</main><!-- #main -->
		 <script>
 
console.log("scriptStart");
        const dburl = "http://mariasattrup.dk/kea/09_passionssite/wordpress/wp-json/wp/v2/drink/"+<?php echo get_the_ID() ?>;
        let drink;
     

        let ingredienser;

        document.addEventListener("DOMContentLoaded", loadJson);

        async function loadJson() {
            console.log("loadJson");
            const jsonData = await fetch(dburl);
            drink = await jsonData.json();

            /*Omskrive \n til <br>: Sætte ingredienser i listeform*/
            ingredienser = drink.ingredienser.replace(/\n/g, "<br>")
            // console.log(ingredienser)

            visDrink(drink);
            console.log(drink);
        }

        function visDrink() {
            console.log("visDrink");
            document.querySelector("h2").textContent = drink.title.rendered;
            // console.log(madret.navn);
            document.querySelector(".ingredienser").innerHTML = drink.ingredienser;
            document.querySelector(".image").src = drink.billede.guid;
            document.querySelector(".opskrift").textContent = drink.opskrift;
            document.querySelector(".oprindelse").textContent = drink.historie;
        }


    </script>
	</div><!-- #primary -->

<?php
get_footer();
