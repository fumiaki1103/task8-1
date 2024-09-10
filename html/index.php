<?php
class Staff {
    protected $name;
    protected $age;
    protected $sex;
    protected $id;
    protected static $counter = 1;

    public function __construct($name, $age, $sex) {
        $this->name = $name;
        $this->age = $age;
        $this->sex = $sex;
        $this->id = 'S' . str_pad(self::$counter, 4, '0', STR_PAD_LEFT);
        self::$counter++;
    }

    public function show() {
        printf("(%s) %s\n%d歳 %s\n<br>", $this->id, $this->name, $this->age, $this->sex);
    }
}

class PartStaff extends Staff {
    private $jikyu;

    public function __construct($name, $age, $sex, $jikyu) {
        parent::__construct($name, $age, $sex);
        $this->jikyu = $jikyu;
        $this->id = 'P' . str_pad(self::$counter, 4, '0', STR_PAD_LEFT);
    }

    public function show() {
        printf("(%s) %s\n%d歳 %s\n時給：%d円\n<br>", $this->id, $this->name, $this->age, $this->sex, $this->jikyu);
    }
}

$staff1 = new Staff("佐藤 一郎", 31, "男性");
$staff2 = new Staff("山田 花子", 25, "女性");
$staff3 = new Staff("鈴木 次郎", 27, "男性");
$partStaff1 = new PartStaff("田中 友子", 24, "女性", 900);
$staff4 = new Staff("中村 三郎", 27, "男性");

$staff1->show();
$staff2->show();
$staff3->show();
$partStaff1->show();
$staff4->show();
?>
