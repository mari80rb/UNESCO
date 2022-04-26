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
#masthead {
	color: green;
	
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
		  /* img {
           vertical-align: middle;

 width: 100%;
 

        } */
		main{
			  max-width: 1200px;
  margin-inline: auto;
  padding-inline: 1.5rem;
  margin-block: 1.5rem;

		}
		#verdensmaal-sortering {
			padding-bottom: 80px;
		}
		
	/* #projekt-oversigt {
		display: grid;
        grid-template-columns: 1fr 1fr 1fr;
		gap: 20px;
		
		
	} */

	#projekt-oversigt {
		display: grid;
		grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
		grid-gap: 30px;
		background-color: lightgrey;


		
	}
	#projekt-oversigt img {
		padding: 10px;
		object-fit: cover;


	
		/* height: 200px;
		width: 200px; */
		
	}
	.container_article {
		background-color: darkgreen;
		height: 400px;
		/* min-width: 300px;
		max-height: 400px;
		 */
		
	}
	
	.container_article h2 {
		padding: 10px;
	}

	.container_article img{
		width: 400px;
		height: 300px;
		align: center;

	}
	.container_article h2{
		color: white;
		text-align: center;
	}



</style>

<div id="primary" class="content-area">

		<main id="main" class="site-main">
			<h1 id="overskrift">Projekter</h1>
			<p>Her kan du søge på alle skolernes uploadede projekter, og få inspiration til din undevisning.</p>
			

			<section id="verdensmaal-sortering">
				<nav id="filtrering"></nav>
				<h2>Sorter efter verdensmål:</h2>
				<img src="http://mariasattrup.dk/kea/unesco/wp-content/uploads/2022/04/verdensmaal-1.jpg" alt="">
			</section>

			
		<section id="projekt-oversigt">
			
<template>
				<article class="container_article">
					
					<h2></h2>
					<img src="" alt="">
					<p></p>
</article>
</template>
</section>
	
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
const caturl = "http://mariasattrup.dk/kea/unesco/wp-json/wp/v2/categories";

let categories;

async function getJson() {
	console.log("getJson");
	let response = await fetch(url); 
	// const catdata = await fetch(caturl);

	projekt = await response.json();
	// categories = await catdata.json();
	console.log(categories);
	visProjekter();
	// opretknapper();
} 
// function opretknapper(){
// 	categories.forEach(cat =>{
// 		document.querySelector("#filtrering").innerHTML += `<button class="filter" data-projekt="${cat._id}">${cat.name}</button>`}
// 		)

// 	}
// }

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
