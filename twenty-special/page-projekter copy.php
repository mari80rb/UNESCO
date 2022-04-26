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
.site-title p, a {
	display: none;
}

.site-title {
	background-image: url(http://mariasattrup.dk/kea/unesco/wp-content/uploads/2022/04/cropped-logohvid.webp);
}
@font-face {
	font-family: lato;
	src: url(lato-bold-webfont.woff2);
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

#verdensmaal-knapper{
	display: grid;
	grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr;
	grid-template-rows: 1fr 1fr 1fr;
	grid-gap: 10px;
}
#verdensmaal-knapper img{
	object-fit: cover;
	max-width: 100px;
}
	
		main {
			  max-width: 1200px;
			   padding-inline: 1.5rem;
		  margin-block: 1.5rem;
		   margin-inline: auto;
 
 
 

		}
		#verdensmaal-sortering {
			padding-bottom: 80px;
		}
		


	#projekt-oversigt {
		display: grid;
		grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
		grid-gap: 30px;
		
		  
		


		
	}
	#projekt-oversigt img {
		padding: 10px;
		object-fit: cover;


	
	}
	.container_article {
		border: 2px solid black;
		/* background-color: darkgreen; */
		height: 400px;

	
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
		color: grey;
		text-align: center;
	}



</style>

<div id="primary" class="content-area">

		<main id="main" class="site-main">
			<h1 id="overskrift">Projekter</h1>
			<p>Her kan du søge på alle skolernes uploadede projekter, og få inspiration til din undervisning.</p>
			<h2>Sorter efter verdensmål:</h2>
			<section id="verdensmaal-knapper">
			<img class="filter" src="http://mariasattrup.dk/kea/unesco/wp-content/uploads/2022/04/Verdensmaal-ikon-01.webp" data-maal="13" alt="verdensmaal_01">
			<img class="filter" src="http://mariasattrup.dk/kea/unesco/wp-content/uploads/2022/04/Verdensmaal-ikon-02.webp" data-maal="12"alt="verdenmaal_02">
			<img class="filter" src="http://mariasattrup.dk/kea/unesco/wp-content/uploads/2022/04/Verdensmaal-ikon-03.webp" data-maal="14"alt="verdensmaal_03">
			<img class="filter" src="http://mariasattrup.dk/kea/unesco/wp-content/uploads/2022/04/Verdensmaal-ikon-04.webp" data-maal="15"alt="verdensmaal_04">
			<img class="filter" src="http://mariasattrup.dk/kea/unesco/wp-content/uploads/2022/04/Verdensmaal-ikon-05.webp" data-maal="16"alt="verdenmaal_05">
			<img class="filter" src="http://mariasattrup.dk/kea/unesco/wp-content/uploads/2022/04/Verdensmaal-ikon-06.webp" data-maal="17"alt="verdenmaal_06">
			<img class="filter" src="http://mariasattrup.dk/kea/unesco/wp-content/uploads/2022/04/Verdensmaal-ikon-07.webp" data-maal="18"alt="verdenmaal_07">
			<img class="filter" src="http://mariasattrup.dk/kea/unesco/wp-content/uploads/2022/04/Verdensmaal-ikon-08.webp" data-maal="19"alt="verdenmaal_08">
			<img class="filter" src="http://mariasattrup.dk/kea/unesco/wp-content/uploads/2022/04/Verdensmaal-ikon-09.webp" data-maal="20"alt="verdensmaal_09">
			<img class="filter" src="http://mariasattrup.dk/kea/unesco/wp-content/uploads/2022/04/Verdensmaal-ikon-10.webp" data-maal="21"alt="verdensmaal_10">
			<img class="filter" src="http://mariasattrup.dk/kea/unesco/wp-content/uploads/2022/04/Verdensmaal-ikon-11.webp" data-maal="22"alt="verdensmaal_11">
			<img class="filter" src="http://mariasattrup.dk/kea/unesco/wp-content/uploads/2022/04/Verdensmaal-ikon-12.webp" data-maal="23"alt="verdensmaal_12">
			<img class="filter" src="http://mariasattrup.dk/kea/unesco/wp-content/uploads/2022/04/Verdensmaal-ikon-13.webp" data-maal="24"alt="verdensmaal_13">
			<img class="filter" src="http://mariasattrup.dk/kea/unesco/wp-content/uploads/2022/04/Verdensmaal-ikon-14.webp" data-maal="25"alt="verdensmaal_14">
			<img class="filter" src="http://mariasattrup.dk/kea/unesco/wp-content/uploads/2022/04/Verdensmaal-ikon-15.webp" data-maal="26"alt="verdensmaal_15">
			<img class="filter" src="http://mariasattrup.dk/kea/unesco/wp-content/uploads/2022/04/Verdensmaal-ikon-16.webp" data-maal="27"alt="verdensmaal_16">
			<img class="filter" src="http://mariasattrup.dk/kea/unesco/wp-content/uploads/2022/04/Verdensmaal-ikon-17.webp" data-maal="28"alt="verdenmaal_17">
			<img class="filter valgt" src="http://mariasattrup.dk/kea/unesco/wp-content/uploads/2022/04/FN-Verdensmaal-ikon-logo.webp" data-maal="alle"alt="alle_verdensmaal">

			</section>

			<section id="verdensmaal-sortering">
				<nav id="filtrering"></nav>
				
				
			</section>

			
		<section id="projekt-oversigt"></section>
			
