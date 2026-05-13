@php($cards = [
  ['title' => 'Data Methodology', 'copy' => 'Document source pipelines, validation rules, and update cadence.'],
  ['title' => 'Transparency Policy', 'copy' => 'Explain how PATAG handles corrections, versioning, and public disclosures.'],
  ['title' => 'Fact-Check Badges', 'copy' => 'Define criteria behind each verification label used on the platform.'],
  ['title' => 'Audit Trail', 'copy' => 'Preview where users can inspect source links and evidence history.'],
])
<x-placeholder-page title="PATAG | Methodology" eyebrow="Policy & Transparency" headline="Data Methodology and Transparency Policy" description="Placeholder documentation page for methods, standards, and accountability controls." :cards="$cards" />
