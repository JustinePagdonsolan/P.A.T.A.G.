@php($cards = [
  ['title' => 'National Survey', 'copy' => 'Placeholder question sets for nationwide civic sentiment and issue ranking.'],
  ['title' => 'Public Pulse', 'copy' => 'Summarize aggregated responses by sector and region.'],
  ['title' => 'Policy Impact Meter', 'copy' => 'Map survey feedback to active bills and executive actions.'],
  ['title' => 'Fact-Check Prompt', 'copy' => 'Guide respondents to contextual source summaries before voting.'],
])
<x-placeholder-page title="PATAG | Surveys" eyebrow="Engagement" headline="National Survey" description="Placeholder survey experience for policy and governance pulse checks." :cards="$cards" />
