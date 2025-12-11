<svg viewBox="0 0 500 450" class="w-full max-w-md" xmlns="http://www.w3.org/2000/svg">
  <defs>
    <linearGradient id="aboutGradientBlue" x1="0%" y1="0%" x2="100%" y2="100%">
      <stop offset="0%" style="stop-color:#1976d2;stop-opacity:1" />
      <stop offset="100%" style="stop-color:#1a237e;stop-opacity:1" />
    </linearGradient>
    <linearGradient id="aboutGradientAccent" x1="0%" y1="0%" x2="100%" y2="100%">
      <stop offset="0%" style="stop-color:#ff9800;stop-opacity:1" />
      <stop offset="100%" style="stop-color:#f57c00;stop-opacity:1" />
    </linearGradient>
  </defs>
  <!-- Background circles -->
  <circle cx="250" cy="225" r="200" fill="url(#aboutGradientBlue)" opacity="0.08" />

  <!-- Team/people representation -->
  <g>
    <!-- Person 1 (center-left) -->
    <circle cx="150" cy="120" r="35" fill="url(#aboutGradientBlue)" opacity="0.9" />
    <circle cx="150" cy="120" r="30" fill="white" />
    <circle cx="145" cy="105" r="12" fill="url(#aboutGradientBlue)" />
    <ellipse cx="150" cy="135" rx="18" ry="22" fill="url(#aboutGradientBlue)" opacity="0.8" />

    <!-- Person 2 (center-right) -->
    <circle cx="350" cy="140" r="35" fill="url(#aboutGradientAccent)" opacity="0.9" />
    <circle cx="350" cy="140" r="30" fill="white" />
    <circle cx="345" cy="125" r="12" fill="url(#aboutGradientAccent)" />
    <ellipse cx="350" cy="155" rx="18" ry="22" fill="url(#aboutGradientAccent)" opacity="0.8" />

    <!-- Person 3 (bottom-center) -->
    <circle cx="250" cy="260" r="35" fill="#10B981" opacity="0.9" />
    <circle cx="250" cy="260" r="30" fill="white" />
    <circle cx="245" cy="245" r="12" fill="#10B981" />
    <ellipse cx="250" cy="275" rx="18" ry="22" fill="#10B981" opacity="0.8" />
  </g>

  <!-- Connection lines -->
  <g stroke="url(#aboutGradientBlue)" stroke-width="2" stroke-dasharray="4,4" opacity="0.4" fill="none">
    <line x1="180" y1="140" x2="320" y2="160" />
    <line x1="175" y1="155" x2="260" y2="250" />
    <line x1="325" y1="170" x2="275" y2="250" />
  </g>

  <!-- Data/Analytics symbols -->
  <g>
    <!-- Bar chart elements -->
    <rect x="80" y="320" width="12" height="60" rx="2" fill="url(#aboutGradientAccent)" opacity="0.6" />
    <rect x="100" y="300" width="12" height="80" rx="2" fill="url(#aboutGradientAccent)" opacity="0.7" />
    <rect x="120" y="280" width="12" height="100" rx="2" fill="url(#aboutGradientAccent)" opacity="0.8" />
    <rect x="140" y="295" width="12" height="85" rx="2" fill="url(#aboutGradientAccent)" opacity="0.7" />

    <!-- Growth arrow -->
    <path d="M 200 340 L 220 320 L 215 330 L 240 305" stroke="url(#aboutGradientBlue)" stroke-width="3" fill="none" stroke-linecap="round" stroke-linejoin="round" />

    <!-- Checkmarks -->
    <g fill="none" stroke="#10B981" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
      <path d="M 320 310 L 330 320 L 345 305" />
      <path d="M 380 330 L 390 340 L 405 325" />
    </g>

    <!-- Process circles -->
    <circle cx="320" cy="370" r="8" fill="url(#aboutGradientBlue)" opacity="0.5" />
    <circle cx="345" cy="365" r="8" fill="url(#aboutGradientAccent)" opacity="0.6" />
    <circle cx="370" cy="372" r="8" fill="#10B981" opacity="0.7" />
  </g>

  <!-- Decorative elements -->
  <g opacity="0.4">
    <rect x="60" y="50" width="25" height="25" rx="4" fill="url(#aboutGradientBlue)" />
    <circle cx="420" cy="280" r="15" fill="url(#aboutGradientAccent)" />
    <rect x="440" y="360" width="20" height="20" rx="3" fill="#10B981" />
  </g>
</svg>
