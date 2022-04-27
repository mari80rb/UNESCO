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

.site-title {
	background-image: url(http://mariasattrup.dk/kea/unesco/wp-content/uploads/2022/04/cropped-logohvid.webp);
	aspect-ratio: 354/208;
	position: fixed;
	image-size:
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
	/* display: grid;
	grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr;
	grid-template-rows: 1fr 1fr 1fr;
	grid-gap: 10px; */

		display: grid;
		grid-template-columns: repeat(auto-fill, minmax(100px, 1fr));
		grid-gap: 10px;
		max-width: 1000px;
		margin-inline: auto;
		padding-bottom: 50px;
}
/* display: grid;
		grid-template-columns: repeat(6, 150px);
		gap: 20px;
} */
#verdensmaal-knapper img{
	object-fit: cover;
	max-width: 100px;
	align: center;
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

.site-footer {
	background-color: lightgrey;
}

</style>

<div id="primary" class="content-area">

		<main id="main" class="site-main">
			<h1 id="overskrift">Projekter</h1>
			<p>Her kan du søge på alle skolernes uploadede projekter, og få inspiration til din undervisning.</p>
			<h2>Sorter efter verdensmål:</h2>
			<nav id="filtrering"><img data-projekt src="" alt=""></nav>
			<section id="verdensmaal-knapper">
	

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
	visProjekter(filter);
	opretknapper();
	addEventListenersToButtons();

	
} 

function addEventListenersToButtons() {
	// console.log("addEventListenersToButtons");
	// console.log(document.querySelectorAll("#filtrering img"));
	document.querySelectorAll("#verdensmaal-knapper img").forEach(elm => {
		elm.addEventListener("click", filtrerProjekter);
	})
}
// function filtrering(){
// 	filter = this.dataset.maal;
// 	document.querySelector("h2").textContent = this.textContent;
// 	document.querySelectorAll(".filter").forEach(elm => {
// 		elm.classList.remove("valgt");
// 	}) 
// 	this.classList.add("valgt");
// 	visProjekter();
	
// }


function opretknapper(){
	// console.log(verdensmaal);
	verdensmaal.forEach( function (vm){
		document.querySelector("#verdensmaal-knapper").innerHTML += `<img class="filter" data-projekt="${vm.id}" src="${vm.verdensmlslogobillede.guid}"></img>`;
		// console.log(vm);
	})
		
		addEventListenersToButtons();
	}

function visProjekter(filter) {
		console.log("visProjekter");
	console.log(projekt);
	liste.innerHTML = "";
	projekt.forEach(elm => {
		console.log(filter);
		console.log(elm.verdensml);
		console.log(parseInt(filter));
		console.log(elm.verdensml.includes(parseInt(filter)));
		if (elm.verdensml.includes(parseInt(filter)) || filter == "alle") {
		console.log("foreach kører på projekter");
		const klon = skabelon.cloneNode(true).content;
		klon.querySelector("h2").textContent = elm.title.rendered;
		klon.querySelector("img").src = elm.billede.guid;

		klon.querySelector("article").addEventListener("click", () => {location.href = elm.link;
		})
	

		//apppend klon til #projekt-oversigt
		// const beholder = document.querySelector("#projekt-oversigt");
		liste.appendChild(klon);
	}})
}

function filtrerProjekter() {
	filter = this.dataset.projekt;
	projekt.forEach(elm => {
		console.log(elm.verdensml);
	})
	console.log(filter);
	visProjekter(filter);
}
</script>
		

		
	</div><!-- #primary -->

<?php
get_footer();
