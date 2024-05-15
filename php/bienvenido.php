<?php
session_start();
if(($_SESSION["usuario"])!=''){
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  
    
 


  


  <title>bienvenido</title>
</head>
<body>

<br>
<br>
<br>
  <a href="cerrar_sesion.php" class="btn">Salir</a>
<style>
  .btn{
    background: #f5353d;
    padding: 10px 30px;
    color: white;
    border-radius: 20px;
    position: relative;
    left: 1000px;
  }
</style>



</div>


<body>
    <section class="menu">
        <a class="menu-item active" id="about"> <i class="fas fa-user"></i> About</a>
        <a class="menu-item" id="skills"> <i class="fas fa-feather-alt"></i> Skills</a>
        <a class="menu-item" id="resume"> <i class="fas fa-list-alt"></i> Resume</a>
        <a class="menu-item" id="works"> <i class="fas fa-tasks"></i> Works</a>
    </section>

    <section class="profile">
        <div class="img-container"></div>
        <div class="profile-body">
            <p class="name">Marc McGrew</p>
            <p class="role">UI/UX Developer</p>
            <div class="socials">
                <a href="#"><i class="fab fa-youtube"></i></a>
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                <a href="#"><i class="fab fa-github"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
            </div>
        </div>
        <div class="actions">
            <button>Download cv</button>
            <button>Contact me</button>
        </div>
    </section>

    <section class="main">

        <section class="asset split about" id="about-section">
            <p class="title section-item"><span>About</span> me</p>
            <div class="asset-body">
                <div class="section-item">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestias quod soluta similique,
                        perspiciatis laudantium officia architecto inventore cupiditate explicabo praesentium.</p>
                </div>
                <div class="section-item">
                    <div class="item">
                        <label>Age <span>.....</span></label>
                        <p class="value">36</p>
                    </div>
                    <div class="item">
                        <label>Country <span>.....</span></label>
                        <p class="value">Italy</p>
                    </div>
                    <div class="item">
                        <label>Remote <span>.....</span></label>
                        <p class="value">Available</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="asset">
            <p class="title section-item"><span>Main</span> Domains</p>
            <div class="asset-body">
                <div class="domains section-item">

                    <div class="domain-item">
                        <i class="fas fa-paint-brush"></i>
                        <p class="domain-name">UX/UI</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                    <div class="domain-item">
                        <i class="fas fa-code"></i>
                        <p class="domain-name">Frontend Dev</p>
                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                    </div>
                    <div class="domain-item">
                        <i class="fas fa-server"></i>
                        <p class="domain-name">Backend Dev</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>

                </div>
            </div>
        </section>

        <section class="asset split" id="skills-section">
            <p class="title section-item"><span>S</span>kills</p>
            <div class="asset-body">
                <div class="section-item">
                    <p class="title"><i class="fas fa-code"></i>CODING</p>
                    <ul>
                        <li><i class="fas fa-check"></i>HTML</li>
                        <li><i class="fas fa-check"></i>CSS</li>
                        <li><i class="fas fa-check"></i>Javascript</li>
                        <li><i class="fas fa-check"></i>React Js</li>
                        <li><i class="fas fa-check"></i>Angular</li>
                        <li><i class="fas fa-check"></i>Unit Testing</li>
                        <li><i class="fas fa-check"></i>Jest and Mocha</li>
                        <li><i class="fas fa-check"></i>React-Testing-Library</li>
                        <li><i class="fas fa-check"></i>Design Patterns</li>
                    </ul>
                </div>
                <div class="section-item">
                    <p class="title"><i class="fas fa-tools"></i>TOOLS</p>
                    <ul>
                        <li class="ide"><i class="fas fa-check"></i>VS Code</li>
                        <li class="ide"><i class="fas fa-check"></i>Visual Studio</li>
                        <li class="ide"><i class="fas fa-check"></i>Atom</li>
                        <li class="ui"><i class="fas fa-check"></i>Xd</li>
                        <li class="ui"><i class="fas fa-check"></i>Figma</li>
                        <li class="ui"><i class="fas fa-check"></i>Illustrator</li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="asset split" id="resume-section">
            <p class="title section-item"><span>R</span>esume</p>
            <div class="asset-body">

                <div class="section-item">
                    <p class="title">EXPERIENCE</p>
                    <div class="section-sub-item">
                        <p class="time current">2018 - Present</p>
                        <p class="item-name">Frontend Developer</p>
                        <p class="additional-info">SysTech Inc.</p>
                        <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta, enim.
                        </p>
                    </div>
                    <div class="section-sub-item">
                        <p class="time">2015 - 2018</p>
                        <p class="item-name">Full-Stack Developer</p>
                        <p class="additional-info">Axiom Inc.</p>
                        <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat,
                            consequuntur!</p>
                    </div>
                    <div class="section-sub-item">
                        <p class="time">2014- 2015</p>
                        <p class="item-name">UI/UX Developer</p>
                        <p class="additional-info">Axiom Inc.</p>
                        <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat,
                            consequuntur!</p>
                    </div>
                </div>

                <div class="section-item">
                    <p class="title">EDUCATION</p>
                    <div class="section-sub-item">
                        <p class="time">2010 - 2015</p>
                        <p class="item-name">Design University</p>
                        <p class="additional-info">New York</p>
                        <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                    <div class="section-sub-item">
                        <p class="time">2005 - 2018</p>
                        <p class="item-name">CodeCad Scool</p>
                        <p class="additional-info">Los Angeles</p>
                        <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat,
                            consequuntur!</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="asset" id="works-section">
            <p class="title section-item"><span>Recent</span> Projects</p>
            <div class="asset-body grid">

                <div class="work-item">
                    <div class="img-content">
                        <img src="./images/proj1.jpg" alt="project image">
                        <a href="#" class="more-overlay">More Info...</a>
                    </div>
                    <p class="project-name">MyFood App</p>
                </div>

                <div class="work-item">
                    <div class="img-content">
                        <img src="./images/proj2.jpg" alt="project image">
                        <a href="#" class="more-overlay">More Info...</a>
                    </div>
                    <p class="project-name">Iot App</p>
                </div>

                <div class="work-item">
                    <div class="img-content">
                        <img src="./images/proj3.jpg" alt="project image">
                        <a href="#" class="more-overlay">More Info...</a>
                    </div>
                    <p class="project-name">Music Recognition App</p>
                </div>

                <div class="work-item">
                    <div class="img-content">
                        <img src="./images/proj4.jpg" alt="project image">
                        <a href="#" class="more-overlay">More Info...</a>
                    </div>
                    <p class="project-name">Music Recognition App</p>
                </div>

                <div class="work-item">
                    <div class="img-content">
                        <img src="./images/proj5.jpg" alt="project image">
                        <a href="#" class="more-overlay">More Info...</a>
                    </div>
                    <p class="project-name">Music Recognition App</p>
                </div>
            </div>
        </section>

    </section>


    <script>
        var aboutSection = document.getElementById("about-section");
        var skillsSection = document.getElementById("skills-section");
        var resumeSection = document.getElementById("resume-section");
        var worksSection = document.getElementById("works-section");

        const menuLinks = document.querySelectorAll('.menu .menu-item');
        menuLinks.forEach(el => {
            el.addEventListener('click', function () {

                let sectionToGo = aboutSection;

                switch (this.id) {
                    case 'skills':
                        sectionToGo = skillsSection;
                        break;
                    case 'resume':
                        sectionToGo = resumeSection;
                        break;
                    case 'works':
                        sectionToGo = worksSection;
                        break;
                }
                // Scroll smoothly to section
                sectionToGo.scrollIntoView({behavior: 'smooth'});
            })
        })

    </script>

<style>
    html{
    -webkit-text-size-adjust: 100%;
    -ms-text-size-adjust: 100%;
    text-size-adjust: 100%;
    line-height: 1.4;

}

* {
    margin: 0;
    padding: 0;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
body {
    color: #404040;
    font-family: "Arial", Segoe UI, Tahoma, sans-serifl, Helvetica Neue, Helvetica;

}
.seccion-perfil-usuario .perfil-usuario-body,
.seccion-perfil-usuario {
    display: flex;
    flex-wrap: wrap;
    flex-direction: column;
    align-items: center;
}

/*Color del fondo*/
.seccion-perfil-usuario .perfil-usuario-header {
    width: 100%;
    display: flex;
    /* Cuadro del centro, se alinea y se da color*/
    justify-content: center;
    background: linear-gradient(#ff7373, transparent);
    margin-bottom: 1.25rem;
}
/**/
.seccion-perfil-usuario .perfil-usuario-portada {
    display: block;
    position: relative;
    width: 90%;
    height: 17rem;
    /*Color del degradado */
    background: linear-gradient(45deg, #ff3c3c, #31b3ff);
    border-radius: 0 0 20px 20px;
}

.seccion-perfil-usuario .perfil-usuario-portada .boton-portada {
    position: absolute;
    top: 1rem;
    right: 1rem;
    border: 0;
    border-radius: 8px;
    padding: 12px 25px;
    background-color: rgba(0, 0, 0, .5);
    color: #fff;
    cursor: pointer;
}

.seccion-perfil-usuario .perfil-usuario-portada .boton-portada i {
    margin-right: 1rem;
}

.seccion-perfil-usuario .perfil-usuario-avatar {
    display: flex;
    width: 180px;
    height: 180px;
    align-items: center;
    justify-content: center;
    border: 7px solid #FFFFFF;
    background-color: #DFE5F2;
    border-radius: 50%;
    box-shadow: 0 0 12px rgba(0, 0, 0, .2);
    position: absolute;
    bottom: -40px;
    left: calc(50% - 90px);
    z-index: 1;
}

.seccion-perfil-usuario .perfil-usuario-avatar img {
    width: 100%;
    position: relative;
    border-radius: 100%;
}

.seccion-perfil-usuario .perfil-usuario-avatar .boton-avatar {
    position: absolute;
    left: -2px;
    top: -2px;
    border: 0;
    background-color: #fff;
    box-shadow: 0 0 12px rgba(0, 0, 0, .2);
    width: 45px;
    height: 45px;
    border-radius: 50%;
    cursor: pointer;
}

.seccion-perfil-usuario .perfil-usuario-body {
    width: 70%;
    position: relative;
    max-width: 750px;
}

.seccion-perfil-usuario .perfil-usuario-body .titulo {
    display: block;
    width: 100%;
    font-size: 1.75em;
    margin-bottom: 0.5rem;
}

.seccion-perfil-usuario .perfil-usuario-body .texto {
    color: #848484;
    font-size: 0.95em;
}

.seccion-perfil-usuario .perfil-usuario-footer,
.seccion-perfil-usuario .perfil-usuario-bio {
    display: flex;
    flex-wrap: wrap;
    padding: 1.5rem 2rem;
    box-shadow: 0 0 12px rgba(0, 0, 0, .2);
    background-color: #fff;
    border-radius: 15px;
    width: 100%;
}

.seccion-perfil-usuario .perfil-usuario-bio {
    margin-bottom: 1.25rem;
    text-align: center;
}

.seccion-perfil-usuario .lista-datos {
    width: 50%;
    list-style: none;
}

.seccion-perfil-usuario .lista-datos li {
    padding: 5px 0;
}

.seccion-perfil-usuario .lista-datos li>.icono {
    margin-right: 1rem;
    font-size: 1.2rem;
    vertical-align: middle;
}

.seccion-perfil-usuario .redes-sociales {
    position: absolute;
    right: calc(0px - 50px - 1rem);
    top: 0;
    display: flex;
    flex-direction: column;
}

.seccion-perfil-usuario .redes-sociales .boton-redes {
    border: 0;
    background-color: #fff;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    color: #fff;
    box-shadow: 0 0 12px rgba(0, 0, 0, .2);
    font-size: 1.3rem;
}

.seccion-perfil-usuario .redes-sociales .boton-redes+.boton-redes {
    margin-top: .5rem;
}

.seccion-perfil-usuario .boton-redes.facebook {
    background-color: #5955FF;
}

.seccion-perfil-usuario .boton-redes.twitter {
    background-color: #35E1BF;
}

.seccion-perfil-usuario .boton-redes.instagram {
    background: linear-gradient(45deg, #FF2DFD, #40A7FF);
}

/* adactacion a dispositivos */
@media (max-width: 750px) {
    .seccion-perfil-usuario .lista-datos {
        width: 100%;
    }

    .seccion-perfil-usuario .perfil-usuario-portada,
    .seccion-perfil-usuario .perfil-usuario-body {
        width: 95%;
    }

    .seccion-perfil-usuario .redes-sociales {
        position: relative;
        flex-direction: row;
        width: 100%;
        left: 0;
        text-align: center;
        margin-top: 1rem;
        margin-bottom: 1rem;
        align-items: center;
        justify-content: center
    }

    .seccion-perfil-usuario .redes-sociales .boton-redes+.boton-redes {
        margin-left: 1rem;
        margin-top: 0;
    }
}

/**********************************/


#portfolio {
  background: #fff;
  padding: 80px 0;
}

#portfolio .portfolio-item {
  background-position: center center;
  background-size: cover;
  background-repeat: no-repeat;
  position: relative;
  height: 50px;
  width: 50%;
  display: table;
  overflow: hidden;
  margin-bottom: 20px;
}

#portfolio .portfolio-item .details {
  height: 260px;
  background: #fff;
  display: table-cell;
  vertical-align: middle;
  opacity: 0;
  transition: 0.3s;
  text-align: center;
}

#portfolio .portfolio-item .details h4 {
  font-size: 16px;
  transition: opacity 0.3s, -webkit-transform 0.3s;
  transition: transform 0.3s, opacity 0.3s;
  transition: transform 0.3s, opacity 0.3s, -webkit-transform 0.3s;
  -webkit-transform: translate3d(0, -15px, 0);
  transform: translate3d(0, -15px, 0);
  font-weight: 700;
  color: #333333;
}

#portfolio .portfolio-item .details span {
  display: block;
  color: #666666;
  font-size: 13px;
  transition: opacity 0.3s, -webkit-transform 0.3s;
  transition: transform 0.3s, opacity 0.3s;
  transition: transform 0.3s, opacity 0.3s, -webkit-transform 0.3s;
  -webkit-transform: translate3d(0, 15px, 0);
  transform: translate3d(0, 15px, 0);
}

#portfolio .portfolio-item:hover .details {
  opacity: 0.8;
}

#portfolio .portfolio-item:hover .details h4 {
  -webkit-transform: translate3d(0, 0, 0);
  transform: translate3d(0, 0, 0);
}

#portfolio .portfolio-item:hover .details span {
  -webkit-transform: translate3d(0, 0, 0);
  transform: translate3d(0, 0, 0);
}







</style>



</body>
</html>

<?php 
}else{
  header("Location: ../inde.php.html");
}

?>
