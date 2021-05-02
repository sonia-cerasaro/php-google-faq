<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Google FAQ</title>
    <link rel="stylesheet" href="./dist/css/master.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400&display=swap" rel="stylesheet">
  </head>
  <body>
    <header>
      <nav class="top">
        <div class="cont_left">
          <div class="img_goog ml_4 mr_2">
            <img src="./dist/img/google.svg">
          </div>
          <h4 class="">
            Privacy & Terms
          </h4>
        </div>

        <div class="cont_right">
          <div class="icon ml_4 mr_4">
            <i class="fas fa-grip-vertical"></i>
          </div>
          <div class="img_spy">
            <img src="./dist/img/spy.jpeg">
          </div>
        </div>
      </nav>

      <nav class="bottom">
        <div class="list_cont">
          <ul>
            <li class="first_li ml_4">
              Overview
            </li>
            <li>
              Privacy policy
            </li>
            <li>
              Terms of Services
            </li>
            <li>
              Technologies
            </li>
            <li>
              FAQ
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <main>
      <?php

      $google_faqs = [

        'first_section' => [
                         [
                           'title' => 'How are you implementing the recent Court of Justice of the European Union (CJEU) decision on the right to be forgotten?',
                           'first_sec' => 'The recent ruling by the Court of Justice of the European Union has profound consequences for search engines in Europe. The court found that certain users have the right to ask search engines like Google to remove results for queries that include the persons name. To qualify, the results shown would need to be inadequate, irrelevant, no longer relevant, or excessive.',
                           'second_sec' => 'Since this ruling was published on 13 May 2014, we have been working round the clock to comply. This is a complicated process because we need to assess each individual request and balance the rights of the individual to control his or her personal data with public s right to know and distribute information.',
                           'third_sec' => 'If you have a removal request, please fill out this webform. You will receive an automatic reply confirming that we have received your request. We will then assess your case—please note this may take some time because we have already received many such requests.
                                           In evaluating your request, we will look at whether the results include outdated information about your private life. We will also look at whether there is a public interest in the information remaining in our search results—for example, if it relates to financial scams, professional malpractice, criminal convictions or your public conduct as a government official (elected or unelected). These are difficult judgements and as a private organization, we may not be in a good position to decide on your case. If you disagree with our decision you can contact your local DPA.',
                          'fourth_sec' => 'We look forward to working closely with data protection authorities and others over the coming months as we refine our approach. The CJEU is ruling constitutes a significant change for search engines. While we are concerned about its impact, we also believe it is important to respect the Court s judgment and are working hard to devise a process that complies with the law.',
                          'fifth_sec' => 'When you search for a name, you may see a notice that says that results may have been modified in accordance with data protection law in Europe. We’re showing this notice in Europe when a user searches for most names, not just pages that have been affected by a removal.'
                           ],
                         ],
        'sec_section' => [
                           [
                             'title' => 'How does Google protect my privacy and keep my information secure?',
                             'first_sec' => 'We know security and privacy are important to you – and they are important to us, too. We make it a priority to provide strong security and give you confidence that your information is safe and accessible when you need it.',
                             'second_sec' => 'We’re constantly working to ensure strong security, protect your privacy, and make Google even more effective and efficient for you. We spend hundreds of millions of dollars every
                                              year on security, and employ world-renowned experts in data security to keep your information safe. We also built easy-to-use privacy and security tools like Google Dashboard, 2-step verification and Ads Settings. So when it comes to the information you share with Google,  you’re in control.',
                             'third_sec' => 'You can learn more about safety and security online, including how to protect yourself and your family online, at the Google Safety Center.',
                             'fourth_sec' => 'Learn more about how we keep your personal information private and safe — and put you in control.',
                           ],
                         ],
        'third_section' => [
                           [
                             'title' => 'Why is my account associated with a country?',
                             'first_sec' => 'Your account is associated with a country (or territory) in the Terms of Service so that we can determine two things:',
                             'second_sec' => 'We’re constantly working to ensure strong security, protect your privacy, and make Google even more effective and efficient for you. We spend hundreds of millions of dollars every
                                              year on security, and employ world-renowned experts in data security to keep your information safe. We also built easy-to-use privacy and security tools like Google Dashboard, 2-step verification and Ads Settings. So when it comes to the information you share with Google,  you’re in control.',
                             'third_sec' => 'You can learn more about safety and security online, including how to protect yourself and your family online, at the Google Safety Center.',
                             'fourth_sec' => 'Learn more about how we keep your personal information private and safe — and put you in control.',
                           ],
                         ],
        'fourth_section' => [
                           [
                             'title' => 'How can I remove information about myself from Google s search results?',
                             'first_sec' => 'Google search results are a reflection of the content publicly available on the web. Search engines cannot
                                             remove content directly from websites, so removing search results from Google wouldn t remove the content from the web. If you want to remove something from the web, you should contact the webmaster of the site the content is posted on and ask him or her to make a change. Additionally, if under European data protection law, you would like to request removal of certain information about you that appears in Googles
                                             search results, please click here. Once the content has been removed and Google has noted the update, the information will no longer appear in Googles search results. If you have an urgent removal request, you can also visit our help page for more information.',
                           ],
                         ],
                       ];

      ?>

      <?php

      foreach ($google_faqs as $main_section => $innerArray) {

        foreach ($innerArray as $value) {
          ?>

          <div class="main_cont">
            <h2 class="">
              <?php
              echo $value['title']. '<br>';
              ?>
            </h2>

            <p class="mb_7 mt_3 font_basic">
              <?php
              echo $value['first_sec']. '<br>';
               ?>
            </p>

            <p class="mb_7 mt_3 font_basic">
              <?php
              echo $value['second_sec']. '<br>';
               ?>
            </p>

            <p class="mb_7 mt_3 font_basic">
              <?php
              echo $value['third_sec']. '<br>';
               ?>
            </p>

            <p class="mb_7 mt_3 font_basic">
              <?php
              echo $value['fourth_sec']. '<br>';
               ?>
            </p>

            <p class="mb_7 mt_3 font_basic">
              <?php
              echo $value['fifth_sec']. '<br>';
               ?>
            </p>

            <?php
          }
        }
         ?>

          </div>
    </main>

    <footer>
      <div class="cont_foot">
        <div class="cont_foot_left">
          <ul>
            <li>Google</li>
            <li>・</li>
            <li>About Google</li>
            <li>・</li>
            <li>Privacy</li>
            <li>・</li>
            <li>Terms</li>
          </ul>

        </div>

        <div class="cont_foot_right">
          <div class="icon_e">
            <i class="far fa-comment-alt"></i>
          </div>
          <select class="select" name="English">
            <option value="English">
              English
            </option>
            <option value="Italian">
              Italian
            </option>
          </select>

        </div>

      </div>

    </footer>



  </body>
</html>
