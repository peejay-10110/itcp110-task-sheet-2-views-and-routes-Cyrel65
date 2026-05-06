@extends('layout')
@section('title', 'About Me')
@section('meta_desc', 'Personal details of Cyrel Lorica — 19 years old, from Taguig, aspiring teacher and developer.')

@section('content')
<div class="page-banner">
  <h1>🙋 About Me</h1>
  <p>Get to know the person behind the portfolio ~</p>
</div>

<section class="section">
  <div class="profile-grid">

    <!-- PHOTO COLUMN -->
    <div class="profile-photo-wrap">
      <div class="card" style="padding:24px;text-align:center;width:100%;">
        <div class="profile-photo" style="margin:0 auto 16px;">
          <img src="/images/profile.jpg"
               alt="Cyrel Lorica"
               style="width:100%;height:100%;border-radius:24px;object-fit:cover;"
               onerror="this.parentElement.innerHTML='🌸';" />
        </div>
        <div style="font-family:'Pacifico',cursive;font-size:1.4rem;color:var(--primary-dark);margin-bottom:4px;">Cyrel Lorica</div>
        <div style="font-size:0.85rem;color:var(--text-light);font-weight:600;">2nd Year College Student</div>

      </div>

      <!-- Quick chips -->
      <div style="display:flex;flex-wrap:wrap;gap:8px;justify-content:center;width:100%;">
        @foreach(['🎓 TUP Taguig','💙 Catholic','♟️ Chess lover','🎵 Singer'] as $chip)
        <span style="background:var(--primary-pale);color:var(--primary-dark);font-size:0.8rem;font-weight:700;padding:6px 14px;border-radius:20px;border:1.5px solid var(--primary-light);">{{ $chip }}</span>
        @endforeach
      </div>
    </div>

    <!-- DETAILS COLUMN -->
    <div>
      <div class="section-eyebrow" style="margin-bottom:20px;">✨ Personal Info</div>
      <div class="detail-list">
        @foreach($details as $d)
        <div class="detail-item">
          <div class="detail-icon">{{ $d['icon'] }}</div>
          <div>
            <div class="detail-label">{{ $d['label'] }}</div>
            <div class="detail-value">{{ $d['value'] }}</div>
          </div>
        </div>
        @endforeach
      </div>
    </div>

  </div>

  <!-- CONTACTS -->
  <div style="margin-top:40px;">
    <div class="section-eyebrow" style="margin-bottom:20px;">📬 Contact Info</div>
    <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(280px,1fr));gap:16px;">
      @foreach($contacts as $c)
      <a href="{{ $c['href'] }}" class="detail-item" style="text-decoration:none;transition:all 0.25s;" onmouseover="this.style.borderColor='var(--primary)'" onmouseout="this.style.borderColor='var(--primary-light)'">
        <div class="detail-icon">{{ $c['icon'] }}</div>
        <div>
          <div class="detail-label">{{ $c['label'] }}</div>
          <div class="detail-value" style="font-size:0.88rem;">{{ $c['value'] }}</div>
        </div>
      </a>
      @endforeach
    </div>
  </div>
</section>
@endsection
