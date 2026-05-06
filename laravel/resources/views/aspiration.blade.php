@extends('layout')
@section('title', 'Aspiration')
@section('meta_desc', 'Cyrel Lorica\'s aspiration — to become a competent teacher skilled in teaching and programming.')

@section('content')
<div class="page-banner">
  <h1>🌟 Aspiration</h1>
  <p>My dream and the reason I keep going ~</p>
</div>

<section class="section">
  <div class="section-header">
    <span class="section-eyebrow">💫 Dream</span>
    <h2 class="section-title">My <span class="highlight">Vision</span></h2>
    <div class="section-divider"></div>
  </div>

  <!-- Main aspiration card -->
  <div class="aspiration-card" style="margin-bottom:40px;">
    <div style="font-size:4rem;margin-bottom:20px;">🍎💻</div>
    <div class="aspiration-quote">
      "To become a Teacher with competence in Teaching and Programming."
    </div>
    <div class="aspiration-sub">— Cyrel Lorica</div>
  </div>

  <!-- Supporting cards -->
  <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(280px,1fr));gap:20px;">
    <div class="card" style="background:linear-gradient(135deg,#FFF3D0,#FFFBEE);">
      <div style="font-size:2.4rem;margin-bottom:14px;">🍎</div>
      <div style="font-size:1.1rem;font-weight:800;color:var(--text-dark);margin-bottom:8px;">As a Teacher</div>
      <p style="color:var(--text-mid);font-size:0.9rem;line-height:1.65;">
        To inspire and guide students not just in academics, but in shaping their character, values, and confidence in facing the world.
      </p>
    </div>
    <div class="card" style="background:linear-gradient(135deg,#E0F4FF,#EEF8FF);">
      <div style="font-size:2.4rem;margin-bottom:14px;">💻</div>
      <div style="font-size:1.1rem;font-weight:800;color:var(--text-dark);margin-bottom:8px;">As a Developer</div>
      <p style="color:var(--text-mid);font-size:0.9rem;line-height:1.65;">
        To build meaningful software solutions that address real-world problems, particularly in the education sector, making learning more accessible.
      </p>
    </div>
    <div class="card" style="background:linear-gradient(135deg,#E8F5E9,#F5FBF5);">
      <div style="font-size:2.4rem;margin-bottom:14px;">🌱</div>
      <div style="font-size:1.1rem;font-weight:800;color:var(--text-dark);margin-bottom:8px;">Continuous Growth</div>
      <p style="color:var(--text-mid);font-size:0.9rem;line-height:1.65;">
        To never stop learning — whether it is a new programming language, a new teaching strategy, or a new perspective on life and service.
      </p>
    </div>
  </div>

  <!-- Quote banner -->
  <div style="margin-top:40px;text-align:center;padding:40px 24px;background:var(--primary-pale);border-radius:var(--radius);border:2px dashed var(--primary-light);">
    <div style="font-size:2rem;margin-bottom:12px;">✨</div>
    <div style="font-family:'Pacifico',cursive;font-size:1.2rem;color:var(--primary-dark);margin-bottom:10px;">A Guiding Quote</div>
    <p style="font-size:1rem;color:var(--text-mid);font-style:italic;max-width:500px;margin:0 auto;line-height:1.7;">
      "The best teachers are those who show you where to look but don't tell you what to see — and I want to code the path."
    </p>
  </div>
</section>
@endsection
