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
h2 #overskrift ::before {
  background: #767676;
  content: "\020";
  display: none;
  height: 2px;
  margin: 1rem 0;
  width: 1em;
}

h2 {
  font-size: 1.2rem;
  line-height: 1.25;
  margin-bottom: 2;
}
h2::before {
  background: #767676;
  content: "\020";
  display: none;
  height: 2px;
  margin: 1rem 0;
  width: 1em;
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
  height: auto;
  width: 100%;

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
			<section id="verdensmaal-sortering">
				<h2>Her kommer sortering af verdensmål</h2>
				<img src="verdensmaal.jpg" alt="">
			</section>

			<h1 id="overskrift">Projekter</h1>
		<section id="projekt-oversigt"></section>
			
<template>
				<article>
					<h2></h2>
					<img src="" alt="">
					<p></p>
</article>
</template>
	
</main><!-- #main -->
			<script>


				let projekt ;
				const liste = document.querySelector("#projekt-oversigt");
				const skabelon =document.querySelector("template");
				let filterProjekt = "alle";
				document.addEventListener("DOMContentLoaded", start);

				function start() {
					console.log("start");
					getJson();
				}



const url = "http://mariasattrup.dk/kea/unesco/wp-json/wp/v2/projekt?per_page=100";
async function getJson() {
	console.log("getJson");
	let response = await fetch(url);
	projekt = await response.json();
	visProjekter();
}

function visProjekter() {
		console.log("visProjekter");
	console.log(projekt);
	projekt.forEach(projekt => {
		console.log("foreach kører på projekter");
		const klon = skabelon.cloneNode(true).content;
		klon.querySelector("h2").textContent = projekt.title.rendered;
		klon.querySelector("img").src = projekt.billede.guid;

		klon.querySelector("article").addEventListener("click", () => {
			location.href = projekt.link;
		})
	

		//apppend klon til #projekt-oversigt
		const beholder = document.querySelector("#projekt-oversigt");
		beholder.appendChild(klon);
	})
}
</script>
		

		
	</div><!-- #primary -->

<?php
get_footer();
