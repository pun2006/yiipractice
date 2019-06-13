<?php
namespace app\components;

/*
 * Приведение телефонного номера к формату.
 * Маску можно задать в конфигурации приложения, если этого не сделано,
 * то будет использована маска заданная в конструкторе.
 * Также маску можно задать чз публичное свойство $mask.
 *  
 */

class PhoneFormatter
{
    /**     
     *Формат маски:
     * P - префикс
     * 0 - любое число.
     * все остальные символы могу быть разделителями.
     * @var string $mask
     */
    public $mask;

    /**
     * Префикс телефонного номера в маске знак "P"
     * @var string $prefix
     */
    public $prefix;

    /**
     * 
     * @param string $mask
     * @param string $prefix
     */
    public function __construct($mask = 'P (000)000 0000', $prefix = '+7')
    {
        $this->mask = $mask;
        $this->prefix = $prefix;        
        
    }    

    public function asPhone($phnumber)
    {   
        $formatted='';
        $phnumber=array_reverse(str_split($phnumber,1));
        foreach (str_split($this->mask,1) as $masksymbol) {
            if ($masksymbol=='P') {
                $formatted.=$this->prefix;
            } else if ($masksymbol=="0") {
                $formatted.=array_pop($phnumber);
            } else {
                $formatted.= $masksymbol;
            }
        }
        
        return $formatted;
    }
}


