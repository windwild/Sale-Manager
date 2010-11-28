<?php
  class sale_list
  {
     private $employeeId;
     private $year;
     private $month;
     private $lock_num;
     private $stock_num;
     private $barrel_num;
     private $tot_sale; 
     
     function getId()
     {
        return $this->employeeId;
     }
     function getyear()
     {
        return $this->year;
     }
     function getmonth()
     {
        return $this->month;
     }
     function getlock_num()
     {
        return $this->lock_num;
     }
     function getstock_num()
     {
        return $this->stock_num;
     }
     function getbarrel_num()
     {
        return $this->barrel_num;
     }
     function setId($id)
     {
        $this->employeeId = id;
        return;
     }
     function setyear($year1)
     {
        $this->year = $year1;
        return;
     }
     function setmonth($month1)
     {
        $this->month = $month1;
        return;
     }
     function setlock_num($num)
     {
        $this->lock_num = $num;
        return;
     }
     function setstock_num($num)
     {
        $this->stock_num = $num;
        return;
     }
     function setbarrel_num($num)
     {
        $this->barrel_num = $num;
        return;
     }
     function settot_sale($sale1)
     {
        $this->tot_sale = sale1;
        return;
     }
     function getsalary()
     {
        $sum = 0.0;
        $sum += $this->tot_sale*0.1;
        if($this->tot_sale > 1000 && $this->tot_sale < 800)
           $sum += ($this->tot_sale-1000)*0.15;
        else if($this->tot_sale >= 1800)
           $sum += (800*0.15 + ($this->tot_sale - 1800)*0.2);
        return $sum;
     }
     function gettot_sale()
     {
        $sum = $this->lock_num*45+$this->stock_num*30+$this->barrel_num*25;
        $this->tot_sale = $sum;
        return $sum;
     }
  }
  class Date
  {
      private $year;
      private $month;
      
      function getyear()
      {
         return $this->year;
      }
      function getmonth()
      {
         return $this->month;
      }
      function setyear($year1)
      {
         $this->year = $year1;
         return;
      }
      function setmonth($month1)
      {
         $this->month = $month1;
         return;
      }
  }
  class User
  {
      var $username;
      var $email;
      var $sex;
      var $cur_state;
      var $enter_year;
      var $sale;
  }
  class City
  {
      var $name;
      var $sale;
  }
?>