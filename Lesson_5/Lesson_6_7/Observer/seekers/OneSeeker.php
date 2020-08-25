<?php


class OneSeeker extends Seeker
{
    public function __construct(string $name, string $email, int $experience)
    {
        parent::__construct($name, $email, $experience);
    }

    public function update(Vacancy $vacancy)
    {
       foreach ($vacancy->getVacancies() as $jobsEXP => $jobEXP)
       {

           if ( $this->experience >= $jobEXP)
           {
               echo  "Разработчик $this->name имеет опыт: $this->experience, подходит работа в $jobsEXP" . PHP_EOL;
           }
       }
    }
}