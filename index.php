<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Letícia Ramos | Programmer</title>
    <link rel="icon" href="images/favicon.ico">
    <link rel="stylesheet" href="media.css">
</head>
<body>
    <header>
       <nav>
  <div class="logo">Byte</div>

  <!-- Botão hamburguer (visível só no mobile) -->
  <button class="menu-toggle" id="menu-toggle">☰</button>

  <!-- Links desktop -->
  <ul class="nav-links">
    <li><a href="#home">Home</a></li>
    <li><a href="#about">Sobre</a></li>
    <li><a href="#contact">Contato</a></li>
  </ul>
</nav>

<!-- Sidebar (mobile) -->
<div class="sidebar" id="sidebar">
  <button class="close-btn" id="close-btn">×</button>
  <ul class="nav-links">
    <li><a href="#home">Home</a></li>
    <li><a href="#about">Sobre</a></li>
    <li><a href="#contact">Contato</a></li>
  </ul>
</div>


    <section id="home" class="hero">
        <div style="display: flex; flex-direction: row; align-items: center; justify-content: center; gap: 2rem;"></div>
            <img class="profile-img" src="images/profile-img-second.png" alt="Google Logo">
            <div class="home">
                <h1>Letícia Ramos</h1>
                <p>Programadora Júnior, com experiência em suporte técnico e desenvolvimento de sistemas de gestão empresarial, atuando na criação de soluções utilizando PHP, CodeIgniter 4, MySQL, HTML e CSS.
                Busco aprimorar continuamente minhas habilidades em desenvolvimento web e contribuir para projetos que unam eficiência técnica, inovação e excelência na experiência do usuário.</p>
                <a href="#contact" class="cta-button">Saiba Mais</a>
            </div>
        </div>
    </section>

    <section id="about" class="about">
        <h2>Sobre mim</h2>
        <div class="cards">
            <div class="card">
                <h3>Serviço 1</h3>
                <p>Descrição breve do nosso primeiro serviço, com foco em inovação e qualidade.</p>
            </div>
            <div class="card">
                <h3>Serviço 2</h3>
                <p>Descrição do segundo serviço, destacando eficiência e resultados.</p>
            </div>
            <div class="card">
                <h3>Serviço 3</h3>
                <p>Nosso terceiro serviço, projetado para atender suas necessidades específicas.</p>
            </div>
        </div>
    </section>

    <section id="contact" class="contact">
        <h2>Entre em Contato</h2>
        <form>
            <input type="text" placeholder="Seu Nome" required>
            <input type="email" placeholder="Seu Email" required>
            <textarea rows="5" placeholder="Sua Mensagem" required></textarea>
            <button type="submit">Enviar</button>
        </form>
    </section>

    <footer>
        <p>&copy; Letícia Ramos.</p>
    </footer>

    <script>
        // Animações no scroll usando Intersection Observer
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate');
                }
            });
        }, observerOptions);

        // Observa os cards
        document.querySelectorAll('.card').forEach(card => {
            observer.observe(card);
        });

        // Smooth scroll para links de navegação
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Header fixo com transparência no scroll
        window.addEventListener('scroll', () => {
            const header = document.querySelector('header');
            if (window.scrollY > 100) {
                header.style.background = 'rgba(0, 0, 0, 0.95)';
            } else {
                header.style.background = 'rgba(0, 0, 0, 0.9)';
            }
        });

        // Envio formulario de contato
        document.querySelector('form').addEventListener('submit', (e) => {
            e.preventDefault();
            alert('Mensagem enviada! (Simulação - adicione PHP para backend real.)');
        });
    </script>
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Arial', sans-serif;
            background-color: #000000; 
            color: #ffffff;
            line-height: 1.6;
            overflow-x: hidden;
        }
        a {
            text-decoration: none;
            color: #0074D9; 
        }
        a:hover {
            color: #ffffffff;
        }

        header {
            position: fixed;
            top: 0;
            width: 100%;
            background: rgba(0, 0, 0, 0.9);
            padding: 1rem 0;
            z-index: 1000;
            transition: background 0.3s;
        }
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }
        .logo {
            font-size: 1.5rem;
            font-weight: bold;
            color: #0074D9;
        }

        

        .profile-img {
    width: 350px;
    height: 350px;
    object-fit: cover;
    border-radius: 100%;
    border: 3px solid #0074D9;
    background: #fff;
    box-shadow: 0 4px 16px rgba(0, 116, 217, 0.2);
    display: block;
    margin-bottom: 2rem;
}


        .home {
            margin-left: 3pc;
            margin-right: 2pc;
        }

        .nav-links {
            display: flex;
            list-style: none;
            gap: 2rem;
        }
        .nav-links li a {
            transition: color 0.3s;
        }

        /* Botão hamburguer (só aparece no mobile) */
        .menu-toggle {
        display: none;
        background: none;
        border: none;
        color: #0074D9;
        font-size: 2rem;
        cursor: pointer;
}

