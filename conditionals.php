<!DOCTYPE html>
<html>
<head>
<title>Exercises: Conditional statements</title>
</head>
<body>

<?php

/**************
*  Exercise 1  *
**************/
echo "<h3>Exercise 1</h3>";

$number = rand(-10, 10);

if ($number >= 0) {
	echo "Number x is positive";
} else {
	echo "Number is negative";
}

// write your code here

/**************
*  Exercise 2  *
**************/
echo "<h3>Exercise 2</h3>";
?>

<form action="conditionals.php" method="post">
Is PHP a server-side language?<br>
<input type="radio" name="answer" value="yes">Yes
<input type="radio" name="answer" value="no">No
<input type="radio" name="answer" value="maybe">Maybe<br>
<input type="submit" name="ex2">
</form>

<?php
if(isset($_POST["ex2"])) {

	$answer = $_POST["answer"];

	if ($answer == "yes") {
		echo "Thats right!";
	} else {
		echo "Did you skip the theory!";
	}



	// write your code here

}
/******************
*  Exercises 3 + 4  *
******************/
echo "<h3>Exercises 3 and 4</h3>";
?>

<form action="conditionals.php" method="post">
What kind of pet do you have?<br>
<select name="pet">
<option value="dog">Dog</option>
<option value="cat">Cat</option>
<option value="fish">Fish</option>
<option value="lizard">Lizard</option>
<option value="alien">Alien</option>
</select>
<br>
<input type="submit" name="ex3">
</form>

<?php
if(isset($_POST["ex3"])) {

	$pet = $_POST["pet"];

	if (($pet == "dog" ) || ($pet == "cat")) {
		echo "You have a nice furry firend";
	} elseif ($pet == "fish") {
		echo "Your pet is low maintenance";
	} elseif ($pet == "lizard") {
		echo "Your pet looks like reptiles";
	} else {
		echo "Your pet is weird";
	}

	// write your code here

}
/******************
*  Exercises 5 + 6  *
******************/
echo "<h3>Exercises 5 ja 6</h3>";

?>

<form action="conditionals.php" method="post">
Username: <input type="text" name="user"><br>
Password: <input type="text" name="password"><br>

<input type="submit" name="ex5">
</form>

<?php

if(isset($_POST["ex5"])) {

	$user = $_POST["user"];
	$password = $_POST["password"];

	if ($user != "user") {
		echo "username wrong";
	} elseif ($password != "password") {
		echo "password wrong";
	} elseif (($user == "user") && ($password == "password")) {
		echo "user logged in";
	} elseif (($user == "Jane") && ($password == "doe")) {
		 echo "user logged in";
	}
		echo "";

		//Not sure why I can't get Jane to work.



}

/**************
*  Exercise 7  *
**************/
echo "<h3>Exercise 7</h3>";
?>
<form action="conditionals.php" method="post">
Give the grade<br>
<select name="grade">
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</select>
<br>
<input type="submit" name="ex7">
</form>

<?php
if(isset($_POST["ex7"])) {

	$grade = $_POST["grade"];

	// write your code here
	switch ($grade) {
	    case 0:
	        echo "Not an accptable grade";
	        break;
	    case 1:
	        echo "Satisfactory";
	        break;
	    case 2:
	        echo "Satisfactory";
	        break;
			case 3:
			    echo "Good";
			    break;
			case 4:
			    echo "Good";
			    break;
			case 5:
			    echo "Excellent";
			    break;
	}

}

/**************
*  Exercise 8  *
**************/
echo "<h3>Exercise 8</h3>";
?>
<form action="conditionals.php" method="post">
What would you like to read about?<br>
<select name="topic">
<option value="sports">Sport</option>
<option value="politics">Politics</option>
<option value="education">Education</option>
</select>
<br>
<input type="submit" name="ex8">
</form>

<?php
if(isset($_POST["ex8"])) {

	$topic = $_POST["topic"];
?>

	<?php if($topic == "sport") : ?>

	//Sport section would not display on the webpage when using trying it out.

	<h3>Sport</h3>

	<p>Sport pertains to any form of competitive physical activity or game that aims to use, maintain or improve physical ability and skills while providing enjoyment to participants and, in some cases, entertainment to spectators. Sports can, through casual or organized participation, improve one's physical health. Hundreds of sports exist, from those between single contestants, through to those with hundreds of simultaneous participants, either in teams or competing as individuals. In certain sports such as racing, many contestants may compete, simultaneously or consecutively, with one winner; in others, the contest (a match) is between two sides, each attempting to exceed the other. Some sports allow a "tie" or "draw", in which there is no single winner; others provide tie-breaking methods to ensure one winner and one loser. A number of contests may be arranged in a tournament producing a champion. Many sports leagues make an annual champion by arranging games in a regular sports season, followed in some cases by playoffs.</p>

	<p>Sport is generally recognised as system of activities based in physical athleticism or physical dexterity, with major competitions such as the Olympic Games admitting only sports meeting this definition. Other organisations, such as the Council of Europe, preclude activities without a physical element from classification as sports. However, a number of competitive, but non-physical, activities claim recognition as mind sports. The International Olympic Committee (through ARISF) recognises both chess and bridge as bona fide sports, and SportAccord, the international sports federation association, recognises five non-physical sports: bridge, chess, draughts (checkers), Go and xiangqi,and limits the number of mind games which can be admitted as sports.</p>

	<?php elseif($topic == "politics") : ?>

	<h3>Politics</h3>

	<p>Politics (from Greek: Πολιτικά, politiká, 'affairs of the cities') is the set of activities that are associated with making decisions in groups, or other forms of power relations between individuals, such as the distribution of resources or status. The branch of social science that studies politics and government is referred to as political science.</p>

	<p>It may be used positively in the context of a "political solution" which is compromising and non-violent, or descriptively as "the art or science of government", but also often carries a negative connotation. For example, abolitionist Wendell Phillips declared that "we do not play politics; anti-slavery is no half-jest with us." The concept has been defined in various ways, and different approaches have fundamentally differing views on whether it should be used extensively or limitedly, empirically or normatively, and on whether conflict or co-operation is more essential to it.</p>

	A variety of methods are deployed in politics, which include promoting one's own political views among people, negotiation with other political subjects, making laws, and exercising force, including warfare against adversaries. Politics is exercised on a wide range of social levels, from clans and tribes of traditional societies, through modern local governments, companies and institutions up to sovereign states, to the international level. In modern nation states, people often form political parties to represent their ideas. Members of a party often agree to take the same position on many issues and agree to support the same changes to law and the same leaders. An election is usually a competition between different parties.</p>

	<?php elseif($topic == "education") : ?>

	<h3>Education</h3>

	<p>Education is the process of facilitating learning, or the acquisition of knowledge, skills, values, morals, beliefs, and habits. Educational methods include teaching, training, storytelling, discussion and directed research. Education frequently takes place under the guidance of educators, however learners can also educate themselves. Education can take place in formal or informal settings and any experience that has a formative effect on the way one thinks, feels, or acts may be considered educational. The methodology of teaching is called pedagogy.</p>

	<p>Formal education is commonly divided formally into such stages as preschool or kindergarten, primary school, secondary school and then college, university, or apprenticeship.</p>

	<p>There are movements for education reforms, such as for improving quality and efficiency of education towards applicable relevance in the students' lives and efficient problem solving in modern or future society at large or for evidence-based education methodologies. A right to education has been recognized by some governments and the United Nations. Global initiatives aim at achieving the Sustainable Development Goal 4, which promotes quality education for all. In most regions, education is compulsory up to a certain age.</p>

	<?php endif; ?>

<?php
}
?>
</body>
</html>
