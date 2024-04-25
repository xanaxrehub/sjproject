<?php

    class Links{

        private $links;

        public function __construct($links){
            $this->links = $links;
        }

        function generate_menu(): string{
            $links_items = ''; // Inicializácia premennej pre uloženie HTML kódu navigačného menu
            
            // Prechádza všetky položky v zadanom zozname stránok a URL adries
            foreach($this->links as $links_name => $links_url){
                // Pre každú stránku pridá odkaz do navigačného menu
                switch($links_name){
                    case 'Facebook':
                        $links_items .= '<a id = "hov" class="btn btn-floating m-1" style="background-color: #3b5998; border-radius: 40%;" href="https://sk-sk.facebook.com/" role="button"><img src="../assets/img/iconmonstr-facebook-4.svg" width="24px" alt=""></i></a>';
                        break;
                    case 'Twitter':
                        $links_items .= '<a id = "hov" class="btn btn-floating m-1" style="background-color: #55acee; border-radius: 40%;" href="https://twitter.com/" role="button"><img src="../assets/img/twitter.png" width="24px" alt=""></a>';
                        break;
                    case 'Youtube':
                        $links_items .= '<a id = "hov" class="btn btn-floating m-1" style="background-color: #dd4b39; border-radius: 40%;" href="https://www.youtube.com/" role="button"><img src="../assets/img/iconmonstr-youtube-6-240.png" width="24px" alt=""></i></a>';
                        break;
                    case 'Instagram':
                        $links_items .= '<a id = "hov" class="btn btn-floating m-1" style="background-color: #ac2bac; border-radius: 40%;" href="https://www.instagram.com/" role="button"><img src="../assets/img/instagram.png" width="24px" alt=""></a>';
                        break;
                    case 'GitHub':
                        $links_items .= '<a id = "hov" class="btn btn-floating m-1" style="background-color: #333333; border-radius: 40%;" href="https://github.com/" role="button"><img src="../assets/img/github.png" width="24px" alt=""></a>';
                        break;
                    }
                }
            return $links_items;
        }
    }

?>