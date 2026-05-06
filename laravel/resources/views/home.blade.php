@extends('layout')
@section('title', 'Home')
@section('meta_desc', 'Welcome to Cyrel Lorica\'s portfolio — student, developer, and aspiring teacher from TUP Taguig.')

@section('content')
<!-- HERO -->
<section class="hero">
  <div class="hero-content">
    <img src="/images/profile.jpg"
         alt="Cyrel Lorica"
         class="hero-avatar"
         onerror="this.style.background='var(--primary-pale)';this.src='';this.alt='';this.insertAdjacentHTML('afterend','<div style=\'width:160px;height:160px;border-radius:50%;border:5px solid white;box-shadow:0 0 0 4px var(--primary);margin:0 auto 28px;display:flex;align-items:center;justify-content:center;font-size:5rem;background:var(--primary-pale);\'>🌸</div>');this.remove();" />

    <div class="hero-badge">🌸 Open to opportunities</div>

    <h1>Hi, I'm <span class="name-accent">Cyrel!</span> 👋</h1>

    <p class="tagline">
      <span class="typing-text">Student 📚</span>
    </p>

    <p style="color:var(--text-mid);margin-bottom:32px;font-size:0.95rem;max-width:480px;margin-left:auto;margin-right:auto;">
      A passionate 2nd-year college student at TUP Taguig, aspiring to become a teacher and software developer. 💙
    </p>

    <div class="btn-group">
      <a href="/about" class="btn btn-primary">🙋 About Me</a>
      <a href="/projects" class="btn btn-outline">🚀 My Projects</a>
      <a href="/contact" class="btn btn-outline">📬 Contact</a>
    </div>
  </div>
</section>

<!-- QUICK STATS -->
<section style="padding:0 24px 80px;max-width:1100px;margin:0 auto;">
  <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(200px,1fr));gap:20px;text-align:center;">
    @foreach([
      ['🏫','2nd Year College','TUP Taguig','var(--primary-pale)'],
      ['🏆','Dean\'s Lister','2 Consecutive Years','#FFF3D0'],
      ['💻','7+ Skills','Programming Languages','#E0F4FF'],
      ['🚀','3 Projects','Successfully Built','#E8F5E9'],
    ] as $stat)
    <div class="card" style="background:{{ $stat[3] }};border-color:transparent;">
      <div style="font-size:2.2rem;margin-bottom:10px;">{{ $stat[0] }}</div>
      <div style="font-size:1.3rem;font-weight:800;color:var(--text-dark);margin-bottom:4px;">{{ $stat[1] }}</div>
      <div style="font-size:0.82rem;color:var(--text-light);font-weight:600;">{{ $stat[2] }}</div>
    </div>
    @endforeach
  </div>
</section>

<!-- QUICK LINKS -->
<section style="padding:0 24px 80px;max-width:1100px;margin:0 auto;">
  <div class="section-header">
    <span class="section-eyebrow">✨ Explore</span>
    <h2 class="section-title">Discover <span class="highlight">My Story</span></h2>
    <div class="section-divider"></div>
  </div>
  <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(240px,1fr));gap:20px;">
    @foreach([
      ['🎵','Hobbies','/hobbies','Singing, chess & more!','#FFE4F0','#FFB5C8'],
      ['💻','Skills','/skills','HTML, CSS, Java & more','#E0F4FF','#7EC8E3'],
      ['🎓','Education','/education','My academic journey','#E8F5E9','#C5F0A4'],
      ['🏆','Achievements','/achievements','Awards & honors','#FFF3D0','#FFE4A0'],
      ['🚀','Projects','/projects','Things I have built','#EDE7F6','#CE93D8'],
      ['🌟','Aspiration','/aspiration','My dream & goals','#E3F2FD','#90CAF9'],
    ] as $item)
    <a href="{{ $item[2] }}" class="card" style="text-decoration:none;display:block;border-color:{{ $item[5] }}40;">
      <div style="font-size:2.4rem;margin-bottom:12px;">{{ $item[0] }}</div>
      <div style="font-size:1.1rem;font-weight:800;color:var(--text-dark);margin-bottom:4px;">{{ $item[1] }}</div>
      <div style="font-size:0.88rem;color:var(--text-mid);">{{ $item[3] }}</div>
      <div style="margin-top:14px;font-size:0.82rem;font-weight:700;color:var(--primary-dark);">View →</div>
    </a>
    @endforeach
  </div>
</section>
@endsection
