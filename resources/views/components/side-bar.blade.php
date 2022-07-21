@extends('layout')

@section('content')
<header class="header" id="header">
    <div class="header__toggle">
        <i class='bx bx-menu' id="header-toggle"></i>
    </div>
    <center>
        <h1>Presence App</h1>
    </center>

    <div class="header__img">
        <img src="assets/img/perfil.jpg" alt="">
    </div>
</header>

<div class="l-navbar" id="nav-bar">
    <nav class="nav">
        <div>
            <a href="#" class="nav__logo">
                <i class='bx bx-layer nav__logo-icon'></i>
                <span class="nav__logo-name">course</span>
            </a>

            <div class="nav__list">
                <a href="#" class="nav__link active">
                <i class='bx bx-grid-alt nav__icon' ></i>
                    <span class="nav__name">Dashboard</span>
                </a>

                <a href="#" class="nav__link">
                    <i class='bx bx-user nav__icon' ></i>
                    <span class="nav__name">Users</span>
                </a>

                <a href="#" class="nav__link">
                    <i class='bx bx-message-square-detail nav__icon' ></i>
                    <span class="nav__name">Absences</span>
                </a>

                <a href="#" class="nav__link">
                    <i class='bx bx-bookmark nav__icon' ></i>
                    <span class="nav__name">Favorites</span>
                </a>

                <a href="#" class="nav__link">
                    <i class='bx bx-folder nav__icon' ></i>
                    <span class="nav__name">Suivie</span>
                </a>

                <a href="#" class="nav__link">
                    <i class='bx bx-bar-chart-alt-2 nav__icon' ></i>
                    <span class="nav__name">Upcoming</span>
                </a>
            </div>
        </div>

        <a href="#" class="nav__link">
            <i class='bx bx-log-out nav__icon' ></i>
            <span class="nav__name">Log Out</span>
        </a>

    </nav>
</div>





<style>
    @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap');
/*===== GOOGLE FONTS =====*/
/*===== VARIABLES CSS =====*/
 :root {
	 --header-height: 3rem;
	 --nav-width: 68px;
	/*===== Colors =====*/
	 --first-color: #4723d9;
	 --first-color-light: #afa5d9;
	 --white-color: #f7f6fb;
	/*===== Font and typography =====*/
	 --body-font: 'Nunito', sans-serif;
	 --normal-font-size: 1rem;
	/*===== z index =====*/
	 --z-fixed: 100;
}
/*===== BASE =====*/
 *, ::before, ::after {
	 box-sizing: border-box;
}
 body {
	 position: relative;
	 margin: var(--header-height) 0 0 0;
	 padding: 0 1rem;
	 font-family: var(--body-font);
	 font-size: var(--normal-font-size);
	 transition: 0.5s;
}
 a {
	 text-decoration: none;
}
/*===== HEADER =====*/
 .header {
	 width: 100%;
	 height: var(--header-height);
	 position: fixed;
	 top: 0;
	 left: 0;
	 display: flex;
	 align-items: center;
	 justify-content: space-between;
	 padding: 0 1rem;
	 background-color: var(--white-color);
	 z-index: var(--z-fixed);
	 transition: 0.5s;
}
 .header__toggle {
	 color: var(--first-color);
	 font-size: 1.5rem;
	 cursor: pointer;
}
 .header__img {
	 width: 35px;
	 height: 35px;
	 display: flex;
	 justify-content: center;
	 border-radius: 50%;
	 overflow: hidden;
}
 .header__img img {
	 width: 40px;
}
/*===== NAV =====*/
 .l-navbar {
	 position: fixed;
	 top: 0;
	 left: -30%;
	 width: var(--nav-width);
	 height: 100vh;
	 background-color: var(--first-color);
	 padding: 0.5rem 1rem 0 0;
	 transition: 0.5s;
	 z-index: var(--z-fixed);
}
 .nav {
	 height: 100%;
	 display: flex;
	 flex-direction: column;
	 justify-content: space-between;
	 overflow: hidden;
}
 .nav__logo, .nav__link {
	 display: grid;
	 grid-template-columns: max-content max-content;
	 align-items: center;
	 column-gap: 1rem;
	 padding: 0.5rem 0 0.5rem 1.5rem;
}
 .nav__logo {
	 margin-bottom: 2rem;
}
 .nav__logo-icon {
	 font-size: 1.25rem;
	 color: var(--white-color);
}
 .nav__logo-name {
	 color: var(--white-color);
	 font-weight: 700;
}
 .nav__link {
	 position: relative;
	 color: var(--first-color-light);
	 margin-bottom: 1.5rem;
	 transition: 0.3s;
}
 .nav__link:hover {
	 color: var(--white-color);
}
 .nav__icon {
	 font-size: 1.25rem;
}
/*Show navbar movil*/
 .show {
	 left: 0;
}
/*Add padding body movil*/
 .body-pd {
	 padding-left: calc(var(--nav-width) + 1rem);
}
/*Active links*/
 .active {
	 color: var(--white-color);
}
 .active::before {
	 content: '';
	 position: absolute;
	 left: 0;
	 width: 2px;
	 height: 32px;
	 background-color: var(--white-color);
}
/* ===== MEDIA QUERIES=====*/
 @media screen and (min-width: 768px) {
	/*Show navbar desktop*/
	/*Add padding body desktop*/
	 body {
		 margin: calc(var(--header-height) + 1rem) 0 0 0;
		 padding-left: calc(var(--nav-width) + 2rem);
	}
	 .header {
		 height: calc(var(--header-height) + 1rem);
		 padding: 0 2rem 0 calc(var(--nav-width) + 2rem);
	}
	 .header__img {
		 width: 40px;
		 height: 40px;
	}
	 .header__img img {
		 width: 45px;
	}
	 .l-navbar {
		 left: 0;
		 padding: 1rem 1rem 0 0;
	}
	 .show {
		 width: calc(var(--nav-width) + 156px);
	}
	 .body-pd {
		 padding-left: calc(var(--nav-width) + 188px);
	}
}

</style>

<script>
    /*===== SHOW NAVBAR  =====*/
const showNavbar = (toggleId, navId, bodyId, headerId) =>{
    const toggle = document.getElementById(toggleId),
    nav = document.getElementById(navId),
    bodypd = document.getElementById(bodyId),
    headerpd = document.getElementById(headerId)

    // Validate that all variables exist
    if(toggle && nav && bodypd && headerpd){
        toggle.addEventListener('click', ()=>{
            // show navbar
            nav.classList.toggle('show')
            // change icon
            toggle.classList.toggle('bx-x')
            // add padding to body
            bodypd.classList.toggle('body-pd')
            // add padding to header
            headerpd.classList.toggle('body-pd')
        })
    }
}

showNavbar('header-toggle','nav-bar','body-pd','header')

/*===== LINK ACTIVE  =====*/
const linkColor = document.querySelectorAll('.nav__link')

function colorLink(){
    if(linkColor){
        linkColor.forEach(l=> l.classList.remove('active'))
        this.classList.add('active')
    }
}
// linkColor.forEach(l=> l.addEventListener('click', colorLink))

</script>

@endsection

