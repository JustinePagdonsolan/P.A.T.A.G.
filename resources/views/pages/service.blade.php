@php($cards = [
  ['title' => 'Service Directory', 'copy' => 'Browse core PATAG public-interest services and civic support pathways.'],
  ['title' => 'Citizen Requests', 'copy' => 'Track submission status for requests connected to your district.'],
  ['title' => 'Office Routing', 'copy' => 'Find the right office for each concern with transparent handoff steps.'],
  ['title' => 'Promise Tracker', 'copy' => 'Tie service commitments to elected and appointed officials.'],
])
<x-placeholder-page title="PATAG | Service" eyebrow="Platform Services" headline="Public Service Portal" description="Placeholder service catalog for PATAG civic workflows and office routing." :cards="$cards" />
