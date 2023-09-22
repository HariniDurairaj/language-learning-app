<?php

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

?>

<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Speaking Practice</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   
   
    <!-- Include the CSS for styling -->
    <style>
        /* Reset default margin and padding for all elements */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
      
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }

        h1 {
      text-align: center;
      margin-top: 20px;
    }

    p {
      text-align: center;
    }

    #google_translate_element {
      text-align: right;
      margin-top: 50px;
    }

    /* Style the select box provided by Google Translate */
    .goog-te-combo {
      width: auto !important; /* Adjust the width as needed */
      font-size: 14px;
      padding: 5px;
    }

    /* Style the "You can translate..." message */
    p:last-child {
      text-align: center;
      margin-top: 20px;
    }
        .container {
    max-width: 800px; /* Your desired width */
    min-height: 450px; /* Set a minimum height as needed */
    margin: 20px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}


        h1 {
            color: #333;
            margin-bottom: 20px;
        }

        p {
            color: #555;
            font-size: 16px;
            line-height: 1.5;
        }

        #start-recognition {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        #start-recognition:hover {
            background-color: #0056b3;
        }

        #output-box {
            margin-top: 20px;
            font-size: 18px;
            color: #333;
            background-color: #f5f5f5;
            padding: 10px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }
        h1 {
        color: #333;
    }

    .lesson {
        border: 1px solid #ccc;
        padding: 10px;
        margin-bottom: 20px;
        background-color: #f9f9f9;
        border-radius: 5px;
        
    }

    .lesson h2 {
        margin-top: 0;
    }

    .lesson p {
        margin-bottom: 10px;
    }

    .completed {
        background-color: #d4edda;
        border-color: #c3e6cb;
    }

        /* Style the translated text */
        .translated-text {
            font-weight: bold;
            color: #007bff;
        }
        body {
      background-image: url('https://wallpaperset.com/w/full/e/9/8/31136.jpg');
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
    }
    button:hover {
        background-color: #0056b3;
    }
    button {
        background-color: #007bff;
        color: #fff;
        border: none;
        padding: 5px 10px;
        cursor: pointer;
    }
    /* CSS for the tick mark icon */
    .lesson.completed .completed-icon {
            display: inline-block;
            font-weight: bold; /* Make the tick mark bold for visibility */
            color: green; /* Change the color of the tick mark */
        }
</style>
</head>
<body>
<?php include 'components/user_header.php'; ?>

<div id="google_translate_element"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


<div class="lesson" data-id="1"> <!-- Added data-id attribute -->
    <h1>Story 1: School trip</h1>
    <p><h2>One day Joe's teacher had some news.

        “We're going on a school trip,” she told the class. “As we've been learning about different animals, we are going to visit a wildlife park.”
        
        Everyone was excited.
        
        “Bears!” yelled Finn at playtime. “Rhinos!”
        
        “Leopards!” shouted Joe. “Lions!”
        
        That evening, Joe showed his parents the letter about the school trip.
        
        “Wonderful,” said Mum. “We must make sure you have everything you need.”
        
        “Will there really be lions?” asked Bella, her eyes big with excitement.
        
        “Yes, and leopards too.”
        
        “Ooh,” said Bella, and her eyes grew even bigger.
        
        On the morning of the trip, Joe had everything ready.
        
        He had a backpack with his sandwiches and water bottle. He had a warm scarf in case it was cold, and sunscreen in case it was hot. He had a camera to take pictures of the animals.
        
        “Quick,” he said at breakfast. “I can't be late. Or they might leave without me.”
        
        “Don't worry,” said Bella. “I'm ready. Look, I'm taking some extra snacks in case the animals are hungry.”
        
        Everyone looked at Bella. She had a packed lunch, a water bottle, a scarf and sunscreen. She thought she was going to the wildlife park too!
        
        “But Bella,” said Dad, “Joe is going, not you.”
        
        “It's a school trip!” shouted Bella. “I'm part of the school!”
        
        “But the trip is only for the big ones,” said Mum.
        
        “I want to see the animals!” howled Bella.
        
        Joe said nothing. Why did his sister always make a fuss, he wondered. Why did she always try to butt in?
        
        His parents were trying to calm Bella.
        
        “We'll take you to the wildlife park at the weekend.”
        
        “Want Joe to come!” Bella wailed.
        
        Joe lost his temper. “It's time you learned you can't have everything your way,” he told his sister. “I'm going on this trip, not you. If you go at
        the weekend – fine – but I'm not coming with you!”
        
        Nothing they said would make him change his mind.
        
        When they got to the school, the coach was waiting. Joe sat next to Finn.
        
        “I can't wait to see the rhinos,” said Finn.
        
        “I like lions best,” said Joe.
        
        The coach set off. It had only gone a little way down the motorway when it began to make a strange noise. It was banging and rattling. There was smoke coming from the back. The coach driver pulled to the side of the motorway. With a thud, the coach stopped!
        
        “We've broken down,” said Finn.
        
        The driver phoned the breakdown service. At first it was exciting, but after a while everyone began to get bored.
        
        “This is no fun,” grumbled Finn.
        
        Finally, the breakdown truck arrived. But it couldn't fix the coach. They waited and waited. At last, a new coach came. Everyone had to climb off the first coach and onto the second one.
        
        They were all bored and hungry by now.
        
        When they got to the wildlife park, it was very busy. There were lots of school groups already there. They had to wait in line at the gate. When they finally got in, it was lunchtime. Their teachers made them sit and eat their sandwiches before they could see the animals.
        
        “At this rate, we won't see anything,” said Joe.
        
        “I'm afraid we haven't very long,” said the teacher. “You must all be back at the coach in an hour.”
        
        Finn wanted to see the rhinos, and Joe wanted to see the lions. Finally Joe won, and they rushed to the Big Cat Enclosure.
        
        Joe had a horrible shock. There was a barrier with a sign. It said “Due to Cleaning, the Big Cat Enclosure is Closed Today.”
        
        “Oh well,” said Finn. “We've got time to look at the rhinos if we run.”
        
        Joe was very quiet all the way back to school.
        
        “How was the wildlife park?” asked Dad at tea. “Did you see lots of animals?”
        
        “Well...” said Joe.
        
        “I'm going this weekend,” said Bella.
        
        “You know what,” Joe said, “I think I'll come too.”
        
        “Hooray!” Bella yelled.</h2></p>
    <!-- Add a div element to contain the tick mark icon -->
    <div class="completed-icon"></div>
    <button onclick="markCompleted(1, this)" translate="no">Mark as Completed</button>
