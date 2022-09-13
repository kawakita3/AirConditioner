<?php
class AirConditioner {
    
    /*
    モード (冷房,暖房,除湿　のみ、それ以外の文字列が入らないこと)
    一般的なリモコンを想定し、それぞれのモードを切り替える関数を定義すること
    */
    private $mode;
    function MODE($mode){
        $this->mode=$mode；
    }
    
    /* 
    温度 (18～30)
    一般的なリモコンを想定し、1度づつ上下させる関数を定義すること
    */
    private $temperature;
    function UPtemperature(){
        if($temperature < 30)
            $this->temperature+=1;
    }
    function DOWNtemperature(){
        if($temperature > 18)
            $this->temperature-=1;
    }



    /* 
    風量 (1～5) 
    一般的なリモコンを想定し、1づつ上昇させ、上限に達すると最小値に戻る関数を定義すること　(1->2->3->4->5->1)の順で変化する
    */
    private $power;
    function getPower(){
        if ($power == 5){
            $this->power=1;
        }else{
            $this->power+=1;
        }
    }

    
    /*
    コンストラクタ
    */
    function __construct() {
        // 初期設定は冷房モードとすること
        // 温度・風量は引数で受け取ること
    }
    function __construct($temperature, $power){
        $this->mode = '冷房';
        $this->temperature = $temperature;
        $this->power = $power;
    }

    /* 現在設定を表示 */
    function showStatus() {
        echo "======現在の設定======\n";
        echo "モード: $this->mode\n";
        echo "設定温度: $this->temperature\n";
        echo "風量: $this->power\n";
    }
}
?>