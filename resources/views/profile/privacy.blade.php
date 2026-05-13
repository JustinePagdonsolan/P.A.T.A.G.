@php($cards = [
  ['title' => 'Privacy / Security', 'copy' => 'Review privacy defaults, login safeguards, and session controls.'],
  ['title' => 'Data Use Controls', 'copy' => 'Manage consent and visibility of civic engagement activity.'],
  ['title' => 'Security Alerts', 'copy' => 'Placeholder stream for sign-in and account change notifications.'],
  ['title' => 'Transparency Policy', 'copy' => 'Understand retention, correction, and disclosure standards.'],
])
<x-placeholder-page title="PATAG | Privacy & Security" eyebrow="Account Safety" headline="Privacy / Security" description="Placeholder privacy and security controls for PATAG accounts." :cards="$cards" />
