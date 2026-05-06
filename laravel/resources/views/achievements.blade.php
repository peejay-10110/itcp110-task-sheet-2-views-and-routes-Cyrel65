@extends('layout')
@section('title', 'Achievements')
@section('meta_desc', 'Cyrel Lorica\'s academic achievements, honors, and awards throughout school.')

@section('content')
<div class="page-banner">
  <h1>🏆 Achievements</h1>
  <p>My academic awards and recognitions ~</p>
</div>

<section class="section">
  <div class="section-header">
    <span class="section-eyebrow">⭐ Awards</span>
    <h2 class="section-title">My <span class="highlight">Accomplishments</span></h2>
    <div class="section-divider"></div>
  </div>

  <div class="achievements-list">
    @foreach($achievements as $a)
    <div class="achievement-item">
      <div class="achievement-badge badge-{{ $a['badge'] }}">{{ $a['icon'] }}</div>
      <div>
        <div class="achievement-level">{{ $a['level'] }}</div>
        <div class="achievement-title">{{ $a['title'] }}</div>
      </div>
    </div>
    @endforeach
  </div>

  <!-- Summary Cards -->
  <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(200px,1fr));gap:16px;margin-top:40px;">
    <div class="card" style="text-align:center;background:linear-gradient(135deg,#FFF9E6,#FFF3D0);">
      <div style="font-size:2.2rem;">🥇</div>
      <div style="font-size:1.4rem;font-weight:900;color:var(--text-dark);">2</div>
      <div style="font-size:0.82rem;color:var(--text-light);font-weight:700;">Dean's List</div>
    </div>
    <div class="card" style="text-align:center;background:linear-gradient(135deg,#E8F5E9,#F5FBF5);">
      <div style="font-size:2.2rem;">🎖️</div>
      <div style="font-size:1.4rem;font-weight:900;color:var(--text-dark);">2</div>
      <div style="font-size:0.82rem;color:var(--text-light);font-weight:700;">With Honors</div>
    </div>
    <div class="card" style="text-align:center;background:linear-gradient(135deg,#E0F4FF,#F0FAFF);">
      <div style="font-size:2.2rem;">🏅</div>
      <div style="font-size:1.4rem;font-weight:900;color:var(--text-dark);">2</div>
      <div style="font-size:0.82rem;color:var(--text-light);font-weight:700;">Best In Awards</div>
    </div>
    <div class="card" style="text-align:center;background:linear-gradient(135deg,#F3E5F5,#FAF0FF);">
      <div style="font-size:2.2rem;">🏆</div>
      <div style="font-size:1.4rem;font-weight:900;color:var(--text-dark);">Rank 4</div>
      <div style="font-size:0.82rem;color:var(--text-light);font-weight:700;">ASEAN Quiz Bee</div>
    </div>
  </div>
</section>
@endsection
