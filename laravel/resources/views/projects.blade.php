@extends('layout')
@section('title', 'Projects')
@section('meta_desc', 'Projects built by Cyrel Lorica — ARCHIEVA, EUNOIA, and teaching community programs.')

@section('content')
<div class="page-banner">
  <h1>🚀 Projects</h1>
  <p>Things I have built with passion and code ~</p>
</div>

<section class="section">
  <div class="section-header">
    <span class="section-eyebrow">💡 Portfolio</span>
    <h2 class="section-title">What I've <span class="highlight">Built</span></h2>
    <div class="section-divider"></div>
  </div>

  <div class="projects-grid">
    @foreach($projects as $p)
    <div class="project-card">
      <div class="project-header">
        <span class="project-emoji">{{ $p['emoji'] }}</span>
        <div class="project-name">{{ $p['name'] }}</div>
      </div>
      <div class="project-body">
        <p class="project-desc">{{ $p['desc'] }}</p>
        <div class="project-tags">
          @foreach($p['tags'] as $tag)
          <span class="tag">{{ $tag }}</span>
          @endforeach
        </div>
      </div>
    </div>
    @endforeach
  </div>

  <div class="card" style="margin-top:40px;text-align:center;background:linear-gradient(135deg,var(--primary-pale),#E8F5E9);">
    <div style="font-size:2rem;margin-bottom:10px;">💡</div>
    <div style="font-family:'Pacifico',cursive;font-size:1.2rem;color:var(--primary-dark);margin-bottom:8px;">More Coming Soon!</div>
    <p style="color:var(--text-mid);font-size:0.9rem;max-width:440px;margin:0 auto;">
      Currently working on exciting new projects. Stay tuned for more! 🔥
    </p>
  </div>
</section>
@endsection
