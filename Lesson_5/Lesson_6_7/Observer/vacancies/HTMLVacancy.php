<?php


class HTMLVacancy extends Vacancy
{

    public function updateVacancies()
    {
        //опыт работы
        $this->vacancies = [
            "Вакансия по HTML Профессиональная разработка" => 2,
            "Вакансия по HTML без опыта работы" => 0
        ];
        $this->notify();
    }
}