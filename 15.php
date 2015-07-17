<?php
 class theException extends Exception {}
 class theClass {
    public function run($isrunning){
        try {
            if($isrunning) echo "Stopping program!"; else throw new theException("Error happened!");
            } catch (Exception $e){
            echo "Starting program!";                
        } catch (theException $e){
            echo "Restarting program from defaults!";                
        }
    }
  }
$test = new theClass;
$test->run(false);  

?>
