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

.site-branding-container{
	display: block;
}

#site-navigation img {
	max-width: 130px;
	padding-right: 2%;
	vertical-align: middle;
}

#site-navigation {
	display: block;
}

#site-navigation a {
	color: white;
	font-size: 0.8rem;
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
  font-family: lato;
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
  font-family: lato;
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
  font-family: lato;
}

#verdensmaal-knapper{

		display: grid;
		grid-template-columns: repeat(auto-fill, minmax(100px, 1fr));
		grid-gap: 20px;
		max-width: 1200px;
		margin-inline: auto;
		padding-bottom: 50px;
}

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

		#werdensmaal-knapper img {
			transition: transform .4s;
		}
		#verdensmaal-knapper img:hover {
			transform: scale(1.2);
			curser: pointer;
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
/* .site-info {
	background-image: url(http://mariasattrup.dk/kea/unesco/wp-content/uploads/2022/04/logo1.webp);
	aspect-ratio: 354/208;
	position: fixed;
	
} */

</style>

<div id="primary" class="content-area">

		<main id="main" class="site-main">
			<h1 id="overskrift">Projekter</h1>
			<p>Her kan du søge på alle skolernes uploadede projekter, og få inspiration til din undervisning.</p>
			<h2>Søg på verdensmål:</h2>
			<nav id="filtrering"><img data-projekt src="" alt=""></nav>
			<section id="verdensmaal-knapper">
			
	

			</section>
			<h2 class="kategorititel">Alle verdensmål</h2>
			
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

	document.querySelectorAll("#verdensmaal-knapper img").forEach(elm => {
		elm.addEventListener("click", filtrerProjekter);
	})
}



function opretknapper(){
	
	verdensmaal.forEach( function (vm){
		document.querySelector("#verdensmaal-knapper").innerHTML += `<img class="filter" data-projekt="${vm.id}" name="${vm.name}" src="${vm.verdensmlslogobillede.guid}"></img>`;
	
	})

		addEventListenersToButtons();
	}

function visProjekter(filter) {

	liste.innerHTML = "";
	projekt.forEach(elm => {
		
		console.log(elm.verdensml.includes(parseInt(filter)));
		if (elm.verdensml.includes(parseInt(filter)) || filter == "alle") {
		console.log("foreach kører på projekter");
		const klon = skabelon.cloneNode(true).content;
		klon.querySelector("h2").textContent = elm.title.rendered;
		klon.querySelector("img").src = elm.billede.guid;

		klon.querySelector("article").addEventListener("click", () => {location.href = elm.link;
		})

		liste.appendChild(klon);
	}})
}

function filtrerProjekter() {
	filter = this.dataset.projekt;
	document.querySelector(".kategorititel").textContent = this.getAttribute("name");
	projekt.forEach(elm => {
		console.log(elm.verdensml);
	})

	visProjekter(filter);
}
</script>
		

		
	</div><!-- #primary -->

<?php
get_footer();
