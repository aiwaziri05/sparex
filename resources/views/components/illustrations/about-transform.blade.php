<svg viewBox="0 0 500 400" class="w-full h-auto" xmlns="http://www.w3.org/2000/svg">
  <defs>
    <linearGradient id="transformGradient" x1="0%" y1="0%" x2="100%" y2="100%">
      <stop offset="0%" style="stop-color:#3b82f6;stop-opacity:1" />
      <stop offset="100%" style="stop-color:#8b5cf6;stop-opacity:1" />
    </linearGradient>
    <filter id="softShadow">
      <feDropShadow dx="0" dy="4" stdDeviation="8" flood-color="#000" flood-opacity="0.08" />
    </filter>
  </defs>

  <!-- Background Elements -->
  <circle cx="200" cy="200" r="160" fill="url(#transformGradient)" opacity="0.03" />
  <circle cx="450" cy="50" r="80" fill="#fbbf24" opacity="0.05" />
  
  <!-- Left: Raw Data (Disordered) -->
  <g transform="translate(60, 160)">
      <rect x="0" y="0" width="30" height="30" rx="4" fill="#cbd5e1" opacity="0.8" />
      <rect x="40" y="-20" width="30" height="30" rx="4" fill="#94a3b8" opacity="0.8" />
      <circle cx="20" cy="50" r="15" fill="#cbd5e1" opacity="0.8" />
      <rect x="25" y="70" width="30" height="30" rx="4" fill="#94a3b8" opacity="0.8" />
  </g>

  <!-- Connection / Flow Lines -->
  <path d="M140 200 C 180 200, 180 200, 220 200" stroke="#e2e8f0" stroke-width="2" stroke-dasharray="4 4" />
  <path d="M280 200 C 320 200, 320 200, 360 200" stroke="#e2e8f0" stroke-width="2" stroke-dasharray="4 4" />

  <!-- Center: Transformation Engine -->
  <g transform="translate(250, 200)">
      <circle cx="0" cy="0" r="45" fill="white" filter="url(#softShadow)" />
      <circle cx="0" cy="0" r="35" fill="none" stroke="url(#transformGradient)" stroke-width="4" />
      <!-- Animated looking core symbols -->
      <path d="M-12 -12 L12 12 M12 -12 L-12 12" stroke="#3b82f6" stroke-width="3" stroke-linecap="round" />
      <circle cx="0" cy="0" r="8" fill="#8b5cf6" />
  </g>

  <!-- Right: Optimized Output (Ordered) -->
  <g transform="translate(360, 140)">
      <!-- Ascending bars representing growth -->
      <rect x="0" y="60" width="20" height="40" rx="2" fill="#60a5fa" />
      <rect x="30" y="40" width="20" height="60" rx="2" fill="#3b82f6" />
      <rect x="60" y="10" width="20" height="90" rx="2" fill="#2563eb" />
      
      <!-- Checkmark badge -->
      <circle cx="90" cy="0" r="12" fill="#10b981" />
      <path d="M86 -1 L89 3 L94 -4" stroke="white" stroke-width="2" fill="none" />
  </g>

  <!-- Floating Particles -->
  <circle cx="250" cy="140" r="4" fill="#fbbf24" opacity="0.8" />
  <circle cx="280" cy="260" r="3" fill="#34d399" opacity="0.8" />
  <circle cx="180" cy="240" r="2" fill="#8b5cf6" opacity="0.8" />

</svg>
