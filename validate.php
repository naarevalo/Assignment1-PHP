<?php
  class validate{
    public function checkEmpty($data, $fields){
      $msg = null;
      foreach ($fields as $value){
        if (empty($data[$value])){
          $msg .= "<p>$value field empty</p>";
        }
      }
      return $msg;
    }
    public function validName($name)
    {
     
        if (filter_var($name, FILTER_SANITIZE_STRING)) {
            return true;
        }
        return false;
    }

    public function validEmployeePosition($employee_position)
    {
       
        if (filter_var($employee_position, FILTER_SANITIZE_STRING)) {
            return true;
        }
        return false;
    }

    public function validHireDate($hire_date)
    {
        
        if (strtotime($hire_date)) {
            return true;
        }
        return false;
    }

    public function validHoursWorked($hours_worked)
    {
       
        if (is_numeric($hours_worked) && $hours_worked >= 0) {
            return true;
        }
        return false;
    }

    public function validPhone($phone)
    {
        
        if (is_numeric($phone)) {
            return true;
        }
        return false;
    }
}

?>