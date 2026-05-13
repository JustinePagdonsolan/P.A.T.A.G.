@php($cards = [
  ['title' => 'Open Contract Index', 'copy' => 'Review placeholder entries for government contracts and procurement summaries.'],
  ['title' => 'Vendor Transparency', 'copy' => 'Highlight key contract entities and declared project partners.'],
  ['title' => 'Budget Watch', 'copy' => 'Monitor district spending traces connected to awarded contracts.'],
  ['title' => 'Risk Flags', 'copy' => 'Surface anomaly checks and conflict indicators for review.'],
])
<x-placeholder-page title="PATAG | Contract" eyebrow="Procurement Monitor" headline="Contracts & Spending" description="Placeholder contract tracking interface aligned with PATAG transparency goals." :cards="$cards" />
