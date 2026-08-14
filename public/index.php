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
      content="Constrular — materiais de construção com preço justo, entrega rápida e atendimento de quem entende de obra."
    />
    <title>4....Constrular | Materiais de Construção</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:ital,wght@0,400;0,500;0,600;0,700;1,500&family=Inter:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <style>
      :root {
        --yellow: #f5b301;
        --yellow-dark: #d99c00;
        --orange: #e86a17;
        --dark: #1c2321;
        --dark-2: #262e2b;
        --light: #f4f5f2;
        --white: #ffffff;
        --text: #2a322f;
        --muted: #7c857f;
        --display: "Barlow Condensed", "Arial Narrow", sans-serif;
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
        background: var(--light);
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
        padding: 14px 0;
        transition: background 0.35s ease, box-shadow 0.35s ease;
      }

      header.scrolled {
        background: rgba(28, 35, 33, 0.95);
        backdrop-filter: blur(8px);
        box-shadow: 0 4px 24px rgba(0, 0, 0, 0.3);
      }

      .nav-inner {
        display: flex;
        align-items: center;
        justify-content: space-between;
      }

      .brand {
        font-family: var(--display);
        font-size: 1.7rem;
        color: #fff;
        letter-spacing: 1.5px;
        text-decoration: none;
        font-weight: 700;
        text-transform: uppercase;
      }

      .brand span {
        color: var(--yellow);
      }

      nav ul {
        display: flex;
        gap: 34px;
        list-style: none;
      }

      nav a {
        color: rgba(255, 255, 255, 0.88);
        text-decoration: none;
        font-size: 0.82rem;
        letter-spacing: 1.5px;
        text-transform: uppercase;
        font-weight: 500;
        transition: color 0.2s ease;
      }

      nav a:hover {
        color: var(--yellow);
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
            rgba(28, 35, 33, 0.88) 0%,
            rgba(28, 35, 33, 0.5) 60%,
            rgba(28, 35, 33, 0.82) 100%
          ),
          url("hero.jpg") center/cover no-repeat, var(--dark);
      }

      .hero::after {
        content: "";
        position: absolute;
        right: 0;
        bottom: 0;
        width: 100%;
        height: 8px;
        background: repeating-linear-gradient(
          -45deg,
          var(--yellow) 0,
          var(--yellow) 18px,
          var(--dark) 18px,
          var(--dark) 36px
        );
      }

      .hero-content {
        max-width: 660px;
        padding-top: 80px;
      }

      .hero .eyebrow {
        color: var(--yellow);
        font-size: 0.8rem;
        letter-spacing: 4px;
        text-transform: uppercase;
        margin-bottom: 18px;
        font-weight: 600;
      }

      .hero h1 {
        font-family: var(--display);
        font-weight: 700;
        font-size: clamp(2.8rem, 6vw, 4.6rem);
        line-height: 1.05;
        color: #fff;
        margin-bottom: 22px;
        text-transform: uppercase;
      }

      .hero h1 em {
        font-style: italic;
        color: var(--yellow);
      }

      .hero p {
        color: rgba(255, 255, 255, 0.84);
        font-size: 1.05rem;
        font-weight: 300;
        max-width: 500px;
        margin-bottom: 34px;
      }

      .btn {
        display: inline-block;
        padding: 15px 38px;
        font-family: var(--sans);
        font-size: 0.82rem;
        letter-spacing: 2px;
        text-transform: uppercase;
        font-weight: 600;
        text-decoration: none;
        cursor: pointer;
        border: 2px solid var(--yellow);
        transition: all 0.25s ease;
      }

      .btn-yellow {
        background: var(--yellow);
        color: var(--dark);
      }

      .btn-yellow:hover {
        background: transparent;
        color: var(--yellow);
      }

      .btn-outline {
        background: transparent;
        color: #fff;
        border-color: rgba(255, 255, 255, 0.5);
        margin-left: 16px;
      }

      .btn-outline:hover {
        border-color: var(--yellow);
        color: var(--yellow);
      }

      .hero-badge {
        margin-top: 60px;
        display: flex;
        align-items: center;
        gap: 12px;
        color: rgba(255, 255, 255, 0.75);
        font-size: 0.78rem;
        letter-spacing: 2px;
        text-transform: uppercase;
      }

      .hero-badge::before {
        content: "";
        width: 40px;
        height: 3px;
        background: var(--yellow);
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
        color: var(--orange);
        font-size: 0.78rem;
        letter-spacing: 4px;
        text-transform: uppercase;
        margin-bottom: 14px;
        font-weight: 700;
      }

      .section-head h2 {
        font-family: var(--display);
        font-weight: 700;
        font-size: clamp(2.2rem, 4vw, 3.2rem);
        line-height: 1.1;
        text-transform: uppercase;
      }

      .section-head p {
        color: var(--muted);
        margin-top: 16px;
        font-weight: 300;
      }

      .divider {
        width: 60px;
        height: 4px;
        background: var(--yellow);
        margin: 24px auto 0;
      }

      /* ---------- Products ---------- */
      .grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
        gap: 32px;
      }

      .card {
        background: var(--white);
        padding: 28px 24px;
        text-align: center;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        position: relative;
        overflow: hidden;
        border-top: 4px solid var(--yellow);
      }

      .card:hover {
        transform: translateY(-8px);
        box-shadow: 0 24px 48px rgba(28, 35, 33, 0.14);
      }

      .card .product-img {
        height: 210px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 20px;
        position: relative;
        overflow: hidden;
      }

      .card .product-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.35s ease;
      }

      .card:hover .product-img img {
        transform: scale(1.06);
      }

      .card .tag {
        position: absolute;
        top: 14px;
        left: 14px;
        background: var(--orange);
        color: #fff;
        font-size: 0.68rem;
        font-weight: 700;
        letter-spacing: 1.5px;
        text-transform: uppercase;
        padding: 5px 10px;
      }

      .card h3 {
        font-family: var(--display);
        font-size: 1.55rem;
        font-weight: 700;
        margin-bottom: 4px;
        text-transform: uppercase;
        letter-spacing: 1px;
      }

      .card .note {
        font-size: 0.75rem;
        letter-spacing: 2px;
        text-transform: uppercase;
        color: var(--orange);
        margin-bottom: 12px;
        font-weight: 600;
      }

      .card p {
        color: var(--muted);
        font-size: 0.9rem;
        font-weight: 300;
        margin-bottom: 18px;
      }

      .card .price {
        font-family: var(--display);
        font-size: 1.5rem;
        font-weight: 700;
        color: var(--dark);
      }

      .card .price small {
        font-family: var(--sans);
        font-size: 0.72rem;
        color: var(--muted);
        font-weight: 400;
      }

      .card .buy {
        display: block;
        margin: 16px auto 0;
        padding: 11px 30px;
        border: 2px solid var(--dark);
        background: transparent;
        color: var(--dark);
        font-family: var(--sans);
        font-size: 0.74rem;
        letter-spacing: 2px;
        text-transform: uppercase;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.25s ease;
      }

      .card .buy:hover {
        background: var(--yellow);
        border-color: var(--yellow);
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
        border-left: 4px solid var(--yellow);
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
        color: var(--yellow);
        font-size: 0.78rem;
        letter-spacing: 4px;
        text-transform: uppercase;
        margin-bottom: 14px;
        font-weight: 700;
      }

      .about h2 {
        font-family: var(--display);
        font-weight: 700;
        font-size: clamp(2.2rem, 4vw, 3.2rem);
        margin-bottom: 24px;
        line-height: 1.1;
        text-transform: uppercase;
      }

      .about p {
        color: rgba(255, 255, 255, 0.72);
        font-weight: 300;
        margin-bottom: 18px;
      }

      .about .image {
        height: 420px;
        background: linear-gradient(135deg, #333c38, #141a18),
          url("craft.jpg") center/cover no-repeat;
        border: 1px solid rgba(255, 255, 255, 0.1);
        display: flex;
        align-items: flex-end;
        padding: 28px;
      }

      .about .image span {
        color: var(--yellow);
        font-size: 0.75rem;
        letter-spacing: 3px;
        text-transform: uppercase;
        font-weight: 600;
      }

      .features {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 40px;
        margin-top: 56px;
        text-align: center;
      }

      .feature .num {
        font-family: var(--display);
        font-size: 2.6rem;
        color: var(--yellow);
        line-height: 1;
        margin-bottom: 10px;
        font-weight: 700;
      }

      .feature .label {
        font-size: 0.78rem;
        letter-spacing: 2px;
        text-transform: uppercase;
        color: rgba(255, 255, 255, 0.65);
      }

      /* ---------- Testimonials ---------- */
      .testimonials {
        background: var(--white);
      }

      .quote-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 28px;
      }

      .quote {
        padding: 36px 30px;
        border: 1px solid #e3e6e0;
        background: var(--light);
      }

      .quote .stars {
        color: var(--yellow-dark);
        letter-spacing: 4px;
        margin-bottom: 16px;
        font-size: 0.9rem;
      }

      .quote p {
        font-family: var(--display);
        font-style: italic;
        font-size: 1.25rem;
        margin-bottom: 18px;
        color: var(--dark);
      }

      .quote cite {
        font-style: normal;
        font-size: 0.76rem;
        letter-spacing: 2px;
        text-transform: uppercase;
        color: var(--muted);
        font-weight: 600;
      }

      /* ---------- Newsletter ---------- */
      .newsletter {
        background: linear-gradient(135deg, var(--dark-2), #101412);
        color: #fff;
        text-align: center;
      }

      .newsletter h2 {
        font-family: var(--display);
        font-weight: 700;
        font-size: clamp(2rem, 3.5vw, 2.8rem);
        margin-bottom: 14px;
        text-transform: uppercase;
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
        background: var(--yellow);
        border: none;
        color: var(--dark);
        padding: 0 26px;
        font-family: var(--sans);
        font-size: 0.78rem;
        letter-spacing: 2px;
        text-transform: uppercase;
        font-weight: 700;
        cursor: pointer;
        transition: background 0.25s ease;
      }

      form button:hover {
        background: var(--yellow-dark);
      }

      /* ---------- Footer ---------- */
      footer {
        background: var(--dark);
        color: rgba(255, 255, 255, 0.6);
        padding: 48px 0 30px;
        text-align: center;
      }

      footer .brand {
        font-size: 1.5rem;
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
        color: var(--yellow);
      }

      /* ---------- Responsive ---------- */
      @media (max-width: 860px) {
        nav ul {
          display: none;
          position: absolute;
          top: 100%;
          left: 0;
          width: 100%;
          background: rgba(28, 35, 33, 0.97);
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
        <a href="#" class="brand">Constrular<span>....</span></a>
        <nav>
          <button class="menu-toggle" id="menuToggle" aria-label="Abrir menu">&#9776;</button>
          <ul id="navList">
            <li><a href="#produtos">Produtos</a></li>
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
          <div class="eyebrow">Desde 1958 · Sua obra na mão</div>
          <h1>Materiais que sustentam <em>sua obra</em>.</h1>
          <p>
            Cimento, tijolos, tintas e revestimentos de primeira linha com o
            melhor preço da região e entrega rápida no canteiro ou na sua casa.
          </p>
          <a href="#produtos" class="btn btn-yellow">Ver Ofertas</a>
          <a href="#sobre" class="btn btn-outline">Nossa História</a>
          <div class="hero-badge">Atacado e varejo · Frete grátis acima de R$ 500</div>
        </div>
      </div>
    </section>

    <section id="produtos">
      <div class="container">
        <div class="section-head">
          <div class="eyebrow">Nossos Produtos</div>
          <h2>Destaques da semana</h2>
          <div class="divider"></div>
        </div>
        <div class="grid" id="productGrid">
          <div class="card">
            <div class="product-img">
              <span class="tag">Mais vendido</span>
              <img src="img/cimento.svg" alt="Saco de cimento CP-II de 50kg" />
            </div>
            <h3>Cimento CP-II</h3>
            <div class="note">Saco 50kg</div>
            <p>Cimento de alta resistência para fundações, alvenaria e acabamentos.</p>
            <div class="price">R$ 34,90 <small>a unidade</small></div>
            <button class="buy" data-name="Cimento CP-II">Adicionar</button>
          </div>
          <div class="card">
            <div class="product-img">
              <img src="img/tijolos.svg" alt="Pilha de tijolos cerâmicos" />
            </div>
            <h3>Tijolo Cerâmico</h3>
            <div class="note">9x19x19 · Milheiro</div>
            <p>Bloco estrutural resistente e de fácil assentamento para sua parede.</p>
            <div class="price">R$ 1.199 <small>por milheiro</small></div>
            <button class="buy" data-name="Tijolo Cerâmico">Adicionar</button>
          </div>
          <div class="card">
            <div class="product-img">
              <img src="img/tinta.svg" alt="Lata de tinta acrílica 18 litros" />
            </div>
            <h3>Tinta Acrílica</h3>
            <div class="note">Lata 18L · Branca</div>
            <p>Cobertura perfeita, lavável e com durabilidade para ambientes internos e externos.</p>
            <div class="price">R$ 289,90 <small>a lata</small></div>
            <button class="buy" data-name="Tinta Acrílica">Adicionar</button>
          </div>
          <div class="card">
            <div class="product-img">
              <span class="tag">Novo</span>
              <img src="img/revestimento.svg" alt="Pisos e revestimentos cerâmicos" />
            </div>
            <h3>Revestimento 3D</h3>
            <div class="note">Box 2,5m²</div>
            <p>Porcelanato acetinado antiderrapante para pisos, paredes e fachadas.</p>
            <div class="price">R$ 129,90 <small>o box</small></div>
            <button class="buy" data-name="Revestimento 3D">Adicionar</button>
          </div>
        </div>
      </div>
    </section>

    <section class="about" id="sobre">
      <div class="container">
        <div class="about-grid">
          <div>
            <div class="eyebrow">Mais de 30 anos</div>
            <h2>Da primeira pá ao acabamento final</h2>
            <p>
              A Constrular nasceu de um depósito familiar e hoje é referência em
              materiais de construção na região, atendendo desde o pequeno
              conserto até grandes empreendimentos.
            </p>
            <p>
              Trabalhamos com as melhores marcas do mercado e uma equipe pronta
              para calcular, orçar e entregar tudo o que a sua obra precisa.
            </p>
            <div class="features">
              <div class="feature">
                <div class="num">30+</div>
                <div class="label">Anos de mercado</div>
              </div>
              <div class="feature">
                <div class="num">5 mil</div>
                <div class="label">Itens em estoque</div>
              </div>
              <div class="feature">
                <div class="num">24h</div>
                <div class="label">Entrega expressa</div>
              </div>
            </div>
          </div>
          <div class="image">
            <span>Centro de distribuição</span>
          </div>
        </div>
      </div>
    </section>

    <section class="testimonials" id="depoimentos">
      <div class="container">
        <div class="section-head">
          <div class="eyebrow">Depoimentos</div>
          <h2>Quem construiu com a gente</h2>
          <div class="divider"></div>
        </div>
        <div class="quote-grid">
          <div class="quote">
            <div class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
            <p>"Comprei o material da minha casa inteira aqui. Preço imbatível e entrega no dia seguinte."</p>
            <cite>Carlos Menezes</cite>
          </div>
          <div class="quote">
            <div class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
            <p>"O cimento chegou antes do prazo e o frete saiu grátis. Recomendo para qualquer construtor."</p>
            <cite>Fernanda Duarte</cite>
          </div>
          <div class="quote">
            <div class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
            <p>"Atendimento nota dez. Calcularam a quantidade certa de tijolo e ainda deram desconto no atacado."</p>
            <cite>Pedro Henrique Lima</cite>
          </div>
        </div>
      </div>
    </section>

    <section class="newsletter" id="contato">
      <div class="container">
        <h2>Receba ofertas e dicas de obra</h2>
        <p>Cadastre-se e ganhe 10% de desconto na primeira compra.</p>
        <form id="newsForm">
          <input type="email" name="email" placeholder="Seu melhor e-mail" required />
          <button type="submit">Cadastrar</button>
        </form>
      </div>
    </section>

    <footer>
      <div class="container">
        <a href="#" class="brand">Constrular<span>.</span></a>
        <p>© 2026 Constrular Materiais de Construção · Todos os direitos reservados</p>
        <div class="socials">
          <a href="#">Instagram</a>
          <a href="#">Facebook</a>
          <a href="#">WhatsApp</a>
        </div>
      </div>
    </footer>

    <div class="toast" id="toast">Produto adicionado ao seu carrinho</div>

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
            "Produto \"" + btn.dataset.name + "\" adicionado ao seu carrinho";
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
  <!-- fullcycle-inspector -->
<script>(function () {
  if (window.__fullcycleInspector) return;
  window.__fullcycleInspector = true;

  var overlay = null;
  var box = null;
  var start = null;
  var active = false;
  var highlightEl = null;
  var highlightDocRect = null;

  function post(type, payload) {
    var msg = { type: type };
    if (payload) {
      for (var key in payload) {
        if (Object.prototype.hasOwnProperty.call(payload, key)) msg[key] = payload[key];
      }
    }
    window.parent.postMessage(msg, "*");
  }

  function removeBox() {
    if (box && box.parentNode) box.parentNode.removeChild(box);
    box = null;
  }

  function removeOverlay() {
    if (overlay && overlay.parentNode) overlay.parentNode.removeChild(overlay);
    overlay = null;
  }

  function clean() {
    removeBox();
    removeOverlay();
    start = null;
    active = false;
    highlightEl = null;
    highlightDocRect = null;
    window.removeEventListener("scroll", onScroll, true);
    window.removeEventListener("resize", onResize, true);
    document.removeEventListener("keydown", onKeyDown, true);
  }

  function onKeyDown(event) {
    if (event.key === "Escape") {
      clean();
      post("fc:inspect:cancel");
    }
  }

  function makeOverlay() {
    var el = document.createElement("div");
    el.setAttribute("data-fc-inspector", "1");
    el.style.cssText =
      "position:fixed;top:0;left:0;width:100vw;height:100vh;z-index:2147483647;" +
      "cursor:crosshair;background:rgba(0,0,0,0.02);";
    document.documentElement.appendChild(el);
    return el;
  }

  function makeBox() {
    var el = document.createElement("div");
    el.setAttribute("data-fc-inspector", "1");
    el.style.cssText =
      "position:fixed;z-index:2147483647;border:2px solid #4f8cff;" +
      "box-shadow:0 0 0 1px rgba(255,255,255,0.7), 0 0 10px rgba(79,140,255,0.55);" +
      "background:rgba(79,140,255,0.15);pointer-events:none;display:none;";
    document.documentElement.appendChild(el);
    return el;
  }

  function setBoxRect(x1, y1, x2, y2) {
    var left = Math.min(x1, x2) - 2;
    var top = Math.min(y1, y2) - 2;
    var width = Math.abs(x2 - x1) + 4;
    var height = Math.abs(y2 - y1) + 4;
    box.style.left = left + "px";
    box.style.top = top + "px";
    box.style.width = width + "px";
    box.style.height = height + "px";
    box.style.display = "block";
  }

  function updateHighlight() {
    if (!box || box.style.display === "none") return;
    var r;
    if (highlightEl) {
      r = highlightEl.getBoundingClientRect();
    } else if (highlightDocRect) {
      r = {
        left: highlightDocRect.left - window.scrollX,
        top: highlightDocRect.top - window.scrollY,
        width: highlightDocRect.width,
        height: highlightDocRect.height
      };
    } else {
      return;
    }
    if (r && r.width > 0 && r.height > 0) {
      setBoxRect(r.left, r.top, r.left + r.width, r.top + r.height);
    }
  }

  function onScroll() {
    if (active) return;
    updateHighlight();
  }

  function onResize() {
    if (active) return;
    updateHighlight();
  }

  function selectorFor(el) {
    var parts = [];
    var node = el;
    while (node && node.nodeType === 1 && node.tagName.toLowerCase() !== "html" && parts.length < 5) {
      var segment = node.tagName.toLowerCase();
      if (node.id) {
        segment += "#" + node.id;
        parts.unshift(segment);
        break;
      }
      if (node.classList && node.classList.length) {
        segment += "." + Array.prototype.slice.call(node.classList, 0, 3).join(".");
      }
      parts.unshift(segment);
      node = node.parentNode;
    }
    return parts.join(" > ");
  }

  function elementInfo(el) {
    var rect = el.getBoundingClientRect();
    var text = (el.textContent || "").replace(/\s+/g, " ").trim();
    return {
      tag: el.tagName.toLowerCase(),
      id: el.id || null,
      classes: el.classList && el.classList.length
        ? Array.prototype.slice.call(el.classList).join(" ")
        : null,
      text: text ? text.slice(0, 80) : null,
      selector: selectorFor(el),
      rect: {
        x: Math.round(rect.x),
        y: Math.round(rect.y),
        width: Math.round(rect.width),
        height: Math.round(rect.height)
      }
    };
  }

  function onPointerDown(event) {
    if (event.button !== 0) return;
    start = { x: event.clientX, y: event.clientY };
    setBoxRect(start.x, start.y, start.x, start.y);
    event.preventDefault();
  }

  function onPointerMove(event) {
    if (!start) return;
    setBoxRect(start.x, start.y, event.clientX, event.clientY);
    event.preventDefault();
  }

  function onPointerUp(event) {
    if (!start) return;
    var end = { x: event.clientX, y: event.clientY };
    var deltaX = end.x - start.x;
    var deltaY = end.y - start.y;
    var isClick = Math.abs(deltaX) <= 5 && Math.abs(deltaY) <= 5;

    var x;
    var y;
    var payload;
    if (isClick) {
      x = end.x;
      y = end.y;
      payload = { point: { x: Math.round(x), y: Math.round(y) } };
    } else {
      var left = Math.min(start.x, end.x);
      var top = Math.min(start.y, end.y);
      var width = Math.abs(deltaX);
      var height = Math.abs(deltaY);
      x = Math.round(left + width / 2);
      y = Math.round(top + height / 2);
      payload = {
        rect: { x: Math.round(left), y: Math.round(top), width: Math.round(width), height: Math.round(height) }
      };
      highlightDocRect = {
        left: left + window.scrollX,
        top: top + window.scrollY,
        width: width,
        height: height
      };
    }

    removeOverlay();
    var element = document.elementFromPoint(x, y) || document.body;
    payload.element = elementInfo(element);
    payload.page = window.location.pathname || "/";

    if (isClick) {
      highlightEl = element;
    }

    window.addEventListener("scroll", onScroll, true);
    window.addEventListener("resize", onResize, true);
    updateHighlight();

    start = null;
    active = false;
    post("fc:inspect:result", payload);
  }

  function enable() {
    clean();
    active = true;
    overlay = makeOverlay();
    box = makeBox();
    overlay.addEventListener("pointerdown", onPointerDown, true);
    overlay.addEventListener("pointermove", onPointerMove, true);
    overlay.addEventListener("pointerup", onPointerUp, true);
    document.addEventListener("keydown", onKeyDown, true);
  }

  function disable() {
    clean();
  }

  window.addEventListener("message", function (event) {
    var data = event.data;
    if (!data || typeof data !== "object") return;
    if (data.type === "fc:inspect:enable") enable();
    else if (data.type === "fc:inspect:disable") disable();
  });

  post("fc:inspector:ready");
})();
</script>
</body>
</html>
