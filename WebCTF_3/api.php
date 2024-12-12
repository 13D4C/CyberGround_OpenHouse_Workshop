<?php
require_once 'includes.php';
header('Content-Type: application/json');
$blogPosts = [];


$ENblogPosts = [
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


$THblogPosts = [
    [
        "title" => "เว็บที่มองไม่เห็น: การคลานบนพื้นผิว",
        "date" => "14 ธันวาคม 2024",
        "content" => "Search Engine ใช้โปรแกรมอัตโนมัติที่เรียกว่า crawlers เพื่อจัดทำดัชนีเว็บ crawlers เหล่านี้มักจะเคารพคำสั่งจากเจ้าของเว็บไซต์ หลีกเลี่ยงเส้นทางบางอย่างอย่างสุภาพ แต่ถ้าคุณไม่สุภาพล่ะ? บางครั้งสิ่งที่น่าสนใจที่สุดก็ซ่อนอยู่นอกเส้นทาง..."
    ],
    [
        "title" => "เสียงกระซิบในเครื่องจักร: การสื่อสารของเซิร์ฟเวอร์",
        "date" => "10 ธันวาคม 2024",
        "content" => "เมื่อเบราว์เซอร์ของคุณร้องขอหน้าเว็บ มันจะได้รับมากกว่าแค่เนื้อหาที่มองเห็นได้ เซิร์ฟเวอร์ยังส่งข้อมูลเมตา บันทึกย่อเล็ก ๆ ที่อธิบายหน้าเว็บและวิธีการจัดการ ผู้ตรวจสอบที่มีทักษะรู้วิธีฟังเสียงกระซิบของเซิร์ฟเวอร์เหล่านี้ – พวกเขาอาจเปิดเผยสิ่งที่สำคัญ..."
    ],
    [
        "title" => "ศิลปะแห่งการสังเกต: การอ่านระหว่างบรรทัด",
        "date" => "6 ธันวาคม 2024",
        "content" => "นักพัฒนาเว็บก็เหมือนกับศิลปินทุกคน ทิ้งร่องรอยของงานไว้เบื้องหลัง บางครั้งร่องรอยเหล่านี้เป็นไปโดยเจตนา เช่น ความคิดเห็นที่เป็นประโยชน์สำหรับผู้ทำงานร่วมกัน บางครั้งก็เป็นความผิดพลาดโดยไม่ได้ตั้งใจ ข้อมูลโค้ดหรือข้อความที่ถูกเปิดเผยสำหรับผู้ที่รู้วิธีค้นหา แฮกเกอร์ที่ดีที่สุดคือผู้เชี่ยวชาญด้านการสังเกต สามารถต่อจิ๊กซอว์จากชิ้นส่วนที่เล็กที่สุด..."
    ],
    [
        "title" => "การพึ่งพาภายนอก: เครือข่ายแห่งความไว้วางใจ",
        "date" => "1 ธันวาคม 2024",
        "content" => "เว็บไซต์สมัยใหม่พึ่งพาทรัพยากรภายนอกเป็นอย่างมาก สไตล์ชีตกำหนดรูปลักษณ์และความรู้สึก สคริปต์เพิ่มการโต้ตอบ และไลบรารีของบุคคลที่สามให้ฟังก์ชันการทำงาน เมื่อตรวจสอบโครงสร้างของเว็บไซต์ นักสืบที่แท้จริงจะไม่หยุดเพียงแค่หน้าหลัก – พวกเขาติดตามทุกเธรด สำรวจเครือข่ายการพึ่งพาทั้งหมด ใครจะรู้ว่าพวกเขาจะนำไปสู่ที่ใด..."
    ],
    [
      "title" => "รางวัลสูงสุด",
      "date" => "27 พฤศจิกายน 2024",
      "content" => "กุญแจสุดท้ายในการปลดล็อกสมบัติคือการเข้าใจรูปแบบ เมื่อรวบรวมชิ้นส่วนทั้งหมดแล้ว โปรดจำรูปแบบ - <code>cyb3rgr0und{...}</code> เมื่อนั้นภาพทั้งหมดจะถูกเปิดเผย"
  ]
];


if (isset($_GET['lang']) && $_GET['lang'] === 'th') {
    $blogPosts = $THblogPosts;
} else {
    $blogPosts = $ENblogPosts;
}

echo json_encode($blogPosts);
?>