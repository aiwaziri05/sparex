<svg viewBox="0 0 500 400" class="w-full h-auto" xmlns="http://www.w3.org/2000/svg">
  <defs>
    <linearGradient id="heroGradient" x1="0%" y1="0%" x2="100%" y2="100%">
      <stop offset="0%" style="stop-color:#3b82f6;stop-opacity:1" />
      <stop offset="100%" style="stop-color:#1e40af;stop-opacity:1" />
    </linearGradient>
    <filter id="shadow">
      <feDropShadow dx="0" dy="4" stdDeviation="6" flood-color="#000" flood-opacity="0.1" />
    </filter>
  </defs>
  
  <!-- Abstract Background Shapes -->
  <circle cx="250" cy="200" r="180" fill="url(#heroGradient)" opacity="0.05" />
  <circle cx="400" cy="100" r="50" fill="#fbbf24" opacity="0.1" />
  <circle cx="100" cy="300" r="80" fill="#34d399" opacity="0.1" />

  <!-- Main Dashboard Panel -->
  <rect x="50" y="80" width="400" height="240" rx="12" fill="white" filter="url(#shadow)" />
  
  <!-- Header Bar -->
  <rect x="50" y="80" width="400" height="40" rx="12" fill="#eff6ff" />
  <rect x="50" y="110" width="400" height="10" fill="#eff6ff" /> <!-- Cover bottom radius of header -->
  <circle cx="70" cy="100" r="4" fill="#ef4444" opacity="0.6" />
  <circle cx="85" cy="100" r="4" fill="#f59e0b" opacity="0.6" />
  <circle cx="100" cy="100" r="4" fill="#10b981" opacity="0.6" />

  <!-- Sidebar -->
  <rect x="50" y="120" width="80" height="200" fill="#f8fafc" />
  <rect x="65" y="140" width="50" height="8" rx="2" fill="#cbd5e1" />
  <rect x="65" y="160" width="50" height="8" rx="2" fill="#cbd5e1" />
  <rect x="65" y="180" width="50" height="8" rx="2" fill="#cbd5e1" />

  <!-- Content Area -->
  <rect x="150" y="140" width="280" height="160" fill="none" />
  
  <!-- Graph / Chart -->
  <path d="M160 280 L160 180" stroke="#e2e8f0" stroke-width="2" />
  <path d="M160 280 L420 280" stroke="#e2e8f0" stroke-width="2" />
  <path d="M160 250 Q 220 260, 260 200 T 360 180 T 420 160" fill="none" stroke="#2563eb" stroke-width="3" stroke-linecap="round" />
  <circle cx="420" cy="160" r="4" fill="#2563eb" />

  <!-- Floating Elements -->
  <rect x="320" y="220" width="100" height="60" rx="6" fill="#ffffff" filter="url(#shadow)" stroke="#e2e8f0" />
  <rect x="330" y="235" width="80" height="6" rx="2" fill="#cbd5e1" />
  <rect x="330" y="250" width="50" height="6" rx="2" fill="#93c5fd" />

</svg>
