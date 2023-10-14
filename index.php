<?php
$name='Lumas';
$proph='Cat';
$town='Moscow';
$email='lumas@gmail.com';
$phone='+74952233221';
$skills = [
    [
        'name' => 'Мурчание',
        'percent' => 30,
    ],
    [
        'name' => 'Игровые навыки',
        'percent' => 70,
    ],
    [
        'name' => 'Рефлексы',
        'percent' => 40,
    ],
    [
        'name' => 'Охота на мышей',
        'percent' => 80,
    ],
];
$experience = [
    [
        'name of the work' => 'An adult cat',
        'datestart' => 'Aug 2022',
        'dateend' => 'Current',        
        'description' => 'I catch mice, I purr, I love ice cream and raw meat.',
    ],
    [
        'name of the work' => 'Cat',
        'datestart' => 'Mar 2018',
        'dateend' => 'Jul 2022',         
        'description' => 'I caught mice, actively engaged in gaming activities, developed general skills.',
    ],
    [
        'name of the work' => 'Kitty',
        'datestart' => 'Aug 2017',
        'dateend' => 'Feb 2018',        
        'description' => 'I actively grew up, developed reflexes and general skills, drank milk, engaged in gaming activities.',
    ],
];
?>

<!DOCTYPE html>
<html>
<head>
  <title>Мое резюме</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    html,
    body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      font-family: 'Jost', sans-serif;
    }
  </style>
</head>
<body class="w3-light-grey">  
  <div class="w3-content w3-margin-top" style="max-width:1400px;">    
    <div class="w3-row-padding">      
      <div class="w3-third">
        <div class="w3-white w3-text-grey w3-card-4">
          <div class="w3-display-container">
            <img src="https://imgfon.ru/Images/Details_img_880px/Animals/bantik-ryzhiy-meh-kotik.webp"
              style="width:100%" alt="Avatar">
            <div class="w3-display-bottomright w3-container w3-text-orange">
              <h2><?php echo $name?></h2>
            </div>
          </div>
          <div class="w3-container">
            <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $proph?></p>
            <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $town?></p>
            <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $email?></p>
            <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $phone?></p>

            <hr>

            <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Навыки</b></p>
            <?php for ($i=0; $i<count($skills); $i++) { ?> 
            	<p><?php echo $skills[$i]['name']?></p>
            	<div class="w3-light-grey w3-round-xlarge w3-small">
             	 <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:<?php echo $skills[$i]['percent']?>%"><?php echo $skills[$i]['percent']?>%</div>
            	</div>
            <?php } ?>
            <br>

            <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Языки</b>
            </p>
            <p>Кошачий</p>
            <div class="w3-light-grey w3-round-xlarge">
              <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:100%">100%</div>
            </div>            
            
            <p>Русский</p>
            <div class="w3-light-grey w3-round-xlarge">
              <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:55%">55%</div>
            </div>
            <br>
          </div>
        </div>
        <br>        
      </div>      
      <div class="w3-twothird">
        <div class="w3-container w3-card w3-white w3-margin-bottom">
          <h2 class="w3-text-grey w3-padding-16"><i
              class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Опыт работы</h2>
          <?php for ($j=0; $j<count($experience); $j++): ?>
          <div class="w3-container">
            <h5 class="w3-opacity"><b><?php echo $experience[$j]['name of the work']?> </b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo $experience[$j]['datestart']?> - <span
                class="w3-tag w3-teal w3-round"><?php echo $experience[$j]['dateend']?></span></h6>
            <p><?php echo $experience[$j]['description']?></p>
            <hr>
          </div> 
          <?php endfor; ?>
        </div>

        <div class="w3-container w3-card w3-white">
          <h2 class="w3-text-grey w3-padding-16"><i
              class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Образование</h2>
          <div class="w3-container">
            <h5 class="w3-opacity"><b>gb.ru</b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Forever</h6>
            <p>Web Development! All I need to know in one place</p>
            <hr>
          </div>         
          <div class="w3-container">
            <h5 class="w3-opacity"><b>School of Cat</b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2017 - 2018</h6>
            <p>Bachelor Degree</p><br>
          </div>
        </div>        
      </div>     
    </div>    
  </div> 
  <footer class="w3-container w3-teal w3-center w3-margin-top">
    <p>Find me on social media.</p>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>   
  </footer>
</body>
</html>