/* Sidebar oculto por padrão */
.sidebar {
  position: fixed;
  top: 0;
  right: -100%;
  width: 70%;
  height: 100%;
  background: rgba(0, 0, 0, 0.95);
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  transition: right 0.3s ease;
  z-index: 2000;
}

/* Quando ativo */
.sidebar.active {
  right: 0;
}

/* Botão de fechar */
.close-btn {
  position: absolute;
  top: 20px;
  right: 25px;
  background: none;
  border: none;
  color: #0074D9;
  font-size: 2rem;
  cursor: pointer;
}

/* Links do sidebar */
.sidebar .nav-links {
  list-style: none;
  display: flex;
  flex-direction: column;
  gap: 5rem;
  text-align: center;
}

.sidebar .nav-links a {
  color: #fff;
  font-size: 1.5rem;
}

/* Mostrar menu hamburguer no mobile */
        @media (max-width: 768px) {
            .menu-toggle {
                display: block;
            }
            .nav-links {
                display: none;
            }
        }


        .hero {
            height: 100vh;
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            text-align: center;
            background: linear-gradient(135deg, #001F3F, #000000);
            position: relative;
        }
        .hero h1 {
            font-size: 3rem;
            margin-bottom: 1rem;
            opacity: 0;
            transform: translateY(50px);
            animation: fadeInUp 1s ease-out 0.5s forwards;
        }
        .hero p {
            font-size: 1.2rem;
            max-width: 600px;
            opacity: 0;
            transform: translateY(50px);
            animation: fadeInUp 1s ease-out 1s forwards;
        }
        .cta-button {
            display: inline-block;
            margin-top: 2rem;
            padding: 1rem 2rem;
            background: #0074D9;
            color: #000000;
            border-radius: 5px;
            transition: background 0.3s, transform 0.3s;
            opacity: 0;
            transform: translateY(50px);
            animation: fadeInUp 1s ease-out 1.5s forwards;
        }
        .cta-button:hover {
            background: #001F3F;
            transform: scale(1.05);
        }
       
        .about {
            padding: 5rem 2rem;
            max-width: 1200px;
            margin: 0 auto;
            text-align: center;
        }
        .about h2 {
            font-size: 2.5rem;
            margin-bottom: 3rem;
            color: #0074D9;
        }
        .cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }
        .card {
            background: rgba(0, 116, 217, 0.1); 
            padding: 2rem;
            border-radius: 10px;
            border: 1px solid #0074D9;
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease;
        }
        .card.animate {
            opacity: 1;
            transform: translateY(0);
        }
        .card:hover {
            background: rgba(0, 116, 217, 0.2);
            transform: translateY(-10px);
        }

        
        .contact {
            padding: 5rem 2rem;
            background: #001F3F; 
            text-align: center;
        }
        .contact h2 {
            font-size: 2.5rem;
            margin-bottom: 2rem;
            color: #0074D9;
        }
        form {
            max-width: 600px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }
        input, textarea {
            padding: 1rem;
            border: 1px solid #0074D9;
            border-radius: 5px;
            background: #000000;
            color: #ffffff;
        }
        button {
            padding: 1rem;
            background: #0074D9;
            color: #000000;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s;
        }
        button:hover {
            background: #001F3F;
        }

    
        footer {
            padding: 2rem;
            text-align: center;
            background: #000000;
            border-top: 1px solid #0074D9;
        }

        /* Responsivo */
        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }
            .hero h1 {
                font-size: 2rem;
            }

            .hero {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                text-align: center;
            }

            .profile-img {
                width: 10pc;
                height: 10pc;
                object-fit: cover;
                border-radius: 50%;
                border: 3px solid #0074D9;
                background: #fff;
                box-shadow: 0 4px 16px rgba(0, 116, 217, 0.2);
                margin-bottom: 2rem;
            }
        }
    </style>

    <script>
    const menuToggle = document.getElementById("menu-toggle");
    const sidebar = document.getElementById("sidebar");
    const closeBtn = document.getElementById("close-btn");

    // Abre o sidebar
    menuToggle.addEventListener("click", () => {
    sidebar.classList.add("active");
    });

    // Fecha no botão X
    closeBtn.addEventListener("click", () => {
    sidebar.classList.remove("active");
    });

    // Fecha ao clicar em qualquer link do sidebar
    const sidebarLinks = sidebar.querySelectorAll("a");
    sidebarLinks.forEach(link => {
    link.addEventListener("click", () => {
    sidebar.classList.remove("active");
    });
});

</script>
</body>
</html>