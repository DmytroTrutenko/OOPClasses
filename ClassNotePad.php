    <?php
    class  NotePad
    {
        protected $phone;
        public $name;
        public $surname;
        const TEXT_SIZE = 3;

        //создали конструктор
        function  __construct($phone, $name, $surname)   
        {
            $this->phone = $phone;
            $this->name = $name;
            $this->surname = $surname;
        }

        function note_show()
        {
            echo $this->phone . '<br>';
            echo $this->name . '<br>';
            echo $this->surname . '<br>';
            echo self::TEXT_SIZE . '<br>';
        }

      
        function  __clone()
        {
            $this->phone = 0;
            $this->name = 0;
            $this->surname = 0;
            
        }
    }

    class NoteChild extends NotePad                   //Создать класс NoteChild, наследующий NotePad. 
    {
        function note_show()
        {
            echo __CLASS__;
            echo '<br> Вызов родительского метода note_show ...<br>';
            parent::note_show();
        
        }
        
        function cut_note(){          //Добавить в класс NoteChild метод cut_note
            
           
            
            if( strlen((string) $this->phone) > self::TEXT_SIZE || 
                strlen((string) $this->name) > self::TEXT_SIZE || 
                strlen((string) $this->surname) > self::TEXT_SIZE){
                    $this->phone = mb_substr((string) $this->phone, 0, self::TEXT_SIZE) ;
                    $this->name = mb_substr((string) $this->name , 0, self::TEXT_SIZE) ;
                    $this->surname = mb_substr((string) $this->surname, 0, self::TEXT_SIZE) ;
                     
                 }                        
            
        }
    }
