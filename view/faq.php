<?php
$getFaqs = new SiteDetails;
$faqs = $getFaqs->getAllQandA();
 ?>
  <ol>
    <?php
    foreach ($faqs as $faq) {
      echo "<div class='question-answer'>
        <div class='question'>
        <li> <b>question</b> $faq->question
          </div>
          <div class='answer'>
            <b>answer</b> $faq->answer
          </div>
        </li>
      </div>";
    }
     ?>
  </ol>
