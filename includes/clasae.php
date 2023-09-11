<?php
class Person {
    public $name;
    public int $age;
    public static $country = 'Palestine';

    public function __construct(string $name, DateTime $birthday) {
        $this->name = $name;
        $this->age = date('Y') - $birthday->format('Y');
    }

    public static function getCountry(): string {
        return self::$country;
    }
}

$person = new Person('Ahmed', new DateTime('1999-11-11'));
$person2 = new Person('ALI', new DateTime('1999-1-11'));

$person->name = 'Ali';  // تعديل الاسم
$person->age = 20;      // تعديل العمر

echo $person->age;

?>
 