<template>
				<article class="container_article">
					
					<h2></h2>
					<img src="" alt="">
					<p></p>
</article>
</template>

	
</main><!-- #main -->
			<script>


				let projekt;
				
				const liste = document.querySelector("#projekt-oversigt");
				const skabelon = document.querySelector("template");
				let filterProjekt = "alle";
				document.addEventListener("DOMContentLoaded", start);

				function start() {
					console.log("start");
					getJson();
				}



const url = "http://mariasattrup.dk/kea/unesco/wp-json/wp/v2/projekt?per_page=100";
const caturl = "http://mariasattrup.dk/kea/unesco/wp-json/wp/v2/verdensml?per_page=100";

let verdensmaal;
let filter = "alle";


async function getJson() {
	console.log("getJson");
	let response = await fetch(url); 
	const catdata = await fetch(caturl);

	projekt = await response.json();
	verdensmaal = await catdata.json();
	console.log(verdensmaal);
	visProjekter(projekt);
	addEventListenersToButtons();

	const filtrerKnapper = document.querySelectorAll("#verdensmaal-knapper img");
	//filterKnapper.forEach(knap => knap.addEventListener("click", filtrerProjekter));
} 

function addEventListenersToButtons() {
	console.log("addEventListenersToButtons");
	document.querySelectorAll(".filter").forEach(elm => {
		elm.addEventListener("click", filtrering);
	})
}
function filtrering(){
	filter = this.dataset.maal;
	document.querySelector("h2").textContent = this.textContent;
	document.querySelectorAll(".filter").forEach(elm => {
		elm.classList.remove("valgt");
	}) 
	this.classList.add("valgt");
	visProjekter();
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
	liste.textContent = "";
	projekt.forEach(projekt => {
		if (filter == projekt.maal || filter == "alle") {
		console.log("foreach kører på projekter");
		const klon = skabelon.cloneNode(true).content;
		klon.querySelector("h2").textContent = projekt.title.rendered;
		klon.querySelector("img").src = projekt.billede.guid;

		klon.querySelector("article").addEventListener("click", () => {location.href = projekt.link;
		})
	

		//apppend klon til #projekt-oversigt
		// const beholder = document.querySelector("#projekt-oversigt");
		liste.appendChild(klon);
	}})
}

function filtrerProjekter() {
	console.log("filtrerProjekter")
	filter = this.dataset.maal;
	visProjekter();
}
</script>
		

		
	</div><!-- #primary -->

<?php
get_footer();