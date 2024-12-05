<?php
require_once 'includes.php';
header('Content-Type: application/json');

$blogPosts = [
    [
        "title" => "The Unseen Web: Crawling the Surface",
        "date" => "December 14, 2024",
        "content" => "Search engines use automated programs called crawlers to index the web. These crawlers often respect directives from site owners, politely avoiding certain paths. But what if you aren't so polite? Sometimes the most interesting things are hidden just off the beaten path..."
    ],
    [
        "title" => "Whispers in the Machine: Server Communication",
        "date" => "December 10, 2024",
        "content" => "When your browser requests a webpage, it receives more than just the visible content. The server also sends along metadata, little notes that describe the page and how it should be handled. A skilled investigator knows how to listen in on these server whispers – they might just reveal something important..."
    ],
    [
        "title" => "The Art of Observation: Reading Between the Lines",
        "date" => "December 6, 2024",
        "content" => "Web developers, like all artists, leave traces of their work behind. Sometimes these traces are intentional, like helpful comments for collaborators. Other times, they are accidental omissions, snippets of code or text left exposed for those who know where to look. The best hackers are masters of observation, able to piece together the puzzle from the smallest fragments..."
    ],
        [
        "title" => "External Dependencies: The Web of Trust",
        "date" => "December 1, 2024",
        "content" => "Modern websites rely heavily on external resources. Style sheets dictate the look and feel, scripts add interactivity, and third-party libraries provide functionality. When investigating a website's structure, a true detective doesn't stop at the main page – they follow every thread, exploring the entire web of dependencies. Who knows where they may lead..."
    ],
    [
      "title" => "The Ultimate Prize",
      "date" => "November 27, 2024",
      "content" => "The final key to unlocking the treasure is to understand the pattern. Once all the pieces have been collected, remember the format - <code>cyb3rgr0und{...}</code>. Only then will the full picture be revealed."
  ]
];

echo json_encode($blogPosts);
?>