@extends('layout')
@section('title', 'Skills')
@section('meta_desc', 'Cyrel Lorica\'s technical skills — HTML, CSS, JavaScript, Java, Thymeleaf, Dart and more.')

@section('content')
<div class="page-banner">
  <h1>💻 My Skills</h1>
  <p>Technologies and tools I work with ~</p>
</div>

<section class="section">
  <div class="section-header">
    <span class="section-eyebrow">🛠️ Tech Stack</span>
    <h2 class="section-title">What I <span class="highlight">Can Do</span></h2>
    <div class="section-divider"></div>
  </div>

  <div class="skills-grid">
    @foreach($skills as $s)
    <div class="skill-pill">
      <span class="skill-icon">{{ $s['icon'] }}</span>
      <div class="skill-bar-wrap">
        <div class="skill-label">{{ $s['name'] }}</div>
        <div class="skill-bar">
          <div class="skill-bar-fill" style="width:{{ $s['level'] }}%;"></div>
        </div>
      </div>
      <span style="font-size:0.75rem;font-weight:800;color:var(--primary-dark);">{{ $s['level'] }}%</span>
    </div>
    @endforeach
  </div>

  <!-- Learning journey note -->
  <div class="card" style="margin-top:40px;text-align:center;background:linear-gradient(135deg,#E0F4FF,#EDE7F6);">
    <div style="font-size:2rem;margin-bottom:10px;">🚀</div>
    <div style="font-family:'Pacifico',cursive;font-size:1.3rem;color:var(--primary-dark);margin-bottom:8px;">Always Learning!</div>
    <p style="color:var(--text-mid);font-size:0.95rem;max-width:500px;margin:0 auto;">
      Technology evolves every day, and so do I! Currently deepening my knowledge in full-stack web development and mobile app development. 💪
    </p>
  </div>
</section>
@endsection
