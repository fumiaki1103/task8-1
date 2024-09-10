<?php
class Staff {
    private $name;
    private $age;
    private $sex;
    private $id;
    private static $counter = 1;

    public function __construct($name, $age, $sex) {
        $this->name = $name;
        $this->age = $age;
        $this->sex = $sex;
        $this->id = 'S' . str_pad(self::$counter, 4, '0', STR_PAD_LEFT);
        self::$counter++;
    }

    public function show() {
        printf("(%s)%s% d歳 %s<br>", $this->id, $this->name, $this->age, $this->sex);
    }
}

$staff1 = new Staff("佐藤 一郎", 31, "男性");
$staff2 = new Staff("山田 花子", 25, "女性");
$staff3 = new Staff("鈴木 次郎", 27, "男性");

$staff1->show();
$staff2->show();
$staff3->show();
?>
