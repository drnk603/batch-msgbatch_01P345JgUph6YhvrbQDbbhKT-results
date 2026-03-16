<!--?php/** * Brand constants */define('BRAND_NAME', 'AutoDrošs');define('PRIMARY_DOMAIN', 'autodross.lv');define('SUPPORT_EMAIL', 'info@domain.com');define('CURRENT_YEAR', date('Y'));$page_title       = 'AutoDrošs — Automašīnas Apdrošināšana Latvijā';$page_description = 'AutoDrošs piedāvā uzticamu un izdevīgu automašīnas apdrošināšanu Latvijā. Iegūstiet bezmaksas piedāvājumu jau šodien.';$page_keywords    = 'automašīnas apdrošināšana, KASKO, OCTA, auto apdrošināšana Latvija, autodross';$canonical_url    = 'https://domain.com/';?-->
<html lang="lv">
 <head>
  <link rel="stylesheet" href="style.css">
  <link rel="icon" type="image/png" href="/favicon.png">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">
 </head>
 <body>
  <header role="banner">
   <nav class="navbar" navbar-expand-md sticky-top bg-white border-bottom\_ aria-label="Galvenā" navigācija\_>
    <div class="container">
     <a class="navbar-brand" href="/" aria-label="&lt;?php" echo brand_name; ?> — sākumlapa\"&gt; <span class="brand-logo-mark" aria-hidden="true"> 
       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0" 0 32 32\_ width="32" height="32" focusable="false">
        <circle cx="16" cy="16" r="15" fill="#2d3748" /> <path d="M8" 20l4-8h8l4 8H8z\_ fill="#f9a8d4" /> <circle cx="11" cy="21" r="2" fill="#fff" /> <circle cx="21" cy="21" r="2" fill="#fff" />
       </svg> 
      </span> <span class="brand-name" ms-2\_><!--?php echo BRAND_NAME; ?--></span> </a>
     <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavCollapse" aria-controls="mainNavCollapse" aria-expanded="false" aria-label="Pārslēgt" navigāciju\_><span class="navbar-toggler-icon"></span> <a class="btn" btn-cta d-none d-md-inline-flex ms-auto me-3 order-md-last\_ href="#quote-form"> Saņemt piedāvājumu </a>
      <div class="collapse" navbar-collapse\_ id="mainNavCollapse">
       <ul class="navbar-nav" me-auto mb-2 mb-md-0\_>
        <li class="nav-item"><a class="nav-link" href="#about" aria-current="false">Par mums</a></li>
        <li class="nav-item"><a class="nav-link" href="#services">Pakalpojumi</a></li>
        <li class="nav-item"><a class="nav-link" href="#team">Komanda</a></li>
        <li class="nav-item"><a class="nav-link" href="#reviews">Atsauksmes</a></li>
        <li class="nav-item"><a class="nav-link" href="#media">Mediji</a></li>
        <li class="nav-item"><a class="nav-link" href="#contact">Kontakti</a></li>
       </ul>
       <a class="btn" btn-cta d-md-none mt-2\_ href="#quote-form">Saņemt piedāvājumu</a>
      </div></button>
    </div>
   </nav>
  </header>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width," initial-scale="1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>&lt;?php echo htmlspecialchars($page_title, ENT_QUOTES, 'UTF-8'); ?&gt;</title>
  <meta name="description" content="&lt;?php" echo htmlspecialchars($page_description, ent_quotes, _utf-8_); ?>
  \"&gt;
  <meta name="keywords" content="&lt;?php" echo htmlspecialchars($page_keywords, ent_quotes, _utf-8_); ?>
  \"&gt;
  <meta property="og:type" content="website">
  <meta property="og:title" content="&lt;?php" echo htmlspecialchars($page_title, ent_quotes, _utf-8_); ?>
  \"&gt;
  <meta property="og:description" content="&lt;?php" echo htmlspecialchars($page_description, ent_quotes, _utf-8_); ?>
  \"&gt;
  <meta property="og:url" content="&lt;?php" echo $canonical_url; ?>
  \"&gt;
  <meta property="og:image" content="https://images.unsplash.com/photo-1486312338219-ce68d2c6f44d?w=1200&amp;q=80">
  <meta property="og:site_name" content="&lt;?php" echo brand_name; ?>
  \"&gt;
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="&lt;?php" echo htmlspecialchars($page_title, ent_quotes, _utf-8_); ?>
  \"&gt;
  <meta name="twitter:description" content="&lt;?php" echo htmlspecialchars($page_description, ent_quotes, _utf-8_); ?>
  \"&gt;
  <meta name="twitter:image" content="https://images.unsplash.com/photo-1486312338219-ce68d2c6f44d?w=1200&amp;q=80">
  <link rel="canonical" href="&lt;?php" echo $canonical_url; ?>
  \"&gt;
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">
  <link rel="stylesheet" href="style.css">
  <script type="application/ld+json">    {        \"@context\": \"https://schema.org\",        \"@type\": \"Organization\",        \"name\": \"<?php echo BRAND_NAME; ?>\",        \"url\": \"<?php echo $canonical_url; ?>\",        \"logo\": \"https://domain.com/assets/img/logo.png\",        \"email\": \"<?php echo SUPPORT_EMAIL; ?>\",        \"telephone\": \"{telephone}\",        \"address\": {            \"@type\": \"PostalAddress\",            \"streetAddress\": \"{address}\",            \"addressCountry\": \"LV\"        },        \"sameAs\": []    }    </script>
  <script type="application/ld+json">    {        \"@context\": \"https://schema.org\",        \"@type\": \"WebSite\",        \"name\": \"<?php echo BRAND_NAME; ?>\",        \"url\": \"<?php echo $canonical_url; ?>\",        \"potentialAction\": {            \"@type\": \"SearchAction\",            \"target\": \"https://domain.com/?s={search_term_string}\",            \"query-input\": \"required name=search_term_string\"        }    }    </script>
  <!-- ===================== HEADER ===================== -->
  <header role="banner">
   <nav class="navbar" navbar-expand-md sticky-top bg-white border-bottom\_ aria-label="Galvenā" navigācija\_>
    <div class="container">
     <a class="navbar-brand" href="/" aria-label="&lt;?php" echo brand_name; ?> — sākumlapa\"&gt; <span class="brand-logo-mark" aria-hidden="true"> 
       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0" 0 32 32\_ width="32" height="32" focusable="false">
        <circle cx="16" cy="16" r="15" fill="#2d3748" /> <path d="M8" 20l4-8h8l4 8H8z\_ fill="#f9a8d4" /> <circle cx="11" cy="21" r="2" fill="#fff" /> <circle cx="21" cy="21" r="2" fill="#fff" />
       </svg> 
      </span> <span class="brand-name" ms-2\_><!--?php echo BRAND_NAME; ?--></span> </a>
     <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavCollapse" aria-controls="mainNavCollapse" aria-expanded="false" aria-label="Pārslēgt" navigāciju\_><span class="navbar-toggler-icon"></span> <a class="btn" btn-cta d-none d-md-inline-flex ms-auto me-3 order-md-last\_ href="#quote-form"> Saņemt piedāvājumu </a>
      <div class="collapse" navbar-collapse\_ id="mainNavCollapse">
       <ul class="navbar-nav" me-auto mb-2 mb-md-0\_>
        <li class="nav-item"><a class="nav-link" href="#about" aria-current="false">Par mums</a></li>
        <li class="nav-item"><a class="nav-link" href="#services">Pakalpojumi</a></li>
        <li class="nav-item"><a class="nav-link" href="#team">Komanda</a></li>
        <li class="nav-item"><a class="nav-link" href="#reviews">Atsauksmes</a></li>
        <li class="nav-item"><a class="nav-link" href="#media">Mediji</a></li>
        <li class="nav-item"><a class="nav-link" href="#contact">Kontakti</a></li>
       </ul>
       <a class="btn" btn-cta d-md-none mt-2\_ href="#quote-form">Saņemt piedāvājumu</a>
      </div></button>
    </div>
   </nav>
  </header>
  <!-- ===================== MAIN ===================== -->
  <main id="main-content" role="main">
   <!-- HERO -->
   <section id="hero" class="hero-section" py-4 py-md-5\_ aria-labelledby="hero-heading" style="scroll-margin-top:" var(--nav-h)\_>
    <div class="container">
     <div class="row" align-items-center gy-5\_>
      <div class="col-12" col-lg-6\_ data-aos="fade-right">
       <span class="badge" badge-eco mb-3\_>Latvijas automobiļu apdrošināšana</span>
       <h1 id="hero-heading" class="display-4" fw-bold lh-1 mb-4\_>Droša braukšana
        <br>
        <span class="text-accent">sākas šeit.</span></h1>
       <p class="lead" mb-4\_>AutoDrošs piedāvā OCTA un KASKO apdrošināšanu ar godīgiem nosacījumiem, ātru apstrādi un personalizētu pieeju katram klientam Latvijā.</p>
       <div class="d-flex" flex-wrap gap-3\_>
        <a class="btn" btn-cta btn-lg\_ href="#quote-form">Aprēķināt cenu</a> <a class="btn" btn-outline-slate btn-lg\_ href="#services">Uzzināt vairāk</a>
       </div>
      </div>
      <div class="col-12" col-lg-6\_ data-aos="fade-left" data-aos-delay="150">
       <div class="ratio" ratio-16x9 hero-img-wrap\_>
        <img src="https://images.unsplash.com/photo-1502877338535-766e1452684a?w=900&amp;q=75" alt="Miglaini" lauki un autoceļš latvijā agri no rīta\_ class="img-fluid" object-cover rounded-3\_ width="900" height="506" fetchpriority="high"> 
       </div>
      </div>
     </div>
    </div>
    <!-- QUICK STATS / TRUST BAR -->
    <section id="stats" class="stats-section" py-4 py-md-5\_ aria-label="Uzticamības" rādītāji\_ style="scroll-margin-top:" var(--nav-h)\_>
     <div class="container">
      <div class="row" row-cols-2 row-cols-md-4 g-4 text-center\_>
       <!--?php                    $stats = [                        ['12 000+', 'Apmierināti klienti'],                        ['15',      'Gadu pieredze'],                        ['98%',     'Pieprasījumu izpilde'],                        ['24/7',    'Atbalsts avārijās'],                    ];                    foreach ($stats as $s):                    ?-->
       <div class="col" data-aos="fade-up">
        <div class="stat-card" h-100 p-3\_>
         <p class="stat-number"><!--?php echo htmlspecialchars($s[0], ENT_QUOTES, 'UTF-8'); ?--></p>
         <p class="stat-label"><!--?php echo htmlspecialchars($s[1], ENT_QUOTES, 'UTF-8'); ?--></p>
        </div>
       </div>
       <!--?php endforeach; ?-->
      </div>
     </div>
     <!-- ABOUT -->
     <section id="about" class="about-section" py-4 py-md-5\_ aria-labelledby="about-heading" style="scroll-margin-top:" var(--nav-h)\_>
      <div class="container">
       <div class="row" align-items-center gy-5\_>
        <div class="col-12" col-lg-5\_ data-aos="fade-right">
         <div class="ratio" ratio-4x3\_>
          <img src="https://images.unsplash.com/photo-1504701954957-2010ec3bcec1?w=700&amp;q=75" alt="Mierīgs" misty landscape — metoforiskais apdrošināšanas miers\_ class="img-fluid" object-cover rounded-3\_ width="700" height="525" loading="lazy"> 
         </div>
        </div>
        <div class="col-12" col-lg-7\_ data-aos="fade-left" data-aos-delay="100">
         <span class="section-label">Par uzņēmumu</span>
         <h2 id="about-heading" class="section-title">Mēs esam jūsu uzticamais ceļa biedrs</h2>
         <p class="section-body">AutoDrošs ir Latvijā dibināts apdrošināšanas brokeris ar vairāk nekā 15 gadu pieredzi automobiļu apdrošināšanas tirgū. Mūsu misija ir vienkāršot apdrošināšanas procesu, nodrošinot caurskatāmus nosacījumus un individuālu pieeju.</p>
         <p class="section-body">Mēs ticam, ka atbildīga braukšana un apzināta apdrošināšana iet roku rokā — tāpat kā ilgtspējīga attieksme pret vidi un mūsu kopīgo nākotni.</p>
         <a class="btn" btn-cta mt-2\_ href="#quote-form">Sākt šodien</a>
        </div>
       </div>
      </div>
      <!-- SERVICES -->
      <section id="services" class="services-section" py-4 py-md-5\_ aria-labelledby="services-heading" style="scroll-margin-top:" var(--nav-h)\_>
       <div class="container">
        <div class="text-center" mb-5\_ data-aos="fade-up">
         <span class="section-label">Pakalpojumi</span>
         <h2 id="services-heading" class="section-title">Ko mēs piedāvājam</h2>
         <p class="section-body" mx-auto\_ style="max-width:560px">Izvēlieties apdrošināšanas risinājumu, kas vislabāk atbilst jūsu vajadzībām un auto vērtībai.</p>
        </div>
        <div class="row" row-cols-1 row-cols-md-3 g-4\_>
         <!--?php                    $services = [                        [                            'icon' =-->
         '
         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0" 0 24 24\_ fill="none" stroke="currentColor" stroke-width="1.8" width="36" height="36" aria-hidden="true">
          <path d="M12" 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 10z\_ />
         </svg>
         ', 'title' =&gt; 'OCTA', 'desc' =&gt; 'Obligātā civiltiesiskās atbildības apdrošināšana — likumā noteikts minimums visiem transportlīdzekļu īpašniekiem.', ], [ 'icon' =&gt; '
         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0" 0 24 24\_ fill="none" stroke="currentColor" stroke-width="1.8" width="36" height="36" aria-hidden="true">
          <rect x="2" y="7" width="20" height="14" rx="2/">
           <path d="M16" 7V5a4 4 0 0-8 0v2\_ />
          </rect>
         </svg>
         ', 'title' =&gt; 'KASKO', 'desc' =&gt; 'Visaptverošā transportlīdzekļa apdrošināšana, kas aizsargā jūsu auto pret bojājumiem, zādzību un dabas katastrofām.', ], [ 'icon' =&gt; '
         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0" 0 24 24\_ fill="none" stroke="currentColor" stroke-width="1.8" width="36" height="36" aria-hidden="true">
          <circle cx="12" cy="12" r="10/">
           <path d="M12" 8v4l3 3\_ />
          </circle>
         </svg>
         ', 'title' =&gt; 'Ceļojumu apdrošināšana', 'desc' =&gt; 'Brauciet droši pa visu Eiropu — medicīniskā palīdzība, tehniskie atteikumi un citi negadījumi ceļā.', ], [ 'icon' =&gt; '
         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0" 0 24 24\_ fill="none" stroke="currentColor" stroke-width="1.8" width="36" height="36" aria-hidden="true">
          <path d="M3" 9l9-7 9 7v11a2 2 0 1-2 2H5a2 1-2-2z\_ /><polyline points="9" 22 9 12 15 22\_ />
         </svg>
         ', 'title' =&gt; 'Īpašuma aizsardzība', 'desc' =&gt; 'Aizsargājiet savu transportlīdzekli, kamēr tas atrodas stāvvietā — vandālisms, dabas parādības un vairāk.', ], [ 'icon' =&gt; '
         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0" 0 24 24\_ fill="none" stroke="currentColor" stroke-width="1.8" width="36" height="36" aria-hidden="true">
          <path d="M22" 16.92v3a2 2 0 1-2.18 19.79 1-8.63-3.07A19.5 19.5 1 4.69 12 1.61 3.18 3.6 1h3a2 1.72 12.84 .7 2.81 1-.45 2.11L8.09 8.91A16 16 15 15.91l.61-.61a2 2.11-.45 2.81.7A2 22 16.92z\_ />
         </svg>
         ', 'title' =&gt; 'Avārijas asistents', 'desc' =&gt; 'Nekavējoties sazinieties ar mūsu apdrošināšanas ekspertiem 24/7 — pa tālruni, e-pastu vai čatu.', ], [ 'icon' =&gt; '
         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0" 0 24 24\_ fill="none" stroke="currentColor" stroke-width="1.8" width="36" height="36" aria-hidden="true">
          <line x1="12" y1="1" x2="12" y2="23/">
           <path d="M17" 5H9.5a3.5 3.5 0 7h5a3.5 1 7H6\_ />
          </line>
         </svg>
         ', 'title' =&gt; 'Elastīgi maksājumi', 'desc' =&gt; 'Izvēlieties ērtāko maksājumu plānu — mēnesī, ceturksnī vai gadā bez papildu maksas.', ], ]; foreach ($services as $svc): ?&gt;
         <div class="col" data-aos="fade-up">
          <article class="card" service-card h-100 d-flex flex-column\_>
           <div class="service-icon" aria-hidden="true">
            <!--?php echo $svc['icon']; ?-->
           </div>
           <div class="card-body" d-flex flex-column\_>
            <h3 class="service-title"><!--?php echo htmlspecialchars($svc['title'], ENT_QUOTES, 'UTF-8'); ?--></h3>
            <p class="service-desc" flex-grow-1\_><!--?php echo htmlspecialchars($svc['desc'], ENT_QUOTES, 'UTF-8'); ?--></p>
            <a class="btn" btn-outline-slate btn-sm mt-auto\_ href="#quote-form">Pieprasīt cenu</a>
           </div>
          </article>
         </div>
         <!--?php endforeach; ?-->
        </div>
       </div>
       <!-- QUICK LINKS -->
       <section id="quick-links" class="quick-links-section" py-4 py-md-5\_ aria-labelledby="quick-links-heading" style="scroll-margin-top:" var(--nav-h)\_>
        <div class="container">
         <div class="text-center" mb-4\_ data-aos="fade-up">
          <span class="section-label">Ātrās saites</span>
          <h2 id="quick-links-heading" class="section-title">Noderīgi resursi</h2>
         </div>
         <div class="row" row-cols-2 row-cols-md-4 g-3\_>
          <!--?php                    $links = [                        ['Kā pieteikt zaudējumu', '#contact'],                        ['Biežāk uzdotie jautājumi', '#help-center'],                        ['Partneri un STO', '#contact'],                        ['Dokumenti un veidlapas', '#contact'],                        ['OCTA kalkulators', '#quote-form'],                        ['KASKO kalkulators', '#quote-form'],                        ['Privātuma politika', '#contact'],                        ['Lietošanas noteikumi', '#contact'],                    ];                    foreach ($links as $lnk):                    ?-->
          <div class="col" data-aos="fade-up">
           <a class="quick-link-item" href="&lt;?php" echo htmlspecialchars($lnk[1], ent_quotes, _utf-8_); ?>\"&gt; <span class="ql-arrow" aria-hidden="true"> 
             <svg xmlns="http://www.w3.org/2000/svg" viewBox="0" 0 16 16\_ width="16" height="16" fill="currentColor" focusable="false">
              <path d="M1" 8a.5.5 0 1 .5-.5h10.793L9.146 4.354a.5.5 .708-.708l4 4a.5.5 .708l-4 1-.708-.708L12.293 8.5H1.5A.5.5 8z\_ />
             </svg> 
            </span> <!--?php echo htmlspecialchars($lnk[0], ENT_QUOTES, 'UTF-8'); ?--> </a>
          </div>
          <!--?php endforeach; ?-->
         </div>
        </div>
        <!-- TEAM INTRO -->
        <section id="team" class="team-section" py-4 py-md-5\_ aria-labelledby="team-heading" style="scroll-margin-top:" var(--nav-h)\_>
         <div class="container">
          <div class="text-center" mb-5\_ data-aos="fade-up">
           <span class="section-label">Mūsu komanda</span>
           <h2 id="team-heading" class="section-title">Eksperti, kuriem uzticaties</h2>
           <p class="section-body" mx-auto\_ style="max-width:520px">Mūsu pieredzējušie speciālisti vienmēr gatavi palīdzēt izvēlēties piemērotāko apdrošināšanas risinājumu.</p>
          </div>
          <div class="row" row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4\_>
           <!--?php                    $team = [                        [                            'name'  =-->
           'Andris Bērziņš', 'role' =&gt; 'Galvenais brokeris', 'img' =&gt; 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=300&amp;h=300&amp;fit=crop&amp;q=75', 'alt' =&gt; 'Andris Bērziņš — galvenais brokeris AutoDrošs', ], [ 'name' =&gt; 'Laura Kalniņa', 'role' =&gt; 'KASKO speciāliste', 'img' =&gt; 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=300&amp;h=300&amp;fit=crop&amp;q=75', 'alt' =&gt; 'Laura Kalniņa — KASKO speciāliste AutoDrošs', ], [ 'name' =&gt; 'Māris Ozols', 'role' =&gt; 'Klientu atbalsts', 'img' =&gt; 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=300&amp;h=300&amp;fit=crop&amp;q=75', 'alt' =&gt; 'Māris Ozols — klientu atbalsta vadītājs AutoDrošs', ], [ 'name' =&gt; 'Ilze Liepiņa', 'role' =&gt; 'Juridiskā padomniece', 'img' =&gt; 'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=300&amp;h=300&amp;fit=crop&amp;q=75', 'alt' =&gt; 'Ilze Liepiņa — juridiskā padomniece AutoDrošs', ], ]; foreach ($team as $member): ?&gt;
           <div class="col" data-aos="fade-up">
            <article class="card" team-card h-100 d-flex flex-column text-center\_>
             <div class="team-avatar-wrap" mx-auto mt-4\_>
              <img src="&lt;?php" echo htmlspecialchars($member[_img_], ent_quotes, _utf-8_); ?>\" alt=\"<!--?php echo htmlspecialchars($member['alt'], ENT_QUOTES, 'UTF-8'); ?-->
              \" class=\"team-avatar\" width=\"120\" height=\"120\" loading=\"lazy\" &gt; 
             </div>
             <div class="card-body" d-flex flex-column\_>
              <h3 class="team-name"><!--?php echo htmlspecialchars($member['name'], ENT_QUOTES, 'UTF-8'); ?--></h3>
              <p class="team-role" mt-auto\_><!--?php echo htmlspecialchars($member['role'], ENT_QUOTES, 'UTF-8'); ?--></p>
             </div>
            </article>
           </div>
           <!--?php endforeach; ?-->
          </div>
         </div>
         <!-- MEDIA MENTIONS -->
         <section id="media" class="media-section" py-4 py-md-5\_ aria-labelledby="media-heading" style="scroll-margin-top:" var(--nav-h)\_>
          <div class="container">
           <div class="text-center" mb-5\_ data-aos="fade-up">
            <span class="section-label">Medijos par mums</span>
            <h2 id="media-heading" class="section-title">Mūs min uzticamie avoti</h2>
           </div>
           <div class="row" row-cols-1 row-cols-md-3 g-4\_>
            <!--?php                    $media = [                        [                            'source' =-->
            'Latvijas Avīze', 'quote' =&gt; '\"AutoDrošs demonstrē, ka apdrošināšana var būt vienkārša un caurskatāma.\"', 'date' =&gt; '2024. gada marts', 'img' =&gt; 'https://images.unsplash.com/photo-1504711434969-e33886168f5c?w=600&amp;q=70', 'imgalt' =&gt; 'Latvijas avīzes raksts par AutoDrošs', ], [ 'source' =&gt; 'Diena', 'quote' =&gt; '\"Viens no labākajiem auto apdrošināšanas brokeriem Latvijā pēc klientu vērtējuma.\"', 'date' =&gt; '2023. gada decembris', 'img' =&gt; 'https://images.unsplash.com/photo-1585829365295-ab7cd400c167?w=600&amp;q=70', 'imgalt' =&gt; 'Dienas žurnāls raksta par AutoDrošs apdrošināšanu', ], [ 'source' =&gt; 'Delfi Bizness', 'quote' =&gt; '\"Uzņēmums ir mainījis spēles noteikumus digitālajā apdrošināšanā Latvijā.\"', 'date' =&gt; '2024. gada janvāris', 'img' =&gt; 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=600&amp;q=70', 'imgalt' =&gt; 'Delfi Bizness raksts par AutoDrošs digitālo apdrošināšanu', ], ]; foreach ($media as $m): ?&gt;
            <div class="col" data-aos="fade-up">
             <article class="card" media-card h-100 d-flex flex-column\_>
              <div class="ratio" ratio-16x9\_>
               <img src="&lt;?php" echo htmlspecialchars($m[_img_], ent_quotes, _utf-8_); ?>\" alt=\"<!--?php echo htmlspecialchars($m['imgalt'], ENT_QUOTES, 'UTF-8'); ?-->
               \" class=\"object-cover img-fluid\" width=\"600\" height=\"338\" loading=\"lazy\" &gt; 
              </div>
              <div class="card-body" d-flex flex-column\_>
               <p class="media-source"><!--?php echo htmlspecialchars($m['source'], ENT_QUOTES, 'UTF-8'); ?--></p>
               <blockquote class="media-quote" flex-grow-1\_>
                <!--?php echo htmlspecialchars($m['quote'], ENT_QUOTES, 'UTF-8'); ?-->
               </blockquote>
               <p class="media-date" mt-auto\_><!--?php echo htmlspecialchars($m['date'], ENT_QUOTES, 'UTF-8'); ?--></p>
              </div>
             </article>
            </div>
            <!--?php endforeach; ?-->
           </div>
          </div>
          <!-- CUSTOMER RATINGS -->
          <section id="reviews" class="reviews-section" py-4 py-md-5\_ aria-labelledby="reviews-heading" style="scroll-margin-top:" var(--nav-h)\_>
           <div class="container">
            <div class="text-center" mb-5\_ data-aos="fade-up">
             <span class="section-label">Klientu vērtējumi</span>
             <h2 id="reviews-heading" class="section-title">Ko saka mūsu klienti</h2>
            </div>
            <div class="row" row-cols-1 row-cols-md-3 g-4\_>
             <!--?php                    $reviews = [                        [                            'name'   =-->
             'Jānis K.', 'rating' =&gt; 5, 'text' =&gt; 'Ļoti ātrs un profesionāls serviss. Apdrošināšanu noformēju 10 minūtēs, bez nevajadzīgas birokrātijas. Ieteikšu visiem!', 'date' =&gt; '2024. gada februāris', ], [ 'name' =&gt; 'Sandra M.', 'rating' =&gt; 5, 'text' =&gt; 'Pēc avārijas viss tika nokārtots ļoti raiti. Konsultanti bija pieklājīgi un lietpratīgi. AutoDrošs ir manis izvēlēts uz ilgu laiku.', 'date' =&gt; '2024. gada janvāris', ], [ 'name' =&gt; 'Raimonds T.', 'rating' =&gt; 4, 'text' =&gt; 'Labs salīdzinājums ar citiem brokeriem. Cena bija par 20% zemāka nekā iepriekšējam piedāvājumam. Kalkulators ir ērts un skaidrs.', 'date' =&gt; '2023. gada decembris', ], [ 'name' =&gt; 'Aija P.', 'rating' =&gt; 5, 'text' =&gt; 'Esmu kliente jau trešo gadu. Vienmēr godīgi nosacījumi un nevainojams atbalsts. Iesaku visai ģimenei.', 'date' =&gt; '2024. gada marts', ], [ 'name' =&gt; 'Kaspars L.', 'rating' =&gt; 5, 'text' =&gt; 'Ērti pārvaldīt polisi tiešsaistē. Dokumenti vienmēr pieejami digitāli. Mūsdienu apdrošināšana kādai tai jābūt.', 'date' =&gt; '2024. gada februāris', ], [ 'name' =&gt; 'Dace V.', 'rating' =&gt; 4, 'text' =&gt; 'Ļoti noderīga konsultācija pa tālruni. Speciālists izskaidroja visu saprotami un palīdzēja izvēlēties labāko plānu.', 'date' =&gt; '2024. gada janvāris', ], ]; foreach ($reviews as $r): ?&gt;
             <div class="col" data-aos="fade-up">
              <article class="card" review-card h-100 d-flex flex-column\_ aria-label="Atsauksme" no <?php echo htmlspecialchars($r[_name_], ent_quotes, _utf-8_); ?>
               \"&gt;
               <div class="card-body" d-flex flex-column\_>
                <div class="review-stars" aria-label="Vērtējums:" <?php echo $r[_rating_]; ?>
                 no 5 zvaigznēm\" role=\"img\"&gt; <!--?php for ($i = 0; $i < 5; $i++): ?-->
                 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0" 0 16 16\_ width="16" height="16" focusable="false" aria-hidden="true" class="review-star" <?php echo $i < $r[_rating_] ? _star-filled_ : _star-empty_;>
                  \"&gt; <path d="M3.612" 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z\_ />
                 </svg>
                 <!--?php endfor; ?-->
                </div>
                <p class="review-text" flex-grow-1\_><!--?php echo htmlspecialchars($r['text'], ENT_QUOTES, 'UTF-8'); ?--></p>
                <div class="review-meta" mt-auto\_>
                 <span class="review-name"><!--?php echo htmlspecialchars($r['name'], ENT_QUOTES, 'UTF-8'); ?--></span> <span class="review-date"><!--?php echo htmlspecialchars($r['date'], ENT_QUOTES, 'UTF-8'); ?--></span>
                </div>
               </div>
              </article>
             </div>
             <!--?php endforeach; ?-->
            </div>
           </div>
           <!-- QUOTE FORM -->
           <section id="quote-form" class="form-section" py-4 py-md-5\_ aria-labelledby="form-heading" style="scroll-margin-top:" var(--nav-h)\_>
            <div class="container">
             <div class="row" justify-content-center\_>
              <div class="col-12" col-lg-8\_ data-aos="fade-up">
               <div class="form-card" p-4 p-md-5\_>
                <span class="section-label">Bezmaksas kalkulācija</span>
                <h2 id="form-heading" class="section-title">Aprēķiniet apdrošināšanas cenu</h2>
                <p class="section-body" mb-4\_>Aizpildiet zemāk esošo formu un mūsu speciālists sazināsies ar jums darba dienās 1 stundas laikā.</p>
                <!--?php                            $form_success = false;                            $form_errors  = [];                            $form_data    = [                                'name'    =-->
                '', 'phone' =&gt; '', 'email' =&gt; '', 'reg_nr' =&gt; '', 'type' =&gt; '', 'consent' =&gt; false, ]; if ($_SERVER['REQUEST_METHOD'] === 'POST') { $form_data['name'] = trim(filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS) ?? ''); $form_data['phone'] = trim(filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_SPECIAL_CHARS) ?? ''); $form_data['email'] = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL) ?? ''); $form_data['reg_nr'] = trim(filter_input(INPUT_POST, 'reg_nr', FILTER_SANITIZE_SPECIAL_CHARS) ?? ''); $form_data['type'] = trim(filter_input(INPUT_POST, 'type', FILTER_SANITIZE_SPECIAL_CHARS) ?? ''); $form_data['consent'] = isset($_POST['consent']); if (empty($form_data['name'])) { $form_errors['name'] = 'Lūdzu, ievadiet savu vārdu.'; } if (empty($form_data['phone']) || !preg_match('/^\+?[0-9\s\-]{7,15}$/', $form_data['phone'])) { $form_errors['phone'] = 'Lūdzu, ievadiet derīgu tālruņa numuru.'; } if (empty($form_data['email']) || !filter_var($form_data['email'], FILTER_VALIDATE_EMAIL)) { $form_errors['email'] = 'Lūdzu, ievadiet derīgu e-pasta adresi.'; } if (empty($form_data['type'])) { $form_errors['type'] = 'Lūdzu, izvēlieties apdrošināšanas veidu.'; } if (!$form_data['consent']) { $form_errors['consent'] = 'Lūdzu, piekrītiet privātuma politikai.'; } if (empty($form_errors)) { $form_success = true; } } ?&gt; <!--?php if ($form_success): ?-->
                <div class="alert" alert-success\_ role="alert" aria-live="polite">
                 <strong>Paldies!</strong> Jūsu pieprasījums ir saņemts. Mēs sazināsimies ar jums tuvākajā laikā.
                </div>
                <!--?php else: ?-->
                <form method="POST" action="#quote-form" novalidate class="needs-validation" aria-label="Apdrošināšanas" piedāvājuma forma\_ id="insurance-form">
                 <div class="row" g-3\_>
                  <div class="col-12" col-md-6\_>
                   <label for="name" class="form-label">Vārds, uzvārds <span aria-hidden="true">*</span></label> <input type="text" id="name" name="name" class="form-control" <?php echo isset($form_errors[_name_]) ? _is-invalid_ : _;> \" value=\"<!--?php echo htmlspecialchars($form_data['name'], ENT_QUOTES, 'UTF-8'); ?-->
                    \" required autocomplete=\"name\" aria-required=\"true\" aria-describedby=\"name-error\" &gt; <!--?php if (isset($form_errors['name'])): ?-->
                   <div id="name-error" class="invalid-feedback" role="alert">
                    <!--?php echo htmlspecialchars($form_errors['name'], ENT_QUOTES, 'UTF-8'); ?-->
                   </div>
                   <!--?php endif; ?-->
                  </div>
                  <div class="col-12" col-md-6\_>
                   <label for="phone" class="form-label">Tālrunis <span aria-hidden="true">*</span></label> <input type="tel" id="phone" name="phone" class="form-control" <?php echo isset($form_errors[_phone_]) ? _is-invalid_ : _;> \" value=\"<!--?php echo htmlspecialchars($form_data['phone'], ENT_QUOTES, 'UTF-8'); ?-->
                    \" required autocomplete=\"tel\" aria-required=\"true\" aria-describedby=\"phone-error\" placeholder=\"+371 2X XXX XXX\" &gt; <!--?php if (isset($form_errors['phone'])): ?-->
                   <div id="phone-error" class="invalid-feedback" role="alert">
                    <!--?php echo htmlspecialchars($form_errors['phone'], ENT_QUOTES, 'UTF-8'); ?-->
                   </div>
                   <!--?php endif; ?-->
                  </div>
                  <div class="col-12" col-md-6\_>
                   <label for="email" class="form-label">E-pasts <span aria-hidden="true">*</span></label> <input type="email" id="email" name="email" class="form-control" <?php echo isset($form_errors[_email_]) ? _is-invalid_ : _;> \" value=\"<!--?php echo htmlspecialchars($form_data['email'], ENT_QUOTES, 'UTF-8'); ?-->
                    \" required autocomplete=\"email\" aria-required=\"true\" aria-describedby=\"email-error\" &gt; <!--?php if (isset($form_errors['email'])): ?-->
                   <div id="email-error" class="invalid-feedback" role="alert">
                    <!--?php echo htmlspecialchars($form_errors['email'], ENT_QUOTES, 'UTF-8'); ?-->
                   </div>
                   <!--?php endif; ?-->
                  </div>
                  <div class="col-12" col-md-6\_>
                   <label for="reg_nr" class="form-label">Auto reģ. Nr. <span class="text-muted" fw-normal\_>(neobligāti)</span></label> <input type="text" id="reg_nr" name="reg_nr" class="form-control" value="&lt;?php" echo htmlspecialchars($form_data[_reg_nr_], ent_quotes, _utf-8_); ?>\" autocomplete=\"off\" placeholder=\"AB 1234\" &gt; 
                  </div>
                  <div class="col-12">
                   <label for="type" class="form-label">Apdrošināšanas veids <span aria-hidden="true">*</span></label> <select id="type" name="type" class="form-select" <?php echo isset($form_errors[_type_]) ? _is-invalid_ : _;>\" required aria-required=\"true\" aria-describedby=\"type-error\" &gt; <option value="" <?php echo empty($form_data[_type_]) ? _selected_ : _;>&gt;— Izvēlieties —</option> <option value="octa" <?php echo $form_data[_type_]="==" _octa_ ? _selected_ : _;>&gt;OCTA</option> <option value="kasko" <?php echo $form_data[_type_]="==" _kasko_ ? _selected_ : _;>&gt;KASKO</option> <option value="abus" <?php echo $form_data[_type_]="==" _abus_ ? _selected_ : _;>&gt;OCTA + KASKO</option> <option value="celojums" <?php echo $form_data[_type_]="==" _celojums_ ? _selected_ : _;>&gt;Ceļojumu apdrošināšana</option> <!--?php if (isset($form_errors['type'])): ?-->  <!--?php echo htmlspecialchars($form_errors['type'], ENT_QUOTES, 'UTF-8'); ?-->  <!--?php endif; ?--> </select>
                  </div>
                  <div class="col-12">
                   <div class="form-check">
                    <input type="checkbox" id="consent" name="consent" class="form-check-input" <?php echo isset($form_errors[_consent_]) ? _is-invalid_ : _;> \" <!--?php echo $form_data['consent'] ? 'checked' : ''; ?-->
                     required aria-required=\"true\" aria-describedby=\"consent-error\" &gt; <label for="consent" class="form-check-label"> Esmu izlasījis un piekrītu <a href="#contact" class="form-link">privātuma politikai</a> un personas datu apstrādei. </label> <!--?php if (isset($form_errors['consent'])): ?-->
                    <div id="consent-error" class="invalid-feedback" role="alert">
                     <!--?php echo htmlspecialchars($form_errors['consent'], ENT_QUOTES, 'UTF-8'); ?-->
                    </div>
                    <!--?php endif; ?-->
                   </div>
                  </div>
                  <div class="col-12">
                   <button type="submit" class="btn" btn-cta w-100\_>Pieprasīt piedāvājumu</button>
                  </div>
                 </div>
                 <!--?php endif; ?-->
                </form>
               </div>
              </div>
             </div>
            </div>
            <!-- HELP CENTER LINK -->
            <section id="help-center" class="help-section" py-4 py-md-5\_ aria-labelledby="help-heading" style="scroll-margin-top:" var(--nav-h)\_>
             <div class="container">
              <div class="help-banner" data-aos="fade-up">
               <div class="row" align-items-center gy-4\_>
                <div class="col-12" col-md-2 text-center\_>
                 <div class="help-icon-wrap" aria-hidden="true">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0" 0 24 24\_ fill="none" stroke="currentColor" stroke-width="1.6" width="56" height="56" focusable="false">
                   <circle cx="12" cy="12" r="10/">
                    <path d="M9.09" 9a3 3 0 1 5.83 1c0 2-3 3-3 3\_ /> <line x1="12" y1="17" x2="12.01" y2="17/"> </line>
                   </circle>
                  </svg>
                 </div>
                </div>
                <div class="col-12" col-md-7\_>
                 <h2 id="help-heading" class="help-title">Nepieciešama palīdzība?</h2>
                 <p class="help-desc">Apmeklējiet mūsu Palīdzības centru, lai atrastu atbildes uz biežāk uzdotajiem jautājumiem par OCTA, KASKO, zaudējumu pieteikšanu un polišu pārvaldību.</p>
                </div>
                <div class="col-12" col-md-3 text-md-end\_>
                 <a href="#contact" class="btn" btn-cta\_> Palīdzības centrs </a>
                </div>
               </div>
              </div>
             </div>
             <!-- CONTACT -->
             <section id="contact" class="contact-section" py-4 py-md-5\_ aria-labelledby="contact-heading" style="scroll-margin-top:" var(--nav-h)\_>
              <div class="container">
               <div class="text-center" mb-5\_ data-aos="fade-up">
                <span class="section-label">Kontakti</span>
                <h2 id="contact-heading" class="section-title">Sazināties ar mums</h2>
               </div>
               <div class="row" g-4 justify-content-center\_>
                <div class="col-12" col-md-4\_ data-aos="fade-up">
                 <div class="contact-item" text-center\_>
                  <div class="contact-icon" aria-hidden="true">
                   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0" 0 24 24\_ fill="none" stroke="currentColor" stroke-width="1.8" width="32" height="32" focusable="false">
                    <path d="M22" 16.92v3a2 2 0 1-2.18 19.79 1-8.63-3.07A19.5 19.5 1 4.69 12 1.61 3.18 3.6 1h3a2 1.72c.127.96.361 1.903.7 2.81a2 1-.45 2.11L8.09 8.91A16 16 15 15.91l.61-.61a2 2.11-.45c.907.339 1.85.573 2.81.7A2 22 16.92z\_ />
                   </svg>
                  </div>
                  <h3 class="contact-title">Tālrunis</h3>
                  <a href="tel:{telephone}" class="contact-link">{telephone}</a>
                 </div>
                </div>
                <div class="col-12" col-md-4\_ data-aos="fade-up" data-aos-delay="80">
                 <div class="contact-item" text-center\_>
                  <div class="contact-icon" aria-hidden="true">
                   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0" 0 24 24\_ fill="none" stroke="currentColor" stroke-width="1.8" width="32" height="32" focusable="false">
                    <path d="M4" 4h16c1.1 0 2 .9 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z\_ /> <polyline points="22,6" 12,13 2,6\_ />
                   </svg>
                  </div>
                  <h3 class="contact-title">E-pasts</h3>
                  <a href="mailto:&lt;?php" echo support_email; ?>\" class=\"contact-link\"&gt;<!--?php echo SUPPORT_EMAIL; ?--></a>
                 </div>
                </div>
                <div class="col-12" col-md-4\_ data-aos="fade-up" data-aos-delay="160">
                 <div class="contact-item" text-center\_>
                  <div class="contact-icon" aria-hidden="true">
                   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0" 0 24 24\_ fill="none" stroke="currentColor" stroke-width="1.8" width="32" height="32" focusable="false">
                    <path d="M21" 10c0 7-9 13-9 13S3 17 3 10a9 9 0 1 18 0z\_ /> <circle cx="12" cy="10" r="3/"> </circle>
                   </svg>
                  </div>
                  <h3 class="contact-title">Adrese</h3>
                  <address class="contact-address">{address}</address>
                 </div>
                </div>
               </div>
              </div>
             </section>
            </section>
           </section>
          </section>
         </section>
        </section>
       </section>
      </section>
     </section>
    </section>
   </section>
  </main>
  <!-- ===================== /MAIN ===================== -->
  <!-- ===================== FOOTER ===================== -->
  <footer class="site-footer" role="contentinfo">
   <div class="container">
    <div class="row" gy-4 py-5\_>
     <div class="col-12" col-md-4\_>
      <a href="/" class="footer-brand" aria-label="&lt;?php" echo brand_name; ?> — sākumlapa\"&gt; 
       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0" 0 32 32\_ width="32" height="32" focusable="false" aria-hidden="true">
        <circle cx="16" cy="16" r="15" fill="#f9a8d4" /> <path d="M8" 20l4-8h8l4 8H8z\_ fill="#2d3748" /> <circle cx="11" cy="21" r="2" fill="#fff" /> <circle cx="21" cy="21" r="2" fill="#fff" />
       </svg> 
       <span class="footer-brand-name" ms-2\_><!--?php echo BRAND_NAME; ?--></span> </a>
      <p class="footer-tagline" mt-3\_>Uzticama automašīnas apdrošināšana Latvijā ar caurskatāmiem nosacījumiem un personalizētu pieeju.</p>
      <p class="footer-contact" mt-3\_><a href="tel:{telephone}" class="footer-link">{telephone}</a>
       <br>
       <a href="mailto:&lt;?php" echo support_email; ?>\" class=\"footer-link\"&gt;<!--?php echo SUPPORT_EMAIL; ?--></a></p>
      <address class="footer-address" mt-2\_>{address}</address>
     </div>
     <div class="col-6" col-md-2\_>
      <h3 class="footer-heading">Pakalpojumi</h3>
      <ul class="footer-list" role="list">
       <li><a href="#services" class="footer-link">OCTA</a></li>
       <li><a href="#services" class="footer-link">KASKO</a></li>
       <li><a href="#services" class="footer-link">Ceļojumu apdrošināšana</a></li>
       <li><a href="#services" class="footer-link">Avārijas asistents</a></li>
      </ul>
     </div>
     <div class="col-6" col-md-2\_>
      <h3 class="footer-heading">Uzņēmums</h3>
      <ul class="footer-list" role="list">
       <li><a href="#about" class="footer-link">Par mums</a></li>
       <li><a href="#team" class="footer-link">Komanda</a></li>
       <li><a href="#media" class="footer-link">Mediji</a></li>
       <li><a href="#reviews" class="footer-link">Atsauksmes</a></li>
      </ul>
     </div>
     <div class="col-6" col-md-2\_>
      <h3 class="footer-heading">Palīdzība</h3>
      <ul class="footer-list" role="list">
       <li><a href="#help-center" class="footer-link">Palīdzības centrs</a></li>
       <li><a href="#contact" class="footer-link">Kontakti</a></li>
       <li><a href="#quote-form" class="footer-link">Aprēķināt cenu</a></li>
      </ul>
     </div>
     <div class="col-6" col-md-2\_>
      <h3 class="footer-heading">Juridiskais</h3>
      <ul class="footer-list" role="list">
       <li><a href="#contact" class="footer-link">Privātuma politika</a></li>
       <li><a href="#contact" class="footer-link">Lietošanas noteikumi</a></li>
       <li><a href="#contact" class="footer-link">Sīkdatņu politika</a></li>
      </ul>
     </div>
    </div>
    <div class="footer-bottom">
     <p class="footer-copy">© <!--?php echo CURRENT_YEAR; ?--> <!--?php echo BRAND_NAME; ?-->. Visas tiesības aizsargātas.</p>
     <p class="footer-domain"><a href="https://domain.com" class="footer-link"><!--?php echo PRIMARY_DOMAIN; ?--></a></p>
    </div>
   </div>
  </footer>
  <!-- ===================== /FOOTER ===================== -->
  " 
  <footer class="site-footer" role="contentinfo">
   <div class="container">
    <div class="row" gy-4 py-5\_>
     <div class="col-12" col-md-4\_>
      <a href="/" class="footer-brand" aria-label="&lt;?php" echo brand_name; ?> — sākumlapa\"&gt; 
       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0" 0 32 32\_ width="32" height="32" focusable="false" aria-hidden="true">
        <circle cx="16" cy="16" r="15" fill="#f9a8d4" /> <path d="M8" 20l4-8h8l4 8H8z\_ fill="#2d3748" /> <circle cx="11" cy="21" r="2" fill="#fff" /> <circle cx="21" cy="21" r="2" fill="#fff" />
       </svg> 
       <span class="footer-brand-name" ms-2\_><!--?php echo BRAND_NAME; ?--></span> </a>
      <p class="footer-tagline" mt-3\_>Uzticama automašīnas apdrošināšana Latvijā ar caurskatāmiem nosacījumiem un personalizētu pieeju.</p>
      <p class="footer-contact" mt-3\_><a href="tel:{telephone}" class="footer-link">{telephone}</a>
       <br>
       <a href="mailto:&lt;?php" echo support_email; ?>\" class=\"footer-link\"&gt;<!--?php echo SUPPORT_EMAIL; ?--></a></p>
      <address class="footer-address" mt-2\_>{address}</address>
     </div>
     <div class="col-6" col-md-2\_>
      <h3 class="footer-heading">Pakalpojumi</h3>
      <ul class="footer-list" role="list">
       <li><a href="#services" class="footer-link">OCTA</a></li>
       <li><a href="#services" class="footer-link">KASKO</a></li>
       <li><a href="#services" class="footer-link">Ceļojumu apdrošināšana</a></li>
       <li><a href="#services" class="footer-link">Avārijas asistents</a></li>
      </ul>
     </div>
     <div class="col-6" col-md-2\_>
      <h3 class="footer-heading">Uzņēmums</h3>
      <ul class="footer-list" role="list">
       <li><a href="#about" class="footer-link">Par mums</a></li>
       <li><a href="#team" class="footer-link">Komanda</a></li>
       <li><a href="#media" class="footer-link">Mediji</a></li>
       <li><a href="#reviews" class="footer-link">Atsauksmes</a></li>
      </ul>
     </div>
     <div class="col-6" col-md-2\_>
      <h3 class="footer-heading">Palīdzība</h3>
      <ul class="footer-list" role="list">
       <li><a href="#help-center" class="footer-link">Palīdzības centrs</a></li>
       <li><a href="#contact" class="footer-link">Kontakti</a></li>
       <li><a href="#quote-form" class="footer-link">Aprēķināt cenu</a></li>
      </ul>
     </div>
     <div class="col-6" col-md-2\_>
      <h3 class="footer-heading">Juridiskais</h3>
      <ul class="footer-list" role="list">
       <li><a href="#contact" class="footer-link">Privātuma politika</a></li>
       <li><a href="#contact" class="footer-link">Lietošanas noteikumi</a></li>
       <li><a href="#contact" class="footer-link">Sīkdatņu politika</a></li>
      </ul>
     </div>
    </div>
    <div class="footer-bottom">
     <p class="footer-copy">© <!--?php echo CURRENT_YEAR; ?--> <!--?php echo BRAND_NAME; ?-->. Visas tiesības aizsargātas.</p>
     <p class="footer-domain"><a href="https://domain.com" class="footer-link"><!--?php echo PRIMARY_DOMAIN; ?--></a></p>
    </div>
   </div>
  </footer>
  <script src="script.js" defer></script>
 </body>
</html>