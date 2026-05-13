@php($cards = [
  ['title' => 'Find Your Representative', 'copy' => 'Placeholder finder for barangay, city, and district representatives.'],
  ['title' => 'Office Channels', 'copy' => 'List verified office contact channels and communication templates.'],
  ['title' => 'Promise Tracker', 'copy' => 'Compare commitments against recorded votes and policy outcomes.'],
  ['title' => 'Constituent Signals', 'copy' => 'Preview issue volume and priorities raised by residents.'],
])
<x-placeholder-page title="PATAG | Representatives" eyebrow="Engagement" headline="Find Your Representative" description="Placeholder representative finder with district and office links." :cards="$cards" />
