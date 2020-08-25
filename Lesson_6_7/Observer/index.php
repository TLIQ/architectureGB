<?php
require_once 'vacancies/IVacancy.php';
require_once 'vacancies/Vacancy.php';
require_once 'vacancies/PHPVacancy.php';
require_once 'vacancies/HTMLVacancy.php';
require_once 'seekers/Seeker.php';
require_once 'seekers/OneSeeker.php';


$php_vacancy = new PHPVacancy();
$html_vacancy = new HTMLVacancy();

$seeker1 = new OneSeeker("Максим", "exp@mail.ru", 0);
$seeker2 = new OneSeeker("Павел", "exp22@mail.ru", 4);


//$seeker1->subscribe($php_vacancy);
//$seeker1->subscribe($html_vacancy);
$seeker2->subscribe($html_vacancy);

$php_vacancy->updateVacancies();
$html_vacancy->updateVacancies();

echo "=============================". PHP_EOL;


//$seeker1->unsubscribe($php_vacancy);
////$seeker2->unsubscribe($html_vacancy);
//
//$php_vacancy->updateVacancies();
//$html_vacancy->updateVacancies();