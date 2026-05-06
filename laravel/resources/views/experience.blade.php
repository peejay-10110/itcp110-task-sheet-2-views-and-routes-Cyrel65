@extends('layout')
@section('title', 'Experience')
@section('meta_desc', 'Cyrel Lorica\'s work experience — DepEd immersion, community teaching, and student assistant.')

@section('content')
<div class="page-banner">
  <h1>💼 Experience</h1>
  <p>Real-world experiences that shaped who I am ~</p>
</div>

<section class="section">
  <div class="section-header">
    <span class="section-eyebrow">🌱 Journey</span>
    <h2 class="section-title">My <span class="highlight">Experiences</span></h2>
    <div class="section-divider"></div>
  </div>

  <div class="exp-grid">
    @foreach($experiences as $e)
    <div class="exp-card">
      <div class="exp-icon">{{ $e['icon'] }}</div>
      <div class="exp-content">
        <div class="exp-title">{{ $e['title'] }}</div>
        <div class="exp-desc">{{ $e['desc'] }}</div>
      </div>
    </div>
    @endforeach
  </div>

  <div class="card" style="margin-top:40px;background:linear-gradient(135deg,#E0F4FF,#EDE7F6);text-align:center;">
    <div style="font-size:2rem;margin-bottom:8px;">🌟</div>
    <div style="font-family:'Pacifico',cursive;font-size:1.2rem;color:var(--primary-dark);margin-bottom:8px;">Every Experience Counts</div>
    <p style="color:var(--text-mid);font-size:0.9rem;max-width:460px;margin:0 auto;">
      Each opportunity has taught me valuable lessons — from teaching communities to assisting in offices, every role shaped my passion for education and technology.
    </p>
  </div>
</section>
@endsection
