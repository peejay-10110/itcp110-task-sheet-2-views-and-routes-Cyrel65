@extends('layout')
@section('title', 'Contact')
@section('meta_desc', 'Contact Cyrel Lorica via email or phone.')

@section('content')
<div class="page-banner">
  <h1>📬 Contact</h1>
  <p>Let's connect and talk! I'd love to hear from you ~</p>
</div>

<section class="section">
  <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(280px,1fr));gap:24px;max-width:800px;margin:0 auto;">
    @foreach($contacts as $c)
    <a href="{{ $c['href'] }}" class="card" style="text-decoration:none;display:flex;align-items:center;gap:18px;">
      <div style="width:56px;height:56px;border-radius:16px;background:var(--primary-pale);border:2px solid var(--primary-light);display:flex;align-items:center;justify-content:center;font-size:1.6rem;flex-shrink:0;">{{ $c['icon'] }}</div>
      <div>
        <div style="font-size:0.75rem;color:var(--text-light);font-weight:700;text-transform:uppercase;letter-spacing:0.06em;">{{ $c['label'] }}</div>
        <div style="font-size:0.95rem;font-weight:700;color:var(--text-dark);word-break:break-all;">{{ $c['value'] }}</div>
      </div>
    </a>
    @endforeach
  </div>

  <div class="aspiration-card" style="margin-top:48px;max-width:600px;margin-left:auto;margin-right:auto;">
    <div style="font-size:3rem;margin-bottom:16px;">💌</div>
    <div class="aspiration-quote" style="font-size:1.2rem;">
      Open for collaborations, projects, and opportunities!
    </div>
    <div class="aspiration-sub">Don't hesitate to reach out ✨</div>
  </div>
</section>
@endsection
