<?php
    // モデル
    // ユーザーの設計図を作る
    class User {
        // プロパティ(変数)
        public $name; // 名前
        public $age; // 年齢
        // コンストラクタ(特殊な関数)
        public function __construct($name, $age){
            // プロパティ値をセット
            $this->name = $name;
            $this->age = $age;
            // print $this->name . 'さんが生まれた' . PHP_EOL;
        }
        // お酒を飲む関数（メソッド）
        public function drink(){
            // 20歳以上ならば
            if($this->age >= 20){
                print $this->name . 'さん、お酒をお楽しみください' . PHP_EOL;
            }else{
                print $this->name . 'さん、お酒は20歳から' . PHP_EOL;
            }
        }
        
        // 誰か($someone)に話しかけるメソッド
        public function talk($someone){
            print $this->name . 'さんが' . $someone->name . 'さんに話しかけた' . PHP_EOL;
        }
    }

?>