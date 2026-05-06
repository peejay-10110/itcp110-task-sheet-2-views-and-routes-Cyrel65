<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>@yield('title', 'Cyrel Lorica') — Portfolio</title>
  <meta name="description" content="@yield('meta_desc', 'Personal portfolio of Cyrel Lorica — student, developer, and aspiring teacher.')" />
  <link rel="stylesheet" href="/css/style.css" />
  <link rel="icon" type="image/png" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='.9em' font-size='90'>🌸</text></svg>" />
</head>
<body>

  <!-- Floating bubbles bg -->
  <div class="bubbles" aria-hidden="true"></div>

  <!-- NAVBAR -->
  <nav class="navbar" role="navigation" aria-label="Main navigation">
    <a href="/" class="nav-brand">
      <span>🌸 Cyrel</span><span class="brand-dot"></span>
    </a>

    <button class="nav-toggle" aria-label="Toggle navigation" aria-expanded="false">
      <span></span><span></span><span></span>
    </button>

    <ul class="nav-links" role="list">
      <li><a href="/"><span class="nav-icon">🏠</span> Home</a></li>
      <li><a href="/about"><span class="nav-icon">🙋</span> About</a></li>
      <li><a href="/hobbies"><span class="nav-icon">🎵</span> Hobbies</a></li>
      <li><a href="/skills"><span class="nav-icon">💻</span> Skills</a></li>
      <li><a href="/education"><span class="nav-icon">🎓</span> Education</a></li>
      <li><a href="/achievements"><span class="nav-icon">🏆</span> Achievements</a></li>
      <li><a href="/projects"><span class="nav-icon">🚀</span> Projects</a></li>
      <li><a href="/experience"><span class="nav-icon">💼</span> Experience</a></li>
      <li><a href="/aspiration"><span class="nav-icon">🌟</span> Aspiration</a></li>
      <li><a href="/contact"><span class="nav-icon">📬</span> Contact</a></li>
    </ul>
  </nav>

  <!-- PAGE CONTENT -->
  <div class="page-wrapper">
    @yield('content')
  </div>

  <!-- FOOTER -->
  <footer class="contact-section">
    <h2>Let's Connect! 💌</h2>
    <p>Feel free to reach out anytime ~</p>
    <div class="contact-links">
      <a href="mailto:cyrellorica65@gmail.com" class="contact-link">📧 cyrellorica65@gmail.com</a>
      <a href="mailto:cyrel.lorica@tup.edu.ph" class="contact-link">🏫 cyrel.lorica@tup.edu.ph</a>
      <a href="tel:09386734571" class="contact-link">📱 0938-673-4571</a>
    </div>
    <p class="footer-copy">Made with <span>💙</span> by Cyrel Lorica &copy; {{ date('Y') }}</p>
  </footer>

  <script src="/js/main.js"></script>
  @yield('scripts')
</body>
</html>
