<!DOCTYPE html>
<html lang="id" class="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monitor Antrean | Puskesmas Sejahtera</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;600;700;800&amp;family=Public+Sans:wght@400;600;700&amp;display=swap" rel="stylesheet">
    <!-- Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=block" rel="stylesheet">
    <!-- Tailwind CSS with plugins -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script id="tailwind-config">
      try {
        tailwind.config = {
          darkMode: "class",
          theme: {
            extend: {
              "colors": {
                      "surface-variant": "#d3e4fe",
                      "secondary-fixed": "#d5e3fd",
                      "surface-container-lowest": "#ffffff",
                      "on-primary-fixed-variant": "#005236",
                      "tertiary-fixed": "#d8e5e2",
                      "primary-fixed": "#6ffbbe",
                      "secondary": "#515f74",
                      "on-primary-fixed": "#002113",
                      "primary": "#006c49",
                      "on-secondary-container": "#57657b",
                      "surface-tint": "#006c49",
                      "surface-container": "#e5eeff",
                      "on-tertiary-fixed-variant": "#3d4947",
                      "tertiary": "#55615f",
                      "outline-variant": "#bbcabf",
                      "error": "#ba1a1a",
                      "tertiary-container": "#98a5a3",
                      "tertiary-fixed-dim": "#bcc9c6",
                      "surface-bright": "#f8f9ff",
                      "secondary-fixed-dim": "#b9c7e0",
                      "on-surface-variant": "#3c4a42",
                      "on-tertiary": "#ffffff",
                      "on-secondary-fixed-variant": "#3a485c",
                      "on-error-container": "#93000a",
                      "surface-container-low": "#eff4ff",
                      "on-surface": "#0b1c30",
                      "inverse-on-surface": "#eaf1ff",
                      "inverse-primary": "#4edea3",
                      "on-background": "#0b1c30",
                      "on-error": "#ffffff",
                      "primary-container": "#10b981",
                      "on-secondary": "#ffffff",
                      "outline": "#6c7a71",
                      "on-tertiary-fixed": "#121e1c",
                      "on-secondary-fixed": "#0d1c2f",
                      "on-primary": "#ffffff",
                      "surface-container-highest": "#d3e4fe",
                      "secondary-container": "#d5e3fd",
                      "primary-fixed-dim": "#4edea3",
                      "error-container": "#ffdad6",
                      "background": "#f8f9ff",
                      "surface-dim": "#cbdbf5",
                      "on-tertiary-container": "#2f3b39",
                      "on-primary-container": "#00422b",
                      "surface": "#f8f9ff",
                      "inverse-surface": "#213145",
                      "surface-container-high": "#dce9ff"
              },
              "borderRadius": {
                      "DEFAULT": "0.25rem",
                      "lg": "0.5rem",
                      "xl": "0.75rem",
                      "full": "9999px"
              },
              "spacing": {
                      "grid-gutter": "24px",
                      "container-max": "1280px",
                      "base": "8px",
                      "section-gap-desktop": "80px",
                      "section-gap-mobile": "48px"
              },
              "fontFamily": {
                      "headline-lg-mobile": ["Manrope"],
                      "body-lg": ["Public Sans"],
                      "display-lg": ["Manrope"],
                      "body-md": ["Public Sans"],
                      "headline-lg": ["Manrope"],
                      "label-md": ["Public Sans"],
                      "headline-md": ["Manrope"]
              },
              "fontSize": {
                      "headline-lg-mobile": ["24px", {"lineHeight": "32px", "fontWeight": "600"}],
                      "body-lg": ["18px", {"lineHeight": "28px", "fontWeight": "400"}],
                      "display-lg": ["48px", {"lineHeight": "56px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                      "body-md": ["16px", {"lineHeight": "24px", "fontWeight": "400"}],
                      "headline-lg": ["32px", {"lineHeight": "40px", "fontWeight": "600"}],
                      "label-md": ["14px", {"lineHeight": "20px", "fontWeight": "600"}],
                      "headline-md": ["24px", {"lineHeight": "32px", "fontWeight": "600"}]
              }
            },
          },
        }
      } catch (_e) {}
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            display: inline-block;
        }
        body {
            font-family: 'Public Sans', sans-serif;
            background-color: #f8f9ff;
        }
        .bento-grid {
            display: grid;
            grid-template-columns: repeat(12, 1fr);
            gap: 24px;
        }
        .pulse-effect {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 100px;
            height: 100px;
            background-color: rgba(0, 108, 73, 0.2);
            border-radius: 50%;
            animation: pulse 2s infinite ease-in-out;
            z-index: 10;
            pointer-events: none;
        }
        @keyframes pulse {
            0% {
                width: 100px;
                height: 100px;
                opacity: 0.8;
            }
            100% {
                width: 250px;
                height: 250px;
                opacity: 0;
            }
        }
    </style>
    @livewireStyles
</head>
<body class="bg-background text-on-background font-body-md overflow-hidden antialiased">
    {{ $slot }}
    @livewireScripts
</body>
</html>
