<?php 
    Class BankAccounts {
        protected $id;
        protected $name;
        protected $balance;

        public function setId($id) {
            $this->id = $id;
        }

        public function setName($name) {
            $this->name = $name;
        }

        public function getBalance() {
            return $this->balance;
        }

        public function withdraw($cash) {
            $this->balance -= $cash;
        }

        public function deposite($cash) {
            $this->balance += $cash;
        }
    }  

    Class SavingAccounts extends BankAccounts{
        private $interest_rate;

        public function __construct($interest_rate,$balance){
            $this->interest_rate = $interest_rate;
            $this->balance = $balance;
        }

        public function calculateInterrest(){
            $interest = $this->balance * $this->interest_rate;
            $this->deposite($interest);
        }
    }

    $saving = new SavingAccounts(0.5,1000);
    $saving->calculateInterrest();
    echo "New Balance: ".$saving->getBalance();
?>