</div>
<div class="lesson" data-id="2"> <!-- Added data-id attribute -->
    <h1>Story 2: Milly and the Rainbow</h1>
    <p><h2>Milly sat under the apple tree and watched the rain clouds sweep over the hills. What a wet day!

        She ate an apple and waited for the rain to stop. Soon it did. The sky turned blue again, and the Sun shone, warm and golden.
        
        Then she saw the rainbow. It began as an explosion of light, high in the clouds. The sky filled with dazzling colours: blue, orange, green and purple. Then both ends of the rainbow began to fall to Earth...
        
        The rainbow landed in the garden.
        
        ‘Wow!’ Milly went closer and touched the rainbow. She felt nothing, just air. But the colours moved beneath her fingers.
        
        When she looked up, the rainbow seemed to be stretching on and on into space.
        
        'What would happen if I stepped inside it?' she wondered. There was only one way to find out...
        
        She stepped inside.
        
        It was beautiful! And very quiet. Milly couldn’t hear anything.
        
        She looked up. The rainbow seemed to go on forever...
        
        WHOOSH! Milly was sucked up by the rainbow. It was a tunnel of light. She whizzed along like a button up a vacuum cleaner. Wind whistled past her ears. She tumbled over and over but didn’t hurt herself: she was carried on a soft cushion of air. Up and up and up she went, so fast.
        
        But rainbows go up... and rainbows come down. Soon she was falling down the far side of the rainbow. She could see green below. Green grass, rushing up to meet her, faster and faster...
        
        BUMP! She landed hard, but nothing was broken.
        
        Milly stood up. She was on the other side of the valley, standing on a steep green hill. She could see her house, far away. It was like a tiny white box with a rainbow in the garden. Everything was calm and peaceful and very lovely...
        
        WHOOSH! Suddenly she was shooting back through the rainbow, faster than a firework. Red, blue, yellow ... stripes of light, flashing by.
        
        Up, up, up she went and down, down, down... BUMP. She landed back in her own garden.
        
        'Oww...!’ Milly groaned. ‘I am going to be so bruised tomorrow.'
        
        Then she had a thought...
        
        'GOLD! There is always gold at the end of a rainbow!'
        
        She dropped to her knees and started to dig. The earth flew out behind her, covering the grass with stones and soil.
        'Come on, come on! It must be here somewhere...'
        
        She went deeper and deeper. Then she saw something shiny, under her fingertips. She pulled it out.
        
        'Gold...'
        
        Milly stared at it, breathless with excitement. It was a golden coin, bigger than usual money and much heavier. She rubbed it clean. There were words written on it:
        
        Make a wish before the rainbow fades.
        
        'Oh wow!' she said. 'This is amazing! A wish!'
        
        Her head began to fill with ideas, everything she could wish for. But then she saw something. The rainbow was starting to fade. It was going thin at the edges.
        
        'No! I haven't made up my mind! Please - wait!'
        
        But the rainbow didn't wait. It was fading. Going away, and taking her wish with it.
        
        'No! I’ll make my wish soon. Just a moment, please!'
        
        But still the rainbow was fading. The golden coin was getting hot in her hand.
        
        'Ohh....! Choose... choose... Yes. YES! I have it!'
        
        Milly closed her eyes and made her wish and VOOMF! The rainbow disappeared, and so did the golden coin.
        
        Milly hardly dared to move. Had her wish come true?
        
        Maybe.
        
        She looked up. The sky was peacock blue. The Sun was golden, warm on her face. Such a beautiful day. Such a beautiful world.
        
        'Even if the wish doesn't come true, I am a very lucky girl,' she said. And she smiled.</h2></p>
    <!-- Add a div element to contain the tick mark icon -->
    <div class="completed-icon"></div>
    <button onclick="markCompleted(2, this)" translate="no">Mark as Completed</button>
</div>
<!-- Add more lessons here -->
<script>
    function markCompleted(lessonId, button) {
        // Update the UI to show the lesson as completed
        const lessonElement = document.querySelector(`.lesson[data-id="${lessonId}"]`);
        lessonElement.classList.add("completed");

        // Show the tick mark icon by changing its content
        const iconElement = lessonElement.querySelector(".completed-icon");
        iconElement.textContent = "✔"; // Display a checkmark character
        iconElement.style.color = "green"; // Change the color of the tick mark
        iconElement.style.fontSize = "20px"; // Adjust the tick mark size
    }
</script>
<script src="js/script.js"></script>
</body>
<?php include 'components/footer.php'; ?>
</html>