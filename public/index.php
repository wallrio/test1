<?php
declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      name="description"
      content="Essência Perfumaria — fragrâncias exclusivas que revelam quem você é."
    />
    <title>Essência Perfumaria | Fragrâncias Exclusivas</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;1,400&family=Inter:wght@300;400;500;600&display=swap"
      rel="stylesheet"
    />
    <style>
      :root {
        --gold: #b08d57;
        --gold-light: #d4b57a;
        --dark: #141210;
        --dark-2: #1d1a17;
        --cream: #f6f1e7;
        --text: #2a2520;
        --muted: #8a8076;
        --serif: "Cormorant Garamond", Georgia, serif;
        --sans: "Inter", system-ui, sans-serif;
      }

      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }

      html {
        scroll-behavior: smooth;
      }

      body {
        font-family: var(--sans);
        color: var(--text);
        background: var(--cream);
        line-height: 1.6;
        overflow-x: hidden;
      }

      .container {
        max-width: 1180px;
        margin: 0 auto;
        padding: 0 24px;
      }

      /* ---------- Header ---------- */
      header {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        z-index: 50;
        padding: 18px 0;
        transition: background 0.35s ease, box-shadow 0.35s ease;
      }

      header.scrolled {
        background: rgba(20, 18, 16, 0.92);
        backdrop-filter: blur(8px);
        box-shadow: 0 4px 24px rgba(0, 0, 0, 0.25);
      }

      .nav-inner {
        display: flex;
        align-items: center;
        justify-content: space-between;
      }

      .brand {
        font-family: var(--serif);
        font-size: 1.6rem;
        color: #fff;
        letter-spacing: 2px;
        text-decoration: none;
        font-weight: 600;
      }

      .brand span {
        color: var(--gold-light);
      }

      nav ul {
        display: flex;
        gap: 34px;
        list-style: none;
      }

      nav a {
        color: rgba(255, 255, 255, 0.85);
        text-decoration: none;
        font-size: 0.85rem;
        letter-spacing: 1.5px;
        text-transform: uppercase;
        transition: color 0.2s ease;
      }

      nav a:hover {
        color: var(--gold-light);
      }

      .menu-toggle {
        display: none;
        background: none;
        border: none;
        color: #fff;
        font-size: 1.6rem;
        cursor: pointer;
      }

      /* ---------- Hero ---------- */
      .hero {
        position: relative;
        min-height: 100vh;
        display: flex;
        align-items: center;
        background: linear-gradient(
            135deg,
            rgba(20, 18, 16, 0.85) 0%,
            rgba(20, 18, 16, 0.45) 60%,
            rgba(20, 18, 16, 0.75) 100%
          ),
          url("hero.jpg") center/cover no-repeat, var(--dark);
      }

      .hero-content {
        max-width: 640px;
        padding-top: 80px;
      }

      .hero .eyebrow {
        color: var(--gold-light);
        font-size: 0.8rem;
        letter-spacing: 4px;
        text-transform: uppercase;
        margin-bottom: 18px;
      }

      .hero h1 {
        font-family: var(--serif);
        font-weight: 500;
        font-size: clamp(2.6rem, 6vw, 4.4rem);
        line-height: 1.12;
        color: #fff;
        margin-bottom: 22px;
      }

      .hero h1 em {
        font-style: italic;
        color: var(--gold-light);
      }

      .hero p {
        color: rgba(255, 255, 255, 0.82);
        font-size: 1.05rem;
        font-weight: 300;
        max-width: 480px;
        margin-bottom: 34px;
      }

      .btn {
        display: inline-block;
        padding: 15px 38px;
        font-family: var(--sans);
        font-size: 0.85rem;
        letter-spacing: 2px;
        text-transform: uppercase;
        text-decoration: none;
        cursor: pointer;
        border: 1px solid var(--gold);
        transition: all 0.25s ease;
      }

      .btn-gold {
        background: var(--gold);
        color: #fff;
      }

      .btn-gold:hover {
        background: transparent;
        color: var(--gold-light);
      }

      .btn-outline {
        background: transparent;
        color: #fff;
        border-color: rgba(255, 255, 255, 0.5);
        margin-left: 16px;
      }

      .btn-outline:hover {
        border-color: var(--gold-light);
        color: var(--gold-light);
      }

      .hero-badge {
        margin-top: 60px;
        display: flex;
        align-items: center;
        gap: 12px;
        color: rgba(255, 255, 255, 0.7);
        font-size: 0.78rem;
        letter-spacing: 2px;
        text-transform: uppercase;
      }

      .hero-badge::before {
        content: "";
        width: 40px;
        height: 1px;
        background: var(--gold);
      }

      /* ---------- Sections ---------- */
      section {
        padding: 110px 0;
      }

      .section-head {
        text-align: center;
        max-width: 620px;
        margin: 0 auto 64px;
      }

      .section-head .eyebrow {
        color: var(--gold);
        font-size: 0.78rem;
        letter-spacing: 4px;
        text-transform: uppercase;
        margin-bottom: 14px;
      }

      .section-head h2 {
        font-family: var(--serif);
        font-weight: 500;
        font-size: clamp(2rem, 4vw, 3rem);
        line-height: 1.15;
      }

      .section-head p {
        color: var(--muted);
        margin-top: 16px;
        font-weight: 300;
      }

      .divider {
        width: 52px;
        height: 1px;
        background: var(--gold);
        margin: 24px auto 0;
      }

      /* ---------- Collection ---------- */
      .grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
        gap: 32px;
      }

      .card {
        background: #fff;
        padding: 28px 24px;
        text-align: center;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        position: relative;
        overflow: hidden;
      }

      .card:hover {
        transform: translateY(-8px);
        box-shadow: 0 24px 48px rgba(20, 18, 16, 0.12);
      }

      .card .bottle {
        height: 190px;
        display: flex;
        align-items: flex-end;
        justify-content: center;
        margin-bottom: 24px;
        position: relative;
      }

      .bottle-shape {
        width: 72px;
        height: 150px;
        border-radius: 8px 8px 24px 24px;
        position: relative;
        background: linear-gradient(160deg, #fdfcf9, #dcd3c2);
        box-shadow: inset 0 0 0 1px rgba(0, 0, 0, 0.06), 0 12px 28px rgba(0, 0, 0, 0.16);
      }

      .bottle-shape::before {
        content: "";
        position: absolute;
        top: -34px;
        left: 50%;
        transform: translateX(-50%);
        width: 26px;
        height: 46px;
        background: #222;
        border-radius: 3px 3px 0 0;
      }

      .bottle-shape::after {
        content: "";
        position: absolute;
        top: 38px;
        left: 50%;
        transform: translateX(-50%);
        width: 58%;
        height: 22%;
        background: rgba(176, 141, 87, 0.18);
        border-radius: 2px;
      }

      .bottle.light::before {
        background: #e9e4da;
      }
      .bottle.amber::before {
        background: #6b4f2a;
      }
      .bottle.black::before {
        background: #181512;
      }

      .card h3 {
        font-family: var(--serif);
        font-size: 1.5rem;
        font-weight: 600;
        margin-bottom: 6px;
      }

      .card .note {
        font-size: 0.78rem;
        letter-spacing: 2px;
        text-transform: uppercase;
        color: var(--gold);
        margin-bottom: 12px;
      }

      .card p {
        color: var(--muted);
        font-size: 0.9rem;
        font-weight: 300;
        margin-bottom: 18px;
      }

      .card .price {
        font-family: var(--serif);
        font-size: 1.35rem;
        color: var(--dark);
      }

      .card .buy {
        display: block;
        margin: 16px auto 0;
        padding: 10px 30px;
        border: 1px solid var(--dark);
        background: transparent;
        color: var(--dark);
        font-family: var(--sans);
        font-size: 0.75rem;
        letter-spacing: 2px;
        text-transform: uppercase;
        cursor: pointer;
        transition: all 0.25s ease;
      }

      .card .buy:hover {
        background: var(--dark);
        color: var(--cream);
      }

      .toast {
        position: fixed;
        bottom: 30px;
        left: 50%;
        transform: translateX(-50%) translateY(80px);
        background: var(--dark);
        color: #fff;
        padding: 14px 30px;
        font-size: 0.85rem;
        letter-spacing: 1px;
        border-radius: 2px;
        opacity: 0;
        transition: all 0.35s ease;
        z-index: 100;
        border-left: 3px solid var(--gold);
      }

      .toast.show {
        opacity: 1;
        transform: translateX(-50%) translateY(0);
      }

      /* ---------- About ---------- */
      .about {
        background: var(--dark);
        color: #fff;
      }

      .about-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 64px;
        align-items: center;
      }

      .about .eyebrow {
        color: var(--gold-light);
        font-size: 0.78rem;
        letter-spacing: 4px;
        text-transform: uppercase;
        margin-bottom: 14px;
      }

      .about h2 {
        font-family: var(--serif);
        font-weight: 500;
        font-size: clamp(2rem, 4vw, 3rem);
        margin-bottom: 24px;
        line-height: 1.15;
      }

      .about p {
        color: rgba(255, 255, 255, 0.72);
        font-weight: 300;
        margin-bottom: 18px;
      }

      .about .image {
        height: 420px;
        background: linear-gradient(135deg, #2b2620, #171412),
          url("craft.jpg") center/cover no-repeat;
        border: 1px solid rgba(255, 255, 255, 0.08);
        display: flex;
        align-items: flex-end;
        padding: 28px;
      }

      .about .image span {
        color: var(--gold-light);
        font-size: 0.75rem;
        letter-spacing: 3px;
        text-transform: uppercase;
      }

      .features {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 40px;
        margin-top: 56px;
        text-align: center;
      }

      .feature .num {
        font-family: var(--serif);
        font-size: 2.4rem;
        color: var(--gold-light);
        line-height: 1;
        margin-bottom: 10px;
      }

      .feature .label {
        font-size: 0.8rem;
        letter-spacing: 2px;
        text-transform: uppercase;
        color: rgba(255, 255, 255, 0.65);
      }

      /* ---------- Testimonials ---------- */
      .testimonials {
        background: #fff;
      }

      .quote-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 28px;
      }

      .quote {
        padding: 36px 30px;
        border: 1px solid #ece5d8;
        background: var(--cream);
      }

      .quote .stars {
        color: var(--gold);
        letter-spacing: 4px;
        margin-bottom: 16px;
        font-size: 0.9rem;
      }

      .quote p {
        font-family: var(--serif);
        font-style: italic;
        font-size: 1.2rem;
        margin-bottom: 18px;
      }

      .quote cite {
        font-style: normal;
        font-size: 0.78rem;
        letter-spacing: 2px;
        text-transform: uppercase;
        color: var(--muted);
      }

      /* ---------- Newsletter ---------- */
      .newsletter {
        background: linear-gradient(135deg, #171412, #2b2620);
        color: #fff;
        text-align: center;
      }

      .newsletter h2 {
        font-family: var(--serif);
        font-weight: 500;
        font-size: clamp(1.8rem, 3.5vw, 2.6rem);
        margin-bottom: 14px;
      }

      .newsletter p {
        color: rgba(255, 255, 255, 0.7);
        font-weight: 300;
        margin-bottom: 34px;
      }

      form {
        display: flex;
        max-width: 460px;
        margin: 0 auto;
        border: 1px solid rgba(255, 255, 255, 0.25);
      }

      form input {
        flex: 1;
        background: transparent;
        border: none;
        padding: 16px 20px;
        color: #fff;
        font-family: var(--sans);
        font-size: 0.9rem;
        outline: none;
      }

      form input::placeholder {
        color: rgba(255, 255, 255, 0.45);
      }

      form button {
        background: var(--gold);
        border: none;
        color: #fff;
        padding: 0 26px;
        font-family: var(--sans);
        font-size: 0.8rem;
        letter-spacing: 2px;
        text-transform: uppercase;
        cursor: pointer;
        transition: background 0.25s ease;
      }

      form button:hover {
        background: var(--gold-light);
      }

      /* ---------- Footer ---------- */
      footer {
        background: var(--dark);
        color: rgba(255, 255, 255, 0.6);
        padding: 48px 0 30px;
        text-align: center;
      }

      footer .brand {
        font-size: 1.4rem;
        display: block;
        margin-bottom: 10px;
      }

      footer p {
        font-size: 0.8rem;
        letter-spacing: 1.5px;
      }

      .socials {
        margin-top: 18px;
        display: flex;
        justify-content: center;
        gap: 26px;
      }

      .socials a {
        color: rgba(255, 255, 255, 0.6);
        text-decoration: none;
        font-size: 0.75rem;
        letter-spacing: 2px;
        text-transform: uppercase;
        transition: color 0.2s ease;
      }

      .socials a:hover {
        color: var(--gold-light);
      }

      /* ---------- Responsive ---------- */
      @media (max-width: 860px) {
        nav ul {
          display: none;
          position: absolute;
          top: 100%;
          left: 0;
          width: 100%;
          background: rgba(20, 18, 16, 0.97);
          flex-direction: column;
          padding: 24px;
          gap: 22px;
        }

        nav ul.open {
          display: flex;
        }

        .menu-toggle {
          display: block;
        }

        .about-grid {
          grid-template-columns: 1fr;
          gap: 40px;
        }

        .features {
          grid-template-columns: repeat(auto-fit, minmax(140px, 1fr));
        }

        .btn-outline {
          margin-left: 0;
          margin-top: 14px;
        }
      }
    </style>
  </head>
  <body>
    <header id="header">
      <div class="container nav-inner">
        <a href="#" class="brand">Essência<span>.</span></a>
        <nav>
          <button class="menu-toggle" id="menuToggle" aria-label="Abrir menu">&#9776;</button>
          <ul id="navList">
            <li><a href="#colecao">Coleção</a></li>
            <li><a href="#sobre">Sobre</a></li>
            <li><a href="#depoimentos">Depoimentos</a></li>
            <li><a href="#contato">Contato</a></li>
          </ul>
        </nav>
      </div>
    </header>

    <section class="hero">
      <div class="container">
        <div class="hero-content">
          <div class="eyebrow">Maison de Perfumes</div>
          <h1>A essência que revela <em>quem você é</em>.</h1>
          <p>
            Fragrâncias exclusivas criadas por perfumistas renomados, extraídas
            de ingredientes raros selecionados ao redor do mundo.
          </p>
          <a href="#colecao" class="btn btn-gold">Descobrir Coleção</a>
          <a href="#sobre" class="btn btn-outline">Nossa História</a>
          <div class="hero-badge">Edição Limitada 2026 · Água de Perfume 50ml</div>
        </div>
      </div>
    </section>

    <section id="colecao">
      <div class="container">
        <div class="section-head">
          <div class="eyebrow">Nossa Coleção</div>
          <h2>Quatro assinaturas, uma personalidade</h2>
          <div class="divider"></div>
        </div>
        <div class="grid" id="productGrid">
          <div class="card">
            <div class="bottle"><div class="bottle-shape light"></div></div>
            <h3>Ámbar Blanc</h3>
            <div class="note">Floral · Amadeirado</div>
            <p>Baunilha cremosa, flor de laranjeira e âmbar — uma pele aveludada que hipnotiza.</p>
            <div class="price">R$ 429</div>
            <button class="buy" data-name="Ámbar Blanc">Adicionar</button>
          </div>
          <div class="card">
            <div class="bottle"><div class="bottle-shape amber"></div></div>
            <h3>Nuit Noire</h3>
            <div class="note">Amadeirado · Especiado</div>
            <p>Sândalo, açafrão e couro escuro — intensidade para as noites mais marcantes.</p>
            <div class="price">R$ 489</div>
            <button class="buy" data-name="Nuit Noire">Adicionar</button>
          </div>
          <div class="card">
            <div class="bottle"><div class="bottle-shape black"></div></div>
            <h3>Velours</h3>
            <div class="note">Oriental · Gourmand</div>
            <p>Cacau amargo, fava tonka e patchouli — o conforto de um abraço em forma de perfume.</p>
            <div class="price">R$ 519</div>
            <button class="buy" data-name="Velours">Adicionar</button>
          </div>
          <div class="card">
            <div class="bottle"><div class="bottle-shape light"></div></div>
            <h3>Jardim de Crocus</h3>
            <div class="note">Cítrico · Verde</div>
            <p>Bergamota, folhas de violeta e musgo — frescor luminoso para o dia a dia.</p>
            <div class="price">R$ 399</div>
            <button class="buy" data-name="Jardim de Crocus">Adicionar</button>
          </div>
        </div>
      </div>
    </section>

    <section class="about" id="sobre">
      <div class="container">
        <div class="about-grid">
          <div>
            <div class="eyebrow">Desde 1987</div>
            <h2>Um ateliê dedicado à arte da perfumaria</h2>
            <p>
              Cada fragrância da Essência nasce de um ritual minucioso: a
              seleção de matérias-primas em Grasse, na Provença, seguida de
              meses de maturação em barris de carvalho.
            </p>
            <p>
              Nosso compromisso é com a excelência — e com a memória afetiva
              que um perfume é capaz de criar em cada pele.
            </p>
            <div class="features">
              <div class="feature">
                <div class="num">38</div>
                <div class="label">Anos de história</div>
              </div>
              <div class="feature">
                <div class="num">100%</div>
                <div class="label">Ingredientes naturais</div>
              </div>
              <div class="feature">
                <div class="num">27</div>
                <div class="label">Países atendidos</div>
              </div>
            </div>
          </div>
          <div class="image">
            <span>Ateliê de Grasse, França</span>
          </div>
        </div>
      </div>
    </section>

    <section class="testimonials" id="depoimentos">
      <div class="container">
        <div class="section-head">
          <div class="eyebrow">Depoimentos</div>
          <h2>O que dizem sobre nós</h2>
          <div class="divider"></div>
        </div>
        <div class="quote-grid">
          <div class="quote">
            <div class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
            <p>"O Nuit Noire virou a minha assinatura. Recebo elogios todos os dias."</p>
            <cite>Mariana Costa</cite>
          </div>
          <div class="quote">
            <div class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
            <p>"Perfumes com personalidade rara. O ámbar dura o dia inteiro na minha pele."</p>
            <cite>Rafael Almeida</cite>
          </div>
          <div class="quote">
            <div class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
            <p>"Presenteei minha mãe e ela disse que nunca recebeu algo tão especial."</p>
            <cite>Beatriz Lemos</cite>
          </div>
        </div>
      </div>
    </section>

    <section class="newsletter" id="contato">
      <div class="container">
        <h2>Receba 10% de desconto</h2>
        <p>Cadastre-se e seja o primeiro a conhecer os lançamentos da Maison.</p>
        <form id="newsForm">
          <input type="email" name="email" placeholder="Seu melhor e-mail" required />
          <button type="submit">Cadastrar</button>
        </form>
      </div>
    </section>

    <footer>
      <div class="container">
        <a href="#" class="brand">Essência<span>.</span></a>
        <p>© 2026 Essência Perfumaria · Todos os direitos reservados</p>
        <div class="socials">
          <a href="#">Instagram</a>
          <a href="#">Facebook</a>
          <a href="#">WhatsApp</a>
        </div>
      </div>
    </footer>

    <div class="toast" id="toast">Fragrância adicionada à sua seleção</div>

    <script>
      const header = document.getElementById("header");
      const menuToggle = document.getElementById("menuToggle");
      const navList = document.getElementById("navList");

      window.addEventListener("scroll", () => {
        header.classList.toggle("scrolled", window.scrollY > 40);
      });

      menuToggle.addEventListener("click", () => {
        navList.classList.toggle("open");
      });

      navList.querySelectorAll("a").forEach((link) => {
        link.addEventListener("click", () => navList.classList.remove("open"));
      });

      const toast = document.getElementById("toast");
      let toastTimer;

      document.querySelectorAll(".buy").forEach((btn) => {
        btn.addEventListener("click", () => {
          toast.textContent =
            "Fragrância \"" + btn.dataset.name + "\" adicionada à sua seleção";
          toast.classList.add("show");
          clearTimeout(toastTimer);
          toastTimer = setTimeout(() => toast.classList.remove("show"), 2600);
        });
      });

      document.getElementById("newsForm").addEventListener("submit", (e) => {
        e.preventDefault();
        const input = e.target.querySelector("input");
        toast.textContent = "Cadastro realizado! Verifique seu e-mail.";
        toast.classList.add("show");
        clearTimeout(toastTimer);
        toastTimer = setTimeout(() => toast.classList.remove("show"), 2600);
        input.value = "";
      });
    </script>
  </body>
</html>
