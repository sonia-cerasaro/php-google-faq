<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Google FAQ</title>
    <link rel="stylesheet" href="./dist/css/master.css">
  </head>
  <body>
    <header>
      <h1>Prova</h1>

    </header>
    <main>
      <?php

      $google_faqs = [

        'first_section' => [
                         [
                           'title' => 'Why is my account associated with a country?',
                           'first' => 'Your account is associated with a country (or territory)
                                       in the Terms of Service so that we can determine two things:',
                           'second' => 'The Google affiliate that provides the services, that processes your information,',
                           'third' => 'Keep in mind that Google services are essentially the same regardless of the affiliate that provides
                                       the services or your country association.',
                         ],
                     ],
        'sec_section' => [
                           [
                             'title' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit?',
                             'first' => 'In the Terms of Service so that we can determine two things:',
                             'second' => 'Affiliate that provides the services, that processes your information,',
                             'third' => 'Mind that Google services are essentially the same.',
                           ],
                           [
                             'list_one' => 'list one',
                             'list_two' => 'list two'
                           ]
                         ],
                       ];

      ?>

      <?php

      foreach ($google_faqs as $main_section => $innerArray) {

        foreach ($innerArray as $value) {

          echo $value['title']. '<br>';

          echo $value['first']. "<br>";

        }
      }

       ?>

    </main>
    <footer></footer>


  </body>
</html>
