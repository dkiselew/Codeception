<?php //[STAMP] 3a0eb451133fcaae6cca97dbf33e0dcb

// This class was automatically generated by build task
// You should not change it manually as it will be overwritten on next build
// @codingStandardsIgnoreFile


use Codeception\Module\PowerHelper;

/**
 * Inherited Methods
 * @method void wantToTest($text)
 * @method void wantTo($text)
 * @method void expectTo($prediction)
 * @method void expect($prediction)
 * @method void amGoingTo($argumentation)
 * @method void am($role)
 * @method void lookForwardTo($achieveValue)
 * @method void comment($description)
 * @method void haveFriend($name)
*/
class PowerGuy extends \Codeception\Actor
{
   
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     *
     * @see \Codeception\Module\PowerHelper::gotThePower()
     */
    public function gotThePower() {
        return $this->scenario->runStep(new \Codeception\Step\Action('gotThePower', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     *
     * @see \Codeception\Module\PowerHelper::castFireball()
     */
    public function castFireball() {
        return $this->scenario->runStep(new \Codeception\Step\Action('castFireball', func_get_args()));
    }
}
