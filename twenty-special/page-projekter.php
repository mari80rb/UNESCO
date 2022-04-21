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
		  img {
            width: 300px;
			
        }
		
	#drinks-oversigt {
		display: grid;
        grid-template-columns: 1fr 1fr 1fr;
	}

</style>

<div id="primary" class="content-area">

		<main id="main" class="site-main">

			<h1 id="overskrift">Projekter</h1>
		<section id="drinks-oversigt"></section>
			
<template>
				<article>
					<h2></h2>
					<img src="" alt="">
					<p></p>
</article>
</template>
	
</main><!-- #main -->
			<script>


				let drinks ;
				const liste = document.querySelector("#drinks-oversigt");
				const skabelon =document.querySelector("template");
				let filterDrink = "alle";
				document.addEventListener("DOMContentLoaded", start);

				function start() {
					console.log("start");
					getJson();
				}



const url = "http://mariasattrup.dk/kea/unesco/wp-json/wp/v2/projekt?per_page=100";
async function getJson() {
	console.log("getJson");
	let response = await fetch(url);
	drinks = await response.json();
	visDrinks();
}

function visDrinks() {
		console.log("visDrinks");
	console.log(drinks);
	drinks.forEach(drink => {
		console.log("foreach kører på drinks");
		const klon = skabelon.cloneNode(true).content;
		klon.querySelector("h2").textContent = drink.title.rendered;
		klon.querySelector("img").src = drink.billede.guid;

		klon.querySelector("article").addEventListener("click", () => {
			location.href = drink.link;
		})
	

		//apppend klon til #drink-oversigt
		const beholder = document.querySelector("#drinks-oversigt");
		beholder.appendChild(klon);
	})
}
</script>
		

		
	</div><!-- #primary -->

<?php
get_footer();
