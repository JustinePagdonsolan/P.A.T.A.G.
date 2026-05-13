@php($cards = [
  ['title' => 'Citizen Support', 'copy' => 'Reach PATAG support for account, access, and content concerns.'],
  ['title' => 'Media and Research', 'copy' => 'Coordinate newsroom or academic requests for verified civic datasets.'],
  ['title' => 'Security Reporting', 'copy' => 'Submit vulnerability or privacy concerns through responsible channels.'],
  ['title' => 'Community Outreach', 'copy' => 'Connect with PATAG for civic education and engagement events.'],
])
<x-placeholder-page title="PATAG | Contact" eyebrow="Contact" headline="Get in Touch with PATAG" description="Placeholder contact center for support, media, and transparency requests." :cards="$cards" />
