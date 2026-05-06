@extends('layout')
@section('title', 'Hobbies')
@section('meta_desc', 'Cyrel Lorica\'s hobbies — singing, eating, sleeping, playing, and chess.')

@section('content')
<div class="page-banner">
  <h1>🎵 My Hobbies</h1>
  <p>The things that make me happy every day ~</p>
</div>

<section class="section">
  <div class="section-header">
    <span class="section-eyebrow">🌈 What I love</span>
    <h2 class="section-title">My <span class="highlight">Happy Things</span></h2>
    <div class="section-divider"></div>
  </div>

  <div class="hobbies-grid">
    @foreach($hobbies as $h)
    <div class="hobby-card">
      <span class="hobby-emoji">{{ $h['emoji'] }}</span>
      <div class="hobby-name">{{ $h['name'] }}</div>
      <div style="font-size:0.82rem;color:var(--text-light);margin-top:6px;font-weight:600;">{{ $h['desc'] }}</div>
    </div>
    @endforeach
  </div>

  <!-- Fun fact -->
  <div class="card" style="margin-top:40px;text-align:center;background:linear-gradient(135deg,var(--primary-pale),#FFF0F5);">
    <div style="font-size:2rem;margin-bottom:10px;">✨</div>
    <div style="font-family:'Pacifico',cursive;font-size:1.3rem;color:var(--primary-dark);margin-bottom:8px;">Fun Fact!</div>
    <p style="color:var(--text-mid);font-size:0.95rem;max-width:480px;margin:0 auto;">
      Chess sharpens the mind, singing feeds the soul, and sleeping recharges everything in between! 😄
    </p>
  </div>
</section>
@endsection
