<?php 
/*
|=====================================================================
|
|----------------------------------------------------------------------
|	The User is the 'Observer' in this pattern
|----------------------------------------------------------------------
|
|======================================================================
|
*/
interface User {
    public function update($city, $price, $venue);
}
