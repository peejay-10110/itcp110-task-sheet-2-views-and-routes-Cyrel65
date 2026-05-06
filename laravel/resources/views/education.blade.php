@extends('layout')
@section('title', 'Education')
@section('meta_desc', 'Cyrel Lorica\'s educational background from elementary to college.')

@section('content')
<div class="page-banner">
  <h1>🎓 Education</h1>
  <p>My academic journey from start to now ~</p>
</div>

<section class="section">
  <div class="section-header">
    <span class="section-eyebrow">📚 Schools</span>
    <h2 class="section-title">Where I <span class="highlight">Studied</span></h2>
    <div class="section-divider"></div>
  </div>

  <div class="schools-timeline">
    @foreach($schools as $s)
    <div class="school-item">
      <div class="school-emoji">{{ $s['emoji'] }}</div>
      <div class="school-level">{{ $s['level'] }}</div>
      <div class="school-name">{{ $s['name'] }}</div>
      @if(!empty($s['note']))
      <div style="font-size:0.82rem;color:var(--text-light);margin-top:4px;font-weight:600;">{{ $s['note'] }}</div>
      @endif
    </div>
    @endforeach
  </div>
</section>
@endsection
