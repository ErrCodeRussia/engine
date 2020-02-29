<?php


namespace app\model;


use base\model\Model;

/**
 * Class Example
 *
 *  Этот класс - модель таблицы example из базы данных, которая содержит следующие поля:
 * - name | int(11) | not null
 * - text | text | not null
 * - date | date | not null
 *
 *  Свойства класса - столбцы таблицы. Называйте их так же, как сами столбцы.
 * Если столбец называется first_name, свойство будет $first_name, а не $firstName
 *
 *  Также важно прописать правила для каждого свойства в функции rules().
 * По этим правилам будет происходить валидация данных.
 *
 *  Доступные правила:
 * - required - обязательное поле
 * - email - поле формата email
 * - phone - поле формата телефона
 * - string - строка без цифр
 *
 *  Все правила прописываются в массиве через запятую для каждого поля, т.е.: 'name' => ['', ''], 'text' => ['', '', '']
 *
 *  Валидация происходит в конструкторе после заполнения данных
 */
class Example extends Model
{
    private $name;
    private $text;
    private $date;

    /**
     * Example constructor.
     * @param $name
     * @param $text
     * @param $date
     */
    public function __construct($name, $text, $date)
    {
        $this->name = $name;
        $this->text = $text;
        $this->date = $date;

        if (!$this->validate())
            $this->status = false;
    }


    public function rules()
    {
        return [
            'name' => ['required'],
            'text' => ['required'],
            'date' => ['required']
        ];
    }
}