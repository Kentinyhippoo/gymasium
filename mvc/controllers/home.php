<?php
    class Home extends controller {

        function HomePage() {
            // echo "This is Home Page";
            $this->view("view1",["number"=>2,
                "color"=>"red",
                "page"=>"news",
                "sv" =>2,
            ]);
        }

        function Hello()
        {
            $ken = $this->model("sinhvienmodel");
            echo $ken->getSV();
        }
        function Show($a , $b)
        {
            $ken = $this -> model("sinhvienmodel");
            $tong = $ken -> tong($a, $b);
            $this->view("view1",["number"=>$tong,
                "color"=>"red",
                "page"=>"news",
                "sv" => $ken->dssv(),
            ]);
        }
    }