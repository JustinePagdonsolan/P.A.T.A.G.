<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>{{ $title ?? 'P.A.T.A.G.' }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
      tailwind.config = {
        theme: {
          extend: {
            fontFamily: {
              serif: ['Playfair Display', 'serif'],
              sans: ['Inter', 'sans-serif'],
            },
            colors: {
              patag: {
                900: '#2a1c14',
                800: '#3b2a20',
                700: '#4b3627',
                600: '#6a4a38',
                500: '#8a6a55',
                200: '#f2e9e1',
              },
            },
            boxShadow: {
              soft: '0 18px 40px rgba(0, 0, 0, 0.18)',
            },
          },
        },
      }
    </script>
    <style>
      .patag-gradient {
        background: radial-gradient(circle at top left, rgba(120, 88, 62, 0.9), transparent 55%),
          linear-gradient(120deg, #2a1c14 0%, #4b3627 45%, #6a4a38 100%);
      }
      .patag-panel {
        background: rgba(255, 255, 255, 0.08);
        backdrop-filter: blur(12px);
      }
      .patag-card {
        background: #f7f1ec;
        border: 1px solid rgba(63, 46, 33, 0.12);
      }
      .patag-pill {
        background: rgba(104, 76, 57, 0.2);
        border: 1px solid rgba(104, 76, 57, 0.4);
      }
    </style>
  </head>
  <body class="bg-[#f6f1ec] text-[#2a1c14]">
    {{ $slot }}
  </body>
</html>
